<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Doctor Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <form action="{{ route('doctor.profile.update') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                        @csrf
                        @method('PUT')

                        <!-- Profile Photo -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Profile Photo</label>
                            @if($profile->profile_photo)
                                <div class="mt-2 mb-4">
                                    <img src="{{ Storage::url($profile->profile_photo) }}" 
                                         alt="Current profile photo" 
                                         class="w-32 h-32 rounded-full object-cover">
                                </div>
                            @endif
                            <input type="file" name="profile_photo" class="mt-1 block w-full">
                        </div>

                        <!-- Specialization -->
                        <div>
                            <label for="specialization" class="block text-sm font-medium text-gray-700">Specialization</label>
                            <input type="text" name="specialization" id="specialization" 
                                   value="{{ old('specialization', $profile->specialization) }}"
                                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>

                        <!-- Qualifications -->
                        <div>
                            <label for="qualifications" class="block text-sm font-medium text-gray-700">Qualifications</label>
                            <textarea name="qualifications" id="qualifications" rows="3" 
                                      class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">{{ old('qualifications', $profile->qualifications) }}</textarea>
                        </div>

                        <!-- Experience -->
                        <div>
                            <label for="experience" class="block text-sm font-medium text-gray-700">Experience</label>
                            <textarea name="experience" id="experience" rows="3" 
                                      class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">{{ old('experience', $profile->experience) }}</textarea>
                        </div>

                        <!-- Bio -->
                        <div>
                            <label for="bio" class="block text-sm font-medium text-gray-700">Bio</label>
                            <textarea name="bio" id="bio" rows="4" 
                                      class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">{{ old('bio', $profile->bio) }}</textarea>
                        </div>

                        <!-- Consultation Fee -->
                        <div>
                            <label for="consultation_fee" class="block text-sm font-medium text-gray-700">Consultation Fee</label>
                            <input type="text" name="consultation_fee" id="consultation_fee" 
                                   value="{{ old('consultation_fee', $profile->consultation_fee) }}"
                                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>

                        <!-- Available Days -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Available Days</label>
                            <div class="mt-2 space-y-2">
                                @foreach(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'] as $day)
                                    <div class="flex items-center">
                                        <input type="checkbox" name="available_days[]" value="{{ $day }}"
                                               {{ in_array($day, old('available_days', $profile->available_days ?? [])) ? 'checked' : '' }}
                                               class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                        <label class="ml-2 text-sm text-gray-600">{{ $day }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Available Hours -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Available Hours</label>
                            <div class="mt-2 grid grid-cols-2 gap-4">
                                <div>
                                    <label for="start_time" class="block text-sm text-gray-600">Start Time</label>
                                    <input type="time" name="available_hours[]" id="start_time"
                                           value="{{ old('available_hours.0', $profile->available_hours[0] ?? '') }}"
                                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                </div>
                                <div>
                                    <label for="end_time" class="block text-sm text-gray-600">End Time</label>
                                    <input type="time" name="available_hours[]" id="end_time"
                                           value="{{ old('available_hours.1', $profile->available_hours[1] ?? '') }}"
                                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                </div>
                            </div>
                        </div>

                        <!-- Phone Number -->
                        <div>
                            <label for="phone_number" class="block text-sm font-medium text-gray-700">Phone Number</label>
                            <input type="text" name="phone_number" id="phone_number" 
                                   value="{{ old('phone_number', $profile->phone_number) }}"
                                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>

                        <!-- Availability Toggle -->
                        <div class="flex items-center">
                            <input type="checkbox" name="is_available" id="is_available" 
                                   {{ old('is_available', $profile->is_available) ? 'checked' : '' }}
                                   class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <label for="is_available" class="ml-2 text-sm text-gray-600">Available for Appointments</label>
                        </div>

                        <div class="flex justify-end">
                            <button type="submit" 
                                    class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-600">
                                Update Profile
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
