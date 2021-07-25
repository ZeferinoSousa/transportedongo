<?php

namespace App\Http\Controllers;
use App\Models\Caminhada;
use App\Models\Frota;
use App\Models\Galeria;
use App\Models\Historia;
use App\Models\Ilha;
use App\Models\Info;
use App\Models\Parque;
use App\Models\Slide;
use App\Models\Team;
use Illuminate\Http\Request;
use Session;

use Mail;

class SiteController extends Controller
{   
    public function __construct(Caminhada $caminhada, Frota $frota, Galeria $galeria, Historia $historia, Ilha $ilha, Info $info, Parque $parque, Slide $slide, Team $team)
    {
        $this->caminhada = $caminhada;
        $this->frota = $frota;
        $this->galeria = $galeria;
        $this->historia = $historia;
        $this->ilha = $ilha;
        $this->informacao = $info;
        $this->parque = $parque;
        $this->slide = $slide;
        $this->team = $team;

    }
    Public function index()
    {
        $slides = $this->slide->orderBy("id")->get(); 
        $teams = $this->team->orderBy("id")->get(); 
        $infos = $this->informacao->Where('id',1)->get();
        return view('site.page.index',[
            'slides'=>$slides,
            'teams'=>$teams,
            'infos'=>$infos,
        ]);
    }
    Public function historia()
    {
        $historias = $this->historia->orderBy("id")->get();
        return view('site.page.historia',[
            'historias'=>$historias,
        ]);
    }
    Public function frota()
    {
        $frotas = $this->frota->orderBy("id")->get();
        return view('site.page.frota',[
            'frotas'=>$frotas,
        ]);
    }
    Public function caminhada()
    {
        $caminhadas = $this->caminhada->orderBy("id")->get();
        return view('site.page.caminhada',[
            'caminhadas'=>$caminhadas,
        ]);
    }
    Public function transfer()
    {
        return view('site.page.transfer');
    }
    Public function ilha()
    {
        $ilhas = $this->ilha->orderBy("id")->get();
        return view('site.page.ilha',[
            'ilhas'=>$ilhas,
        ]);
    }
    Public function parque()
    {
        $parques = $this->parque->orderBy("id")->get();
        return view('site.page.parque',[
            'parques'=>$parques,
        ]);
    }
    Public function galeria()
    {
        $galerias = $this->galeria->orderBy("id")->get();
        return view('site.page.galeria',[
            'galerias'=>$galerias,
        ]);
    }
    Public function contato()
    {
        $infos = $this->informacao->get();
        return view('site.page.contato',[
            'infos'=>$infos,
        ]);
    }
    public function sendmail(Request $request)
    {
        
        $this->validate($request,[
            'nome'=>'required|min:2',
            'email'=>'required|email',
            'telefone'=>'required|numeric',
            'assunto'=>'required|min:3',
            'mensagem'=>'required|min:10'
            ]);

        $data=[
                'nome'=>$request->nome,
                'telefone'=>$request->telefone,
                'email'=>$request->email,
                'assunto'=>$request->assunto,
                'mensagem'=>$request->mensagem
            ];

        Mail::send('site.page.email', $data , function($message) use($data){
            $message->from($data['email']);
            $message->to('comercial@transportedongo.cv');
            $message->subject($data['assunto']);
        });

        Session::flash('success','A Sua Mensagem foi Enviada com Successo! Obrigada!');

        return redirect('contato');
    }

    public function reserva(){
        return view('site.page.reserva');
    }

    public function reservamail(Request $request)
    {
        
        $this->validate($request,[
            'nome'=>'required|min:2',
            'email'=>'required|email',
            'telefone'=>'required|numeric',
            'numero'=>'required|numeric',
            'caminhada'=>'required'
            
            ]);

        $data=[
                'nome'=>$request->nome,
                'email'=>$request->email,
                'telefone'=>$request->telefone,
                'numero'=>$request->numero,
                'caminhada'=>$request->caminhada,
                'obs'=>$request->obs,
                
            ];

        Mail::send('site.page.reservamail', $data , function($message) use($data){
            $message->from($data['email']);
            $message->to('comercial@transportedongo.cv');
            $message->subject($data['caminhada']);
        });

        Session::flash('success','A Sua Reserva foi Enviada com Successo! Entraremos em Contato Brevemente!');
        return redirect('reserva');
    }
    public function transfermail(Request $request){
        $this->validate($request,[
            'nome'=>'required|min:2',
            'email'=>'required|email',
            'telefone'=>'required|numeric',
            'numero'=>'required|numeric',
            
            ]);

        $data=[
                'nome'=>$request->nome,
                'email'=>$request->email,
                'telefone'=>$request->telefone,
                'numero'=>$request->numero,
                'transfer'=>$request->transfer,
                
            ];

        Mail::send('site.page.transfermail', $data , function($message) use($data){
            $message->from($data['email']);
            $message->to('comercial@transportedongo.cv');
            $message->subject($data['transfer']);
        });

        Session::flash('success','A Sua Reserva foi Enviada com Successo! Entraremos em Contato Brevemente!');
        return redirect('transfer');
    }
}
