<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectSkills extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function project()
    {
        return $this->belongsTo(projects::class, 'project_id', 'id');
    }
    public function skill()
    {
        return $this->belongsTo(Skills::class, 'skill_id', 'id');
    }
}