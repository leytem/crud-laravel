<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::List();
        return response()->json(['success' => true, 'data' => $users]);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::store($request);
        return response()->json([
            'success' => true,
             'data'=>true,
            'message' => 'user created successfully'],200);

        }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        return response()->json(['success' => true, 'data' => $user], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        User::store($request, $id);
        return response()->json([
            'success' => true, 
            'data' =>true,
            'message' => 'user updated successfully'],200);
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    $user =User::find($id);
    $user->delete();
    return response()->json([
        'seccess' => true,
        'data' => true,
        'message' =>'user delete cuccessfull'
    ],200);
    }
}
