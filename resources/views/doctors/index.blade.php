<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Our Doctors') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($doctors as $doctor)
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6">
                            <h3 class="text-lg font-semibold text-gray-900">Dr. {{ $doctor->name }}</h3>
                            <p class="text-sm text-blue-600">{{ $doctor->specialization }}</p>
                            <p class="mt-2 text-gray-600">{{ $doctor->description }}</p>
                            <div class="mt-4">
                                <p class="text-sm text-gray-500">
                                    <i class="fas fa-envelope mr-2"></i>{{ $doctor->email }}
                                </p>
                                <p class="text-sm text-gray-500">
                                    <i class="fas fa-phone mr-2"></i>{{ $doctor->phone }}
                                </p>
                            </div>
                            @auth
                                <div class="mt-4">
                                    <a href="{{ route('appointments.create', ['doctor' => $doctor->id]) }}" 
                                       class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-600 active:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">
                                        Book Appointment
                                    </a>
                                </div>
                            @else
                                <div class="mt-4">
                                    <a href="{{ route('login') }}" 
                                       class="inline-flex items-center px-4 py-2 bg-gray-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-600">
                                        Login to Book
                                    </a>
                                </div>
                            @endauth
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
