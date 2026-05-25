<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'jadwal';
    protected $primaryKey = 'jadwal_id';
    protected $fillable = ['tanggal', 'jam', 'kuota'];
    
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'jadwal_id');
    }
}
