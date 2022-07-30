<?php


namespace App\Http\Controllers\PublicController;


use App\Http\Controllers\Controller;
use App\Http\Resources\ContactResorce;
use App\Models\Enquiry;
use App\Models\Message;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ContactController extends Controller
{


    /**
     * @param Request $request
     * @return ContactResorce
     */
    public function contact(Request $request){
        $contact = new Message();
        $contact->seen = 0;
        $contact->name = $request->name;
        $contact->contact = $request->contact;
        $contact->message = $request->message;
        $contact->email = $request->email;
        $contact->address = $request->address;
        $contact->save();
        return new ContactResorce($contact);

    }

    public function enquery(Request $request){
        $enquery = new Enquiry();
        $enquery->seen = 0;
        $enquery->name = $request->name;
        $enquery->phone = $request->phone;
        $enquery->email = $request->email;
        $enquery->levels = $request->levels;
        $enquery->apply = $request->apply;
        $enquery->save();
        
        return response()->json(["status"=>true,"message"=>"Thank you for Enquiry"]);

    }


}
