<div>
    @if(!empty($successMessage))
    <div class="alert alert-success">
       {{ $successMessage }}
    </div>
    @endif

    {{-- Step-1 --}}
    @if ($currentStep == 1)
        <div class="row setup-content {{ $currentStep != 1 ? 'displayNone' : '' }}" id="step-1">

            <div class="max-w-3xl px-6 py-16 mx-auto text-center">
                <h1 class="text-3xl font-semibold text-gray-800 dark:text-gray-100">Server Room DSF</h1>
                <p class="max-w-md mx-auto mt-5 text-gray-500 dark:text-gray-400">Masukan Nomer Telepon yang Telah Terdaftar!</p>
            
                <div class="flex flex-col mt-8 space-y-3 sm:space-y-0 sm:flex-row sm:justify-center sm:-mx-2">
                <div class="form-group">            
                
                    <input type="text" id="phone_number" class="w-full p-3 mt-0 text-sm border-gray-200 rounded-lg focus:ring-purple-600" placeholder="Nomer Telepon"/>
                        @error('phone_number')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                    <button type="button" class="inline-flex items-center px-5 py-3 mt-8 font-medium text-white bg-purple-600 rounded-lg hover:bg-purple-500">
                      Next
                      <svg xmlns="http://www.w3.org/2000/svg"
                      fill="none" viewBox="0 0 24 24"
                      stroke="currentColor" class="flex-shrink-0 w-4 h-4 ml-3">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                      </svg>
                    </button>
                </div>
                </div>
            </div>
        </div>
    @endif
    {{-- EndStep-1 --}}

    {{-- Step-2 --}}
    @if ($currentStep == 2)
        <div class="row setup-content {{ $currentStep != 2 ? 'displayNone' : '' }}" id="step-2">
                        
            <div class="max-w-3xl px-6 py-16 mx-auto text-center">
                <h1 class="text-3xl font-semibold text-gray-800 dark:text-gray-100">Server Room DSF</h1>
                <p class="max-w-md mx-auto mt-5 text-gray-500 dark:text-gray-400">Kode OTP akan dikirimkan ke nomer {{ $phone_number }}</p>

                <div class="flex flex-col mt-8 space-y-3 sm:space-y-0 sm:flex-row sm:justify-center sm:-mx-2">       
                    <div class="alert alert-danger" id="error" style="display: none;"></div>
                    <div class="alert alert-success" id="successAuth" style="display: none;"></div>
                    <form>
                        <input type="text" wire:model="phone_number" id="phone_number" class="w-full p-3 mt-0 text-sm border-gray-200 rounded-lg focus:ring-purple-600" placeholder="Nomer Telepon"/>
                        <div id="recaptcha-container"></div>    
                            @error('phone-number')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    
                        {{-- Button --}}
                        <div class="flex flex-wrap mt-4 gap-4">
                            <button class="inline-flex items-center justify-center w-full px-5 py-3 text-purple-700 hover:text-white border border-purple-700 hover:bg-purple-700 rounded-lg sm:w-auto" 
                                type="button" wire:click="back(1)"> <span class="font-medium"> Back </span>
                            </button>
                            
                            <button id="btn" class="inline-flex items-center justify-center w-full px-5 py-3 text-white bg-purple-600 hover:bg-purple-500 rounded-lg sm:w-auto" 
                                 wire:click="sendOTP()" type="button"> <span class="font-medium"> Send OTP </span>
                                    <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5 ml-3"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                    </svg>
                            </button>

                            {{-- <script>
                                function sendOTP() {
                                    const number = $("#phone_number").val();
                                    firebase.auth().signInWithPhoneNumber(number, window.recaptchaVerifier).then(function (confirmationResult) {
                                        window.confirmationResult = confirmationResult;
                                        coderesult = confirmationResult;
                                        console.log(coderesult);
                                        $("#successAuth").text("Message sent");
                                        $("#successAuth").show();
                                    }).catch(function (error) {
                                        $("#error").text(error.message);
                                        $("#error").show();
                                    });
                                }
                                let btn = document.getElementById("btn");
                                btn.addEventListener('click', event => {
                                  sendOTP();
                                });
                            </script> --}}
                        </div>
                    </form>
                </div>   
            </div>

        </div>
    @endif
    {{-- EndStep-2 --}}

    @if ($currentStep == 3)
        <div class="row setup-content {{ $currentStep != 3 ? 'displayNone' : '' }}" id="step-3">
            <div class="max-w-3xl px-6 py-16 mx-auto text-center">
                <h1 class="text-3xl font-semibold text-gray-800 dark:text-gray-100">Enter Code</h1>
                <p class="max-w-md mx-auto mt-5 text-gray-500 dark:text-gray-400">We've sent a sms with an activation code to your phone {{ $phone_number }}</p>

                <div class="flex flex-col mt-8 space-y-3 sm:space-y-0 sm:flex-row sm:justify-center sm:-mx-2">       
                    <div class="alert alert-success" id="successOtpAuth" style="display: none;"></div>
                    <form>
                        <input type="text" wire:model="verification" id="verification" class="w-full p-3 mt-0 text-sm border-gray-200 rounded-lg focus:ring-purple-600" placeholder="Verify Code"/>
                            @error('verification')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    
                        {{-- Button --}}
                        <div class="flex flex-wrap mt-4 gap-4">
                            <button class="inline-flex items-center justify-center w-full px-5 py-3 text-purple-700 hover:text-white border border-purple-700 hover:bg-purple-700 rounded-lg sm:w-auto" 
                                type="button" wire:click="back(1)"> <span class="font-medium"> Back </span>
                            </button>

                            <button class="inline-flex items-center justify-center w-full px-5 py-3 text-white bg-purple-600 hover:bg-purple-500 rounded-lg sm:w-auto" 
                                wire:click="verify()" type="button"> <span class="font-medium">Verify Code</span>
                                    <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5 ml-3"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                    </svg>
                            </button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    @endif
</div>
