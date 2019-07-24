<?php

namespace App\Http\Controllers;

use App\enquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;  
use Illuminate\Support\Facades\Storage;
use Illuminate\Filesystem\Filesystem;
use Validator;
use Response;
use App\csvData;

class enqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //  
        $enq=enquiry::all(); 
        return view('enquiry.index',compact('enq'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        return view('enquiry.create');  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        $rules =[]; 
        foreach ($this->request() as $k=>$v){
            $rules[$v] = "string|nullable" ;
        } 
        $validator = Validator::make($request->all(), $rules); 
        if ($validator->fails())
        {
        return Response::json(array( 'errors' => $validator->getMessageBag()->toArray() )); 
        }   
        $e = new enquiry;   
        $dbcols = $this->cols();
        $reqcols = $this->request();
        foreach ($dbcols as $k=>$v){
            $e->$v  = $request[$reqcols[$k]]  ;
        }  
        $e->save(); 
        $route = route ('enq_show',['enq'=>$e->id]);
        return ['route' => $route];
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function show(enquiry $enq)
    {  
        return view('enquiry.show',compact('enq'));
    }






    public function import()
    {  
        return view('enquiry.import' );
    }
    public function impost(Request $request)
    {  
        $header = 1;
        $dbcol = $this->cols(); 
        $path=$request->file('enq_csv')->store('upload'); 
        $path=$request->file('enq_csv')->getRealPath();
        $data = array_map('str_getcsv', file($path));
        $save_data =$data;
        
        if ($request['header']){
            $header= $data[0];
            $csv_data = array_slice($data, 1, 2);
            $save_data = array_slice($data, 1, count($data)-1); 
            }
        else {
            $csv_data = array_slice($data, 0, 2);}

        $csv_data_file = csvData::create([
        'csv_filename' => $request->file('enq_csv')->getClientOriginalName(),
        'csv_header' => $request->has('header'),
        'csv_data' => json_encode($save_data),
        ]);
        $csvid=$csv_data_file->id; 
 
        return view('enquiry.importshow',compact('csv_data','dbcol','csvid','header'));
    }
    public function impshow(Request $request)
    {   
        $r=0;$u=0; 
        $data = CsvData::find($request['csvid']);
        $csv_data = json_decode($data->csv_data, true);
        
        foreach ($request->all() as $key => $value) {
            if($value == "MobileNo"){$Pri=$key;}
            if($value == "EnquiryName"){$Sec=$key;}
        }

        foreach ($csv_data as $row) { 
            $enq=NULL; 
            if ($request['Pri'])
            {
                if($enq = enquiry::where('MobileNo',$row[$Pri])->first()){$u++;}
                else if($request['Sec']) 
                {if($enq = enquiry::where('EnquiryName',$row[$Sec])->first()){$u++;}} 
            }
            else if ($request['Sec']){ 
                if($enq = enquiry::where('EnquiryName',$row[$Sec])->first()){$u++;}
            } 
            if(!$enq){$enq = new enquiry;$r++;}   
            foreach ($request->all() as $index => $field) {            
                if ($index!=="_token" && $index!=="csvid" && $index!=="Pri" && $index!=="Sec"){  
                $enq->$field = $row[$index];      ///////***//////****////////
                }
            }     
            $enq->save();
        } 
        Storage::deleteDirectory('upload'); 
        return view('enquiry.importf',compact('r','u'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function edit(enquiry $enquiry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, enquiry $enquiry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function destroy(enquiry $enquiry)
    {
        //
    }
 
    public function request(){
        return array( 'enqname', 'cbdate', 'mobno', 'status', 'email', 'unsub', 'invalid', 'city', 'firstbuyer', 'pcode', 'location', 'source', 'gender', 'ssource', 'income', 'altpho1', 'profession', 'altpho2', 'martial', 'owner', 'age', 'exoffer', 'lang', 'recom1', 'remarks', 'recom2', 'recom3', 'did', 'lastcall', 'vid', 'leadtp', 'agentp', 'potential', 'npotential', 'ininv', 'issub', 'ninv', 'nsub', 'altcity', 'desc', 'hist', 'body', 'bcolor', 'fuel', 'maxown', 'trans', 'yom', 'budget', 'maxkm', 'manf', 'mod', 'plocation', 'paper', 'loan', 'nopaper', 'noloan', 'insur', 'swarn', 'noinsur', 'noswarn', 'cmodel', 'cprice', );
    }

    public function cols(){
        return [ 'EnquiryName','CallBackDate','MobileNo','Status','Email','Unsub','Invalid','City','BuyerNo','PinCode','Location','Source','Gender','Subsource','Income','AltPhone','Profession','AltPhone2','MartialStatus','LeadOwner','Age','ExOffer','Lang','Recom1','Remarks','Recom2','Recom3','DID','LastCall','VID','LeadTP','AgentTP','Potential','Npotential','IsInv','IsSub','ReasonNinv','ReasonNSub','AltCity','Description','History','BodyType','BodyColor','Fuel','Maxown','Transmission','YearOfManf','Budget','Manf','Model','Plocation','Paper','Loan','Npaper','Nloan','isInsur','Swarn','ReasonNinsur','ReasonNswarn','CarModel','CarPrice', ];
    }
}
