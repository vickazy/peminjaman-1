<?php

namespace Jalinmodule\Peminjaman\Models;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table = 'peminjaman';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id', 'karyawan_id','barang_id'
    ];

}
