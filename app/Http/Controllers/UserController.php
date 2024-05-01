<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function index()
    {
        return view('tambah-user');
    }

    public function show()
    {

        return view('detail-data-admin');
    }

    public function crud(Request $request)
    {

        $action = $request->input('action');

        $data = $request->validate([
            'username' => 'required',
            'password' => 'required',
            'nama' => 'required',
            'jabatan' => 'required',
        ]);

        $data['password'] = Hash::make($data['password']);
        $data['role'] = 2;

        if ($action === 'tambah') {
            User::create($data);
        } else if ($action === 'hapus') {
            User::where('username', $data['username'])->delete();
        } else if ($action === 'ubah') {
            User::where('username', $data['username'])
                ->orWhere('nama', $data['nama'])->update($data);
        }

        return redirect('/menuadmin');
    }
}
