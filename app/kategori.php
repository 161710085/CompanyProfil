<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
     
    protected $table = 'kategoris'; 
    protected $fillable = ['nama']; 
    public $timestamps = true;

    public function produk()
    {
    	return $this->hasMany('App\produk','kategori_id');
    }
}


