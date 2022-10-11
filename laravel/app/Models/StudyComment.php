<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudyComment extends Model
{
    use HasFactory;

    protected $fillable = [
        'study_post_id',
        'body',
    ];

    public function post()
    {
        return $this->belongsTo(StudyPost::class, 'study_post_id');
    }
}
