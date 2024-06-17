<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Job;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // This method will show our home page
    public function index() {

        // $featuredJobs = Job::where('status',1)->take(6)->get();


        // $categories = Category::where('status',1)->orderBy('name','ASC')->take(8)->get();

        // $newCategories = Category::where('status',1)->orderBy('name','ASC')->get();

        // $featuredJobs = Job::where('status',1)
        //                 ->orderBy('created_at','DESC')
        //                 ->with('jobType')
        //                 ->where('isFeatured',1)->take(6)->get();

        $latestJobs = Job::where('status',1)
                        ->with('jobType')
                        ->orderBy('created_at','DESC')
                        ->take(3)->get();

        


        return view('front.home',[
            // 'categories' => $categories,
            // 'featuredJobs' => $featuredJobs,
            'latestJobs' => $latestJobs,
            // 'newCategories' => $newCategories
        ]);
    }
}
