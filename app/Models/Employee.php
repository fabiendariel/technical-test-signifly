<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Employee extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'phone',
        'email',
        'profile_img',
        'knowledge',
        'experience',
        'role',
    ];

    public function skills(): BelongsToMany
    {
        return $this->belongsToMany(Skill::class)->as('employee_skill')->withPivot("expertise");
    }

    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(Project::class)->as('employee_project');
    }
}
