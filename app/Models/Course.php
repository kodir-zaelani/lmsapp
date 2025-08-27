<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;
    use HasUuids;
    use SoftDeletes;

    protected $primaryKey = 'id';

    public function scopeSearch($query, $term)
    {
        $term = "%$term%";
        $query->where(function ($query) use ($term) {
            $query->where('name', 'like', $term);
        });
    }

     // Set slug auto with name dengan muttator
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }


     /**
     * Get the user that owns the Course
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    /**
     * Get all of the benefits for the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function benefits(): HasMany
    {
        return $this->hasMany(CourseBenefit::class);
    }

    /**
     * Get all of the courseSections for the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function courseSections(): HasMany
    {
        return $this->hasMany(CourseSection::class);
    }

    /**
     * Get all of the courseStudents for the Course
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function courseStudents(): HasMany
    {
        return $this->hasMany(CourseStudents::class, 'course_id');
    }
    /**
     * Get all of the courseMentors for the Course
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function courseMentors(): HasMany
    {
        return $this->hasMany(CourseMentor::class, 'course_id');
    }

    public function getContentCountAttribute()
    {
        return $this->courseSections->sum(function ($section) {
            return $section->sectionContents->count();
        });
    }
}
