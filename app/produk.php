<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
       protected $table = 'produks';
     protected $fillable = ['nama','ukuran','warna','harga','kategori_id','jenis_id','bahan_id'];
     public $timestamps = true;

	public function bahan()
	{
		return $this->belongsTo('App\bahan','bahan_id');
	}
	public function jenis()
	{
		return $this->belongsTo('App\jenis','jenis_id');
	}
	public function kategori()
	{
		return $this->belongsTo('App\kategori','kategori_id');
	}
    }
