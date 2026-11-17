<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
          //panggi dulu table nya
    protected $table = 'barangs';
        //kita tentukan kolom yang boleh diisi atau tidak boleh di isi
protected $guarded = [
    'id',
    'timestamps'
];}

