<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;
    use HasUuids;
    use SoftDeletes;

    protected $primaryKey = 'id';


    protected $cast =[
        'start_date' => 'date',
        'end_date' => 'date',
    ];
    /**
    * Get the user that owns the Pricing
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function pricing(): BelongsTo
    {
        return $this->belongsTo(Pricing::class, 'pricing_id');
    }

    /**
    * Get the user that owns the Uses
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function student(): BelongsTo
    {
        return $this->belongsTo(Uses::class, 'user_id');
    }

    public function isActive(): bool
    {
        return $this->is_paid && $this->end_date->isFuture();
    }
}