@extends('otp.master')

@section('container')
        <div class="max-w-3xl px-6 py-16 mx-auto text-center">
            
            <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-100">Server Room DSF</h1>
            <p class="max-w-md mx-auto mt-5 text-gray-500 dark:text-gray-400">Masukan Nomer Telepon yang Telah Terdaftar!</p>
        
            <div class="flex flex-col mt-8 space-y-3 sm:space-y-0 sm:flex-row sm:justify-center sm:-mx-2">
            <form action="{{ route ('send') }}" method="POST">
                @csrf
                @method('POST')

                <x-input wire:model="phone_number" class="w-full p-3 mt-0 text-sm border-gray-200 rounded-lg focus:ring-purple-600" placeholder="Nomer Telepon" id="phone_number" corner-hint="Ex: +62" required/>
                <button type="submit" class="inline-flex items-center px-5 py-3 mt-8 font-medium text-white bg-purple-600 rounded-lg hover:bg-purple-500">
                    Next
                    <svg xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" class="flex-shrink-0 w-4 h-4 ml-3">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </button>
            </form>
            </div>
            </div>
        </div>
@endsection