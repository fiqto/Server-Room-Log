<?php

namespace App\Mail;

use App\Models\Submission;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    protected $submission;

    public function __construct(Submission $submission)
    {
        //
        $this->submission = $submission;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if ($this->submission->status === "Setuju") {
            return $this->from('DipoStar@gmail.com')
                   ->subject('Permintaan Akses Server Di Setujui')
                   ->view('email.accept-email')
                   ->with(
                    [
                        'name' => $this->submission->name,
                        'email' => $this->submission->email,
                        'origin' => $this->submission->origin,
                        'destination_server' => $this->submission->destination_server,
                        'entry_date' => $this->submission->entry_date,
                        'date_time_out' => $this->submission->date_time_out,
                        'reason' => $this->submission->reason,
                        'status' => $this->submission->status,
                    ]);

        } else {
            return $this->from('DipoStar@gmail.com')
                   ->subject('Permintaan Akses Server Di Tolak')
                   ->view('email.reject-email')
                   ->with(
                    [
                        'name' => $this->submission->name,
                        'email' => $this->submission->email,
                        'origin' => $this->submission->origin,
                        'destination_server' => $this->submission->destination_server,
                        'entry_date' => $this->submission->entry_date,
                        'date_time_out' => $this->submission->date_time_out,
                        'reason' => $this->submission->reason,
                        'status' => $this->submission->status,
                    ]);
        }
        
    }
}
