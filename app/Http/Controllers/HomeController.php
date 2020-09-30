<?php

namespace App\Http\Controllers;
use App\Models\Registro;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */



    public function index()
    {

        $RecargasPlataforma =  Registro::all()->where('id_Area','3');



        function Sumar ($Num_1){
            $Resultado = 0;
            foreach ($Num_1 as $Filas) {                
                $Resultado +=  $Filas->Valor;   
            }
            return($Resultado);
        }
    

        $TotalPlataforma = Sumar($RecargasPlataforma);


        return view('home', compact('TotalPlataforma'));
    }

}
