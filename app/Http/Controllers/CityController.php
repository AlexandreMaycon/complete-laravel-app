<?php

namespace App\Http\Controllers;

use App\Models\ModelCity;
use Illuminate\Http\Request;

class CityController extends Controller
{   
    // função para a pg inicial

    public function index()
    {
        $city = ModelCity::all();
        return view('folderCity/city', compact('city'));
    }

    // função para a pg de create

    public function create()
    {
        return view('folderCity/createCity');
    }

    // armazenando os dados

    public function store(Request $request)
    {
        $cad = ModelCity::create([
            'name' => $request->name,
            'state' => $request->state,
            'foundation_date' => $request->foundation_date
        ]);
        if ($cad) {
            return redirect('/city');
        }
    }

    // mostrando os dados

    public function show($id)
    {
        $city = ModelCity::find($id);
        return view('folderCity/showCity', compact('city'));
    }

    // usando o id e indo para a pg de edit

    public function edit($id)
    {
        $city = ModelCity::find($id);
        return view('folderCity/createCity', compact('city'));
    }

    // recebendo novos dados

    public function update(Request $request, $id)
    {
        ModelCity::where(['id' => $id])->update([
            'name' => $request->name,
            'state' => $request->state,
            'foundation_date' => $request->foundation_date,
        ]);
        return redirect('/city');
    }

    // excluindo

    public function destroy($id)
    {
        $del = ModelCity::destroy($id);
        return ($del) ? "sim" : "não";
    }
}
