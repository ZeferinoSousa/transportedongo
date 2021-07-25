<?php

namespace App\Http\Controllers;
use App\Models\Info;
use App\Http\Requests\StoreUpdateInfo;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    private $informacao;
    public function __construct(Info $info)
    {
        $this->informacao = $info;
    }

    public function show($id)
    {
        $infos = $this->informacao->where('id', $id)->first();

        if (!$infos)
            return redirect()->back();

        return view('painel.page.info.show',[
            'infos' => $infos,
        ]);
    }

    public function edit($id)
    {
        $infos = $this->informacao->where('id', $id)->first();

        if (!$infos)
            return redirect()->back();

        return view('painel.page.info.edit', [
            'infos' => $infos,
        ]);
    }

    public function update(StoreUpdateInfo $request, $id)
    {
        if(!$infos = $this->informacao->find($id)){
            return redirect()->back();
        }
        $data = $request->all();

        if ($request->hasFile('missao_imagem')) {
            if (Storage::exists($infos->missao_imagem)) {
                Storage::delete($infos->missao_imagem);
            }$data['missao_imagem'] = $request->missao_imagem->store('infos');
        }
        if ($request->hasFile('valores_imagem')) {
            if (Storage::exists($infos->valores_imagem)) {
                Storage::delete($infos->valores_imagem);
            }$data['valores_imagem'] = $request->valores_imagem->store('infos');
        }


        $infos->update( $data);
        return redirect()->route('info-show',$id)->with('mensagem', 'Dado alterado com Sucesso!');
    }

}
