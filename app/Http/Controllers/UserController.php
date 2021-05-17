<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    // public function index(){
    //     $usuarios = User::all();

    //     return response()->json($usuarios, 200);
    // }


    // private $user;
    // public function __construct(User $user){
    //     $this->user = $user;
    // }
   
    // public function register(Request $request){
    //     $user = $this->user->create([
    //       'name' => $request->get('name'),
    //       'email' => $request->get('email'),
    //       'firtsName' => $request->get('firtsName'),
    //       'phone_number' => $request->get('phone_number'),
    //       'password' => bcrypt($request->get('password')),
    //       'passwordRepeat' => bcrypt($request->get('passwordRepeat'))
    //     ]);
    //     return response()->json(['status'=>true,'message'=>'Usuario_creado_correctamente','data'=>$user]);
    // }
    
    // public function login(Request $request){
    //     $credentials = $request->only('email', 'password');
    //     $token = null;
    //     try {
    //        if (!$token = JWTAuth::attempt($credentials)) {
    //         return response()->json(['Email_o_contraseña_incorrectos'], 422);
    //        }
    //     } catch (JWTAuthException $e) {
    //         return response()->json(['Error_al_crear_token'], 500);
    //     }
    //     return response()->json(compact('token'));
    // }
    // public function getAuthUser(Request $request){
    //     $user = JWTAuth::toUser($request->token);
    //     return response()->json(['result' => $user]);
    // }
}



