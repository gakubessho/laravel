<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id', 'name',
    ];

    protected $hidden = [
        'created_at', 'updated_at', 'deleted_at',
    ];

    public function user()
    {
        return $this->blongsTo(User::class);
    }
}
