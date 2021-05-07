<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cotizacion;
use Illuminate\Http\Request;

use App\Http\Resources\CotizacionResource;

// use App\Http\Requests\Cotizacion as CotizacionRequest;
use App\Http\Resources\CotizacionCollection;

class CotizacionController extends Controller
{
    protected $cotizacion;

    /*
    -----Codigos de estado-----
    --> 1xx : informativo
    --> 2xx : Respuesta exitosa
    --> 3xx : Redireccionamiento
    --> 4xx : Errores del cliente
    --> 5xx : Erores del servidor
    */

    public function __construct(Cotizacion $cotizacion)
    {
        $this->cotizacion = $cotizacion;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return new CotizacionCollection($this->cotizacion->orderBy('id', 'DESC')->get()); 
        return response()->json(Cotizacion::all());

        $cotizacion = Cotizacion::all();
        return response()->json(['status'=>'ok','data'=>$cotizacion], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $cotizacion = new Cotizacion();
        // $cotizacion -> name = $request->name;
        // $cotizacion -> firtsName = $request->firtsName;
        // $cotizacion -> city = $request->city;
        // $cotizacion -> company = $request->company;
        // $cotizacion -> postalCode = $request->postalCode;
        // $cotizacion -> phone = $request->phone; 
        // $cotizacion -> cantProduct = $request->cantProduct;
        // $cotizacion -> comments = $request->comments;
        // $cotizacion -> total = $request->total;
        

        // $cotizacion->save();


        $cotizacion = $this->cotizacion->create($request->all());
        return response()->json(new CotizacionResource($cotizacion), 201);
                                                   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cotizacion  $cotizacion
     * @return \Illuminate\Http\Response
     */
    public function show(Cotizacion $cotizacion)
    {
        return response()->json(new  CotizacionResource ($cotizacion), 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cotizacion  $cotizacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cotizacion $cotizacion)
    {
        $cotizacion->update($request->all());

        return response()->json(new CotizacionResource($cotizacion));
    }  

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cotizacion  $cotizacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cotizacion $cotizacion)
    {
        $cotizacion -> delete();

        return response()->json(null, 204);
    }
}
