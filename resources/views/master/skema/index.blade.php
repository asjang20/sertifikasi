<x-app-layout>
    
<div class="space-y-3">
    <div class="px-5 py-2 rounded-lg w-min whitespace-nowrap bg-green-500">
        <a  href="{{ route('skema.create')}}"> Tambah Skema</a>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="datatable w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                     KODE SKEMA
                    </th>
                    <th scope="col" class="px-6 py-3">
                        NAMA SKEMA
                    </th>
                    <th scope="col" class="px-6 py-3">
                        JENIS
                    </th>
                    <th scope="col" class="px-6 py-3">
                        JUMLAH UNIT
                    </th>
                    <th scope="col" class="px-6 py-3">
                        ACTION
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($skema as $item)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$item->kd_skema}}
                    </th>
                    <td class="px-6 py-4">
                        {{$item->nm_skema}}
                    </td>
                    <td class="px-6 py-4">
                        {{$item->jenis}}
                    </td>
                    <td class="px-6 py-4">
                        {{$item->jml_unit}}
                    </td>
                    <td class="px-6 py-4 flex gap-3">
                        <a href="{{ route('skema.edit', $item->kd_skema) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        <form action="{{ route('skema.destroy', $item->kd_skema) }}" method="POST">
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