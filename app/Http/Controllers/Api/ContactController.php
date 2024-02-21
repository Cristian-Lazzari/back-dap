<?php

namespace App\Http\Controllers\Api;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    private $validations = [
        'name'          => 'required|string|min:5|max:50',
        'phone'         => 'required|string|min:5|max:20',
        'mail'          => 'required|email|max:100',
        'message'       => 'nullable|string|min:5|max:1000',
        'tc'       => 'required',
    ];

    public function mailFirst(Request $request)
    {
        $request->validate($this->validations);
        if($data['tc']){
            $newContact = new Contact();
            $newContact->name          = $data['name'];
            $newContact->phone         = $data['phone'];
            $newContact->mail          = $data['email'];
            $newContact->message       = $data['message'];
            $newContact->save();
        }else{
            return response()->json([
                'success' => false,
                'error' => 'Si è verificato un errore durante l\'elaborazione della richiesta'
            ]);

        }
        $mail = new confermaFirst($newContact);
        Mail::to($data['email'])->send($mail);

        $mailAdmin = new confermaFirstAdmin($newContact);
        Mail::to('info@didatticaallaperto.it')->send($mailAdmin);

        return response()->json([
            'success' => true,
            'order' => $newContact
        ]);
    }
}
