<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SectionContent extends Model
{
    use HasFactory;
    use HasUuids;
    use SoftDeletes;

    protected $guarded    = [];
    protected $primaryKey = 'id';

    public function scopeSearch($query, $term)
    {
        $term = "%$term%";
        $query->where(function ($query) use ($term) {
            $query->where('name', 'like', $term);
        });
    }


     /**
     * Get the user that owns the CourseSection
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function courseSection(): BelongsTo
    {
        return $this->belongsTo(CourseSection::class, 'course_section_id');
    }
}