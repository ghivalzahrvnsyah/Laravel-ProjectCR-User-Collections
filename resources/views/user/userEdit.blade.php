<x-app-layout>
   <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
         {{ __('Registrasi Pengguna') }}
      </h2>
   </x-slot>

   <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
         <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
               <form method="POST" action="{{ url('userUpdate', $user['id']) }}">
                  @csrf
                  @include('sweetalert::alert')
                  <!-- Username -->
                  <div>
                     <x-input-label for="username" :value="__('Username')" />

                     <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus />

                     <x-input-error :messages="$errors->get('username')" class="mt-2" />
                  </div>
                  <!-- Fullname -->
                  <div>
                     <x-input-label for="fullname" :value="__('Fullname')" />

                     <x-text-input id="fullname" class="block mt-1 w-full" type="text" name="fullname" :value="old('fullname')" required autofocus />

                     <x-input-error :messages="$errors->get('fullname')" class="mt-2" />
                  </div>

                  <!-- Email Address -->
                  <div class="mt-4">
                     <x-input-label for="email" :value="__('Email')" />

                     <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />

                     <x-input-error :messages="$errors->get('email')" class="mt-2" />
                  </div>
                  <!-- Phone Number -->
                  <div class="mt-4">
                     <x-input-label for="phonenumber" :value="__('Phone Number')" />

                     <x-text-input id="phonenumber" class="block mt-1 w-full" type="text" name="phonenumber" :value="old('phonenumber')" required />

                     <x-input-error :messages="$errors->get('phonenumber')" class="mt-2" />
                  </div>
                  <!-- address -->
                  <div class="mt-4">
                     <x-input-label for="address" :value="__('Address')" />

                     <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required />

                     <x-input-error :messages="$errors->get('address')" class="mt-2" />
                  </div>

                  <!-- birthdate -->
                  <div class="mt-4">
                     <x-input-label for="birthdate" :value="__('Birthdate')" />

                     <x-text-input id="birthdate" class="block mt-1 w-full" type="date" name="birthdate" :value="old('birthdate')" required />

                     <x-input-error :messages="$errors->get('birthdate')" class="mt-2" />
                  </div>
                  <!-- agama -->
                  <div class="mt-4">
                     <x-input-label for="agama" :value="__('Agama')" />
                     <!-- <x-text-input id="jeniskelamin" class="block mt-1 w-full" type="text" name="jeniskelamin" :value="old('jeniskelamin')" required /> -->
                     <select class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="agama" id="agama">
                        <option selected>~Pilih Agama~</option>
                        <option value="1">Islam</option>
                        <option value="2">Kristen</option>
                        <option value="3">Kristen Katolik</option>
                        <option value="4">Hindu</option>
                        <option value="5">Buddha</option>
                        <option value="6">Konghucu</option>
                     </select>
                     <x-input-error :messages="$errors->get('agama')" class="mt-2" />
                  </div>
                  <!-- Jenis Kelamin -->
                  <div class="mt-4">
                     <x-input-label for="jeniskelamin" :value="__('Jenis Kelamin')" />
                     <!-- <x-text-input id="jeniskelamin" class="block mt-1 w-full" type="text" name="jeniskelamin" :value="old('jeniskelamin')" required /> -->
                     <select class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="jeniskelamin" id="jeniskelamin">
                        <option selected>~Pilih Jenis Kelamin~</option>
                        <option value="1">Laki-Laki</option>
                        <option value="2">Perempuan</option>
                     </select>
                     <x-input-error :messages="$errors->get('jeniskelamin')" class="mt-2" />
                  </div>


                  <!-- Password -->
                  <div class="mt-4">
                     <x-input-label for="password" :value="__('Password')" />

                     <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />

                     <x-input-error :messages="$errors->get('password')" class="mt-2" />
                  </div>

                  <!-- Confirm Password -->
                  <div class="mt-4">
                     <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                     <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />

                     <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                  </div>
                  <div class="flex items-center justify-end mt-4">
                     <a class="normal text-sm text-gray-600 hover:text-gray-900 hover:bold text-sm" href="#">
                        {{ __('Reset') }}
                     </a>

                     <x-primary-button class="ml-4 bg-blue-400 hover:bg-blue-800 hover:text-gray-400">
                        {{ __('Register') }}
                     </x-primary-button>
                  </div>
               </form>
            </div>
         </div>
      </div>
</x-app-layout>