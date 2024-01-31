<x-app-layout>
    <form action="{{ route('peserta.update',$peserta->id_peserta) }}" method="POST" class="max-w-sm mx-auto">
        @csrf
        @method('PUT')
        <div class="mb-5">
          <label for="nm_peserta" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Nama Peserta</label>
          <input value="{{$peserta->nm_peserta}}" type="text" id="nm_peserta" name="nm_peserta" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
        </div>
        <div class="mb-5">
          <label for="kd_skema" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Nama Peserta</label>
          <select id="kd_skema" name="kd_skema" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        <option value="" disabled selected> Pilih Kode Skema</option>
        @foreach ($skema as $item)
            <option {{$peserta->kd_skema == $item->kd_skema ? 'selected':''}} value="{{$item->kd_skema}}">{{$item->kd_skema}}</option>
        @endforeach  
        </select>
        </div>
        <div class="mb-5">
          <label for="jekel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Nama Peserta</label>
          <select id="jekel" name="jekel" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        <option value="" disabled selected> Pilih Jenis Kelamin</option>
            <option {{$peserta->jekel == 'Laki Laki' ? 'selected' : ''}} value="Laki Laki">Laki Laki</option>
            <option {{$peserta->jekel == 'Perempuan' ? 'selected' : ''}} value="Perempuan">Perempuan</option>
        </select>
        </div>

        <div class="mb-5">
          <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
          <input value="{{$peserta->alamat}}" type="text" id="alamat" name="alamat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
        </div>
        <div class="mb-5">
          <label for="no_hp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Hp</label>
          <input value="{{$peserta->no_hp}}" type="number" id="no_hp" name="no_hp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
      </form>
      
    </x-app-layout>