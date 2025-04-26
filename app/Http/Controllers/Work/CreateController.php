<?php

namespace App\Http\Controllers\Work;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
   public function __invoke()
   {
       return view('work.create');
   }
}
