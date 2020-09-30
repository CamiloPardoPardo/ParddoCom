<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
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



        // Sistema para calculos generales de la plataforma 
        $BasePlataforma = 250000;
        $RecargasPlataforma =  Registro::all()->where('id_Area','3');
        $MoverRecargas = Registro::all()->where('id_Area','4');
        $VentaRecargas = Registro::all()->where('id_Area','1');
        $VentaSuperPagos = Registro::all()->where('id_Area','2');

        //sistema para calculo de ventas por día


        function Sumar ($Num_1){
            $Resultado = 0;
            foreach ($Num_1 as $Filas) {                
                $Resultado +=  $Filas->Valor;   
            }
            return($Resultado);
        }

        function SumarPorDia ($Filas){
            $hoy = Carbon::now()->format('d-m-Y');
            $Resultado = 0;
            foreach ($Filas as $Fila) {
                $FechaDeFila = $Fila->created_at->format('d-m-Y');
                if($FechaDeFila == $hoy){
                    $Resultado +=  $Fila->Valor;   
                }                
            }
            return($Resultado);
        }
    

        $Superpagos = Sumar($RecargasPlataforma)-(Sumar($MoverRecargas) + Sumar($VentaSuperPagos));
        $Recargas = Sumar($MoverRecargas)+(Sumar($MoverRecargas)*0.065)-Sumar($VentaRecargas);
        $EfectivoPlataforma = (Sumar($VentaSuperPagos)+ Sumar($VentaRecargas) + $BasePlataforma)- Sumar($RecargasPlataforma);
        $GananciaPlataforma = ($Superpagos + $Recargas + $EfectivoPlataforma)-$BasePlataforma;

        $totalPlatforma = $Superpagos + $Recargas + $EfectivoPlataforma + $GananciaPlataforma;

        $PorSuperpagos = ($Superpagos/$totalPlatforma) * 100;
        $PorRecargas = ($Recargas/$totalPlatforma) * 100;
        $PorEfectivoPlataforma = ($EfectivoPlataforma/$totalPlatforma) * 100;
        $PorGananciaPlataforma = ($GananciaPlataforma/$totalPlatforma) * 100;

        $VentaRecargashoy = SumarPorDia($VentaRecargas);
        $VentaSuperPagoshoy = SumarPorDia($VentaSuperPagos);
        $VentasPlataformaHoy = $VentaRecargashoy + $VentaSuperPagoshoy;


        return view('home', compact('Superpagos','Recargas','EfectivoPlataforma','GananciaPlataforma', 'PorSuperpagos','PorRecargas','PorEfectivoPlataforma','PorGananciaPlataforma','VentasPlataformaHoy'));
    }

}
