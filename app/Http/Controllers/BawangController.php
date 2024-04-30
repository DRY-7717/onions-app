<?php

namespace App\Http\Controllers;

use App\Models\Bawang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class BawangController extends Controller
{
    //
    public function index()
    {
        return view('tambah-bawang');
    }
    public function listData()
    {
        return view('data-bawang');
    }

    public function crud(Request $request)
    {
        $action = $request->input('action');
        $data = $request->validate([
            'hrg_bawang' => 'required',
            'jml_bawang' => 'required',
        ]);


        if ($action === 'tambah') {
            Bawang::create($data);
        } else if ($action === 'hapus') {
            Bawang::where('jml_bawang', $data['jml_bawang'])->delete();
        } else if ($action === 'ubah') {
            Bawang::where('hrg_bawang', $data['hrg_bawang'])
                ->orWhere('jml_bawang', $data['jml_bawang'])->update($data);
        }

        return redirect('/');
    }
}
