<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TokoBuku extends Model
{
    //
    protected $table='data_buku';
    protected $primaryKey='no';
    protected $fillable=['kategori','kode_buku','nama_buku','nama_pengarang','harga (Rp)'];
}
