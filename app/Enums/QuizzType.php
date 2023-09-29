<?php

namespace App\Enums;

enum QuizzType: string
{
    case POLL = 'POLL';
    case ANSWER = 'ANSWER';
    case OUTCOME = 'OUTCOME';
}
