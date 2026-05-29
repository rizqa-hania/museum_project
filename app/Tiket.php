<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    protected $table = 'kategori_tiket';
    protected $primaryKey = 'kategori_id';
    protected $fillable = ['nama_kategori', 'harga', 'deskripsi'];
    
    public function kategori()
    {
        return $this->belongsTo(KategoriTiket::class, 'kategori_id');
    }
}
