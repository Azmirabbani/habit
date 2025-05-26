<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habit extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'icon_default',
        'icon_status',
        'goal_time',
        'goal_status',
        'time_options',
        'user_id', // tambahkan agar bisa mass assign user_id
    ];

    public function user()
{
    return $this->belongsTo(User::class);
}
}
