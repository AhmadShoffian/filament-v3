<?php


namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class PortalUser extends Model implements AuthenticatableContract
{
    use Authenticatable;

    protected $table = 'users'; // pastikan nama tabel benar

    // tambahkan kolom yang bisa diisi (opsional)
    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
