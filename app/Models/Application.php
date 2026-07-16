<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'career_id',
        'name',
        'email',
        'phone',
        'cv_path',
        'message',
    ];

    public function career()
    {
        return $this->belongsTo(Career::class);
    }
}
