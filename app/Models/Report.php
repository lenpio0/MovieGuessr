<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'movie_id',
        'issue',
    ];

    /**
     * The user that issued the report.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The movie concerned by the report.
     */
    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

}
