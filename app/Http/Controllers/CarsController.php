<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function getAll()
    {
        return response()->json(['message' => 'Get all cars']);
    }

    public function get($id)
    {
        return response()->json(['message' => "Get car with ID: $id"]);
    }

    public function store(Request $request)
    {
        return response()->json($request->all());
    }

    public function update($id, Request $request)
    {
        return response()->json([
        'id' => $id,
        'data' => $request->all()
    ]);
    }

    public function destroy($id)
    {
        return response()->json([
        'message' => "Carro com ID $id excluído (simulação)"
    ]);
    }
}
