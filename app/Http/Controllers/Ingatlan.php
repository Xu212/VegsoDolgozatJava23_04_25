<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Ingatlan as ModelsIngatlan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Ingatlan extends Controller
{
    public function index(){
        $ingatlan = response()->json(ModelsIngatlan::all());
        return $ingatlan;
    }
    public function show($id){
        $ingatlan = response()->json(ModelsIngatlan::find($id));
        return $ingatlan;
    }
    public function destroy($id){
        ModelsIngatlan::find($id)->delete();
    }
    public function store(Request $request){
        $ingatlan = new ModelsIngatlan();
        $ingatlan->kategoria = $request->kategoria;
        $ingatlan->leiras = $request->leiras;
        $ingatlan->hiredtesDatuma = $request->hirdetesDatuma;
        $ingatlan->tehermentes = $request->tehermentes;
        $ingatlan->ar = $request->ar;
        $ingatlan->kepUrl = $request->kepUrl;
        $ingatlan->save();
    }
    public function ingatlanKategoriaval(){
        $ingatlan = DB::table('ingatlans')
        ->select('*')
        ->join('kategorias as k','ingatlans.kategoria','=','k.id')
        ->get();
        return $ingatlan;
    }
}
