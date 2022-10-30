<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NumberAuth extends Component
{
    public $currentStep = 1;
    public $phone_number;
    public $member;

    public function render()
    {
        return view('livewire.number-auth');
    }

    public function firstStepSubmit(Request $request)
    {
        $validatedData = $this->validate([
            'phone_number' => 'required',
        ]);
        $cek = $this->phone_number;
        $member = DB::table('members')->where('phone_number', $cek)->first();
        
        if ($member == null) {
            dd("Data tidak ditemukan");
        } else {
            $this->currentStep = 2;
        }
    }
  
    public function secondStepSubmit()
    {

        $validatedData = $this->validate([
            'phone_number'=>'required'
        ]);
  
        $this->currentStep = 3;
    }

    public function back($step)
    {
        $this->currentStep = $step;    
    }
  
    public function validateData(){

        if($this->currentStep == 1){
            $this->validate([
                'destination_server'=>'required',
            ]);
        }
        elseif($this->currentStep == 2){
              $this->validate([
                 'name'=>'required',
                 'email'=>'required|email',
                 'origin'=>'required',
                 'entry_date' => 'required',
                 'date_time_out' => 'required',
                 'reason'=>'required',
              ]);
        }
    }
}
