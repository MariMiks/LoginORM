<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function showForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $name = $request->input('name');
        $password = $request->input('password');

        $password = $request->input('password');

        $user = User::where('name', $name)->first();
        $simulatedSQL = "SELECT * FROM users WHERE name = '$name'"; // Define the variable

        if (!empty($user) && Hash::check($password, $user->password)) {
            return response()->make("
                <h1>✅ Login bem-sucedido!</h1>
                <p><strong>Usuário autenticado:</strong> {$user->name}</p>
                <hr>
                <h3>🔎 Dados recebidos:</h3>
                <p>Nome: $name</p>
                <p>Senha: $password</p>
                <hr>
                <h3>🚨 SQL Executado:</h3>
                <pre>$simulatedSQL</pre>
            ", 200, ['Content-Type' => 'text/html']);
        } else {
            return response()->make("
                <h1>❌ Login falhou!</h1>
                <h3>🔎 Dados recebidos:</h3>
                <p>Nome: $name</p>
                <p>Senha: $password</p>
                <hr>
                <h3>🚨 SQL Executado:</h3>
                <pre>$simulatedSQL</pre>
            ", 200, ['Content-Type' => 'text/html']);
        }
    }
}
