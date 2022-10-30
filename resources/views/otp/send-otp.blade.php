@extends('otp.master')

@section('container')
    {{-- Phone Input --}}
        <div class="max-w-3xl px-6 py-16 mx-auto text-center" id="phone_input">
            <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-100">Server Room DSF</h1>
            <p class="max-w-md mx-auto mt-5 text-gray-500 dark:text-gray-400">Kode OTP akan dikirimkan ke nomer {{ $phone_number }}</p>
            
            <div class="flex flex-col mt-8 space-y-3 sm:space-y-0 sm:flex-row sm:justify-center sm:-mx-2">       
                <form id="phone_input">
                    <input type="text" id="phone_number" value="{{ $phone_number }}" class="w-full p-3 mt-0 text-sm border-gray-200 rounded-lg focus:ring-purple-600" placeholder="Nomer Telepon" required/>
                    
                    <div id="recaptcha-container" class="p-2"></div>
                    <button type="button" class="inline-flex items-center px-5 py-3 mt-8 font-medium text-white bg-purple-600 rounded-lg hover:bg-purple-500" 
                        onclick="sendOTP()">Kirim OTP
                    </button>
                </form>
            </div>   
        </div>
    {{-- End Phone Input --}}

    {{-- Verify Input --}}
        <div class="max-w-3xl px-6 py-16 mx-auto text-center" id="verify_input">
            <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-100">Masukan Kode Verifikasi</h1>
            <p class="max-w-md mx-auto mt-5 text-gray-500 dark:text-gray-400">Kami telah mengirimkan kode verifikasi ke nomer {{ $phone_number }}</p>
            <div class="flex flex-col mt-8 space-y-3 sm:space-y-0 sm:flex-row sm:justify-center sm:-mx-2">  
            {{-- <div class="alert alert-success" id="successOtpAuth" style="display: none;"></div> --}}
            <form >
                <input type="text" id="verification" class="w-full p-3 mt-0 text-sm border-gray-200 rounded-lg focus:ring-purple-600" placeholder="Kode Verifikasi">
                <button type="button" class="inline-flex items-center px-5 py-3 mt-8 font-medium text-white bg-purple-600 rounded-lg hover:bg-purple-500" onclick="verify()">Verify Code</button>
            </form>
            </div>
        </div>
    {{-- End Verify Input --}}
@endsection