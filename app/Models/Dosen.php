<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model implements AuthenticatableContract
{
    use HasFactory, Authenticatable;


    protected $table = 'dosen';
    protected $primaryKey = 'nidn';
    protected $guarded = [];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
