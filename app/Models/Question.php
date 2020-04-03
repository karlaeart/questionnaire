<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed answer
 */
class Question extends Model
{
    protected $fillable = ['text'];

    /**
     * Get the answer associated with the question.
     */
    public function answer()
    {
        return $this->hasOne('App\Models\Answer');
    }
}
