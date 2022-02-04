<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\InfoPrincipal;
use App\Models\Imagem;
use App\Models\PousadaReg;
use Illuminate\Support\Facades\Storage;
use Laravel\Ui\Presets\React;
use League\Flysystem\Adapter\Local;

use function GuzzleHttp\Promise\all;

class InfoPrincipalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info = InfoPrincipal::first();
        $pousadasReg = PousadaReg::all();
        $pousadas = [];
        foreach ($pousadasReg as $value) {
            if (Imagem::where('pousada_reg_id', $value->id)->first()) {
                $pousadas[] = Imagem::with('pousadaReg')->where('pousada_reg_id', $value->id)->first();
            }
        }

        return view('admin.index', compact('info', 'pousadas'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $verifica =  InfoPrincipal::find(1);
        if ($verifica) {
            $verifica->update($request->all());
        } else {
            $info = new InfoPrincipal($request->all());
            $info->save();
        }

        $verificapousada =  Imagem::find(1);
        if ($verificapousada) {
            $verificapousada->update($request->all());
        } else {
            $pousada = new Imagem($request->all());
            $pousada->save();
        }

        return redirect(route("info.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $verifica = Imagem::with('pousadaReg')->find($id); //// ;
        

        if (Imagem::where('pousada_reg_id', $verifica->pousadaReg->id)->count() == 1) {
            PousadaReg::find($verifica->pousadaReg->id)->delete();
            
            return redirect(route("imgPousadas"));
        } else {            
            $this->destroy($id);
            return back()->withInput();
        }

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($info)
    {
        //dd($info);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $info, Imagem $pousada)
    {

        if ($request->hasFile('imageUpdate')) {

            //pega nome da imagem          
            $name = $request->file('imageUpdate')->getClientOriginalName();

            $del = $pousada->find($info);
            //verifica se existe e deleta local
            if (Storage::url("storage/imgPousadas/$name")) {
                Storage::disk('local')->delete("public/imgPousadas/$name");
            }

            $upload = $request->imageUpdate->storeAs('public/imgPousadas', $name);

            // atualiza no banco
            $pousada->find($info)->update([
                'imagem' => "storage/imgPousadas/$name",
            ]);
        }
        return redirect(route('imgPousadas'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Imagem::find($id)->delete();
    }

    public function imgPousadas(PousadaReg $pousadaReg)
    {
        $pousadas = $pousadaReg->all();
        $pousadas = $this->listaPousadasPai($pousadas);
        //dd(Storage::url($pousadas));
        return view('componentes.todasPousadas', compact('pousadas'));
    }

    public function uploadImg(Request $request, Imagem $pousada, $pousada_reg_id)
    {
        upImg($request, $pousada_reg_id);
        return redirect(route('listaUmaPousada', ['pousada_reg_id' => $pousada_reg_id]))->with('Imagem adicionada com sucesso');
    }

    public function pousadaReg(Request $request)
    {
        // dd($request->all());
        $reg = new PousadaReg();
        $reg->nome = $request->nome;
        $reg->descricao = $request->descricao;
        $reg->cidade = $request->cidade;
        $reg->localizacao = $request->localizacao ? $request->localizacao : null;
        $reg->save();


        //função global para upload de Imagem  
        //  dd($request->file('image')->isValid());   
        upImg($request, $reg);

        return redirect(route('imgPousadas'))->with('pousada criada com sucesso');
    }

    public function listaUmaPousada($pousada_reg_id, Request $request)
    {
        $idFoto = false;
        $pousadaImgs = Imagem::with('pousadaReg')->where('pousada_reg_id', $pousada_reg_id)->get();
        // dd($pousadaImgs[0]->pousadaReg->id);
        $idFoto = !$request->id ? Imagem::where('pousada_reg_id', $pousadaImgs[0]->pousadaReg->id)->first() : Imagem::find($request->id);

        return view('umaPousada', compact('pousadaImgs', 'idFoto'));
    }


    //Uso interno
    public function listaPousadasPai($pousadasReg)
    {

        $pousadas = [];

        foreach ($pousadasReg as $value) {
            if (Imagem::where('pousada_reg_id', $value->id)->first()) {
                $pousadas[] = Imagem::with('pousadaReg')->where('pousada_reg_id', $value->id)->first();
            } else {

                redirect(route('info.index'));
            }
        }
        return $pousadas;
    }
}
