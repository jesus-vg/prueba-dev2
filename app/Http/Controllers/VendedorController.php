<?php

namespace App\Http\Controllers;

use App\Models\Vendedor;
use Illuminate\Http\Request;

class VendedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendedores = Vendedor::select( 'id', 'nombre', 'Apellidos', 'Direccion', 'telefono', 'created_at' )
            ->latest()
            ->paginate( 5, ['*'], 'pagina' );

        return view( 'vendedor.index', [
            'vendedores' => $vendedores,
        ] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request    $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request )
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vendedor        $vendedor
     * @return \Illuminate\Http\Response
     */
    public function show( Vendedor $vendedor )
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vendedor        $vendedor
     * @return \Illuminate\Http\Response
     */
    public function edit( Vendedor $vendedor )
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request    $request
     * @param  \App\Models\Vendedor        $vendedor
     * @return \Illuminate\Http\Response
     */
    public function update(
        Request $request,
        Vendedor $vendedor
    ) {
        //
    }

    /**
     * Remove the specified resource from storage.
     * eliminarcion axios.
     *
     * @param  \App\Models\Vendedor        $vendedor
     * @return \Illuminate\Http\Response
     */
    public function destroy( Vendedor $vendedor )
    {
        $vendedor->delete();

        return response()->json([
            'ok' => 'vendedor eliminado',
        ])
    }
}
