<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trailer;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
 
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home',['trailers' => Trailer::latest()->paginate()]);
    }


        
    public function filtrar( Request $request){


        


        $titulo= $request->input('titulo');



      
      

      $trailers= Trailer::where('titulo', 'LIKE',$titulo.'%')->get();


      

      return view('home',['trailers' =>$trailers]);

      


  }
}
