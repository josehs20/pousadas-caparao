<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\InfoPrincipal;
use App\Models\Pousada;
use Illuminate\Support\Facades\Storage;
use Laravel\Ui\Presets\React;

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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function imgPousadas(Pousada $pousada)
    {
        $pousadas = $pousada->all();

        return view('admin.pousadas', compact('pousadas'));
    }
    public function uploadImg(Request $request)
    {
        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $file = $request->image;
            $name = uniqid(date('HisYmd'));
            $extension = $request->image->extension();
            $nameFile = "{$name}.{$extension}";
            $upload = $request->image->storeAs('public/imgPousadas', $nameFile);
           // Storage::disk('local')->put('public/imgPousadas', $upload);
            if (!$upload) {
                dd('fail');
            } else {
                return redirect(route('imgPousadas'));
            }
        }
    }
}
