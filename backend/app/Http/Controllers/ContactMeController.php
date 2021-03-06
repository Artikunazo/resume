<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactMe;
use Illuminate\Database\QueryException;

class ContactMeController extends Controller
{
    private static $regexNoSpecialChars = '/^([a-zA-ZÀ-ÿ\u00f1\u00d1\s]+|[a-zA-ZÀ-ÿ\u00f1\u00d1\s]+\s{1}[a-zA-ZÀ-ÿ\u00f1\u00d1\s]{1,}|[a-zA-ZÀ-ÿ\u00f1\u00d1\s]+\s{1}[a-zA-ZÀ-ÿ\u00f1\u00d1\s]{3,}\s{1}[a-zA-ZÀ-ÿ\u00f1\u00d1\s]{1,})$/g';
    private static $formValidations = [
        'name' => self::$regexNoSpecialChars,
        'email' => '/^[^@]+@[^@]+\.[a-zA-Z]{2,}$/g',
        'subject' => self::$regexNoSpecialChars,
        'comment' => self::$regexNoSpecialChars
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = json_decode($request->getContent(), true);

        $contact = new ContactMe;

        $contact->name = self::validateField('name', $data['name']);
        $contact->email = self::validateField('email', $data['email']);
        $contact->subject = self::validateField('subject', $data['subject']);
        $contact->comment = self::validateField('comment', $data['comment']);

        try {
            if ($contact->save()) {
                //Send mail
                mail('art@artikunazo.mx', $contact->subject, json_encode([
                    $contact->name,
                    $contact->email,
                    $contact->subject,
                    $contact->comment,
                ]));
                http_response_code(200);
                return response()->json(['message' => 'Enviado correctamente']);
            }
        } catch (QueryException $e) {
            die;
        }
    }

    public static function validateField($fieldName, $fieldValue)
    {
        if (!preg_match(self::$formValidations[$fieldName], $fieldValue)) {
            http_response_code(400);
            return response()->json(['message' => 'El campo $fieldName tiene contenido no aceptado.']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
