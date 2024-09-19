<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view("auth.login");
    }

    public function loginPost(Request $request){
        $request-> validate([
            "email" => "required|email",
            "password" => "required"
        ]);
        $credentials = $request ->only("email", "password");
        if(Auth::attempt($credentials)){
            return redirect()->intended(route("home"));
        }
        return redirect(route("login"))-> with("error", "Credenciales no válidas.");
    }

    public function register(){
        $paises = ['Argentina', 'Bolivia', 'Chile', 'Colombia', 'Ecuador', 'España', 'México', 'Perú', 'Uruguay', 'Venezuela'];
        return view("auth.register", compact('paises'));
    }

    public function registerPost(Request $request){
        $request-> validate([
            "nombre" => [
            "required",
            "string",
            "min:2",
            "max:20",
            "regex:/^[a-zA-ZÀ-ÿ\s]+$/u" // Solo letras y espacios, sin números
        ],
        "apellido" => [
            "required",
            "string",
            "min:2",
            "max:40",
            "regex:/^[a-zA-ZÀ-ÿ\s]+$/u" // Solo letras y espacios, sin números
        ],
        "dni" => [
            "required",
            "regex:/^[0-9]{8}[A-Za-z]{1}$/" // 8 dígitos y una letra
        ],
        "email" => [
            "required",
            "email",
            "unique:users,email" // El email debe ser único en la tabla 'users'
        ],
        "password" => [
            "required",
            "confirmed",
            "regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/"
            // Contraseña fuerte: mínimo 8 caracteres, al menos una mayúscula, una minúscula, un número y un carácter especial
        ],
        "telefono" => [
            "nullable",
            "regex:/^\+?[0-9]{9,12}$/"
            // Solo números y el símbolo + (para prefijos internacionales)
        ],
        "pais" => [
            "nullable",
            "string"
        ],
        "descripcion" => [
            "nullable",
            "string",
            "min:20",
            "max:250"
        ]
        ]);

        $user = new User();
        $user->name = $request->nombre;
        $user->apellido = $request->apellido;
        $user->dni = $request->dni;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        if ($request->filled('telefono')) {
            $user->telefono = $request->telefono;
        }
        if ($request->filled('pais')) {
            $user->pais = $request->pais;
        }
        if ($request->filled('descripcion')) {
            $user->descripcion = $request->descripcion;
        }

        if($user-> save()){
            return redirect(route("login")) -> with("success", "Usuario creado exitosamente.");
        }
        return redirect(route("register")) -> with("error", "No se pudo crear la cuenta.");
    }


}
