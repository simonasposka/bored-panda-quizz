<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $question_id
 * @property int $answer_id
 */
class CorrectAnswer extends Model
{
    use HasFactory;

    public const QUESTION_ID_FIELD = 'question_id';
    public const ANSWER_ID_FIELD = 'answer_id';

    public $timestamps = false;
}
