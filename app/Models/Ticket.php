<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Models\Activity;

use Illuminate\Notifications\Notifiable;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Ticket.
 *
 * @property int $id
 * @property int $priority_id
 * @property int $unit_id
 * @property int $owner_id
 * @property int $problem_category_id
 * @property string $title
 * @property string $description
 * @property int $ticket_statuses_id
 * @property null|int $responsible_id
 * @property null|Carbon $created_at
 * @property null|Carbon $updated_at
 * @property null|Carbon $approved_at
 * @property null|Carbon $solved_at
 * @property null|string $deleted_at
 * @property Priority $priority
 * @property Unit $unit
 * @property null|User $user
 * @property ProblemCategory $problem_category
 * @property TicketStatus $ticket_status
 * @property Collection|Comment[] $comments
 */
class Ticket extends Model
{
    use SoftDeletes;
    use Notifiable;
    use LogsActivity;
    protected $table = 'tickets';

    protected static function booted(): void
    {
        static::creating(function ($ticket) {
            $ticket->uuid = Str::uuid();
        });
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['title', 'description','catatan_penyelesaian'])
            ->logOnlyDirty()
            ->useLogName('ticket')
            ->setDescriptionForEvent(fn(string $eventName) => "Tiket $eventName");
    }

    protected $casts = [
        'priority_id' => 'int',
        'unit_id' => 'int',
        'peran_id' => 'int',
        'unit_kerja_id' => 'int',
        'owner_id' => 'int',
        'problem_category_id' => 'int',
        'ticket_statuses_id' => 'int',
        'responsible_id' => 'int',
        'image' => 'string',
        'approved_at' => 'datetime',
        'solved_at' => 'datetime',
    ];

    protected $fillable = [
        'priority_id',
        'unit_id',
        'peran_id',
        'unit_kerja_id',
        'owner_id',
        'user_id',
        'source',
        'problem_category_id',
        'title',
        'catatan_penyelesaian',
        'username',
        'email',
        'description',
        'ticket_statuses_id',
        'responsible_id',
        'image',
        'approved_at',
        'solved_at',
    ];

    /**
     * Get the priority that owns the Ticket.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function priority()
    {
        return $this->belongsTo(Priority::class);
    }

    /**
     * Get the unit that owns the Ticket.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

    /**
     * Get the owner that owns the Ticket.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    /**
     * Get the responsible that owns the Ticket.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function responsible()
    {
        return $this->belongsTo(User::class, 'responsible_id');
    }

    /**
     * Get the problemCategory that owns the Ticket.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function problemCategory()
    {
        return $this->belongsTo(ProblemCategory::class);
    }

    /**
     * Get the ticketStatus that owns the Ticket.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ticketStatus()
    {
        return $this->belongsTo(TicketStatus::class, 'ticket_statuses_id');
    }

    /**
     * Get all of the comments for the Ticket.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany(Comment::class, 'ticket_id');
    }

    public function peran()
    {
        return $this->belongsTo(\App\Models\Peran::class);
    }

    public function unitKerja()
    {
        return $this->belongsTo(\App\Models\UnitKerja::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function activities()
    {
        return Activity::where('subject_type', self::class)
            ->where('subject_id', $this->id);
    }
}
