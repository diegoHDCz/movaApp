<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Notifications\NewContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Nexmo\Laravel\Facade\Nexmo;
use Symfony\Component\HttpFoundation\Response;

class ContactController extends Controller
{
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact');
    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contact = Contact::create($request->all());


        Notification::route('mail', config('mail.from.address'))
            ->notify(new NewContact($contact));
        Nexmo::message()->send([
            'to' => $this->contact->phone,
            'from' => 'sender',
            'text' => $this->contact->message,

        ]);

        if ($contact) {
            return view('contact');
        } else {
            Response::HTTP_BAD_REQUEST;
        }
    }
}
