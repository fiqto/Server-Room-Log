<x-app-layout>
    <div class="w-full px-6 py-6 mx-auto">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <div class="p-4 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
            <h1 class="text-2xl px-6 pt-6 text-gray-900">Detail Permintaan Akses</h1>
            <form action="{{ route('submissions.update', $submission->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-1 mt-4 px-6 sm:grid-cols-2 text-sm">
                    <div>
                        <div class="py-2">
                            <p class="font-bold text-gray-900">Nama</p>
                            <p class="text-gray-700">
                                {{ $submission->name }}
                            </p>
                        </div>
                        <div class="py-2">
                            <p class="font-bold text-gray-900">Email</p>
                            <p class="text-gray-700">
                                {{ $submission->email }}
                            </p>
                        </div>
                        <div class="py-2">
                            <p class="font-bold text-gray-900">Asal Pengunjung</p>
                            <p class="text-gray-700">
                                {{ $submission->origin }}
                            </p>
                        </div>
                        <div class="py-2">
                            <p class="font-bold text-gray-900">Server Tujuan</p>
                            <p class="text-gray-700">
                                {{ $submission->destination_server }}
                            </p>
                        </div>
                    </div>
                    <div>
                        <div class="py-2">
                            <p class="font-bold text-gray-900">Tanggal Jam Mulai Akses</p>
                            <p class="text-gray-700">
                                {{ $submission->entry_date }}
                            </p>
                        </div>
                        <div class="py-2">
                            <p class="font-bold text-gray-900">Tanggal Jam Akhir Akses</p>
                            <p class="text-gray-700">
                                {{ $submission->date_time_out }}
                            </p>
                        </div>
                        <div class="py-2">
                            <p class="font-bold text-gray-900">Tujuan</p>
                            <p class="text-gray-700">
                                {{ $submission->reason }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="text-right p-8">
                    <button type="submit" id="status" name="status" required="required" value="Setuju" class="text-green-600 bg-green-100 hover:bg-green-200 focus:outline-none focus:ring-4 focus:ring-green-400 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 ">Setuju</button>
                    <button type="submit" id="status" name="status" required="required" value="Tolak" class="text-red-600 bg-red-100 hover:bg-red-200 focus:outline-none focus:ring-4 focus:ring-red-400 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 ">Tolak</button>
                </div>
            </form>
          </div>
      </div>
    </div>

  
</x-app-layout>