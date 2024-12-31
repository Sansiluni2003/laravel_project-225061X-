<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Available Doctors') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($doctors as $doctor)
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex justify-between">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900">{{ $doctor->doctorProfile->name }}</h3>
                                <p class="text-sm text-blue-600">{{ $doctor->specialization }}</p>
                            </div>
                            @auth
                                @if(auth()->user()->isAdmin())
                                <div class="flex space-x-2">
                                    <a href="{{ route('doctors.edit', $doctor) }}" 
                                       class="text-blue-600 hover:text-blue-800">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </div>
                                @endif
                            @endauth
                        </div>
                        
                        <div class="mt-4">
                            <p class="text-gray-600"><i class="fas fa-phone mr-2"></i>{{ $doctor->doctorProfile->phone }}</p>
                            <p class="text-gray-600"><i class="fas fa-envelope mr-2"></i>{{ $doctor->doctorProfile->email }}</p>
                        </div>

                        <div class="mt-6">
                            <a href="{{ route('appointments.create', ['doctor' => $doctor->id]) }}" 
                               class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700">
                                Book Appointment
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
