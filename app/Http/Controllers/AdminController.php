<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Post;
use App\Models\Service;
use App\Models\Social;
use App\Models\User;
use App\Models\Wiki;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function ApiRegister(Request $request){
        $user = User::create(
            [
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'type' => 'admin'
            ]
        );

        if($user){
            return response()->json(['message' => 'User created successfully'], 201);
        }else{
            return response()->json(['message' => 'User not created successfully'], 400);
        }
    }
    public function dashboard()
    {
        //check if user is admin
        if(Auth::user()->type === 'admin'){
            $data =[
                'user' => Auth::user(),
                'orders' => Order::all(),
                'posts' => Post::all(),
                'services' => Service::all(),
                'social' => Social::all(),
                'wiki' => Wiki::all(),
            ];
            return view('admin.dashboard.index', compact('data'));
        }else{
            throw new \Exception('Esse usuário não tem permissão para acessar');
        }
    }

    public function login(Request $request)
    {
        //authenticate user
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            //is admin ?
            if (Auth::user()->type == 'admin') {
                return redirect()->route('admin.dashboard');
            } else {
               throw new \Exception('Esse usuário não tem permissão para acessar');
            }
        }else{
            throw new \Exception('Usuário ou senha inválidos');
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
