<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function index(){
        $notices = Notice::all();
        return view('notice.index',compact('notices'));
    }

    public function create()
    {
        return view('notice.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'priority' => 'required|numeric',
            'notice' => 'required'
        ]);

        Notice::create($data);
        return redirect(route('notice.index'));
    }

    public function edit($id)
    {
        $notice = Notice::find($id);
        return view('notice.edit',compact('notice'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'priority' => 'required|numeric',
            'notice' => 'required'
        ]);

        $notice = Notice::find($id);
        $notice->update($data);
        return redirect(route('notice.index'));
    }


    public function delete($id)
    {
        $notice = Notice::find($id);
        $notice->delete();
        return redirect(route('notice.index'));
    }
}
