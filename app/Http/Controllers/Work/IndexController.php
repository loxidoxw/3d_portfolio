<?php

namespace App\Http\Controllers\Work;

use App\Http\Controllers\Controller;
use App\Models\Work;

class IndexController extends Controller
{
     public function __invoke()
     {
         $works = Work::paginate(12);
         return view('work.index', compact('works'));
     }
}
