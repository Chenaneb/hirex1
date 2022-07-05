@section('content')
    <x-app-layout>

        <x-slot name="header">
        </x-slot>



        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="px-4 sm:px-6 lg:px-8">
            <div class="sm:flex sm:items-center">
                <div class="sm:flex-auto">
                    <h1 class="text-xl font-semibold text-gray-900">Employees</h1>
                    <p class="mt-2 text-sm text-gray-700">The list of all the Employees in our Agency.</p>
                </div>


                    <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                        <button type="button"
                            class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">
                            Add
                            user
                    </div>
            </div>
            <div class="mt-8 flex flex-col">
                <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                        <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
        
                            
                            <!--form  start-->
                            <form enctype="multipart/form-data" method="POST" action="{{ route('emp.update')}}">
                        
                                @csrf
                
                                <x-validation-errors />
                                <x-success-message />
                                <div class="shadow sm:rounded-md sm:overflow-hidden">
                                <div class="bg-white py-6 px-4 space-y-6 sm:p-6">
                                    <div>
                                        <h3 class="text-lg leading-6 font-medium text-gray-900">Enter Candidate Information</h3>
                                    </div>
                                    <div class="grid grid-cols-6 gap-6">
                                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                            <x-label for="first_name" :value="__('First Name')" />
                                            <x-input id="first_name" value="{{ $ViewEmployees->first_name }}" class="block mt-1 w-full" type="text" name="first_name"
                                                required autofocus />
                                        </div>
                                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                            <x-label for="middle_name" :value="__('Middle Name')" />
                                            <x-input id="middle_name" value="{{ $ViewEmployees->middle_name }}" class="block mt-1 w-full" type="text"
                                            name="middle_name" required autofocus />
                                            <x-input value="{{ $id }}" name="id" class="block mt-1 w-full" type="hidden"/>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                            <x-label for="last_name" :value="__('Last name')" />
                                            <x-input id="last_name" value="{{ $ViewEmployees->last_name }}" class="block mt-1 w-full" type="text" name="last_name"
                                                required autofocus />
                                        </div>
                                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                            <x-label for="email" :value="__('Email')" />
                                            <x-input id="email" value="{{ $ViewEmployees->email }}" class="block mt-1 w-full" type="email" name="email"
                                                required />
                                        </div>
                                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                            <label for="phone_number" value="{{ $ViewEmployees->phone_number }}" class="block text-sm font-medium text-gray-700">Phone
                                            Number</label>
                                            <input type="number"value="{{ $ViewEmployees->phone_number}}"  name="phone_number" id="phone_number"
                                                autocomplete="family-name"
                                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        </div>
                                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                            <label for="id_number" class="block text-sm font-medium text-gray-700">National
                                            Identity Card</label>
                                            <input type="number" value="{{ $ViewEmployees->id_number }}" name="id_number" id="id_number" autocomplete="family-name"
                                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        </div>
                                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                            <label for="passport_number"
                                                class="block text-sm font-medium text-gray-700">Passport Number</label>
                                            <input type="number" name="passport_number" value="{{ $ViewEmployees->passport_number }}" id="passport_number"
                                                autocomplete="family-name"
                                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        </div>
                                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                            <label for="agent_name" class="block text-sm font-medium text-gray-700">Workers
                                            agent</label>
                                            <input type="text" name="agent_name"  value="{{ $ViewEmployees->agent_name }}" id="agent_name" autocomplete="family-name"
                                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        </div>
                                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                            <label for="agent_phone_number"
                                                class="block text-sm font-medium text-gray-700">Agent Phone Number</label>
                                            <input type="number" name="agent_phone_number" value="{{ $ViewEmployees->agent_phone_number }}" id="agent_phone_number"
                                                autocomplete="family-name"
                                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        </div>
                                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                            <label for="guardian_name"
                                                class="block text-sm font-medium text-gray-700">Workers guardian/Next of
                                            kin</label>
                                            <input type="text" name="guardian_name"  value="{{ $ViewEmployees->guardian_name }}" id="guardian_name"
                                                autocomplete="family-name"
                                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        </div>
                                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                            <label for="guardian_phone_number"
                                                class="block text-sm font-medium text-gray-700">Guardian Phone
                                            Number</label>
                                            <input type="number" name="guardian_phone_number" value="{{ $ViewEmployees->guardian_phone_number }}" id="guardian_phone_number"
                                                autocomplete="family-name" required
                                                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        </div>
                                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                            <label for="country" class="block text-sm font-medium text-gray-700">Country
                                            travelling</label>
                                            <select id="country" name="country" autocomplete="country_name"
                                                class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                <option> Bahrain</option>
                                                <option>Kuwait</option>
                                                <option>Oman</option>
                                                <option>United Arab Emirates</option>
                                                <option>Qatar</option>
                                                <option>Saudi Arabia</option>
                                            </select>
                                        </div>
                                        <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                            <label for="city" class="block text-sm font-medium text-gray-700">Town of
                                            Residence</label>
                                            <input type="text" name="city"value="{{ $ViewEmployees->city }}" id="city" autocomplete="address-level2"
                                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        </div>
                                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                            <label for="postal-code" class="block text-sm font-medium text-gray-700">ZIP /
                                            Postal code</label>
                                            <input type="text" name="postal_code" value="{{ $ViewEmployees->postal_code }}" id="postal-code"
                                                autocomplete="postal-code"
                                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        </div>
                                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                            <label for="male_occupation"
                                                class="block text-sm font-medium text-gray-700">Male Workers
                                            Occupation</label>
                                            <select id="male_occupation" name="male_occupation" autocomplete="country-name"
                                                class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                <option value="none" selected>Male Occupation</option>
                                                <option value="male">Male Nurse</option>
                                                <option value="female">Cook/Waiter</option>
                                                <option value="other">Kitchen Helper</option>
                                                <option value="male">Farm Workers</option>
                                                <option value="female">Driver</option>
                                                <option value="other">Tutor</option>
                                                <option value="female">House Workers</option>
                                                <option value="other">Male Cooker</option>
                                                <option value="female">Male Hearing specialist</option>
                                            </select>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                            <label for="female_occupation"
                                                class="block text-sm font-medium text-gray-700">Female Workers
                                            Occupation</label>
                                            <select id="female_occupation" name="female_occupation"
                                                autocomplete="country-name"
                                                class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                <option value="none" selected>Female Occupation</option>
                                                <option value="male">House Maid</option>
                                                <option value="female">Female Cooker</option>
                                                <option value="other">House Nanny</option>
                                                <option value="female">Female Nurse</option>
                                                <option value="other">Tihorus</option>
                                            </select>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                            <label for="gender" class="block text-sm font-medium text-gray-700">Select your
                                            gender</label>
                                            <select id="gender" name="gender" autocomplete="country-name"
                                                class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                <option value="none" selected>Gender</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                                <option value="other">other</option>
                                            </select>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                            <label class="block text-sm font-medium text-gray-700"> Cover photo </label>
                                            <div
                                                class="mt-1 border-2 border-gray-300 border-dashed rounded-md px-6 pt-5 pb-6 flex justify-center">
                                                <div class="space-y-1 text-center">
                                                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor"
                                                        fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                        <path
                                                            d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                    <div class="flex text-sm text-gray-600">
                                                        <label for="file-upload"
                                                            class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                        <span>Upload a file</span>
                                                        <input id="profile_photo" name="profile_photo" type="file"
                                                            class="sr-only">
                                                        </label>
                                                        <p class="pl-1">or drag and drop</p>
                                                    </div>
                                                    <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                     <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-3">
                                {{ __('update') }}
                            </x-button>
                        </div>
                                    
                            </form>
                            <!--form end-->
                
                
                
                        </div>
                    </div>
                </div>
            </div>
        </div>








    </x-app-layout>
