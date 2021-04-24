<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use app\Http\Request\SaveTrailerRequest;

use App\Http\Requests;
use App\Http\Requests\SaveTrailerRequest as RequestsSaveTrailerRequest;
use App\Trailer;

class TrailerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('trailers.index', [


            'trilers'=> Trailer::latest()->paginate()

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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
