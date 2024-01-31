<x-app-layout>
    
    <div class="space-y-3">
        <div class="px-5 py-2 rounded-lg w-min whitespace-nowrap bg-green-500">
            <a  href="{{ route('peserta.create')}}"> Tambah Peserta</a>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="datatable w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                         Id Peserta
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Peserta
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kode Skema
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jenis Kelamin
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Alamat
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nomor Hp
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nik
                        </th>
                        <th scope="col" class="px-6 py-3">
                            ACTION
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($peserta as $item)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$item->id_peserta}}
                        </th>
                        <td class="px-6 py-4">
                            {{$item->nm_peserta}}
                        </td>
                        <td class="px-6 py-4">
                            {{$item->kd_skema}}
                        </td>
                        <td class="px-6 py-4">
                            {{$item->jekel}}
                        </td>
                        <td class="px-6 py-4">
                            {{$item->alamat}}
                        </td>
                        <td class="px-6 py-4">
                            {{$item->no_hp}}
                        </td>
                        <td class="px-6 py-4">
                            {{$item->nik}}
                        </td>
                        <td class="px-6 py-4 flex gap-3">
                            <a href="{{ route('peserta.edit', $item->id_peserta) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            <form action="{{ route('peserta.destroy', $item->id_peserta) }}" method="POST">
                            @csrf
                        @method('DELETE')
                    <button>Hapus</button></form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
    
    </x-app-layout>
    <script>
        $('.datatable').DataTable({
    info:false,
    paging:false,
        });
    </script>