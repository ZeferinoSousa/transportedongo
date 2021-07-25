<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreUpdateIlha;
use App\Models\Ilha;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class IlhaController extends Controller
{
    private $ilhas;

    public function __construct(Ilha $ilha)
    {
        $this->ilhas = $ilha;
    }




    public function index()
    {
        $ilhas = $this->ilhas->latest()->paginate(5);

        return view('painel.page.ilha.index',[
            'ilhas'=>$ilhas,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('painel.page.ilha.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateIlha $request)
    {
        $data = $request->all();

        if ($request->hasFile('imagem')) {
            $data['imagem'] = $request->imagem->store('ilhas');
        }   
        $this->ilhas->create($data);
        return redirect()->route('ilha-index')->with('mensagem', 'História inserida com Sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ilhas = $this->ilhas->where('id', $id)->first();

        if (!$ilhas)
            return redirect()->back();

        return view('painel.page.ilha.show', [
            'ilhas' => $ilhas,
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
        $ilhas = $this->ilhas->where('id', $id)->first();

        if (!$ilhas)
            return redirect()->back();

        return view('painel.page.ilha.edit', [
            'ilhas' => $ilhas,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateIlha $request, $id)
    {
        if(!$ilhas = $this->ilhas->find($id)){
            return redirect()->back();
        }

        $data = $request->all();
        if ($request->hasFile('imagem')) {
            if (Storage::exists($ilhas->imagem)) {
                Storage::delete($ilhas->imagem);
            }
            $data['imagem'] = $request->imagem->store('ilhas');
        }
        $ilhas->update( $data);

        return redirect()->route('ilha-index')->with('mensagem', 'Informação da ilha alterado com Sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ilhas = $this->ilhas->where('id', $id)->first();

        if (!$ilhas)
            return redirect()->back();
            
            if (Storage::exists($ilhas->imagem)) {
                Storage::delete($ilhas->imagem);
            }
        $ilhas->delete();

        return redirect()->route('ilha-index')->with('apagado', 'Informação da lha apagada com Sucesso!');
    }
}
