<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\WorkRequest;
use App\Models\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function index()
    {
        $works = Work::all();
        return view('work.index', compact('works'));
    }

    public function show($id)
    {
        $work = Work::findOrFail($id);
        return view('work.show', compact('work'));
    }

    public function create()
    {
        return view('work.create');
    }

    public function store(WorkRequest $request)
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
