<?php

namespace App\Http\Controllers\farmer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Event;
use Carbon\Carbon;

class CalenderController extends Controller
{
    public function index()
    {
        if(request()->ajax()) 
        {
         $start = (!empty($_GET["start"])) ? ($_GET["start"]) : ('');
         $end = (!empty($_GET["end"])) ? ($_GET["end"]) : ('');
 
         $data = Event::whereDate('start', '>=', $start)
                        ->whereDate('end',   '<=', $end)
                        ->get(['id','title','start', 'end']);
         return response()->json($data);
        }
        return view('fdashboard.calender');
    }
    
   
    public function create(Request $request)
    {  
        $insertArr = [ 'title' => $request->title,
            'start' => $request->start,
            'end' => $request->end
        ];

        $event = Event::insert($insertArr);   
        return response()->json($event);
    }


    public function new(Request $request)
    {  
        $this->validate($request, [
            'title' => 'required',
            'start' => 'required',
            'end' => 'required',
        ]);

            $start =  Carbon::createFromFormat('m/d/Y', $request->start)->format('Y-m-d');
            $end =  Carbon::createFromFormat('m/d/Y', $request->end)->format('Y-m-d');
            
            $event = new Event();   
            $event->title = $request->title;   
            $event->start = $start;   
            $event->end = $end; 
            $event->save();  
            return redirect()->back();


        
    }

    
     
    public function update(Request $request)
    {   
        $where = array('id' => $request->id);
        $updateArr = ['title' => $request->title,'start' => $request->start, 'end' => $request->end];
        $event  = Event::where($where)->update($updateArr);
 
        return response()->json($event);
    } 
 
 
    public function destroy(Request $request)
    {
        $event = Event::where('id',$request->id)->delete();   
        return response()->json($event);
    }
}
