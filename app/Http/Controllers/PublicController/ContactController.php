<?php


namespace App\Http\Controllers\PublicController;


use App\Http\Controllers\Controller;
use App\Http\Resources\ContactResorce;
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
}
