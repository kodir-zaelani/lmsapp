<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pricing extends Model
{
    use HasFactory;
    use HasUuids;
    use SoftDeletes;

    protected $guarded    = [];
    protected $primaryKey = 'id';

    /**
     * Get all of the transactions for the Pricing
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }


    public function hasSubcribedByUser($userId)
    {
        return $this->transactions()
        ->where('user_id', $userId)
        ->where('is_paid', true)
        ->where('end_date', '>=', now())
        ->exists(); // kalau pakai exist hanya return boolean (true or false)
    }
}
