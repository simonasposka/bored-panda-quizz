<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $url
 * @property ?string $alt
 * @method static find(int $id)
 */
class Image extends Model
{
    use HasFactory;
}
