<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-green-800 leading-tight">
            {{ __('MediCare') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-blue-900">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Appointments Card -->
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <h3 class="text-lg font-semibold mb-4">My Appointments</h3>
                            <p class="text-gray-600 mb-4">View and manage your upcoming appointments</p>
                            <a href="{{ route('appointments.index') }}"
                               class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                                View Appointments
                            </a>
                        </div>

                        <!-- Book Appointment Card -->
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <h3 class="text-lg font-semibold mb-4">Book Appointment</h3>
                            <p class="text-gray-600 mb-4">Schedule a new appointment with our doctors</p>
                            <a href="{{ route('appointments.create') }}"
                               class="inline-block bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                                Book Now
                            </a>
                        </div>

                        <!-- Doctors Card -->
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <h3 class="text-lg font-semibold mb-4">Our Doctors</h3>
                            <p class="text-gray-600 mb-4">View our list of qualified healthcare professionals</p>
                            <a href="{{ route('doctors.index') }}"
                               class="inline-block bg-purple-500 text-white px-4 py-2 rounded hover:bg-purple-600">
                                View Doctors
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
