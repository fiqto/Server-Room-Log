<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Submission;
use App\Http\Requests\StoreSubmissionRequest;
use App\Mail\NotifMail;
use Illuminate\Support\Facades\Mail;

class Wizard extends Component
{
    public $currentStep = 1;
    public $name, $email, $origin, $destination_server, $reason, $status, $entry_date, $date_time_out;
    public $successMessage = '';
  
    protected $rules = [
        'name'=>'required',
        'email'=>'required|email|unique:submissions,email',
        'origin'=>'required',
        'entry_date' => 'required',
        'date_time_out' => 'required',
        'destination_server' => 'required',
        'reason'=>'required',
    ];
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function render()
    {
        return view('livewire.wizard');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function firstStepSubmit()
    {
        $this->validate([
            'destination_server'=>'required',
        ]);

        $this->currentStep = 2;
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function secondStepSubmit()
    {
        $this->currentStep = 3;
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function submitForm()
    {
        $this->validate();

        if (empty($this->status)) {
            $this->status = 'Baru';
        }

        Submission::create([
            'name' => $this->name,
            'email' => $this->email,
            'origin' => $this->origin,
            'destination_server' => $this->destination_server,
            'entry_date' => date('Y-m-d H:i:s', strtotime($this->entry_date)), 
            'date_time_out' => date('Y-m-d H:i:s', strtotime($this->date_time_out)), 
            'reason' => $this->reason,
            'status' => $this->status,
        ]);
        
        Mail::to("Admin@gmail.com")
        ->send(new NotifMail());
  
        $this->clearForm();
  
        $this->currentStep = 3;
    }
  
    public function back($step)
    {
        $this->currentStep = $step;    
    }
  
    public function clearForm()
    {
        $this->name = '';
        $this->email = '';
        $this->origin = '';
        $this->destination_server = '';
        $this->entry_date = '';
        $this->date_time_out = '';
        $this->reason = '';
    }

    public function increaseStep(){
        $this->resetErrorBag();
        $this->validateData();
         $this->currentStep++;
         if($this->currentStep > $this->totalSteps){
             $this->currentStep = $this->totalSteps;
         }
    }

    public function decreaseStep(){
        $this->resetErrorBag();
        $this->currentStep--;
        if($this->currentStep < 1){
            $this->currentStep = 1;
        }
    }

    // public function validateData(){

    //     if($this->currentStep == 1){
    //         $this->validate([
    //             'destination_server'=>'required',
    //         ]);
    //     }
    //     elseif($this->currentStep == 2){
    //           $this->validate([
    //              'name'=>'required',
    //              'email'=>'required|email|unique:submissions,email',
    //              'origin'=>'required',
    //              'entry_date' => 'required',
    //              'date_time_out' => 'required',
    //              'reason'=>'required',
    //           ]);
    //     }
    // }

}

