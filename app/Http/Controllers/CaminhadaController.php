<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreUpdateCaminhada;
use App\Models\Caminhada;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class CaminhadaController extends Controller
{
    private $caminhadas;

    public function __construct(Caminhada $caminhada)
    {
        $this->caminhadas = $caminhada;
    }


    public function index()
    {
        $caminhadas = $this->caminhadas->latest()->paginate(5);

        return view('painel.page.caminhada.index',[
            'caminhadas'=>$caminhadas,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('painel.page.caminhada.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateCaminhada $request)
    {
        $data = $request->all();

        if ($request->hasFile('imagem')) {
            $data['imagem'] = $request->imagem->store('caminhadas');
        }   
        $this->caminhadas->create($data);
        return redirect()->route('caminhada-index')->with('mensagem', 'Caminhada inserida com Sucesso!');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caminhadas = $this->caminhadas->where('id', $id)->first();

        if (!$caminhadas)
            return redirect()->back();

        return view('painel.page.caminhada.show', [
            'caminhadas' => $caminhadas,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caminhadas = $this->caminhadas->where('id', $id)->first();

        if (!$caminhadas)
            return redirect()->back();

        return view('painel.page.caminhada.edit', [
            'caminhadas' => $caminhadas,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateCaminhada $request, $id)
    {
        if(!$caminhadas = $this->caminhadas->find($id)){
            return redirect()->back();
        }

        $data = $request->all();
        if ($request->hasFile('imagem')) {
            if (Storage::exists($caminhadas->imagem)) {
                Storage::delete($caminhadas->imagem);
            }
            $data['imagem'] = $request->imagem->store('caminhadas');
        }
        $caminhadas->update( $data);

        return redirect()->route('caminhada-index')->with('mensagem', 'Caminhada alterado com Sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $caminhadas = $this->caminhadas->where('id', $id)->first();

        if (!$caminhadas)
            return redirect()->back();
            
            if (Storage::exists($caminhadas->imagem)) {
                Storage::delete($caminhadas->imagem);
            }
        $caminhadas->delete();

        return redirect()->route('caminhada-index')->with('apagado', 'Caminhada apagada com Sucesso!');
    }
}
