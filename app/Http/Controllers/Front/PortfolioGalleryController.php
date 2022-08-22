<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\Video;
use Illuminate\Http\Request;
use DB;

class PortfoliogalleryController extends Controller
{
    public function index($slug){
        $projects = DB::table('projects')->where('project_slug', $slug)->first();
        
        $photos = DB::table('project_photos')->where('project_id', $projects->id)->orderBy('id', 'DESC')->get();
        $g_setting = DB::table('general_settings')->where('id', 1)->first();
        $contact_us = \App\Models\Admin\PageContactItem::first();
        return view('decor.new-portfolio-gallery', compact('projects','photos','g_setting','contact_us'));
    }
    public function video(){
        $g_setting = DB::table('general_settings')->where('id', 1)->first();
        $videos = Video::orderBy('video_order')->get();
        $contact_us = \App\Models\Admin\PageContactItem::first();
        return view('decor.new-videos', compact('videos','g_setting','contact_us'));
    }
    public function testimonials(){
        $testimonials = DB::table('testimonials')->where('photo', '!=', null)->orderBy('id', 'DESC')->get();
        $g_setting = DB::table('general_settings')->where('id', 1)->first();
        $contact_us = \App\Models\Admin\PageContactItem::first();
        return view('decor.new-testimonials', compact('testimonials','g_setting','contact_us'));
    }
}
