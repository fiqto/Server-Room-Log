<x-app-layout>
          <div class="w-full px-6 py-6 mx-auto">
            <div class="bg-white overflow-hidden dark:shadow-dark-xl shadow-xl rounded-2xl">
                <div class="p-4 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                  <h1 class="text-2xl pt-6 px-6 text-gray-900">Daftar Anggota DipoStar</h1>

                  <div class="py-4 px-6">
                    <a href="{{ route('members.create') }}" type="button" class="p-2.5 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700">
                    Tambah Anggota
                    </a>
                  </div>

                  <p class="pt-4 px-6 text-left text-gray-900 text-sm">Filter</p>

                  {{-- Search --}}
                  <form class="form" method="get" action="{{ route('searchMember') }}">
                    <div class="flex px-5 pt-2 pb-4">
                        <div class="relative w-full">
                            <input type="text" name="search" id="search" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border-gray-300 dark:placeholder-gray-400" placeholder="Cari Nama, No. Telepon ...">
                            <button type="submit" class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-blue-700 rounded-r-lg border border-blue-700">
                                <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                                <span class="sr-only">Search</span>
                            </button>
                        </div>
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
                                  Nama Lengkap
                                  <span class="pl-4 flex">
                                    <form class="form" method="get" action="{{ route('ascMember') }}">
                                    <button type="submit" value="member_name" id="col" name="col" class="ri-arrow-up-s-line"></button>
                                    </form>
                                    <form class="form" method="get" action="{{ route('descMember') }}">
                                    <button type="submit" value="member_name" id="col" name="col" class="ri-arrow-down-s-line"></button>
                                    </form>
                                  </span>
                                </div>
                              </th>
                              <th class="p-4 text-left text-gray-900 whitespace-nowrap">
                                <div class="flex items-center">
                                  Nomor Telepon
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
                            @foreach($members as $member)
                            <tr>
                              <td class="p-4 text-gray-900 whitespace-nowrap text-left">
                                {{ $loop->iteration }}
                              </td>
                              <td class="p-4 text-gray-900 whitespace-nowrap">
                                {{ $member->member_name }}
                              </td>
                              <td class="p-4 text-gray-900 whitespace-nowrap">
                                {{ $member->phone_number }}
                              </td>
                              <td class="p-4 text-gray-700 whitespace-nowrap text-sm">                                
                                <div class="inline-flex rounded-md" role="group">
                                  <form action="{{ route('members.destroy', $member->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="text-red-700 bg-red-100 hover:bg-red-200 focus:outline-none focus:ring-4 focus:ring-red-400 font-medium rounded-full text-sm px-2.5 py-2.5 text-center mr-1 my-2">
                                      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                    </button> 
                                  </form>
                                  <a href="{{ route('members.edit', $member->id) }}" type="button" class="text-blue-700 bg-blue-100 hover:bg-blue-200 focus:outline-none focus:ring-4 focus:ring-blue-400 font-medium rounded-full text-sm px-2.5 py-2.5 text-center mr-1 my-2">
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
                    {{-- <div class="px-6 pb-6">
                      {{ $submissions->links() }}
                    </div> --}}
                </div>
            </div>
          </div>
        
</x-app-layout>