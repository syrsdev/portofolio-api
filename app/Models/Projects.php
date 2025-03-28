<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function projectSkills()
    {
        return $this->hasMany(projectSkills::class, 'project_id', 'id');
    }
}
