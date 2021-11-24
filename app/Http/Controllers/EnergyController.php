<?php

namespace App\Http\Controllers;

use App\Models\Energy;
use Illuminate\Http\Request;
use App\Models\Entity;
use Illuminate\Support\Facades\DB;

class EnergyController extends Controller
{

    public function index()
    {
        $enrgy = DB::select("SELECT * FROM energy");
        return response()->json($enrgy);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}