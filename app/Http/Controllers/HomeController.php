<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Name;
use App\Models\Designation;
use App\Models\SocialMedia;
use App\Models\About;
use App\Models\Fact;
use App\Models\Skill;
use App\Models\Review;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Certificate;
use App\Models\Project;
use App\Models\Contact;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    public function index(){
        $namedata = Name::find(1);
        $designationdata = Designation::find(1);
        $socialmediadatas = SocialMedia::where('status', 1)->inRandomOrder()->get();
        $aboutdata = About::find(1);
        $factdata = Fact::find(1);
        $skilldatas = Skill::where('status', 1)->inRandomOrder()->get();
        $reviewdatas = Review::where('status', 1)->inRandomOrder()->get();
        $educationdatas = Education::where('status', 1)->inRandomOrder()->get();
        $experiencedatas = Experience::where('status', 1)->inRandomOrder()->get();
        $certificatedatas = Certificate::where('status', 1)->inRandomOrder()->get();
        $projectdatas = Project::where('status', 1)->inRandomOrder()->get();


        return view('welcome', compact('namedata', 'designationdata',
        'socialmediadatas', 'aboutdata',
        'factdata', 'skilldatas',
        'reviewdatas', 'educationdatas', 'experiencedatas',
        'certificatedatas', 'projectdatas'
    ));
    }

    public function contact(Request $request)
    {
        Contact::insert([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'created_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' => 'Contact Form Submitted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function projectDetails($id, $slug){
        $project = Project::findOrFail($id);
        $tags = $project->tags;
        $tags_all = explode(',', $tags);

        return view('project-detail', compact('project', 'tags_all'));
    }
}
