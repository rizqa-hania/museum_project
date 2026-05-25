<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengunjung extends Model
{
    protected $table = 'pengunjung';
    protected $primaryKey = 'pengunjung_id';
    protected $fillable = ['nama', 'email', 'no_hp'];
    
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'pengunjung_id');
    }
}
