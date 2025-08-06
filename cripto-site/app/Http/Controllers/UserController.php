<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // Mostrar todos os usuários
    public function index()
    {
        $users = User::all();
        return response()->json($users);
        $users ->save();
    }

    // Criar um novo usuário (requisição POST)
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => $validated['password'], // será criptografado automaticamente
        ]);

        return response()->json($user, 201);
    }

    // Mostrar um usuário específico
    public function show(string $id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    public function login(Request $request)
    {

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            $user = Auth::user();
            Session::put('usuario_logado',$user);
            return redirect('/painel');
        }else{
            Session::flash('alerta','usuario não encontrado, por favor se cadastre');
            return redirect('/login');
        }
    }

    // Atualizar um usuário existente (requisição PUT/PATCH)
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        $validated = $request->validate([
            'name' => 'sometimes|string|max:255',
            'email' => 'sometimes|string|email|unique:users,email,' . $user->id,
            'password' => 'sometimes|string|min:6',
        ]);

        if (isset($validated['password'])) {
            $validated['password'] = $validated['password']; // será criptografado pelo cast
        }

        $user->update($validated);

        return response()->json($user);
    }

    // Deletar um usuário
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json(['message' => 'Usuário deletado com sucesso.']);
    }
}