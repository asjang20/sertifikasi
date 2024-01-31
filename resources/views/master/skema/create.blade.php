<x-app-layout>
    

<form action="{{ route('skema.store') }}" method="POST" class="max-w-sm mx-auto">
    @csrf
    @method('POST')
    <div class="mb-5">
      <label for="kd_skema" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Kode Skema</label>
      <input value="{{$id}}" type="text" id="kd_skema" name="kd_skema" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
    </div>
    <div class="mb-5">
      <label for="nm_skema" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Skema</label>
      <input type="text" id="nm_skema" name="nm_skema" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
    </div>
    <div class="mb-5">
      <label for="jenis" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis</label>
      <input type="text" id="jenis" name="jenis" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
    </div>
    <div class="mb-5">
      <label for="jml_unit" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah Unit</label>
      <input type="number" id="jml_unit" name="jml_unit" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
    </div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
  </form>
  
</x-app-layout>