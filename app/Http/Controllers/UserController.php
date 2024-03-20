<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
       $users = User::all();
       return view("telaDeInicio", compact("users"));
    }

    public function create()
    {
        return view('pages.cadastro');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:user,email',
            'cpf' => 'required|cpf|unique:user,cpf',
        ]);

        if ($validator->fails()) {
            return redirect('post/create')
                ->withErrors($validator)
                ->withInput();
        }
        // Cadastrar no banco
        Auth::attempt($request->only('email','password'));
    }

    public function show(int $id)
    {
        $id = user::findOrFail($id);

        return view('telaDeInicio',['id' => $id]);
    }

    public function edit(int $id)
    {
        $users -> User::findOrFail($id);
        return view('telaDeInicio', compact('user'));
    }

    public function update(Request $request, int $id)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|max:30',
            'cpf' => 'required|max:11'
        ]);
        if ($validator->fails()) {
            return redirect(route('telaDeInicio',$request->id))

                ->withErrors($validator)
                ->withInput();
        } 

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
    }

    public function destroy(int $id)
    {
        $user = User::findOrFai($id);
        $user->delete();
    }

    public function login(Request $request)
    {
        $credential = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:15'
        ]);

        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
            return redirect()->intended('pages.telaDeInicio');
        }

        return back()->withErrors([
            'auth_error' => 'Usuário ou senha inválidos!!!!'
        ])->onlyInput('email');
    }
}
