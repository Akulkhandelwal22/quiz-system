<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    function quizzes() {
        return $this->hasmany(Quiz::class);
    }
}
