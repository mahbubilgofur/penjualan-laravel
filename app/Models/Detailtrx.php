<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detailtrx extends Model
{
    use HasFactory;
    protected $fillable =[
    		'id_dt',
    		'id_transaksi',
    		'id_barang',
    		'jml',
    		'total'
    ];
}
