<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = ['id', 'title', 'description', 'thumbnail', 'sketchfab_url', 'mview_path'];
}
