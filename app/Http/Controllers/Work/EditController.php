<?php

namespace App\Http\Controllers\Work;

use App\Http\Controllers\Controller;
use App\Models\Work;

class EditController extends Controller
{
    public function __invoke(Work $work)
    {
        return view('work.edit', compact('work'));
    }
}
