<?php

namespace App\Http\Controllers;

use Auth;
use JWTAuth;
use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public $loginAfterSignUp = true;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inscription');
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

    // public function login(Request $request)
    // {
    //     $credentials = $request->only('email', 'password');
    //     $token = null;
    //     if ( ! $token = JWTAuth::attempt($credentials)) {
    //             return response([
    //                 'status' => 'error',
    //                 'error' => 'invalid.credentials',
    //                 'msg' => 'Invalid Credentials.'
    //             ], 400);
    //     }
    //     return response([
    //             'status' => 'success',
    //             'token' => $token
    //         ])
    //         ->header('Authorization', $token);
    // }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clients = Client::create($request->all());
        return response()->json($clients);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        $client = Client::orderBy('id', 'asc')->get();
        return response()->json($client);
    }

    public function getClientId($id)
    {
        $user = Client::findOrFail($id);

        return response([
            'status' => 'success',
            'data' => $user
        ]);
    }

    public function user(Request $request)
    {
        $user = Client::find(Auth::user()->id);
        return response([
                'status' => 'success',
                'data' => $user
            ]);
    }

    protected function respondWithToken($token)
    {
      return response()->json([
        'access_token' => $token,
        'token_type' => 'bearer',
        'expires_in' => auth()->factory()->getTTL() * 60
      ]);
    }

    public function refresh()
    {
        return response([
            'status' => 'success'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $clients = Client::find($client);
        $clients->delete();
    }
}
