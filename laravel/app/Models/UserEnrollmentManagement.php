<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserEnrollmentManagement extends Model
{
    use HasFactory;

    protected $table = 'user_enrollment_managements';

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
