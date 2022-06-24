<?php
use App\Models\Task\PreSelectedTask;

// function response($data, $view, $compact, $with) {
//     if(request()->wantsJson() || request()->ajax()) {
//         return response()->json($data);
//     }

//     return view($view, compact('data', $view))->with($with);
// }


function getPreSelectedTasks() {
    return PreSelectedTask::select(['title', 'date'])->orderBy('title', 'asc')->get()->toArray();
}
