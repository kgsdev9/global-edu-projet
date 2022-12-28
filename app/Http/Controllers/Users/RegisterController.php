<?php

namespace App\Http\Controllers\Users;

use App\Models\User;
use Twilio\Rest\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }




    public function create() {
        return view('auth.register');
    }
    public function store(Request $request) {
        $data = $request->input();
        $validator = Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

        ]);
         $validator->validate();
         $createUser = User::create([
            'name' =>  $data['name'],
            'email' =>  $data['email'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password'])
         ]);

      $this->whatsappNotification($createUser->phone);

       return $createUser ;

    }

    private function whatsappNotification(string $recipient)
    {
        $sid    = getenv("TWILIO_AUTH_SID");
        $token  = getenv("TWILIO_AUTH_TOKEN");
        $wa_from= getenv("TWILIO_WHATSAPP_FROM");
        $twilio = new Client($sid, $token);

        $body = "Bonjour, Bienvenue sur Poulet Store Market , faites vos achats.";

        return $twilio->messages->create("whatsapp:$recipient",["from" => "whatsapp:$wa_from", "body" => $body]);
    }


    public function  loginForm() {
        return view('auth.login');
    }


    public function  loginUser(Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('Signed in');
        }

        return redirect("login")->withSuccess('Login details are not valid');

    }


    public function signOut() {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }



}
