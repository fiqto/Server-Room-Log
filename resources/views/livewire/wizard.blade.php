<div>
    @if(!empty($successMessage))
    <div class="alert alert-success">
       {{ $successMessage }}
    </div>
    @endif

    {{-- Step-1 --}}
    @if ($currentStep == 1)
        <div class="row setup-content {{ $currentStep != 1 ? 'displayNone' : '' }}" id="step-1">

        {{-- Step --}}
        <div>
          <h2 class="sr-only">Steps</h2>
          <div
            class="after:w-full after:h-1 after:mt-4 after:block after:rounded-lg after:bg-gray-200">
            <ol class="text-sm font-medium text-gray-500 grid grid-cols-3">
              <li class="relative text-left text-purple-600">
                <span
                  class="bg-purple-600 left-0 -bottom-[1.75rem] absolute rounded-full text-white">
                  <svg
                    class="w-5 h-5"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                    fill="currentColor">
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"/>
                  </svg>
                </span>
        
                <span class="hidden sm:block"> Server Room </span>
        
                <svg
                  class="w-6 h-6 ml-0 sm:hidden"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                  stroke-width="2">
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"/>
                </svg>
              </li>
        
              <li class="relative text-center">
                <span class="hidden sm:block"> Data Diri </span>
        
                <svg
                  class="w-6 h-6 mx-auto sm:hidden"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                  stroke-width="2">
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
              </li>
        
              <li class="relative text-right">
                <span class="hidden sm:block"> Success </span>
        
                <svg
                  class="w-6 h-6 ml-auto sm:hidden"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                  stroke-width="2">
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/>
                </svg>
              </li>
            </ol>
          </div>
        </div>

            <div class="max-w-3xl px-6 py-16 mx-auto text-center">
                <h1 class="text-3xl font-semibold text-gray-800 dark:text-gray-100">Server Room DSF</h1>
                <p class="max-w-md mx-auto mt-5 text-gray-500 dark:text-gray-400">Silahkan pilih server room yang ingin diakses.</p>
            
              <div class="flex flex-col mt-8 space-y-3 sm:space-y-0 sm:flex-row sm:justify-center sm:-mx-2">
                <div class="form-group">
                  <x-select class="select w-full text-sm border-gray-200 rounded-lg focus:ring-1 focus:ring-purple-600"
                    placeholder="Pilih Salah Satu Server"
                    :options="['DSF Jakarta', 'DSF Yogyakarta', 'DSF Surabaya', 'DSF Bali']"
                    wire:model.defer="destination_server" required/>            
            
                    <button wire:click="firstStepSubmit" type="button" class="inline-flex items-center px-5 py-3 mt-8 font-medium text-white bg-purple-600 rounded-lg hover:bg-purple-500">
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
            
            {{-- Step --}}
            <div>
                <h2 class="sr-only">Steps</h2>
              
                <div
                  class="after:w-full after:h-1 after:mt-4 after:block after:rounded-lg after:bg-gray-200">
                  <ol class="text-sm font-medium text-gray-500 grid grid-cols-3">

                    {{-- Step-1 --}}
                    <li class="relative text-left text-purple-600">
                      <span
                        class="bg-purple-600 left-0 -bottom-[1.75rem] absolute rounded-full text-white">
                        <svg
                          class="w-5 h-5"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 20 20"
                          fill="currentColor">
                          <path
                            fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"/>
                        </svg>
                      </span>
              
                      <span class="hidden sm:block"> Server Room </span>
              
                      <svg
                        class="w-6 h-6 ml-0 sm:hidden"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2">
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"/>
                      </svg>
                    </li>
              
                    {{-- Step-2 --}}
                    <li class="relative text-center text-purple-600">
                      <span
                        class="bg-purple-600 left-1/2 -translate-x-1/2 -bottom-[1.75rem] absolute rounded-full text-white">
                        <svg
                          class="w-5 h-5"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 20 20"
                          fill="currentColor">
                          <path
                            fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"/>
                        </svg>
                      </span>
              
                      <span class="hidden sm:block"> Data Diri </span>
              
                      <svg
                        class="w-6 h-6 mx-auto sm:hidden"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2">
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                      </svg>
                    </li>
              
                    {{-- Step-3 --}}
                    <li class="relative text-right">
                      <span class="hidden sm:block"> Success </span>
              
                      <svg
                        class="w-6 h-6 ml-auto sm:hidden"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2">
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/>
                      </svg>
                    </li>

                  </ol>
                </div>
            </div>
            {{-- EndStep --}}
                        
            <div class="form-group">
                @csrf
                    <div class="mx-auto col-span-6 sm:col-span-6 mt-8 space-y-3">
                      <x-errors title="Terdapat {errors} error, harap dicek ulang." />
                        <label class="flex-grow block font-medium text-sm text-gray-700 mt-5">Data Diri</label>
                        
                        <x-input id="name" type="text" wire:model="name" class="w-full p-3 mt-0 text-sm border-gray-200 rounded-lg focus:ring-purple-600" right-icon="user" placeholder="Nama Lengkap" required/>

                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                          <x-input id="email" name="email" type="email" wire:model="email" class="w-full p-3 text-sm border-gray-200 rounded-lg focus:ring-purple-600" value="{{ old('email') }}" placeholder="Email" required/>

                          <x-input id="origin" name="origin" type="text" wire:model="origin" class="w-full p-3 text-sm border-gray-200 rounded-lg focus:ring-purple-600" value="{{ old('origin') }}" placeholder="Asal Pengunjung" required/>
                        </div>
                    </div>

                  <div>
                    <label for="datetime" class="flex-grow  block font-medium text-sm text-gray-700 mt-5 mb-2">Tgl dan Waktu Akses Room Server</label>
                    <x-datetime-picker
                    without-timezone
                    wire:model="entry_date"
                    class="p-3"
                    id="entry_date" 
                    name="entry_date"
                    placeholder="Tgl & Waktu Mulai Akses"
                    value="{{ old('entry_date') }}"
                    display-format="DD-MM-YYYY HH:mm"
                    required/>
                    
                    <x-datetime-picker
                    without-timezone
                    wire:model="date_time_out"
                    class="p-3 flatpickr container mx-auto col-span-6 sm:col-span-6 mt-3"
                    id="date_time_out" 
                    name="date_time_out"
                    placeholder="Tgl & Waktu Selesai Akses"
                    value="{{ old('date_time_out') }}"
                    display-format="DD-MM-YYYY HH:mm"
                    required/>  
                  </div>

                <div class="w-full">
                    <div class="mb-10">
                        <label for="" class="flex-grow  block font-medium text-sm text-gray-700 mt-5 mb-2">
                            Alasan Akses Ruang Server?
                        </label>

                        <x-textarea name="reason" rows="5" wire:model="reason" type="text" placeholder="Tuliskan alasan disini..." 
                        class="w-full p-3 border-gray-200 focus:ring-purple-600 rounded-lg text-sm
                        text-body-color placeholder-body-color outline-none focus:border-primary active:border-primary transition 
                        disabled:bg-[#F5F7FD] disabled:cursor-default" value="{{ old('reason') }}" required/>
                    </div>
                </div>
            
                {{-- Button --}}
                <div class="flex flex-wrap mt-4 gap-4">
                    <button class="inline-flex items-center justify-center w-full px-5 py-3 text-purple-700 hover:text-white border border-purple-700 hover:bg-purple-700 rounded-lg sm:w-auto" 
                        type="button" wire:click="back(1)"> <span class="font-medium"> Back </span>
                    </button>

                    <button class="inline-flex items-center justify-center w-full px-5 py-3 text-white bg-purple-600 hover:bg-purple-500 rounded-lg sm:w-auto" 
                        wire:click="submitForm" type="button"> <span class="font-medium"> Kirim Permintaan </span>
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

            </div>
                    
        </div>
    @endif
    {{-- EndStep-2 --}}
    
    {{-- Step-3 --}}
    @if ($currentStep == 3)
        <div class="row setup-content {{ $currentStep != 3 ? 'displayNone' : '' }}" id="step-3">
        
          {{-- Step --}}
            <div
            class="after:w-full after:h-1 after:mt-4 after:block after:rounded-lg after:bg-gray-200">
            <ol class="text-sm font-medium text-gray-500 grid grid-cols-3">
                {{-- Step-1   --}}
                <li class="relative text-left text-purple-600">
                <span
                    class="bg-purple-600 left-0 -bottom-[1.75rem] absolute rounded-full text-white">
                    <svg
                    class="w-5 h-5"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                    fill="currentColor">
                    <path
                        fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd"/>
                    </svg>
                </span>
        
                <span class="hidden sm:block"> Server Room </span>
        
                <svg
                    class="w-6 h-6 ml-0 sm:hidden"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2">
                    <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"/>
                </svg>
                </li>
                
                {{-- Step-2   --}}
                <li class="relative text-center text-purple-600">
                <span
                    class="bg-purple-600 left-1/2 -translate-x-1/2 -bottom-[1.75rem] absolute rounded-full text-white">
                    <svg
                    class="w-5 h-5"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                    fill="currentColor">
                    <path
                        fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd"/>
                    </svg>
                </span>
                <span class="hidden sm:block"> Data Diri </span>
        
                <svg
                    class="w-6 h-6 mx-auto sm:hidden"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2">
                    <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                    <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
                </li>
        
                {{-- Step-3 --}}
                <li class="relative text-right text-purple-600">
                <span
                    class="bg-purple-600 right-0 -bottom-[1.75rem] absolute rounded-full text-white">
                    <svg
                    class="w-5 h-5"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                    fill="currentColor">
                    <path
                        fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd"/>
                    </svg>
                </span>
                <span class="hidden sm:block"> Success </span>
        
                <svg
                    class="w-6 h-6 ml-auto sm:hidden"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2">
                    <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/>
                </svg>
                </li>
            </ol>
            </div>
          {{-- End Step --}}
                    
                    <div class="max-w-3xl px-6 py-16 mx-auto text-center">
                        <h2 class="text-3xl font-semibold text-gray-800 dark:text-gray-100">Cek Email Kamu :)</h2>
                        <p class="max-w-md mx-auto mt-5 text-gray-500 dark:text-gray-400">Terimakasih telah mengajukan permohonan. Tunggu kami akan mengirimkan pemberitahuan melalui email {{ $email }}<span class="font-medium text-purple-500">mail@domain.com</span>.</p>
                        <a href="/" class="mt-5 inline-block rounded-lg bg-purple-600 px-5 py-3 font-medium text-white shadow-md shadow-indigo-500/20 hover:bg-purple-700">Back Homepage →</a>
                    </div>

        </div>
    @endif
    {{-- EndStep-3 --}}

</div>