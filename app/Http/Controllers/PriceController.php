<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ModulesData;
use App\Models\Tags;

class ServicesController extends Controller
{
    public function index(Request $request){
        $data = ModulesData::where('module_id', 14)->where('status','active');

        if ($request->has('keyword')) {
            $data->where('title', 'like', '%'.$request->keyword.'%');
        }

        if ($request->has('category')) {
            $data->where('category', $request->category);
        }

        if ($request->has('archive')) {
            $data->whereMonth('created_at', date('m', strtotime($request->archive)))->whereYear('created_at', date('Y', strtotime($request->archive)));
        }

        if ($request->has('tag')) {
            $data->whereRaw("FIND_IN_SET($request->tag,tag_ids)");
        }

        $results = $data->paginate(10);

        return view('services.index')->with('services',$results);
    }   

    public function detail($slug){
    	$data['service'] = ModulesData::where('slug',trim($slug))
    	 		->where('module_id', 14)
    	 		->where('status','active')
    	 		->first();
    	 
    	return view('services.detail')->with($data); 		
    }

    function lastThreeMonths() {
	    return array(
	        date('F Y', time()),
	        date('F Y', strtotime('-1 month')),
	        date('F Y', strtotime('-2 month'))
	    );
	}
}
