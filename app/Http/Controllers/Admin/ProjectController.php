<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Carbon;

class ProjectController extends Controller
{
    public function create()
    {
        return view('admin.project.create');
    }


    public function store(Request $request)
    {
        // dd($request->all());
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(800, 600)->save('storage/project/' . $name_gen);
        $save_url = 'storage/project/' . $name_gen;

        Project::insert([
            'name' => $request->name,
            'slug' => strtolower(str_replace(' ', '-', $request->name)),
            'github' => $request->github,
            'youtube' => $request->youtube,
            'tags' => $request->tags,
            'image' => $save_url,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Project Inserted Successfully',
            'alert-type' => 'success'

        );
        return redirect()->route('project-index')->with($notification);

    }

    public function index()
    {
        $datas = Project::latest()->get();
        return view('admin.project.index', compact('datas'));
    }


    public function edit($id)
    {
        $data = Project::findOrFail($id);
        return view('admin.project.edit', compact('data'));
    }


    public function update(Request $request)
    {
        $id = $request->id;
        $old_img = $request->old_image;

        if ($request->file('image')) {
            unlink($old_img);
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension(); // 3434343443.jpg

            Image::make($image)->resize(800, 600)->save('storage/project/' . $name_gen);
            $save_url = 'storage/project/' . $name_gen;

            Project::findOrFail($id)->update([
                'name' => $request->name,
                'slug' => strtolower(str_replace(' ', '-', $request->name)),
                'github' => $request->github,
                'youtube' => $request->youtube,
                'tags' => $request->tags,
                'image' => $save_url,
            ]);
            $notification = array(
                'message' => 'Project Updated with Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('project-index')->with($notification);

        } else {

            Project::findOrFail($id)->update([
                'name' => $request->name,
                'slug' => strtolower(str_replace(' ', '-', $request->name)),
                'github' => $request->github,
                'youtube' => $request->youtube,
                'tags' => $request->tags,
            ]);
            $notification = array(
                'message' => 'Project Updated without Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('project-index')->with($notification);

        }

    }

    public function delete($id)
    {

        $data = Project::findOrFail($id);
        $img = $data->image;
        unlink($img);

        Project::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Project Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }

    public function inactive($id)
    {
        Project::findOrFail($id)->update(['status' => 0]);
        // dd($data);
        $notification = array(
            'message' => 'Project Inactive Successfully',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }

    public function active($id)
    {
        Project::findOrFail($id)->update(['status' => 1]);
        // dd($data);
        $notification = array(
            'message' => 'Project Active Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

}
