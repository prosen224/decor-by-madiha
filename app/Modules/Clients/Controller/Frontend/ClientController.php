<?php
namespace App\Modules\Clients\Controller\Frontend;

use App\Http\Controllers\Controller;
use App\Modules\Clients\Models\Clients;
use DB;

class ClientController extends Controller
{
    public function index()
    {
        // $model = new Clients();
        $g_setting = DB::table('general_settings')->where('id', 1)->first();
        $service = DB::table('page_clients_items')->where('id', 1)->first();
        // dd($service);
        $clients = DB::table('clients')->paginate(9);
        return view('views.frontend.index', compact('clients', 'g_setting', 'service'));
    }

}
