<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SocialMedia;

class SocialMediaController extends Controller
{
    public function create(){
        return view('admin.socialmedia.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'url' => 'required',
            'icon' => 'required',
        ], [
            'url.required' => 'Social Media URL Required',
            'icon.required' => 'Social Media Icon Required',
        ]);

        SocialMedia::insert([
            'url' => $request->url,
            'icon' => $request->icon,
        ]);

        $notification = [
            'message' => 'Social Media Inserted Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('social-media-index')->with($notification);
    }


    public function index(){
        $datas = SocialMedia::latest()->get();
        return view('admin.socialmedia.index', compact('datas'));
    }


    public function edit($id)
    {
        $data = SocialMedia::findOrFail($id);
        return view('admin.socialmedia.edit', compact('data'));
    }


    public function update(Request $request)
    {

        $id = $request->id;

        SocialMedia::findOrFail($id)->update([
            'url' => $request->url,
            'icon' => $request->icon,
        ]);


        $notification = array(
            'message' => 'Social Media Updated Successfully',
            'alert-type' => 'success'

        );

        return redirect()->route('social-media-index')->with($notification);
    }



    public function inactive($id)
    {
        SocialMedia::findOrFail($id)->update(['status' => 0]);

        $notification = array(
            'message' => 'Social Media InActive Successfully',
            'alert-type' => 'error'

        );
        return redirect()->back()->with($notification);

    }

    public function active($id)
    {
        SocialMedia::findOrFail($id)->update(['status' => 1]);

        $notification = array(
            'message' => 'Social Media Active Successfully',
            'alert-type' => 'success'

        );
        return redirect()->back()->with($notification);

    }

    public function delete($id)
    {

        SocialMedia::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Social Media Deleted Successfully',
            'alert-type' => 'success'

        );

        return redirect()->back()->with($notification);

    }
}
