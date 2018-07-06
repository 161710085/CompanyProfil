<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bahan extends Model
{
    protected $table = 'bahans'; 
    protected $fillable = ['nama','harga']; 
    public $timestamps = true;

    public function produk()
    {
    	return $this->hasMany('App\produk','bahan_id');
    }
}
