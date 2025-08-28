<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CourseSection extends Model
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
    * Get the user that owns the Course
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    /**
    * Get all of the sectioncontents for the Category
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function sectionContents(): HasMany
    {
        return $this->hasMany(SectionContent::class);
    }
}
