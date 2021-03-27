<div class="py-3 flex items-end">
    <button class=" bg-blue-500 hover:bg-blue-700 py-2 px-2 text-white rounded "> Tambah Data</button>
</div>

<div class="py-3">
    {{-- The whole world belongs to you --}}

    <table class="min-w-full divide-gray-50">
        <thead class="bg-blue-200">
            <tr class="border">
                <th class="border px-2 py-2">Id Barang</th>
                <th class="border px-2 py-2">Nama Barang</th>
                <th class="border px-2 py-2">Merk Barang</th>
                <th class="border px-2 py-2">Harga Barang</th>
                <th class="border px-2 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barang as $item)
            <tr class="px-2 py-2">
                <td class="border px-2 py-2">{{$item->id}}</td>
                <td class="border px-2 py-2">{{$item->nama_barang}}</td>
                <td class="border px-2 py-2">{{$item->merk_barang}}</td>
                <td class="border px-2 py-2">{{$item->harga_barang}}</td>
                <td class="border px-2 py-2">asdf</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$barang->links()}}
</div>