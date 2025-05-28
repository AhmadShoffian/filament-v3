<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Peran extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'name',
        'description',
        'created_by',
        'updated_by',
        'deleted_by',
    ];

    protected static function boot()
{
    parent::boot();

    static::creating(function ($model) {
        $model->created_by = auth()->user()?->name ?? 'system';
    });

    static::updating(function ($model) {
        $model->updated_by = auth()->user()?->name ?? 'system';
    });

    static::deleting(function ($model) {
        $model->deleted_by = auth()->user()?->name ?? 'system';
        $model->save();
    });
}

}
