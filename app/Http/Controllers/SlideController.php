<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreUpdateSlide;
use App\Models\Slide;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    private $slides;

    public function __construct(Slide $slide)
    {
        $this->slides = $slide;
    }


    public function index()
    {
        $slides = $this->slides->latest()->paginate(5);

        return view('painel.page.slide.index',[
            'slides'=>$slides,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('painel.page.slide.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateSlide $request)
    {
        $data = $request->all();

        if ($request->hasFile('imagem')) {
            $data['imagem'] = $request->imagem->store('slides');
        }   
        $this->slides->create($data);
        return redirect()->route('slide-index')->with('mensagem', 'Slide inserida com Sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $slides = $this->slides->where('id', $id)->first();

        if (!$slides)
            return redirect()->back();

        return view('painel.page.slide.show', [
            'slides' => $slides,
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
        $slides = $this->slides->where('id', $id)->first();

        if (!$slides)
            return redirect()->back();

        return view('painel.page.slide.edit', [
            'slides' => $slides,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateSlide $request, $id)
    {
        if(!$slides = $this->slides->find($id)){
            return redirect()->back();
        }

        $data = $request->all();
        if ($request->hasFile('imagem')) {
            if (Storage::exists($slides->imagem)) {
                Storage::delete($slides->imagem);
            }
            $data['imagem'] = $request->imagem->store('slides');
        }
        $slides->update( $data);

        return redirect()->route('slide-index')->with('mensagem', 'Imagem de slide alterado com Sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slides = $this->slides->where('id', $id)->first();

        if (!$slides)
            return redirect()->back();
            
            if (Storage::exists($slides->imagem)) {
                Storage::delete($slides->imagem);
            }
        $slides->delete();

        return redirect()->route('slide-index')->with('apagado', 'Imagem da slide apagada com Sucesso!');
    }
}
