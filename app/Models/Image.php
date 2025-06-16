<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['ticket_id', 'filename'];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }
}
