<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
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
        'score1',
        'score2',
        'score3',
        'score4',
        'score5',
    ];

    /**
     * The user that owns the score.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The movie concerned by the score.
     */
    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}
