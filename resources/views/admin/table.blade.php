<x-app-layout>
          <div class="w-full px-6 py-6 mx-auto">
            <div class="bg-white overflow-hidden dark:shadow-dark-xl shadow-xl rounded-2xl">
                <div class="p-4 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                  <h1 class="text-2xl pt-6 px-6 text-gray-900">Permintaan Akses Server</h1>
                  <p class="py-4 px-6 text-left text-gray-900 text-sm">Filter</p>
                  <div class="pb-4 px-6 text-left text-gray-900 text-sm">
                      <a href="{{ route('submissions.index') }}" class="{{ Route::is('submissions.index', 'search', 'asc', 'desc', 'date') ? 'font-semibold whitespace-nowrap bg-blue-100 text-blue-700 px-3 py-1.5 rounded-full mr-2' : 'mr-2 whitespace-nowrap'}}">Semua</a>
                      <a href="{{ route('filterNew') }}" class="{{ Route::is('filterNew') ? 'font-semibold whitespace-nowrap bg-yellow-100 text-yellow-700 px-3 py-1.5 rounded-full mr-2' : 'mr-2 whitespace-nowrap'}}">Baru</a>
                      <a href="{{ route('filterAccept') }}" class="{{ Route::is('filterAccept') ? 'font-semibold whitespace-nowrap bg-green-100 text-green-700 px-3 py-1.5 rounded-full mr-2' : 'mr-2 whitespace-nowrap'}}">Disetujui</a>
                      <a href="{{ route('filterReject') }}" class="{{ Route::is('filterReject') ? 'font-semibold whitespace-nowrap bg-red-100 text-red-700 px-3 py-1.5 rounded-full mr-2' : 'mr-2 whitespace-nowrap'}}">Ditolak</a>
                  </div>

                  {{-- Date Time Filter --}}
                  <form class="form" method="get" action="{{ route('search') }}">
                    <div class="flex px-5 pb-3">
                      <div class="relative w-full pr-3">
                        <input type="text" name="search" id="search" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border-gray-300 dark:placeholder-gray-400" placeholder="Cari ...">
                      </div>
                      <div class="relative w-full pr-3">
                        <select id="category" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                          <option selected value="name">Pilih Kategori</option>
                          <option value="name">Nama</option>
                          <option value="email">Email</option>
                          <option value="destination_server">Server</option>
                          <option value="status">Status</option>
                        </select>
                      </div>
                     
                      <div date-rangepicker="" class="flex w-full items-center pr-3">
                        <div class="relative pr-3">
                          <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                              <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                          </div>
                          <input name="start_access" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 datepicker-input" placeholder="Pilih Tgl Awal" required>
                        </div>
                        <div class="relative">
                          <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                              <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                          </div>
                          <input name="end_access" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 datepicker-input" placeholder="Pilih Tgl Akhir" required>
                        </div>
                      </div>

                      <button type="submit" class="p-2.5 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700">
                        Filter
                        <span class="sr-only">Search</span>
                      </button>
                    </div>
                  </form>
                </div>
                
                <div class="flex-auto px-6 pt-0 pb-6">
                    <div class="overflow-x-auto">
                        <table class="min-w-full text-sm divide-y divide-gray-200">
                          <thead>
                            <tr>
                              <th class="p-4 text-gray-900 whitespace-nowrap text-left">
                                No.
                              </th>
                              <th class="p-4 text-left text-gray-900 whitespace-nowrap">
                                <div class="flex items-center">
                                  Nama Pengunjung
                                  <span class="pl-4 flex">
                                    <form class="form" method="get" action="{{ route('asc') }}">
                                    <button type="submit" value="name" id="col" name="col" class="ri-arrow-up-s-line"></button>
                                    </form>
                                    <form class="form" method="get" action="{{ route('desc') }}">
                                    <button type="submit" value="name" id="col" name="col" class="ri-arrow-down-s-line"></button>
                                    </form>
                                  </span>
                                </div>
                              </th>
                              <th class="p-4 text-left text-gray-900 whitespace-nowrap">
                                <div class="flex items-center">
                                  Email Pengunjung
                                  <span class="pl-4 flex">
                                    <form class="form" method="get" action="{{ route('asc') }}">
                                    <button type="submit" value="email" id="col" name="col" class="ri-arrow-up-s-line"></button>
                                    </form>
                                    <form class="form" method="get" action="{{ route('desc') }}">
                                    <button type="submit" value="email" id="col" name="col" class="ri-arrow-down-s-line"></button>
                                    </form>
                                  </span>
                                </div>
                              </th>
                              <th class="p-4 text-left text-gray-900 whitespace-nowrap">
                                <div class="flex items-center">
                                  Server Tujuan
                                  <span class="pl-4 flex">
                                    <form class="form" method="get" action="{{ route('asc') }}">
                                    <button type="submit" value="destination_server" id="col" name="col" class="ri-arrow-up-s-line"></button>
                                    </form>
                                    <form class="form" method="get" action="{{ route('desc') }}">
                                    <button type="submit" value="destination_Server" id="col" name="col" class="ri-arrow-down-s-line"></button>
                                    </form>
                                  </span>
                                  </svg>
                                </div>
                              </th>
                              <th class="p-4 text-left text-gray-900 whitespace-nowrap">
                                <div class="flex items-center">
                                  Tanggal Waktu Mulai Akses
                                  <span class="pl-4 flex">
                                    <form class="form" method="get" action="{{ route('asc') }}">
                                    <button type="submit" value="entry_date" id="col" name="col" class="ri-arrow-up-s-line"></button>
                                    </form>
                                    <form class="form" method="get" action="{{ route('desc') }}">
                                    <button type="submit" value="entry_date" id="col" name="col" class="ri-arrow-down-s-line"></button>
                                    </form>
                                  </span>
                                </div>
                              </th>
                              <th class="p-4 text-left text-gray-900 whitespace-nowrap">
                                <div class="flex items-center">
                                  Tanggal Waktu Akhir Akses
                                  <span class="pl-4 flex">
                                    <form class="form" method="get" action="{{ route('asc') }}">
                                    <button type="submit" value="date_time_out" id="col" name="col" class="ri-arrow-up-s-line"></button>
                                    </form>
                                    <form class="form" method="get" action="{{ route('desc') }}">
                                    <button type="submit" value="date_time_out" id="col" name="col" class="ri-arrow-down-s-line"></button>
                                    </form>
                                  </span>
                                </div>
                              </th>
                              <th class="p-4 text-left text-gray-900 whitespace-nowrap">
                                <div class="flex items-center">
                                  Status
                                  <span class="pl-4 flex">
                                    <form class="form" method="get" action="{{ route('asc') }}">
                                    <button type="submit" value="status" id="col" name="col" class="ri-arrow-up-s-line"></button>
                                    </form>
                                    <form class="form" method="get" action="{{ route('desc') }}">
                                    <button type="submit" value="status" id="col" name="col" class="ri-arrow-down-s-line"></button>
                                    </form>
                                  </span>
                                </div>
                              </th>
                              <th class="p-4 text-left text-gray-900 whitespace-nowrap">
                                <div class="flex items-center">
                                  Aksi
                                </div>
                              </th>
                              
                            </tr>
                          </thead>
                      
                          <tbody class="divide-y divide-gray-100">
                            @foreach($submissions as $submission)
                            <tr>
                              <td class="p-4 text-gray-900 whitespace-nowrap text-left">
                                {{ $loop->iteration }}
                              </td>
                              <td class="p-4 text-gray-900 whitespace-nowrap">
                                {{ $submission->name }}
                              </td>
                              <td class="p-4 text-gray-900 whitespace-nowrap">
                                {{ $submission->email }}
                              </td>
                              <td class="p-4 text-gray-900 whitespace-nowrap">
                                {{ $submission->destination_server }}
                              </td>
                              <td class="p-4 text-gray-900 whitespace-nowrap">
                                {{ $submission->entry_date }}
                              </td>
                              <td class="p-4 text-gray-900 whitespace-nowrap">
                                {{ $submission->date_time_out }}
                              </td>
                              <td class="p-4 text-gray-900 whitespace-nowrap">
                                @if ( $submission->status == "Baru" )
                                  <strong
                                  class="bg-yellow-100 text-yellow-700 px-3 py-1.5 rounded-full text-xs"
                                  >
                                  Baru
                                  </strong>
                                @elseif ( $submission->status == "Setuju" )
                                  <strong
                                  class="bg-green-100 text-green-700 px-3 py-1.5 rounded-full text-xs"
                                  >
                                  Setuju
                                  </strong>
                                @else
                                  <strong
                                  class="bg-red-100 text-red-700 px-3 py-1.5 rounded-full text-xs"
                                  >
                                  Tolak
                                  </strong>
                                @endif
                              </td>
                              <td class="p-4 text-gray-700 whitespace-nowrap text-sm">                                
                                <div class="inline-flex rounded-md" role="group">
                                  <form action="{{ route('submissions.update', $submission->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" id="status" name="status" required="required" value="Setuju" class="text-green-700 bg-green-100 hover:bg-green-200 focus:outline-none focus:ring-4 focus:ring-green-400 font-medium rounded-full text-sm px-2.5 py-2.5 text-center mr-1 my-2">
                                      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    </button>
                                    <button type="submit" id="status" name="status" required="required" value="Tolak" class="text-red-700 bg-red-100 hover:bg-red-200 focus:outline-none focus:ring-4 focus:ring-red-400 font-medium rounded-full text-sm px-2.5 py-2.5 text-center mr-1 my-2">
                                      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                    </button>
                                  </form>
                                  <a href="{{ route('submissions.edit', $submission->id) }}" type="button" class="text-blue-700 bg-blue-100 hover:bg-blue-200 focus:outline-none focus:ring-4 focus:ring-blue-400 font-medium rounded-full text-sm px-2.5 py-2.5 text-center mr-1 my-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path></svg>
                                  </a>
                                </div>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>          
                    </div>
                    <div class="px-6 pb-6">
                      {{ $submissions->links() }}
                    </div>
                </div>
            </div>
          </div>
        
</x-app-layout>