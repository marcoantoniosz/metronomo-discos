<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index', [
            'users' => DB::table('users')->orderBy('name')->paginate(5),
        ]);
    }

    public function editAcess($id)
    {
        return view('users.edit', [
            'user' => User::findOrFail($id),
        ]);
    }

    public function updateRole(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->role = $request->role;
        $user->save();
        return redirect()->route('users.index');
    }
}
