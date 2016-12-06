<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Jalinmodule\Peminjaman\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Jalinmodule\Peminjaman\Models\Peminjaman;
use Jalinmodule\Karyawan\Models\karyawan;
use Jalinmodule\Barang\Models\Barang;

class PeminjamanController extends Controller
{
    public function __construct()
    {
        
    }

    public function index()
        {   
            
            $pinjams = Peminjaman::join('barang', 'peminjaman.barang_id', '=', 'barang.id')
                    ->join('karyawan', 'peminjaman.karyawan_id', '=', 'karyawan.id')
                    ->select('peminjaman.id as id','karyawan.name as karyawan','barang.name as barang')
                    ->paginate(10);
           
            return view('inventaris/peminjaman/index', ['data' => $pinjams]);
        }
        
   public function newpeminjaman()
    {  
        $Barang =  Barang::get();
        $Karyawan = Karyawan::get();
        return view('inventaris/peminjaman/formpeminjaman', [ 'barang' => $Barang,'karyawan' => $Karyawan, ]);
    }
    
    public function store(Request $request)
    {       
        if($request->barang_id && $request->karyawan_id){
            Peminjaman::insert([
                'karyawan_id' => $request->karyawan_id,
                'barang_id' => $request->barang_id,
            ]);
        }
        return redirect('peminjaman');
    }

}
