<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LocationImage extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = [
        'location_id',
        'name',
        'path',
    ];
}