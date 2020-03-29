<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    /**
     * Get the question associated with the answer.
     */
    public function question()
    {
        return $this->hasOne('App\Models\Question');
    }
}
