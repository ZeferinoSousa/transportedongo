<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreUpdateFrota;
use App\Models\Frota;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class FrotaController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $frotas;

    public function __construct(Frota $frota)
    {
        $this->frotas = $frota;
    }




    public function index()
    {
        $frotas = $this->frotas->latest()->paginate(5);
        return view('painel.page.frota.index',[
            'frotas'=> $frotas,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('painel.page.frota.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateFrota $request)
    {
        $data = $request->all();

        if ($request->hasFile('imagem')) {
            $data['imagem'] = $request->imagem->store('frotas');
        }   
        $this->frotas->create($data);
        return redirect()->route('frota-index')->with('mensagem', 'Imagem de frota inserida com Sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $frotas = $this->frotas->where('id', $id)->first();

        if (!$frotas)
            return redirect()->back();

        return view('painel.page.frota.show', [
            'frotas' => $frotas,
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
        $frotas = $this->frotas->where('id', $id)->first();

        if (!$frotas)
            return redirect()->back();

        return view('painel.page.frota.edit', [
            'frotas' => $frotas,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateFrota $request, $id)
    {
        if(!$frotas = $this->frotas->find($id)){
            return redirect()->back();
        }

        $data = $request->all();
        if ($request->hasFile('imagem')) {
            if (Storage::exists($frotas->imagem)) {
                Storage::delete($frotas->imagem);
            }
            $data['imagem'] = $request->imagem->store('frotas');
        }
        $frotas->update($data);

        return redirect()->route('frota-index')->with('mensagem', 'Imagem de Frota alterado com Sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $frotas = $this->frotas->where('id', $id)->first();

        if (!$frotas)
            return redirect()->back();
            
            if (Storage::exists($frotas->imagem)) {
                Storage::delete($frotas->imagem);
            }
        $frotas->delete();

        return redirect()->route('frota-index')->with('apagado', 'Imagem de frota apagada com Sucesso!');
    }
}