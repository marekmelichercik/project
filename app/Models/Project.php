<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * {@inheritdoc}
     */
    protected $fillable = [
        'name',
        'description',
    ];
}
