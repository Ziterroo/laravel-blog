<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = ['title'];


    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
}
