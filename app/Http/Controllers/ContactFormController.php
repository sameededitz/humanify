<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function contactSubmissions()
    {
        $submissions = ContactForm::latest()->get();
        return view('admin.contact-submission', compact('submissions'));
    }

    public function deleteContactSubmission(ContactForm $submission)
    {
        $submission->delete();
        return redirect()->route('contact-submissions')->with([
            'status' => 'success',
            'message' => 'Contact Submission Deleted Successfully',
        ]);
    }

    public function showContactSubmission($id)
    {
        $submission = ContactForm::findOrFail($id);

        return response()->json([
            'message' => $submission->message,
        ]);
    }
}
