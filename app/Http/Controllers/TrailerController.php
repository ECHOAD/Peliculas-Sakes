<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use app\Http\Request\SaveTrailerRequest;

use App\Http\Requests;
use App\Http\Requests\SaveTrailerRequest as RequestsSaveTrailerRequest;
use App\Trailer;
use DB;

use Illuminate\Support\Facades\Storage;

class TrailerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('trailers.index', [


            'trailers'=> Trailer::latest()->paginate()

        ]);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('trailers.create', [

            'trailer'=>new Trailer(),
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestsSaveTrailerRequest $request)
    {

        $trailer=$request->all();

        if($request->hasFile('portada')){

            


                   

            $trailer['portada']=$request->file('portada')->storeAs('public/images/portadas',$request->file('portada')->getClientOriginalName());

           


        

            Trailer::create($trailer);

            return redirect()->route('trailers.index')->with('status','El proyecto fue creado exitosamente');


        }else{

            return redirect()->route('trailers.index')->with('status','No se creo el proyecto, faltaron campos');


        }
     



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Trailer $trailer)
    {

        

        return view('trailers.edit',[

            'trailer'=>$trailer
        ]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( Trailer $trailer,RequestsSaveTrailerRequest $request)
    {


     
        if ($request->hasFile('portada')) {
            Storage::delete($trailer->portada); // If $file is path to old image
        
            $trailer->portada = $request->file('portada')->storeAs('public/images/portadas',$request->file('portada')->getClientOriginalName());
        

           

            
        
        $trailer->update($request->except(['portada']));

        return redirect()->route('trailers.index')->with('status','El proyecto fue actualizado exitosamente');
        }else{

            return redirect()->route('trailers.index')->with('status','No se creo el proyecto, faltaron campos');


        }
     

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Trailer $trailer)
    {

        $trailer->delete();

        return redirect()->route('trailers.index')->with('status','El proyecto fue Eliminado exitosamente');

        
        
    }




    
    public function filtrar( Request $request){


        


          $titulo= $request->input('titulo');



        
        

        $trailers= Trailer::where('titulo', 'LIKE',$titulo.'%')->get();


        

        return view('trailers.index',['trailers' =>$trailers]);

        


    }

}
