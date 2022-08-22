<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\GeneralSetting;
use App\Models\Admin\PageAboutItem;
use App\Models\Admin\PageContactItem;
use App\Models\Admin\PageProjectItem;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        
        //This section depends on Clients Module
        // $clients = DB::table("clients")->get();
        
        $sliders = DB::table('sliders')->get();

        // $page_home = DB::table('page_home_items')->where('id', 1)->first();
        $why_choose_items = DB::table('why_choose_items')->get();
        $services = DB::table('services')->get();
        // $testimonials = DB::table('testimonials')->limit(3)->get();
        $testimonials = DB::table('testimonials')->where('featured', 1)->get();
        $projects = DB::table('projects')->get();
        $team_members = DB::table('team_members')->get();
        $blogs = DB::table('blogs')->get();
        
        $projects_content = PageProjectItem::first();
        $about_content = PageAboutItem::first();
        $choose_contact_banner = GeneralSetting::first();
        $contact_us = PageContactItem::first();
        
        return view('decor.index', compact('sliders', 'why_choose_items', 'services', 'testimonials', 'projects', 'team_members', 'blogs','projects_content','about_content','choose_contact_banner','contact_us'));
    }
}
