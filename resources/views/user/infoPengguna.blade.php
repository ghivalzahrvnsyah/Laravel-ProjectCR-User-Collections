<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Info Pengguna') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Detail Informasi Pengguna
                </div>

            </div>
            <table class="table table-bordered">
                <tbody>
                    <tr class="bg-blue-200">
                        <td>ID</td>
                        <td>{{$user->id}}</td>

                    </tr>
                    <tr>
                        <td>Username</td>
                        <td>{{$user->username}}</td>
                    <tr>
                        <td> Full Name</td>
                        <td>{{$user->fullname}}</td>

                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{$user->email}}</td>
                    </tr>
                    <tr>
                        <td>Phone Number</td>
                        <td>{{$user->phonenumber}}</td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>{{$user->address}}</td>
                    </tr>
                    <tr>
                        <td>Birthdate</td>
                        <td>{{$user->birthdate}}</td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>
                            @if($user->agama == 1)
                            Islam
                            @elseif($user->agama == 2)
                            Kristen
                            @elseif($user->agama == 3)
                            Kristen Katholik
                            @elseif($user->agama == 4)
                            Hindu
                            @elseif($user->agama == 5)
                            Buddha
                            @elseif($user->agama == 6)
                            Konghucu
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>
                            @if($user->jeniskelamin == 1)
                            Laki-laki
                            @elseif($user->jeniskelamin == 2)
                            Perempuan
                            @endif

                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="flex space-x-2 justify-right">
                <a href="#" type="button" class="inline-block px-6 py-2.5 bg-blue-400 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Ubah Data</a>
                <a href="{{ route('user', $user->id)}}" type="button" class="inline-block px-6 py-2.5 bg-blue-800 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-black-500 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Kembali </a>
            </div>
        </div>

    </div>
</x-app-layout>