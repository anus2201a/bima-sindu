<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\contact;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Console\Input\Input;
use App\Models\hospital;

class HomeController extends Controller
{

    public function index()
    {

        return view('home.index')->with('title','Home');
    }

    public function about_us()
    {

        return view('home.about-us')->with('title','About Us');
    }


    public function donation()
    {
        return view('home.donation')->with('title','Donation');
    }

    public function our_story()
    {
        return view('home.our-story')->with('title','Our Story');
    }



    public function privacy_policy()
    {
        return view('home.privacy-policy')->with('title','Privacy Policy');
    }

    public function supporting_young_cancer_survivors()
    {

        return view('home.supporting-young-cancer-survivors')->with('title','Supporting Young Cancer Survivors');
    }

    public function our_mission()
    {
        return view('home.our-mission')->with('title','Our Mission');
    }

    public function contact_us()
    {
        return view('home.contact-us')->with('title','Contact Us');
    }

    public function survivors_profile()
    {
        return view('home.survivors-profile')->with('title','Survivors Profile');


    }

    public function top_journal_articles()
    {
        return view('home.top-journal-articles')->with('title','Top Journal Articles');
    }

    public function journals_and_latest_research()
    {
        $data = blog::where('is_active', 1)->where('is_deleted', 0)->orderBy('id', 'DESC')->take(1)->first();
      return view('home.journals-and-latest-research' ,compact('data'))->with('title','Journals And Latest Research');
    }

    public function pushing_boundaries_the_latest_research_in_psychiatry()
    {
        $data = blog::where('is_active', 1)->where('is_deleted', 0)->get();
      return view('home.pushing-boundaries-the-latest-research-in-psychiatry' ,compact('data'))->with('title','Pushing Boundaries the Latest Research in Psychiatry');
    }

    public function contact_mental_health_expert()
    {
        $data = blog::where('is_active', 1)->where('is_deleted', 0)->orderBy('id', 'DESC')->take(1)->first();
      return view('home.contact-mental-health-expert',compact('data'))->with('title','Contact Mental Health Expert');
    }

    public function faq()
    {
      return view('home.faq')->with('title','FAQ`s');
    }

    public function search()
    {
      return view('home.search')->with('title','Search');
    }

    public function search_hospital(Request $request)
    {
        $zip_code = $request->hospital_search;
        if($request->tag) {
            $search_hospital = hospital::where('zipcode', $zip_code)->where('type' , $request->tag)->get();
        }else{
            $search_hospital = hospital::where('zipcode', $zip_code)->get();
        }
        // dd($search_hospital);
        return view('home.search', compact('search_hospital'));
    }

    public function inquiry_contact(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',

        ]);

        $data = new contact();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->subject = $request->subject;
        $data->message = $request->message;
        $data->save();
        return redirect()->route('contact-us')->with('success', 'Thank you for Contact');
    }
}
