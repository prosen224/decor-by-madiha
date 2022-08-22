<?php
namespace App\Modules\Home;

use App\Http\Controllers\Controller;

class MainController extends Controller
{

    public function index()
    {
        return view('view.index');
    }
}
