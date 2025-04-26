<?php

namespace App\Http\Controllers\Work;

use App\Http\Controllers\Controller;
use App\Http\Requests\WorkRequest;
use App\Models\Work;

class StoreController extends Controller
{
       public function __invoke(WorkRequest $request)
       {
           $data = $request->validated();

           if ($request->hasFile('thumbnail')) {
               $data['thumbnail'] = $request->file('thumbnail')->store('models/thumbnail', 'public');
           }

           if ($request->hasFile('mview_path')) {
               $data['mview_path'] = $request->file('mview_path')->store('models/model_files', 'public');
           }
           Work::create($data);

           return redirect()->route('work.index');
       }
}
