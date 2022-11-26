<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Info koleksi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Detail Informasi Koleksi
                </div>
            </div>
            <table class="table table-bordered">
                <tbody>
                    <tr class="bg-blue-200">
                        <td>ID</td>
                        <td>{{$collection->id}}</td>

                    </tr>
                    <tr>
                        <td>Nama Koleksi</td>
                        <td>{{$collection->namaKoleksi}}</td>
                    <tr>
                    <tr>
                        <td>Jumlah Koleksi</td>
                        <td>{{$collection->jumlahKoleksi}}</td>
                    <tr>
                        <td>Jenis Koleksi</td>
                        <td>
                            @if($collection->jenisKoleksi == 1)
                            Buku
                            @elseif($collection->jenisKoleksi == 2)
                            Majalah
                            @elseif($collection->jenisKoleksi == 3)
                            Cakram Digital
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="flex space-x-2 justify-right">
            <a href="{{ route('koleksiEdit', $collection->id)}}" type="button" class="inline-block px-6 py-2.5 bg-blue-400 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Ubah Data</a>
                <a href="{{ route('koleksi', $collection->id)}}" type="button" class="inline-block px-6 py-2.5 bg-blue-800 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-black-500 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Kembali </a>
            </div>
        </div>
    </div>
</x-app-layout>