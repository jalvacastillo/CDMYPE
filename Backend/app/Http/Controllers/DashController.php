<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use stdClass;

use App\Models\Empresa;
use App\Models\Venta;
use App\Models\VentaDetalle;
use App\Models\Compra;
use App\Models\CompraDetalle;

use App\Models\Producto;
use App\Models\Cliente;

class DashController extends Controller
{

    public function today() {
        $datos = new stdClass();            

        $mes = date('m');
        $ano = date('Y');
        $dia = date('d');
        
        $datos->clientes     = Cliente::count();
        $datos->productos    = Producto::count();

        // $datos->ventas       = VentaDetalle::whereYear('created_at', $ano)
        //                                 ->whereMonth('created_at', $mes)
        //                                 ->whereDay('created_at', $dia)
        //                                 ->sum('pagado');
        // $datos->compras      = CompraDetalle::whereYear('created_at', $ano)
        //                                 ->whereMonth('created_at', $mes)
        //                                 ->whereDay('created_at', $dia)
        //                                 ->sum('pagado');

        $datos->ventas       = VentaDetalle::sum('pagado');
        $datos->compras      = CompraDetalle::sum('pagado');

        $datos->meta_galones = Empresa::where('id', 1)->pluck('meta_galones')->first();
        $datos->galones      = VentaDetalle::whereIn('producto_id', [1,2,3])
                                            ->whereMonth('created_at', $mes)
                                            ->sum('cantidad');

        return Response()->json($datos, 200);

    }

}
