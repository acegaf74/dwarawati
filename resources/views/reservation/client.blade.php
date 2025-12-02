<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 flex flex-col items-center justify-center gap-4">
                    <div class="bg-neutral-secondary-medium border border-light-medium p-3 text-center rounded-base">
                        <h2>
                            {{ __('Kapasitas Basecamp') }}
                        </h2>
                        <form class="flex justify-center gap-4" action="">
                            <div>
                                <x-input-label for="date" value="{{ __('Tanggal') }}" />
                                <x-date-input />
                            </div>
                            <div>
                                <x-input-label for="time" value="{{ __('Waktu') }}" />
                                <select class="text-heading text-sm" name="" id="">
                                    <option value="">Slot 1</option>
                                    <option value="">Slot 2</option>
                                    <option value="">Slot 3</option>
                                    <option value="">Slot 4</option>
                                </select>
                            </div>
                        </form>
                        <div class="grid grid-cols-3 gap-3 mt-3">
                            <dl class="bg-brand-softer border border-brand-subtle text-fg-brand-strong rounded-base flex flex-col items-center justify-center h-[78px]">
                                <dt class="w-8 h-8 rounded-full bg-yellow-500 text-fg-brand-strong text-sm font-medium flex items-center justify-center mb-1">{{ count($reservations) }}</dt>
                                <dd class="text-fg-brand text-sm font-medium">Slot Terisi</dd>
                            </dl>
                            <dl class="bg-warning-soft border border-warning-subtle text-fg-warning rounded-base flex flex-col items-center justify-center h-[78px]">
                                <dt class="w-8 h-8 rounded-full bg-green-500 text-fg-warning text-sm font-medium flex items-center justify-center mb-1">{{ __($max - count($reservations)) }}</dt>
                                <dd class="text-fg-warning text-sm font-medium">Slot Tersisa</dd>
                            </dl>
                            <dl class="bg-success-soft border border-success-subtle text-fg-success-strong rounded-base flex flex-col items-center justify-center h-[78px]">
                                <dt class="w-8 h-8 rounded-full bg-blue-500 text-fg-success-strong text-sm font-medium flex items-center justify-center mb-1">{{ __($max) }}</dt>
                                <dd class="text-fg-success-strong text-sm font-medium">Kapasitas</dd>
                            </dl>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <x-primary-button x-data="" x-on:click.prevent="$dispatch('open-modal', 'reservation-client')">
                            {{ __('Mendaftar') }}
                        </x-primary-button>

                        <x-modal name="reservation-client" focusable>
                            <form method="post" action="{{ route('reservation.store') }}" enctype="multipart/form-data" class="p-6">
                                @csrf
                            
                                <h2 class="text-lg font-medium text-gray-900">
                                    {{ __('Pendaftaran') }}
                                </h2>
                            
                                <p class="mt-1 text-sm text-gray-600">
                                    {{ __('Silakan isi data diri dan ketentuan pendakian berikut.') }}
                                </p>
                            
                                <div class="mt-6">
                                    <x-input-label for="name" value="{{ __('Nama Ketua') }}" />
                                    <div class="relative">
                                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                            <svg class="w-4 h-4 text-body" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Zm0 0a8.949 8.949 0 0 0 4.951-1.488A3.987 3.987 0 0 0 13 16h-2a3.987 3.987 0 0 0-3.951 3.512A8.948 8.948 0 0 0 12 21Zm3-11a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/></svg>
                                        </div>
                                        <x-text-input id="name" class="mt-1 block w-full"
                                                        type="text"
                                                        name="name"
                                                        required autocomplete="name" placeholder="{{ __('Nama') }}"/>
                                    </div>
                                    <x-input-error :messages="$errors->get('name')" class="mt-1"/>
                                </div>

                                <div class="mt-2">
                                    <x-input-label for="gender" value="{{ __('Jenis Kelamin') }}" />
                                    <div class="flex gap-2">
                                        <div class="flex gap-2">
                                            <x-radio-input id="boy" class="mt-1" name="gender" value="1" checked/>
                                            <x-input-label for="boy" value="{{ __('Laki-Laki') }}" />
                                        </div>
                                        <div class="flex gap-2">
                                            <x-radio-input id="girl" class="mt-1" name="gender" value="2"/>
                                            <x-input-label for="girl" value="{{ __('Perempuan') }}" />
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-2">
                                    <x-input-label for="transit" value="{{ __('Pilihan Pendakian') }}" />
                                    <div class="flex gap-2">
                                        <div class="flex gap-2">
                                            <x-radio-input id="stay" class="mt-1" name="transit" value="1" checked/>
                                            <x-input-label for="stay" value="{{ __('Transit/Singgah') }}" />
                                        </div>
                                        <div class="flex gap-2">
                                            <x-radio-input id="hike" class="mt-1" name="transit" value="0"/>
                                            <x-input-label for="hike" value="{{ __('Langsung Naik') }}" />
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <x-input-label for="address" value="{{ __('Alamat') }}" />
                                    <x-textarea-input id="address" class="mt-1 block w-full"              
                                                    name="address"
                                                    required autocomplete="address" placeholder="{{ __('Alamat') }}" />
                                    <x-input-error :messages="$errors->get('address')" class="mt-1"/>
                                </div>

                                <div class="mt-2">
                                    <x-input-label for="phone_number" value="{{ __('No. Telpon') }}" />
                                    <div class="relative">
                                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                            <svg class="w-4 h-4 text-body" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24c1.12.37 2.33.57 3.57.57c.55 0 1 .45 1 1V20c0 .55-.45 1-1 1c-9.39 0-17-7.61-17-17c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1c0 1.25.2 2.45.57 3.57c.11.35.03.74-.25 1.02z"/></svg>
                                        </div>
                                        <x-text-input id="phone_number" class="mt-1 block w-full"
                                                        type="text"
                                                        name="phone_number"
                                                        required autocomplete="phone_number" placeholder="{{ __('No. Telpon') }}"/>
                                    </div>
                                    <x-input-error :messages="$errors->get('phone')" class="mt-1"/>
                                </div>

                                <div class="mt-2">
                                    <x-input-label for="date_of_entry" value="{{ __('Tanggal Naik') }}" />
                                    <x-date-input id="date_of_entry" class="mt-1 block w-full"
                                                        name="date_of_entry"
                                                        required autocomplete="date_of_entry" placeholder="{{ __('Tanggal Naik') }}"/>
                                    <x-input-error :messages="$errors->get('date_of_entry')" class="mt-1"/>
                                    <x-input-label class="mt-2" for="date_of_exit" value="{{ __('Tanggal Turun') }}" />
                                    <x-date-input id="date_of_exit" class="mt-1 block w-full"
                                                        name="date_of_exit"
                                                        required autocomplete="date_of_exit" placeholder="{{ __('Tanggal Turun') }}"/>
                                    <x-input-error :messages="$errors->get('date_of_entry')" class="mt-1"/>
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
