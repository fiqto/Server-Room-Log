<x-app-layout>
    <div class="w-full px-6 py-6 mx-auto">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <div class="p-4 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
            <h1 class="text-2xl px-6 pt-6 text-gray-900">Tambah Anggota</h1>
            <form action="{{ route('members.store') }}" method="POST">
                @csrf
                @method('POST')
                <div class="mb-6 px-6 pt-6">
                    <label for="member_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama Lengkap</label>
                    <input type="text" id="member_name" name="member_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama Lengkap" required>
                </div>
                <div class="mb-6 px-6">
                    <label for="phone_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">No. Telepon</label>
                    <input type="tel" id="phone_number" name="phone_number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nomer Telepon (+62812-3456-7890)" required>
                </div>
                
                <div class="text-right p-8">
                    <button type="submit" class="text-blue-600 bg-blue-100 hover:bg-blue-200 focus:outline-none focus:ring-4 focus:ring-blue-400 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 ">Simpan</button>
                </div>
            </form>
          </div>
      </div>
    </div>
</x-app-layout>