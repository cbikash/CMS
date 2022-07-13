<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnquiryController extends Controller
{

    public function index(){
        $enqueries=Enquiry::OrderBy('created_at','desc')->paginate(20);
        return view('admin.enquiry.index',compact('enqueries'));

    }

    public function destroy(Enquiry $enquiry){
        $enquiry->delete();
        return redirect(route('enquiry.index'));

    }
    public function show(Enquiry $enquiry){
         if($enquiry->seen == 0){
            $enquiry->update([
                'seen'=>'1',
            ]);
        }

        return view('admin.enquiry.show',compact('enquiry'));
    }

    public function readNotification(){
         Auth::user()->unreadNotifications->markAsRead();
         return redirect()->back();
    }

}
