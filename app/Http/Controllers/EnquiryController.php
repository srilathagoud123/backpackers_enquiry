<?php

  namespace App\Http\Controllers;

  use Illuminate\Http\Request;
  use Illuminate\Support\Facades\DB;
  
  use App\Enquiry;

  class EnquiryController extends Controller
  {

   function save_enquiry(Request $request){
    //reading form data
    $enquiry = new Enquiry;
    $enquiry->fName = $request->fname;
    $enquiry->lName = $request->lname;
    $enquiry->siblingsCount = $request->sc;
    $enquiry->businessYears = $request->by;
    $enquiry->bedTime = $request->bt;
    $enquiry->wakeupTime = $request->wt;
    $enquiry->tvHours = $request->tvh;
    $enquiry->gameHours = $request->gh;
    $enquiry->outsideHours = $request->osh;
    
    

    if($enquiry->save()){
      //saving data to database
      //calculating yearly values
        $yearlyTvHours = 365*$request->tvh;
        $yearlyGameHours =365*$request->gh;
        $sleepHours = $request->bt - $request->wt;
        $yearlySleepHours= 365*$sleepHours;
      


      // preparing data array to send to mail controller
        $data = array('name'=>$request->fname, 'siblings'=>$request->sc,
        'businessYears' => $request->by, 'wakeupTime' =>$request->wt,
        'bedTime' =>$request->bt, 'tvHours' =>$request->tvh,
        'gameHours' => $request->gh,'outsideHours'=>$request->osh);
        $result = (new MailController)->basic_email($data);

        //returning to sucess view with data
        return view('success', ['fname' => $request->fname, 'siblings' => $request->sc,'businessYears' => $request->by, 
        'wakeupTime'=> $request->wt,'bedTime' =>$request->bt, 'tvHours' =>$request->tvh,
        'gameHours' => $request->gh,'outsideHours'=>$request->osh, 'yearlyTvHours' =>$yearlyTvHours,
        'yearlyGameHours' =>$yearlyGameHours,'sleepHours' =>$request->bt - $request->wt,'yearlySleepHours' =>$yearlySleepHours] );
    }
  }
}