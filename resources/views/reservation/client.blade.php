<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-center">
                        <x-primary-button x-data="" x-on:click.prevent="$dispatch('open-modal', 'reservation-client')">
                            {{ __('Mendaftar') }}
                        </x-primary-button>

                        <x-modal name="reservation-client" focusable>
                            <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                                @csrf
                            
                                <h2 class="text-lg font-medium text-gray-900">
                                    {{ __('Pendaftaran') }}
                                </h2>
                            
                                <p class="mt-1 text-sm text-gray-600">
                                    {{ __('Silakan isi data diri dan ketentuan pendakian berikut.') }}
                                </p>
                            
                                <div class="mt-6">
                                    <x-input-label for="name" value="{{ __('Kata Sandi') }}" />
                                    <div class="relative">
                                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                            <svg class="w-4 h-4 text-body" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Zm0 0a8.949 8.949 0 0 0 4.951-1.488A3.987 3.987 0 0 0 13 16h-2a3.987 3.987 0 0 0-3.951 3.512A8.948 8.948 0 0 0 12 21Zm3-11a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/></svg>
                                        </div>
                                        <x-text-input id="name" class="mt-1 block w-full"
                                                        type="name"
                                                        name="name"
                                                        required autocomplete="name" placeholder="{{ __('Nama') }}"/>
                                    </div>
                                </div>

                                <div class="mt-2">
                                    <x-input-label for="gender" value="{{ __('Jenis Kelamin') }}" />  
                                    <x-radio-input id="gender" class="mt-1" name="gender" required/>
                                </div>
                            
                                <div class="mt-6 flex justify-end">
                                    <x-secondary-button x-on:click="$dispatch('close')">
                                        {{ __('Batal') }}
                                    </x-secondary-button>
                                
                                    <x-primary-button class="ms-3">
                                        {{ __('Reservasi') }}
                                    </x-primary-button>
                                </div>
                            </form>
                        </x-modal>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
