<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Project extends Model
{
    protected $table = 'Project';

    protected $fillable = [
        'name', 
        'description',
        'image',
        'tags',
        'project_url',
        'github_url',
        'play_store_url',
        'app_store_url'
    ];

    protected $casts = [
        'tags' => 'array',
    ];
}
