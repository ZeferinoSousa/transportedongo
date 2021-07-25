<?php

namespace App\Http\Controllers;
use App\User;
use App\Http\Requests\StoreUpdateUser;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UserController extends Controller
{
    private $utilizador;
    public function __construct(User $user)
    {
        $this->utilizador = $user;
    }
    public function index(){
        $users = $this-> utilizador->latest()->paginate(5);

       return view('painel.page.user.index',[
           'users'=>$users,
       ]);
    }
    public function create(){
       

       return view('painel.page.user.create');
    }

     public function store(StoreUpdateUser $request)
    {
        $data = $request->all();

        $data['password'] = bcrypt($data['password']);
        
        $this->utilizador->create($data);
        return redirect()->route('user-index')->with('mensagem', 'Utilizador Inserido com Sucesso!');
    }

    public function show($id){
        $users = $this-> utilizador->where('id', $id)->first();

        if (!$users)
            return redirect()->back();

       return view('painel.page.user.show',[
           'users'=>$users,
       ]);
    }

    public function edit($id)
    {
        $users = $this->utilizador->where('id', $id)->first();

        if (!$users)
            return redirect()->back();

        return view('painel.page.user.edit', [
            'users' => $users,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateUser $request, $id)
    {
        if(!$users = $this->utilizador->find($id)){
            return redirect()->back();
        }

        $data = $request->only(['name','email']);

        if($request->password){
            $data['password'] = bcrypt($request->password);
        }
       
        $users->update( $data);
        return redirect()->route('user-index')->with('mensagem', 'Utilizador Alterado com Sucesso!');
    }
}
