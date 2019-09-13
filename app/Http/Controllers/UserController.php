<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\UserRequest;

use App\Models\User;

use Log;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::all();
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
    public function store(UserRequest $request)
    {
        try {
            $user = User::create($request->all());

            return response()->json(['message' => 'Se ha creado el registro correctamente.'], 201);
        } catch (\Exception $e) {
            Log::error(sprintf('%s:%s', 'UserController:store', $e->getMessage()));
            return response()->json(['message' => 'Ha ocurrido un error'], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        if(!$user instanceof User){
            return response()->json(['message' => 'No existe el usuario'], 400);
        }

        return $user;
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
    public function update(UserRequest $request, $id)
    {
        try {
            User::where('_id', $id)->update($request->all());

            return response()->json(['message' => 'Se ha editado el registro correctamente.'], 204);
        } catch (\Exception $e) {
            Log::error(sprintf('%s:%s', 'UserController:update', $e->getMessage()));
            return response()->json(['message' => 'Ha ocurrido un error'], 500);
        }
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
