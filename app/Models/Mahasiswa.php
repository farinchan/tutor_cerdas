<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model  implements AuthenticatableContract
{
    use HasFactory, Authenticatable;

    protected $table = 'mahasiswa';
    protected $primaryKey = 'nim';
    protected $guarded = [];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
