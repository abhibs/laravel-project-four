<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Designation;

class DesignationController extends Controller
{
    public function index()
    {
        $data = Designation::find(1);
        return view('admin.designation.index', compact('data'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ], [
            'name.required' => 'Designation Name is Required',
        ]);
        $id = $request->id;

        Designation::findOrFail($id)->update([
            'name' => $request->name,
        ]);

        $notification = array(
            'message' => 'Designation Name Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('designation-index')->with($notification);

    }
}
