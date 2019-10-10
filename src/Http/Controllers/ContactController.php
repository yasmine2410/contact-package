<?php
/**
 * Created by PhpStorm.
 * User: Yasmeen
 * Date: 10/7/2019
 * Time: 10:05 AM
 */

namespace Yasmine\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Yasmine\Contact\Mail\ContactMailable;
use Yasmine\Contact\Models\Contact;



class ContactController extends Controller
{

    public function index() {

        return view('contact::contact');
    }

    public function send(Request $request) {

        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message,$request->name));
        Contact::create($request->all());
        return redirect(route('contact'));
    }

}