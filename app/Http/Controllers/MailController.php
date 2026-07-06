<?php

namespace App\Http\Controllers;

use App\Models\Mail;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;


class MailController extends Controller
{

   public function inbox() {

      $userId = Auth::user()->id;

      $inbox = Mail::query()->where('receiver_id',$userId)->get();

      return view('mailbox.inbox',compact('inbox'));
   }

   public function sent() {

      $userId = Auth::user()->id;

      $inbox = Mail::query()->where('sender_id',$userId)->get();

      return view('mailbox.sent',compact('inbox'));
   }



   public function composer(){

      return view('mailbox.compose-form');
   }

   public function sendMail(Request $request){
      validator($request->all());

      $userId = Auth::user()->id;

      $receiver = User::query()->where('email', $request->email)->first();

      $mail =  new Mail();
      $mail->sender_id = $userId;
      $mail->receiver_id = $receiver->id ?? null;
      $mail->subject = $request->subject;
      $mail->body = $request->body;
      $mail->status = 'unread';
      $mail->save();

      Mail::to($$request->email)->send();

      return back()->with('success', 'Email sent successfully!'); 
   }

   public function viewEmail($id){

      $mail = Mail::query()->where('id',$id)->first();

      $mail->status = "read";
      $mail->update();

      return view('mailbox.view-mail', compact('mail'));
   }
}
