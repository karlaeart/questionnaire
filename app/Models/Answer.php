<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = ['text'];
    /**
     * Get the question that owns the answer.
     */
    public function question()
    {
        return $this->belongsTo('App\Models\Question');
    }
}
