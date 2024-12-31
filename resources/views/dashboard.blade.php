<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-green-800 leading-tight">
            {{ __('MediCare') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-blue-900">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Appointments Card -->
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <h3 class="text-lg font-semibold mb-4">My Appointments</h3>
                            <p class="text-gray-600 mb-4">View and manage your upcoming appointments</p>
                            <a href="{{ route('appointments.index') }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">View Appointments</a>
                        </div>

                        <!-- Book Appointment Card -->
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <h3 class="text-lg font-semibold mb-4">Book Appointment</h3>
                            <p class="text-gray-600 mb-4">Schedule a new appointment with our doctors</p>
                            <a href="{{ route('appointments.create') }}" class="inline-block bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Book Now</a>
                        </div>

                        <!-- Doctors Card -->
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <h3 class="text-lg font-semibold mb-4">Our Doctors</h3>
                            <p class="text-gray-600 mb-4">View our list of qualified healthcare professionals</p>
                            <a href="{{ route('doctors.index') }}" class="inline-block bg-purple-500 text-white px-4 py-2 rounded hover:bg-purple-600">View Doctors</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Health Tips Section -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h2 class="text-2xl font-bold text-green-800 mb-6">Daily Health Tips</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Exercise Tip -->
                        <div class="bg-blue-50 p-6 rounded-lg">
                            <div class="flex items-center mb-4">
                                <span class="text-3xl mr-3">🏃‍♂️</span>
                                <h3 class="text-lg font-semibold text-blue-800">Stay Active</h3>
                            </div>
                            <p class="text-gray-700">Aim for at least 30 minutes of moderate exercise daily. Try walking, swimming, or cycling.</p>
                        </div>

                        <!-- Nutrition Tip -->
                        <div class="bg-green-50 p-6 rounded-lg">
                            <div class="flex items-center mb-4">
                                <span class="text-3xl mr-3">🥗</span>
                                <h3 class="text-lg font-semibold text-green-800">Healthy Eating</h3>
                            </div>
                            <p class="text-gray-700">Include plenty of fruits, vegetables, and whole grains. Stay hydrated with 8 glasses of water daily.</p>
                        </div>

                        <!-- Mental Health Tip -->
                        <div class="bg-purple-50 p-6 rounded-lg">
                            <div class="flex items-center mb-4">
                                <span class="text-3xl mr-3">🧘‍♀️</span>
                                <h3 class="text-lg font-semibold text-purple-800">Mental Wellness</h3>
                            </div>
                            <p class="text-gray-700">Practice mindfulness or meditation for 10 minutes daily. Get 7-8 hours of quality sleep.</p>
                        </div>

                        <!-- Sleep Tip -->
                        <div class="bg-indigo-50 p-6 rounded-lg">
                            <div class="flex items-center mb-4">
                                <span class="text-3xl mr-3">😴</span>
                                <h3 class="text-lg font-semibold text-indigo-800">Better Sleep</h3>
                            </div>
                            <p class="text-gray-700">Maintain a regular sleep schedule. Avoid screens before bedtime for better sleep quality.</p>
                        </div>

                        <!-- Stress Management -->
                        <div class="bg-red-50 p-6 rounded-lg">
                            <div class="flex items-center mb-4">
                                <span class="text-3xl mr-3">🌿</span>
                                <h3 class="text-lg font-semibold text-red-800">Stress Management</h3>
                            </div>
                            <p class="text-gray-700">Take regular breaks. Practice deep breathing and maintain work-life balance.</p>
                        </div>

                        <!-- Preventive Care -->
                        <div class="bg-yellow-50 p-6 rounded-lg">
                            <div class="flex items-center mb-4">
                                <span class="text-3xl mr-3">🏥</span>
                                <h3 class="text-lg font-semibold text-yellow-800">Regular Check-ups</h3>
                            </div>
                            <p class="text-gray-700">Schedule regular health screenings. Stay up-to-date with vaccinations and dental visits.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
