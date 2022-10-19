<?php

namespace App\Http\Controllers;

use App\Models\ModelCity;
use Illuminate\Http\Request;
use App\Models\neighborhood;

class NeighborhoodController extends Controller
{
    // função para a pg inicial

    public function index()
    {
        $bairro = neighborhood::all();
        return view('folderNeighborhood/neighborhood', compact('bairro'));
    }

    // usando a foreigne key e indo para a pg de create

    public function create()
    {
        $cities = ModelCity::all();
        return view('folderNeighborhood/createNeighborhood', compact('cities'));
    }

    // recebendo os dados

    public function store(Request $request)
    {
        $cad = neighborhood::create([
            'name' => $request->name,
            'id_city' => $request->id_city

        ]);
        if ($cad) {
            return redirect('/neighborhood');
        }
    }

    // exibindo os resultados

    public function show($id)
    {
        $bairro = neighborhood::find($id);
        return view('folderNeighborhood/showNeighborhood', compact('bairro'));
    }

    // pegando a foreigne key e indo pra pg de edit

    public function edit($id)
    {
        $bairro = neighborhood::find($id);
        $cities = ModelCity::all();
        return view('folderNeighborhood/createNeighborhood', compact('bairro', 'cities'));
    }

    // recebendo novos dados

    public function update(Request $request, $id)
    {
        neighborhood::where(['id' => $id])->update([
            'name' => $request->name,
            'id_city' => $request->id_city
        ]);
        return redirect('/neighborhood');
    }

    // excluindo dados

    public function destroy($id)
    {
        $del = neighborhood::destroy($id);
        return ($del) ? "sim" : "não";
    }
}
