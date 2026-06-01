<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $primaryKey = 'transaksi_id';
    protected $fillable = [ 'pengunjung_id', 'kategori_id', 'jadwal_id', 'jumlah_tiket', 'total_harga'];

    public function pengunjung()
    {
        return $this->belongsTo(Pengunjung::class, 'pengunjung_id');
    }

    public function kategori()
    {
        return $this->belongsTo(KategoriTiket::class, 'kategori_id');
    }

    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class, 'jadwal_id');
    }   
    
}
