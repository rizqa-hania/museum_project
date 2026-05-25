<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    protected $table = 'tiket';
    protected $primaryKey = 'tiket_id';
    protected $fillable = ['kategori_id', 'pengunjung_id', 'petugas_id', 'tanggal_kunjungan'];
    
    public function kategori()
    {
        return $this->belongsTo(KategoriTiket::class, 'kategori_id');
    }
}
