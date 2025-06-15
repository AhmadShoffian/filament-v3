<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['tiket_id', 'filename'];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }
}
