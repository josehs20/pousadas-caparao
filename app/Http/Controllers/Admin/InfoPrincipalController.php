<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\InfoPrincipal;
use App\Models\Pousada;
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
        $pousadas = Pousada::take(3)->get()->toArray();

        return view('admin.index', compact('info', 'pousadas'));
    }

    public function listarPousadas()
    {
        // retornar view que vai listar todas as pousadas
        // para o admin e para o usuario normal.
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

        if ($request->hasFile('imageUpdate') && $request->file('imageUpdate')->isValid()) {

            //pega nome da imagem          
            $name = $request->file('imageUpdate')->getClientOriginalName();

            //verifica se existe e deleta local
            if (Storage::disk('local')->exists("public/imgPousadas/$name")) {

                Storage::disk('local')->delete("public/imgPousadas/$name");
               // dd($request->file('imageUpdate')->storeAs('public/imgPousadas', $name));

                //armazena nova imagem local
                $request->imageUpdate->storeAs('public/imgPousadas', $name);
            } else {

               $upload = $request->imageUpdate->storeAs('public/imgPousadas', $name);

                // atualiza no banco
                $pousada->find($info)->update([
                    'imagem' => "storage/imgPousadas/$name",
                ]);
            }
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

    public function imgPousadas(Pousada $pousada)
    {
        $pousadas = $pousada->all();

        //dd(Storage::url($pousadas));
        return view('admin.pousadas', compact('pousadas'));
    }

    public function uploadImg(Request $request, Pousada $pousada)
    {
        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            //pega nome da imagem
            $name = $request->file('image')->getClientOriginalName();

            //armazena na pasta
            $request->image->storeAs('public/imgPousadas', $name);

            if (Storage::disk('local')->exists("public/imgPousadas/$name")) {

                //colocar msg que já existe
                return redirect(route('imgPousadas'))->with('imagem já existe');
            } else {
                $pousada = new Pousada();
                $pousada->imagem = "storage/imgPousadas/$name";
                $pousada->save();
                return redirect(route('imgPousadas'))->with('Imagem adicionada com sucesso');
            }
        }
    }
}
