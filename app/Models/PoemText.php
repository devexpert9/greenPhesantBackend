<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoemText extends Model
{
    use HasFactory;
    protected $table = 'poem_texts';
    protected $fillable = [
        'itemid',
        'ititle',
        'creatorid',
        'cname',
        'iyear',
        'icontent_url',
        'itext'
    ];
}
