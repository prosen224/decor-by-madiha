<?php
namespace App\Modules\MadihaAPI\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Admin\GeneralSetting;
use App\Models\Admin\Menu;
use App\Models\Admin\PageHomeItem;
use App\Models\Admin\Photo;
use App\Models\Admin\Project;
use App\Models\Admin\ProjectPhoto;
use App\Models\Admin\Slider;
use App\Models\Admin\Video;
use DB;
use GuzzleHttp\Psr7\Request;

class MadihaAPIController extends Controller
{
    public $return;
    public function __construct()
    {
        $this->return = [
            'status' => false,
            'data' => []
        ];
        // $this->middleware('auth:api');
    }
    public function siteInfo()
    {
        $general_setting = GeneralSetting::where('id',1)->first();
        if($general_setting){
            $this->return['status'] = true;
            $this->return['data'] = $general_setting;
        }
        return response()->json($this->return, 200);
    }

    public function baseUrls()
    {
        $data = [];
        $data['image_dir'] = url('/uploads');
        $this->return['status'] = true;
        $this->return['data'] = $data;
        return response()->json($this->return, 200);
    }

    public function mainSlaider()
    {
        // return response()->json(Slider::all(), 200);
        $sliders = Slider::all();
        if($sliders){
            $this->return['status'] = true;
            $this->return['data'] = $sliders;
        }
        return response()->json($this->return, 200);
    }

    public function mainMenu()
    {
        $menus = Menu::where('menu_status','Show')->get();
        return response()->json(['status'=>true,'data'=>$menus], 200);
    }

    public function ourPortfolio()
    {
        $data = [];
        $data["content"] = PageHomeItem::where('id',1)->first();
        $data["title"] = $data["content"]->project_title;
        $data["subtitle"] = $data["content"]->project_subtitle;
        $data["portfolios"] = Project::all();
        return response()->json(['status'=>true,'data'=>$data], 200);
    }

    public function PortfolioGallery($id)
    {
        $data=[];
        $data["photos"] = ProjectPhoto::where('project_id',$id)->get();
        if($data["photos"]){
            $this->return['status'] = true;
            $this->return['data'] = $data;
        }else{
            $this->return['status'] = false;
            $this->return['data'] = [];
            
        }
        $data["project"] = Project::where('id',$id)->first();
        return response()->json($this->return, 200);
        // return response()->json(['status'=>true,'data'=>$data], 200);
    }

    public function videos()
    {
        $data = [];
        $data["videos"] = Video::all();
        return response()->json(['status'=>true,'data'=>$data], 200);
    }

    public function photos()
    {
        $data = [];
        $data["photos"] = Photo::all();
        return response()->json(['status'=>true,'data'=>$data], 200);
    }

    public function services()
    {
        $data = [];
        $data["content"] = PageHomeItem::where('id',1)->first();
        $data["services"] = DB::table('services')->get();
        return response()->json(['status'=>true,'data'=>$data], 200);
    }

    public function Aboutus()
    {
        $data = [];
        $data ['content'] = DB::table('page_about_items')->where('id', 1)->first();
        return response()->json(['status'=>true,'data'=>$data], 200);
    }

    public function testimonials()
    {
        $data = [];
        $data["testimonials"] = DB::table('testimonials')->orderBy('created_at','DESC')->get();
        if(isset($_GET["limit"])){
            $data["testimonials"]= DB::table('testimonials')->orderBy('created_at','DESC')->limit($_GET["limit"])->get();
        }
        return response()->json(['status'=>true,'data'=>$data], 200);
    }

    public function contactUs()
    {
        $data = [];
        $data["g_setting"] = DB::table('general_settings')->where('id', 1)->first();
        $data["banner_contact"] = $data["g_setting"]->banner_contact;
        $data["contact"] = DB::table('page_contact_items')->where('id', 1)->first();
        return response()->json(['status'=>true,'data'=>$data], 200);
    }

    public function spechalize_section()
    {
        $data = [];
        $data["banner"] =DB::table('general_settings')->where('id', 1)->first()->banner_blog;
        $data["content"] = DB::table('why_choose_items')->get();
        return response()->json(['status'=>true,'data'=>$data], 200);
    }
}
