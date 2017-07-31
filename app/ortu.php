<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ortu extends Model
{
    //
    protected $table    = 'ortus';
    protected $fillable = ['nama_ibu','nama_ayah','umur_ibu','umur_ayah','alamat'];
    protected $visible  = ['nama_ibu','nama_ayah','umur_ibu','umur_ayah','alamat'];
    public $timestamp   = true;

    public function siswa()
    {
    	return $this->hasMany('App\siswa','orangtua_id');
    }
}
