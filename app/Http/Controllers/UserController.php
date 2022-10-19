<?php

namespace App\Http\Controllers;

use App\Models\ModelUser;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // função para a pg inicial

    public function index()
    {
        $user = User::all();
        return view('folderUser/user', compact('user'));
    }

    // função para a pg de create

    public function create()
    {
        return view('folderUser/createUser');
    }

    // armazenando os dados

    public function store(Request $request)
    {
        $cad = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'senha' => $request->password,
        ]);
        if ($cad) {
            return redirect('/user');
        }
    }

    // mostrando os dados

    public function show($id)
    {
        $user = User::find($id);
        return view('folderUser/showUser', compact('user'));
    }

    // usando o id e indo para a pg de edit

    public function edit($id)
    {
        $user = User::find($id);
        return view('folderUser/createUser', compact('user'));
    }

    // recebendo novos dados

    public function update(Request $request, $id)
    {
        User::where(['id' => $id])->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        return redirect('/user');
    }

    // excluindo

    public function destroy($id)
    {
        $del = User::destroy($id);
        return ($del) ? "sim" : "não";
    }
}
