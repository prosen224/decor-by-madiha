<?php
namespace App\Modules\Clients\Controller\Admin;

use App\Http\Controllers\Controller;
use App\Modules\Clients\Models\Clients;
use App\Modules\Clients\Models\PageClientItem;
use DB;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $client = Clients::orderBy('created_at')->get();
        return view('views.admin.index', compact('client'));
    }
    public function create()
    {
        $model = new Clients();
        return view('views.admin.create', compact("model"));
    }

    public function store(Request $request)
    {
        // return $request;
        $request->validate([
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required',
        ]);

        $statement = DB::select("SHOW TABLE STATUS LIKE 'clients'");
        $ai_id = $statement[0]->Auto_increment;
        $client = new Clients();
        // $data['logo'] = '';
        // if ($request->hasFile('logo')) {
        $ext = $request->file('logo')->extension();
        $final_name = 'clogo-' . $ai_id . '.' . $ext;
        $request->file('logo')->move(public_path('uploads'), $final_name);

        $data = $request->only($client->getFillable());

        unset($data['logo']);
        $data['logo'] = $final_name;
        // }
        $client->fill($data)->save();

        return redirect()->route('admin.clients.index')->with('success', 'Client is added successfully!');
    }

    public function edit($id)
    {
        $model = Clients::findOrFail($id);
        return view('views.admin.edit', compact('model'));
    }

    public function update(Request $request, $id)
    {
        $client = Clients::findOrFail($id);
        $data = $request->only($client->getFillable());

        if ($request->hasFile('logo')) {

            $request->validate([
                'slider_photo' => 'mimes:jpeg,png,jpg,gif|max:2048',
                'name' => 'required',
            ]);

            unlink(public_path('uploads/' . $client->logo));

            // Uploading the file
            $ext = $request->file('logo')->extension();
            $final_name = 'clogo-' . $id . '.' . $ext;
            $request->file('logo')->move(public_path('uploads/'), $final_name);

            unset($data['logo']);
            $data['logo'] = $final_name;
        }

        $client->fill($data)->save();

        return redirect()->route('admin.clients.index')->with('success', 'Clients is updated successfully!');
    }
    public function destroy($id)
    {
        $slider = Clients::findOrFail($id);
        unlink(public_path('uploads/' . $slider->logo));
        $slider->delete();

        // Success Message and redirect
        return Redirect()->back()->with('success', 'Clients is deleted successfully!');
    }

    public function nedit()
    {
        $page_service = PageClientItem::where('id', 1)->first();
        if (!isset($page_service)) {
            $page_service = new PageClientItem();
            $page_service->name = "Clients";
            $page_service->status = "Show";
            $page_service->save();
        }
        return view('views.admin.page_clients', compact('page_service'));
    }

    public function nupdate(Request $request)
    {
        // return $request;
        $data['name'] = $request->input('name');
        $data['detail'] = $request->input('detail');
        $data['status'] = $request->input('status');
        $data['seo_title'] = $request->input('seo_title');
        $data['seo_meta_description'] = $request->input('seo_meta_description');

        PageClientItem::where('id', '!=', 0)->first()->update($data);

        return redirect()->back()->with('success', 'Clients Page Content is updated successfully!');

    }
}
