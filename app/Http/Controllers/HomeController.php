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
        $BasePlataforma = 250000;
        $RecargasPlataforma =  Registro::all()->where('id_Area','3');
        $MoverRecargas = Registro::all()->where('id_Area','4');
        $VentaRecargas = Registro::all()->where('id_Area','1');
        $VentaSuperPagos = Registro::all()->where('id_Area','2');

        function Sumar ($Num_1){
            $Resultado = 0;
            foreach ($Num_1 as $Filas) {                
                $Resultado +=  $Filas->Valor;   
            }
            return($Resultado);
        }
    

        $Superpagos = Sumar($RecargasPlataforma)-(Sumar($MoverRecargas) + Sumar($VentaSuperPagos));
        $Recargas = Sumar($MoverRecargas)+(Sumar($MoverRecargas)*0.065)-Sumar($VentaRecargas);
        $EfectivoPlataforma = (Sumar($VentaSuperPagos)+ Sumar($VentaRecargas) + $BasePlataforma)- Sumar($RecargasPlataforma);
        $GananciaPlataforma = ($Superpagos + $Recargas + $EfectivoPlataforma)-$BasePlataforma;


        return view('home', compact('Superpagos','Recargas','EfectivoPlataforma','GananciaPlataforma'));
    }

}
