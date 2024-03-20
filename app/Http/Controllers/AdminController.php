<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\contact;
use App\Models\article;
use App\Models\web_cms;
use App\Models\hospital;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        return view('admindashboard.index');
    }

    // CMS Home
    public function cms_home()
    {
        return view('admindashboard.cms_home');
    }

    public function update_cms(Request $request)
    {
        // $data= $request->all();
        $data = $request->except('_token', 'tag');
        foreach ($data as $key => $val) {
            $web_cms = web_cms::where('slug', $key)->where('tag', $request->tag)->first();

            // dd($logo);

            if ($request->hasFile($key)) {
                $val = $this->image_upload($val);
            }
            if (isset($web_cms->id)) {

                $web_cms = web_cms::where('slug', $key)->where('tag', $request->tag)->update(['value' => $val]);
            } else {
                $web_cms = web_cms::create([
                    'name' => ucfirst(str_replace('_', ' ', $key)),
                    'slug' => $key,
                    'value' => $val,
                    'tag' => $request->tag,

                ]);
            }
        }
        return redirect()->back()->with('success', 'Record Updated');
    }

    // CMS About
    public function cms_about()
    {

        return view('admindashboard.cms_about');
    }


    // CMS Career
    public function cms_our_story()
    {
        return view('admindashboard.cms_our_story');
    }

    // CMS Service
    public function cms_our_mission()
    {

        return view('admindashboard.cms_our_mission');
    }

    // CMS Contact
    public function cms_privacy_policy()
    {
        return view('admindashboard.cms_privacy_policy ');
    }


    // Team Management
    public function cms_survivors_profile()
    {
        return view('admindashboard.cms_survivors_profile');
    }


    public function cms_contact_mental_health_expert()
    {
        return view('admindashboard.cms_contact-mental-health-expert');
    }

    public function cms_latest_research_in_psychiatry()
    {
        return view('admindashboard.cms_latest-research-in-psychiatry');
    }

    public function cms_top_journal_articles()
    {
        return view('admindashboard.cms_top-journal-articles');
    }
    public function cms_journals_and_latest_research()
    {
        return view('admindashboard.cms_journals_and_latest_research');
    }

    public function cms_donation()
    {
        return view('admindashboard.cms_donation');
    }

    public function cms_contact_us()
    {
        return view('admindashboard.cms_contact_us');
    }

    // Image Upload
    public function image_upload($image)
    {
        $ext = $image->getClientOriginalExtension();
        $file_name = $image->getClientOriginalName();
        $file_name = substr($file_name, 0, strpos($file_name, "."));
        $imagename = "uploads/" . $file_name . "_" . time() . '.' . $ext;
        $destinationPath = public_path() . '/uploads/';
        $image->move($destinationPath, $imagename);
        return $imagename;


    }

    // Hospital Management

    public function add_hospital()
    {
        return view('admindashboard.add_hospital');
    }

    public function add_hospital_post(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'phone_no' => 'required|email',
            'address' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'zipcode' => 'required|string',
            'type' => 'required|string',
            'timing' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|string',

        ]);

        $data = new hospital();
        $data->name = $request->name;
        $data->phone_no = $request->phone_no;
        $data->address = $request->address;
        $data->city = $request->city;
        $data->state = $request->state;
        $data->zipcode = $request->zipcode;
        $data->type = $request->hospital_type;
        $data->timing = $request->timing;
        $data->description = $request->description;
        $image = $request->image;
        if ($request->hasFile('image')) {
            if (isset($request->image)) {
            $image = $this->image_upload($image);
            $data->image = $image;
        }
    }
        $data->save();
        return redirect()->route('hospital.view')->with('success', 'Added Successfully');
    }

    public function view_hospital()
    {
        $data = hospital::where('is_active', 1)->where('is_deleted', 0)->get();
        return view('admindashboard.all_hospital', compact('data'));
    }
    public function update_hospital($id)
    {
        $data = hospital::find($id);
        return view('admindashboard.update_hospital', compact('data'));
    }
    public function update_hospital_post(Request $request, $id)
    {

        $data = hospital::find($id);
        $data->name = $request->name;
        $data->phone_no = $request->phone_no;
        $data->address = $request->address;
        $data->city = $request->city;
        $data->state = $request->state;
        $data->zipcode = $request->zipcode;
        $data->type = $request->hospital_type;
        $data->timing = $request->timing;
        $data->description = $request->description;
        $image = $request->image;
        if ($request->hasFile('image')) {
            if (isset($request->image)) {
            $image = $this->image_upload($image);
            $data->image = $image;
        }
    }
        // dd($image);
        $data->update();
        return redirect()->route('hospital.view')->with('success', 'Updated Successfully');
    }

    public function delete_hospital($id)
    {
        $data = hospital::find($id);
        $data->is_active = 0;
        $data->is_deleted = 1;
        $data->save();

        return redirect()->route('hospital.view')->with('success', 'Deleted Successfully');
    }

    // Blog Management

    public function add_blog()
    {
        return view('admindashboard.add_blog');
    }
    public function add_blog_post(Request $request)
    {
        $request->validate([
            'tittle' => 'required|string',
            'description' => 'required|string',
            'image' => 'required',
        ]);

        $data = new blog();
        $data->tittle = $request->tittle;
        $data->description = $request->description;
        $image = $request->image;
        if ($request->hasFile('image')) {
            if (isset($request->image)) {
            $image = $this->image_upload($image);
        }
    }
        $data->image = $image;
        $data->save();
        return redirect()->route('blog.view')->with('success', 'Added Successfully');
    }
    public function view_blog()
    {
        $data = blog::where('is_active', 1)->where('is_deleted', 0)->get();
        return view('admindashboard.all_blog', compact('data'));
    }
    public function update_blog($id)
    {
        $data = blog::find($id);
        return view('admindashboard.update_blog', compact('data'));
    }
    public function update_blog_post(Request $request, $id)
    {
        $data = blog::find($id);
        $data->tittle = $request->tittle;
        $data->description = $request->description;
        $image = $request->image;
        if (isset($request->image)) {
            $image = $this->image_upload($image);
            $data->image = $image;
        }
        // dd($imagename);
        $data->update();
        return redirect()->route('blog.view')->with('success', 'Updated Successfully');
    }

    public function delete_blog($id)
    {
        $data = blog::find($id);
        $data->is_active = 0;
        $data->is_deleted = 1;
        $data->save();
        return redirect()->route('blog.view')->with('success', 'Deleted Successfully');
    }

    // Article Managment
    public function add_article()
    {
        return view('admindashboard.add_article');
    }

    public function add_article_post(Request $request)
    {
        $data = new article();
        $data->tittle = $request->tittle;
        $data->save();
        return redirect()->route('article.view')->with('success', 'Added Successfully');
    }



    public function view_article()
    {
        $data = article::where('is_active', 1)->where('is_deleted', 0)->get();
        return view('admindashboard.all_article', compact('data'));
    }
    public function update_article($id)
    {
        $data = article::find($id);
        return view('admindashboard.update_article', compact('data'));
    }
    public function update_article_post(Request $request, $id)
    {

        $data = article::find($id);
        $data->tittle = $request->tittle;
        $data->update();
        return redirect()->route('article.view')->with('success', 'Updated Successfully');
    }


    public function delete_article($id)
    {
        $data = article::find($id);
        $data->is_active = 0;
        $data->is_deleted = 1;
        $data->save();
        return redirect()->route('article.view')->with('success', 'Deleted Successfully');
    }

    // Website Logo Management
    public function website_logo()
    {
        return view('admindashboard.website_logo');
    }


    public function imageupload($image)
    {
        $imagename = 'web_cms_images/' . $image->getClientOriginalName() . '_' . time() . '.' . $image->getClientoriginalExtension();
        $image->move(public_path('web_cms_images/'), $imagename);
        return $imagename;
    }


    // Config Management
    public function config_form()
    {
        return view('admindashboard.config');
    }

    public function view_inquiry_contact()
    {
        $data = contact::where('is_active', 1)->where('is_deleted', 0)->get();
        return view('admindashboard.all_contact', compact('data'));
    }


    // public function update_contact(Request $request, $id)
    // {
    //     $data = contact::find($id);
    //     $data->name = $request->name;
    //     $data->email = $request->email;
    //     $data->subject = $request->subject;
    //     $data->message = $request->message;
    //     $data->update();

    //     return redirect()->route('contact-us')->with('success', 'Thank you for Contact');
    // }

    public function delete_inquiry_contact($id)
    {
        $data =  contact::find($id);
        $data->is_active = 0;
        $data->is_deleted = 1;
        $data->save();
        return redirect()->route('inquiry-contact.view')->with('success', 'Deleted Successfully');
    }
}
