<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Messages;
use App\Models\RepliedMessages;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Exception;
use Illuminate\Support\Facades\Auth;

class StartChatController extends Controller
{
    //show messages between users
    function showChat()
    {
        $user_id =  Auth::id();

        //$recipient_id = request('id');
        $messages = DB::table('messages')->get();
        $replied_messages = DB::table('replied_messages')->get();

        /* else{
            $messages = DB::table('messages')->where('recipient_id', $user_id)->get();
        $replied_messages = DB::table('replied_messages')->get();
        } */
        return view('chat', compact('messages', 'replied_messages'));
    }

    //show messages between users
    public function SendMessage(Request $request)
    {
        $rules = [
            'message' => 'required|string|min:3|max:500',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect('chat')
                ->withInput()
                ->withErrors($validator);
        } else {
            $data = $request->input();
            try {
                $user_id =  Auth::id();

                $message = new Messages;
                $recipient_id = $data['recipient_id'];
                $message->user_id = $user_id;
                $message->recipient_id = $recipient_id;
                $message->message = $data['message'];
                $message->save();

                return redirect('start_chat/a?recipient_id=' . $recipient_id);
            } catch (Exception $e) {
                return $e;
            }
        }
    }

    public function DeleteMessage(Request $request)
    {
        $message_id = request()->route()->parameter('message_id');
        $recipient_id = request()->route()->parameter('user_id');

        $respond = Messages::find($message_id)->delete();
        if ($respond) {

            echo ("<script LANGUAGE='JavaScript'>
                window.alert('Succesfully Updated');
                window.location.href='start_chat/a?recipient_id='.$recipient_id.';
                </script>");
            //return redirect('start_chat/a?recipient_id=' . $recipient_id);
        }
    }
}
