<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Str;
use App\Models\Content\HomePageContent;
use Database\Seeders\Content\HomePageContent as ContentHomePageContent;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
use DB;


class AdminContentEditorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function content(){
        return view('admin.website_content.content');
    }


    public function home_page(Request $request ){
        if ($request->ajax()) {
              
            $data = HomePageContent::all();
   
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->filter(function ($instance) use ($request) {
                        if (!empty($request->get('title'))) {
                            $instance->collection = $instance->collection->filter(function ($row) use ($request) {
                                return Str::contains($row['title'], $request->get('title')) ? true : false;
                            });
                        }
   
                        if (!empty($request->get('search'))) {
                            $instance->collection = $instance->collection->filter(function ($row) use ($request) {
                                if (Str::contains(Str::lower($row['title']), Str::lower($request->get('search')))){
                                    return true;
                                }else if (Str::contains(Str::lower($row['body']), Str::lower($request->get('search')))) {
                                    return true;
                                }

                                return false;
                            });
                        }
                    })
                    ->addColumn('action', function($row){

                           $btn = ' <a href="edit_home_page_content/'.$row['id'].'" class="edit btn btn-primary btn-sm">Edit</a>
                                    <a  href="javascript:void(0)'.$row['id'].'" class="edit btn btn-primary btn-sm">View</a>'
                                    ;
                            return $btn;
                    })
                    ->addColumn('created_at', function($row){
                        $date = date("d F Y", strtotime($row->created_at));
                        return $date;
                     })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('admin.website_content.home.home_Page_content');
    }
    public function edit_home_page($id){
        $data = HomePageContent::find($id);
        return view('admin.website_content.home.edit_home_page_content',compact('data'));
     }

     public function update_home_page(Request $rqs){

        $now = Carbon::now();
        $home = HomePageContent::find($rqs->id);
 
        $home->title=$rqs->title;
        $home->body=$rqs->body;
        $home->updated_at=$now;
        $home->created_at=$now;
        $home->save();

        HomePageContent::query()->where("body", "LIKE", '%<p>%')->update(["body" => DB::raw("REPLACE(REPLACE(body,  '<p>', '\n'), '</p>', '') ")]);
        Alert::toast('Content Updated Successfully','success');
        return redirect('/home_Page_content');
          
     }



     public function homestay_page(Request $request ){
        if ($request->ajax()) {
              
            $data = HomePageContent::all();
   
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->filter(function ($instance) use ($request) {
                        if (!empty($request->get('title'))) {
                            $instance->collection = $instance->collection->filter(function ($row) use ($request) {
                                return Str::contains($row['title'], $request->get('title')) ? true : false;
                            });
                        }
   
                        if (!empty($request->get('search'))) {
                            $instance->collection = $instance->collection->filter(function ($row) use ($request) {
                                if (Str::contains(Str::lower($row['title']), Str::lower($request->get('search')))){
                                    return true;
                                }else if (Str::contains(Str::lower($row['body']), Str::lower($request->get('search')))) {
                                    return true;
                                }

                                return false;
                            });
                        }
                    })
                    ->addColumn('action', function($row){

                           $btn = ' <a href="edit_home_page_content/'.$row['id'].'" class="edit btn btn-primary btn-sm">Edit</a>
                                    <a  href="javascript:void(0)'.$row['id'].'" class="edit btn btn-primary btn-sm">View</a>'
                                    ;
                            return $btn;
                    })
                    ->addColumn('created_at', function($row){
                        $date = date("d F Y", strtotime($row->created_at));
                        return $date;
                     })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('admin.website_content.home.home_Page_content');
    }
}
