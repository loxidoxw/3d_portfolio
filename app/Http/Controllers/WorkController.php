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
        $works = Work::paginate(12);
        return view('work.index', compact('works'));
    }

    public function show(Work $work)
    {
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

    public function edit(Work $work)
    {
        return view('work.edit', compact('work'));
    }

    public function update(WorkRequest $request, Work $work)
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
