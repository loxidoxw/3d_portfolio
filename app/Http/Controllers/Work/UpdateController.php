<?php

namespace App\Http\Controllers\Work;

use App\Http\Controllers\Controller;
use App\Http\Requests\WorkRequest;
use App\Models\Work;

class UpdateController extends Controller
{
    public function __invoke(WorkRequest $request, Work $work)
    {
        $data = $request->validated();

        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store('models/thumbnail', 'public');
        }

        if ($request->hasFile('mview_path')) {
            $data['mview_path'] = $request->file('mview_path')->store('models/model_files', 'public');
        }

        $work->update($data);
        return redirect()->route('work.show', $work);
    }
}
