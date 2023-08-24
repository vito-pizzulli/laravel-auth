<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'link',
        'creation_date',
        'image',
        'slug'
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
