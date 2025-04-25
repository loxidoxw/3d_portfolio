<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'title', 'description', 'thumbnail', 'sketchfab_url', 'mview_path'];

}
