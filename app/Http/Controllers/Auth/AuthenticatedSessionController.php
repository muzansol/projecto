<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Mail\MailMailable;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {



        $request->authenticate();

                /*$email = $request->email;
                $password = $request->password;
                //dd( $email);
                $usuario =DB::table('users')
                 ->where('email', '=', $email)
                 ->get()
                 ->first(); //

//AUTENT 2F

        $id_user = $usuario->id;
        $data = date('Y-m-d H:i:s');
        $codigo_random = mt_rand(100000, 999999);

        $update =DB::table('users')
        ->where('id', $id_user) //
        ->update(['codigo_autenticacao' => $codigo_random, 'data_autenticacao' => $data]);
           //enviar email com codigo para autenticaçao 2 fatores
                $para = $email;
                $nome = $usuario->name;
                $data =  $data ; //nao se aplica
                $hora ='00:00'; // não se aplica
                $especialidade =  $codigo_random;  //esat variavel pega o codigo de 6 digitos
                $medico = '';
                $status = '2F';
                $assunto = "Autenticação 2 Fatores";
               Mail::to($para)->send(new MailMailable($nome, $data, $hora, $especialidade, $medico, $status, $assunto));
              // dd($usuario);

               $codigo = $usuario->codigo_autenticacao;

              // $request->authenticate();
               //$request->session()->regenerate();

               return redirect()->route('user.verificacao')
                 ->with('email', $email)
                 ->with('password', $password);*/
                 $request->authenticate();
                 $request->session()->regenerate();


             // return redirect(Route('user.verificacao'));
             return redirect()->intended(RouteServiceProvider::HOME);

    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {

        $id_user = Auth::user()->id;
        $update =DB::table('users')
        ->where('id', $id_user) //
        ->update(['status' => '0']);

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
