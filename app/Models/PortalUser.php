<?php


namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class PortalUser extends Model implements AuthenticatableContract
{
    use Authenticatable;
    use HasRoles;

    protected $table = 'users'; // pastikan nama tabel benar

    // tambahkan kolom yang bisa diisi (opsional)
    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
