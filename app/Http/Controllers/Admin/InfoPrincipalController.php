<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\InfoPrincipal;
use App\Models\Pousada;
use App\Models\PousadaReg;
use Illuminate\Support\Facades\Storage;
use Laravel\Ui\Presets\React;
use League\Flysystem\Adapter\Local;

class InfoPrincipalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $info = InfoPrincipal::first();
        $pousadas = PousadaReg::all();
        $pousada = [];
        foreach ($pousadas as $value) {
            if (Pousada::where('pousada_reg_id', $value->id)->first()) {
                $pousada[] = Pousada::with('pousadaReg')->where('pousada_reg_id', $value->id)->first();
            }
        }

        return view('admin.index', compact('info', 'pousada'));
    }

    public function listarPousadas(Request $request)
    {
        $todasPousadasAdmin = Pousada::get()->toArray();
        return view('componentes.todasPousadasAdmin', compact('todasPousadasAdmin'));
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

        $verificapousada =  Pousada::find(1);
        if ($verificapousada) {
            $verificapousada->update($request->all());
        } else {
            $pousada = new Pousada($request->all());
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
        // $id = $id;
        $this->destroy($id);
        return redirect(route('imgPousadas'));
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
    public function update(Request $request, $info, Pousada $pousada)
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
        Pousada::find($id)->delete();
    }

    public function imgPousadas(PousadaReg $pousadaReg)
    {
        $pousadas = $pousadaReg->all();
        $pousada = [];
        foreach ($pousadas as $value) {
            if (Pousada::where('pousada_reg_id', $value->id)->first()) {
                $pousada[] = Pousada::with('pousadaReg')->where('pousada_reg_id', $value->id)->first();
            }
        }
        //dd(Storage::url($pousadas));
        return view('admin.pousadas', compact('pousada'));
    }

    public function uploadImg(Request $request, Pousada $pousada, $pousada_reg_id)
    {
        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            //pega nome da imagem
            $name = $request->file('image')->getClientOriginalName();

            //armazena na pasta
            $request->image->storeAs('public/imgPousadas', $name);

            //dd($pousada_reg_id);
            $pousada = new Pousada();
            $pousada->imagem = "storage/imgPousadas/$name";
            $pousada->nome = $request->nome;
            $pousada->diaria = $request->diaria;
            $pousada->descricao = $request->descricao;
            $pousada->pousada_reg_id = $pousada_reg_id;
            $pousada->save();

            return redirect(route('listaUmaPousada', ['pousada_reg_id' => $pousada_reg_id]))->with('Imagem adicionada com sucesso');
        }
    }

    public function pousadaReg(Request $request)
    {
        // dd($request->all());
        $reg = new PousadaReg();
        $reg->nome = $request->nome;
        $reg->cidade = $request->cidade;
        $reg->localizacao = $request->localizacao ? $request->localizacao : null;
        $reg->save();


        //função global para upload de Imagem  
        //  dd($request->file('image')->isValid());   
        upImg($request, $reg);

        return redirect(route('imgPousadas'))->with('pousada criada com sucesso');
    }

    public function listaUmaPousada($pousada_reg_id)
    {
        $pousadaImgs = Pousada::with('pousadaReg')->where('pousada_reg_id', $pousada_reg_id)->get();
        // dd($pousadaImgs);
        return view('admin.umaPousadaAdmin', compact('pousadaImgs'));
    }
}
