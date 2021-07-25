<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateHistoria;
use App\Models\Historia;

use Illuminate\Http\Request;

class HistoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $historias;

    public function __construct(Historia $historia)
    {
        $this->historias = $historia;
    }




    public function index()
    {
        $historias = $this->historias->latest()->paginate(5);
        return view('painel.page.historia.index',[
            'historias'=>$historias,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('painel.page.historia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateHistoria $request)
    {
        $data = $request->all();
        $this->historias->create($data);
        return redirect()->route('historia-index')->with('mensagem', 'História inserida com Sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $historias = $this->historias->where('id', $id)->first();

        if (!$historias)
            return redirect()->back();

        return view('painel.page.historia.show', [
            'historias' => $historias,
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
        $historias = $this->historias->where('id', $id)->first();

        if (!$historias)
            return redirect()->back();

        return view('painel.page.historia.edit', [
            'historias' => $historias,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateHistoria $request, $id)
    {
        if(!$historias = $this->historias->find($id)){
            return redirect()->back();
        }

        $data = $request->all();

        $historias->update( $data);

        return redirect()->route('historia-index')->with('mensagem', 'História alterado com Sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $historias = $this->historias->where('id', $id)->first();

        if (!$historias)
            return redirect()->back();

        $historias->delete();

        return redirect()->route('historia-index')->with('apagado', 'História apagado com Sucesso!');
    }
}
