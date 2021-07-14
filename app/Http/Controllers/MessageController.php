<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $messages=Message::orderBy('created_at','DESC')->paginate(20);
        return view('admin.message.index',compact('messages'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return
     */
    public function show(Message $message)
    {
        if($message->seen == 0){
            $message->update([
                'seen'=>'1',
            ]);
        }
        return view('admin.message.showDetails',compact('message'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     * @return
     */
    public function destroy(Message $message)
    {
        $message->delete();
        return redirect(route('message.index'));
    }
}
