<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Peran extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'perans';
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

 /**
     * Get all of the problemCategories for the Unit
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function problemCategories()
    {
        return $this->hasMany(ProblemCategory::class);
    }

    /**
     * Get all of the tickets for the Unit
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    /**
     * Get all of the users for the Unit
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }

}
