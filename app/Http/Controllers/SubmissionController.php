<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use App\Http\Requests\StoreSubmissionRequest;
use App\Http\Requests\UpdateSubmissionRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Mail\NotifMail;

class SubmissionController extends Controller
{
    public function index()
    {   
        $submission = DB::table('submissions')
        ->orderByDesc('id')
        ->paginate(10);

        return view('admin.table')
            ->with('submissions', $submission);
    }

    public function create()
    {
        //
        //Kirim Notif Pesan Baru Ke Email Admin
        Mail::to("admin@gmail.com")
        ->send(new NotifMail());

        return redirect()->route('dashboard');
    }

    public function store()
    {
        // 
    }

    public function show(Submission $submission)
    {
        //
    }

    public function edit(Submission $submission)
    {
        return view('admin.show', compact('submission'));
    }

    public function update(UpdateSubmissionRequest $request, Submission $submission)
    {    
        $submission->update($request->validated());

        Mail::to($submission->email)
        ->send(new SendMail($submission));
        
        return redirect()->route('submissions.index')
            ->with('success', 'Berhasil DiUpdate!');
    }

    public function destroy(Submission $submission)
    {
        //
    }
}
