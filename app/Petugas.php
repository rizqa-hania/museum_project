<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Petugas extends Authenticatable
{
    protected $table = 'petugas';
    protected $primaryKey = 'petugas_id';
    protected $fillable = ['nama', 'email', 'password', 'shift'];
    protected $hidden = ['password'];
}
