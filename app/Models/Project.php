<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = 'projects';
    protected $fillable = [
        'project_name', 
        'project_description', 
        'status',
        'project_progress', 
        'client_company',
        'project_leader',
        'estimated_budget', 
        'total_amount_spent', 
        'estimated_duration',
        'created_at',
        'updated_at',
    ];
}