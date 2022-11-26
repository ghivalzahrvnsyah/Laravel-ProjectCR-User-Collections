<x-app-layout>
   <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
         {{ __('Edit Koleksi') }}
      </h2>
   </x-slot>

   <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
         <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
               <form method="POST" action="{{ url('koleksiUpdate', $collection['id']) }}">
                  @csrf
                  @include('sweetalert::alert')
                  <!-- Username -->
                  <div>
                     <x-input-label for="namaKoleksi" :value="__('Nama Koleksi')" />

                     <x-text-input id="namaKoleksi" class="block mt-1 w-full" type="text" name="namaKoleksi" :value="old('namaKoleksi')" required autofocus />

                     <x-input-error :messages="$errors->get('namaKoleksi')" class="mt-2" />
                  </div>
                  <div class="mt-4">
                     <x-input-label for="jenisKoleksi" :value="__('Jenis Koleksi')" />

                     <select class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="jenisKoleksi" id="jenisKoleksi">
                        <option selected>~Pilih Koleksi~</option>
                        <option value="1">Buku</option>
                        <option value="2">Majalah</option>
                        <option value="3">Cakram Digital</option>
                     </select>
                     <x-input-error :messages="$errors->get('jenisKoleksi')" class="mt-2" />
                  </div>
                  <!-- <div class="mt-4">
                        <x-input-label for="jenisKoleksi" :value="__('Jenis Koleksi')" />
                            <input type="radio" id="jenisKoleksi" name="jenisKoleksi" value="1">
                            <label for="buku">Buku</label><br>
                            <input type="radio" id="jenisKoleksi" name="jenisKoleksi" value="2">
                            <label for="perabot">Perabot</label><br>
                            <input type="radio" id="jenisKoleksi" name="jenisKoleksi" value="3">
                            <label for="alattulis">Alat Tulis</label>
                        </div> -->



                  <!-- Email Address -->
                  <div class="mt-4">
                     <x-input-label for="jumlahKoleksi" :value="__('Jumlah Koleksi')" />

                     <x-text-input id="jumlahKoleksi" class="block mt-1 w-full" type="number" name="jumlahKoleksi" :value="old('jumlahKoleksi')" required />

                     <x-input-error :messages="$errors->get('jumlahKoleksi')" class="mt-2" />
                  </div>
                  <!-- <div class="mt-4">
                            <x-input-label for="createdAt" :value="__('Created At')" />

                            <x-text-input id="createdAt" class="block mt-1 w-full" type="date" name="createdAt" :value="old('createdAt')" required />

                            <x-input-error :messages="$errors->get('createdAt')" class="mt-2" />
                        </div> -->
                  <div class="flex items-left justify-space-between mt-4">
                     <div>
                        <x-primary-button class="ml-4 bg-white-400 hover:bg-blue-800 hover:text-gray-400" type="reset">
                           {{ __('Reset') }}
                        </x-primary-button>

                        <x-primary-button class="ml-4 bg-blue-700 hover:bg-blue-800 hover:text-gray-400" type="submit">
                           {{ __('Edit') }}
                        </x-primary-button>
                     </div>
                     <x-primary-button class="ml-4 bg-red-700 hover:bg-red-800 hover:text-gray-400" type="button" onclick="window.location='{{url('koleksi')}}'">
                        {{ __('Cancel') }}
                     </x-primary-button>
                  </div>

            </div>
            </form>
         </div>
      </div>
   </div>
   </div>
</x-app-layout>