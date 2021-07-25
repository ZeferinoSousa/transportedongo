<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreUpdateGaleria;
use App\Models\Galeria;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class GaleriaController extends Controller
{
    private $galerias;

    public function __construct(Galeria $galeria)
    {
        $this->galerias = $galeria;
    }




    public function index()
    {
        $galerias = $this->galerias->latest()->paginate(5);
        return view('painel.page.galeria.index',[
            'galerias' => $galerias,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('painel.page.galeria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateGaleria $request)
    {
        $data = $request->all();

        if ($request->hasFile('imagem')) {
            $data['imagem'] = $request->imagem->store('galerias');
        }   
        $this->galerias->create($data);
        return redirect()->route('galeria-index')->with('mensagem', 'História inserida com Sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $galerias = $this->galerias->where('id', $id)->first();

        if (!$galerias)
            return redirect()->back();

        return view('painel.page.galeria.show', [
            'galerias' => $galerias,
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
        $galerias = $this->galerias->where('id', $id)->first();

        if (!$galerias)
            return redirect()->back();

        return view('painel.page.galeria.edit', [
            'galerias' => $galerias,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateGaleria $request, $id)
    {
        if(!$galerias = $this->galerias->find($id)){
            return redirect()->back();
        }

        $data = $request->all();
        if ($request->hasFile('imagem')) {
            if (Storage::exists($galerias->imagem)) {
                Storage::delete($galerias->imagem);
            }
            $data['imagem'] = $request->imagem->store('galerias');
        }
        $galerias->update( $data);

        return redirect()->route('galeria-index')->with('mensagem', 'Imagem de galeria alterado com Sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galerias = $this->galerias->where('id', $id)->first();

        if (!$galerias)
            return redirect()->back();
            
            if (Storage::exists($galerias->imagem)) {
                Storage::delete($galerias->imagem);
            }
        $galerias->delete();

        return redirect()->route('galeria-index')->with('apagado', 'Imagem da galeria apagada com Sucesso!');
    }
}
