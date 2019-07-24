<?php

namespace App\Http\Controllers;

use App\visit;
use App\enquiry;
use Illuminate\Http\Request;
use Validator;
use Response;

class visitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {     
        return view('visit.create');
    }
    public function create1($enq)
    {    
        $e = enquiry::find($enq);
        $x['name'] = $e->EnquiryName;
        $x['id'] = $e->id;
        return view('visit.create',compact('x'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array( 
            "vcity"=>'string|nullable',
            "invloc"=>'string|nullable',
            "vstatus"=>'string|nullable',
            "vreason1"=>'string|nullable',
            "vreason2"=>'string|nullable',
            "vreason3"=>'string|nullable',
            "vdate"=>'string|nullable',
            "vTS"=>'string|nullable',
            "vdesc"=>'string|nullable',
            "vbdate"=>'string|nullable',
            "vbAg"=>'string|nullable',
            "vdDate"=>'string|nullable',
            "vID"=>'string|nullable',
            "vteams"=>'string|nullable',
            "vass"=>'string|nullable',
         ); 

        $validator = Validator::make($request->all(), $rules); 
        if ($validator->fails())
        {
        return Response::json(array( 'errors' => $validator->getMessageBag()->toArray() )); 
        }  
        $v = new visit; 
        $v->CityID=$request['vcity'];
        $v->InvLocation=$request['invloc'];
        $v->VisitStatus=$request['vstatus'];
        $v->VisitReason=$request['vreason1']+$request['vreason2']+$request['vreason3'];
        $v->VisitDate=$request['vdate'];
        $v->VisitTS=$request['vTS'];
        $v->Description=$request['vdesc'];
        $v->BookedDate=$request['vbdate'];
        $v->Agent=$request['vbAg'];
        $v->DoneDate=$request['vdDate'];
        $v->visitID=$request['vID'];
        $v->AssignAgent=$request['vass'];
        $v->enquiry_id=$request['enq_id'];
        $v->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function show(visit $vis)
    {
        //
        return view ('visit.show',compact('vis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function edit(visit $visit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, visit $visit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function destroy(visit $visit)
    {
        //
    }
}
