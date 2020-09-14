<?php

namespace App\Models;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = ['title', 'description', 'user_id'];

    /**
     * Scope a query to only include users of a given type.
     *
     * @param Builder $query
     * @return Builder
     */
    public function scopeOnlyMyUser(Builder $query)
    {
        return $query->where('user_id', auth()->user()->id);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
