<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    //
    protected $table    = 'siswas';
    protected $fillable = ['nama','orangtua_id','umur','jenis_kelamin','alamat'];
    protected $visible  = ['nama','orangtua_id','umur','jenis_kelamin','alamat'];
    public $timestamp   = true;

    public function orangtua()
    {
    	return $this->belongsTo('App\ortu','orangtua_id');
    }
}
