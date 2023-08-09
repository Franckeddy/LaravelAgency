<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsToMany;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'surface',
        'rooms',
        'bedrooms',
        'floor',
        'price',
        'city',
        'address',
        'postal_code',
        'sold',
    ];

    final public function options(): belongsToMany {
        return $this->belongsToMany(Option::class);
    }

    final public function getSlug(): string {
        return Str::slug($this->title);
    }

    final public function scopAvailable(Builder $builder): Builder {
        $this->where('sold', false);
    }
}
