<?php

namespace App\Http\Controllers;

use App\Models\User;
use Facade\FlareClient\Http\Response;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends ApiController
{
    public function index()
    {
        // $users = User::paginate(15);
        // // return response()->json(['data_users' => $users], 200);
        // return $this->showAll($users);
        $data = DB::table('users')
            ->paginate(3);
        return response()->json(['data_users' => $data], 200);
    }

    public function store(Request $request)
    {
        dd($request->all());
        // $ruler = [
        //     'name' => 'required',
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required|min:6'
        // ];
        // $messages = [
        //     'required' => 'The :name',
        // ];

        // $this->validate($request, $ruler, $messages);
        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        $user = User::create($data);
        // return response()->json(['data' => $user], 201);
        return $this->showOne($user, 201);
    }

    public function show(User $user)
    {
        return $this->showOne($user);
    }
    public function update(User $user, Request $request)
    {

        $ruler = [
            'email' => 'email|unique:users,email' . $user->id,
            'password' => 'min:6',
        ];
        if ($request->has('name')) {
            $user->name = $request->name;
        }
        if ($request->has('email') && $user->email != $request->email) {
            $user->email = $request->email;
        }
        if ($request->has('password')) {
            $user->password = bcrypt($request->password);
        }
        $user->update($request->all());
        // return response()->json(['data' => $user], 200);
        return $this->showOne($user);
    }

    public function destroy(User $user)
    {
        $user->delete();
        // return response()->json(['data'=>$user],200);
        return $this->showOne($user);
    }
}