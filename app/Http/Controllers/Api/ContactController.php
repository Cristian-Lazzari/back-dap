<?php

namespace App\Http\Controllers\Api;

use App\Models\Contact;

use App\Mail\confermaFirst;

use Illuminate\Http\Request;
use App\Mail\confermaFirstAdmin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    private $validations = [
        'name'          => 'required|string|min:5|max:50',
        'phone'         => 'required|string|min:5|max:20',
        'email'         => 'required|email|max:100',
        'message'       => 'nullable|string|min:5|max:1000',
        'tc'            => 'required',
    ];

    public function mailFirst(Request $request)
    {
        $data = $request->all();
       // $request->validate($this->validations);
        if($data['tc']){

            $esisteGia = Contact::where('email', $data['email'])->exists();
            if($esisteGia){
                $contact = Contact::where('email', $data['email'])->firstOrFail();
                $contact->counter ++;
                $contact->message = $data['message'];
                $contact->update();

                $mail = new confermaFirst($contact);
                Mail::to($data['email'])->send($mail);

                $mailAdmin = new confermaFirstAdmin($contact);
                Mail::to('info@didatticaallaperto.it')->send($mailAdmin);
                return response()->json([
                    'success' => true,
                    'order' => $contact
                ]);
            }else{
                $newContact = new Contact();
                $newContact->name          = $data['name'];
                $newContact->phone         = $data['phone'];
                $newContact->email         = $data['email'];
                $newContact->counter       = 1;
                if(($data['message'])){
                    $newContact->message   = $data['message'];
                }else{
                    $newContact->message   = 'none';

                }
                $newContact->method        = $data['method'];
                $newContact->save();
                
                $mail = new confermaFirst($newContact);
                Mail::to($data['email'])->send($mail);

                $mailAdmin = new confermaFirstAdmin($newContact);
                Mail::to('info@didatticaallaperto.it')->send($mailAdmin);
                return response()->json([
                    'success' => true,
                    'order' => $newContact
                ]);
            }

            
        }else{
            return response()->json([
                'success' => false,
                'error' => 'Si è verificato un errore durante l\'elaborazione della richiesta'
            ]);

        }
        

        
    }
}
