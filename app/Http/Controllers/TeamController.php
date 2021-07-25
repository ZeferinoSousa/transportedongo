<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreUpdateTeam;
use App\Models\Team;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    private $teams;

    public function __construct(Team $team)
    {
        $this->teams = $team;
    }


    public function index()
    {
        $teams = $this->teams->latest()->paginate(5);

        return view('painel.page.team.index',[
            'teams'=>$teams,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('painel.page.team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateTeam $request)
    {
        $data = $request->all();

        if ($request->hasFile('imagem')) {
            $data['imagem'] = $request->imagem->store('teams');
        }   
        $this->teams->create($data);
        return redirect()->route('team-index')->with('mensagem', 'Membro da equipa inserida com Sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teams = $this->teams->where('id', $id)->first();

        if (!$teams)
            return redirect()->back();

        return view('painel.page.team.show', [
            'teams' => $teams,
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
        $teams = $this->teams->where('id', $id)->first();

        if (!$teams)
            return redirect()->back();

        return view('painel.page.team.edit', [
            'teams' => $teams,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateTeam $request, $id)
    {
        if(!$teams = $this->teams->find($id)){
            return redirect()->back();
        }

        $data = $request->all();
        if ($request->hasFile('imagem')) {
            if (Storage::exists($teams->imagem)) {
                Storage::delete($teams->imagem);
            }
            $data['imagem'] = $request->imagem->store('teams');
        }
        $teams->update( $data);

        return redirect()->route('team-index')->with('mensagem', 'Membro da Equipa alterado com Sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teams = $this->teams->where('id', $id)->first();

        if (!$teams)
            return redirect()->back();
            
            if (Storage::exists($teams->imagem)) {
                Storage::delete($teams->imagem);
            }
        $teams->delete();

        return redirect()->route('team-index')->with('apagado', 'Membro da Equipa apagada com Sucesso!');
    }
}
