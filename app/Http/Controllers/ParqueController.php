<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreUpdateParque;
use App\Models\parque;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class ParqueController extends Controller
{
    private $parques;

    public function __construct(Parque $parque)
    {
        $this->parques = $parque;
    }


    public function index()
    {
        $parques = $this->parques->latest()->paginate(5);

        return view('painel.page.parque.index',[
            'parques'=>$parques,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('painel.page.parque.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateParque $request)
    {
        $data = $request->all();

        if ($request->hasFile('imagem')) {
            $data['imagem'] = $request->imagem->store('parques');
        }   
        $this->parques->create($data);
        return redirect()->route('parque-index')->with('mensagem', 'História inserida com Sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $parques = $this->parques->where('id', $id)->first();

        if (!$parques)
            return redirect()->back();

        return view('painel.page.parque.show', [
            'parques' => $parques,
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
        $parques = $this->parques->where('id', $id)->first();

        if (!$parques)
            return redirect()->back();

        return view('painel.page.parque.edit', [
            'parques' => $parques,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateParque $request, $id)
    {
        if(!$parques = $this->parques->find($id)){
            return redirect()->back();
        }

        $data = $request->all();
        if ($request->hasFile('imagem')) {
            if (Storage::exists($parques->imagem)) {
                Storage::delete($parques->imagem);
            }
            $data['imagem'] = $request->imagem->store('parques');
        }
        $parques->update( $data);

        return redirect()->route('parque-index')->with('mensagem', 'Imagem de parque alterado com Sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $parques = $this->parques->where('id', $id)->first();

        if (!$parques)
            return redirect()->back();
            
            if (Storage::exists($parques->imagem)) {
                Storage::delete($parques->imagem);
            }
        $parques->delete();

        return redirect()->route('parque-index')->with('apagado', 'Imagem da parque apagada com Sucesso!');
    }
}
