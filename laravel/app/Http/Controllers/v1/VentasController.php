<?php
 
namespace App\Http\Controllers\v1;

use App\Models\Venta;
use App\Http\Controllers\Controller;
 
class VentasController extends Controller
{
    public function getVentas()
    {
        $response_local=new \stdClass();
        $response_local->success=true;
        $response_local->data=Venta::all();
        return response()->json($response_local,200);

    }
}