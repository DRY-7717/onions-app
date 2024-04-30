<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function index()
    {
        return view('register-customer');
    }

    public function listData()
    {
        return view('data-customer');
    }

    public function crud(Request $request)
    {
        $action = $request->input('action');

        $data = $request->validate([
            'no_wa' => 'required',
            'nama' => 'required',
            'jml_bawang' => 'required',
            'hrg_bawang' => 'required',
        ]);

        if ($action === 'tambah') {
            Customer::create($data);
        } else if ($action === 'hapus') {
            Customer::where('nama', $data['nama'])->delete();
        } else if ($action === 'ubah') {
            Customer::where('nama', $data['nama'])
                ->orWhere('no_wa', $data['no_wa'])->update($data);
        }

        return redirect('/');
    }
}
