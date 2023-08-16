<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Room View') }}
        </h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                            <span class="font-medium">{{ $error }}</span>
                        </div>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="py-12">
            <div class="relative overflow-x-auto max-w-7xl mx-auto sm:px-6 lg:px-8">

                <form>
                    {{ csrf_field() }}
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <label for="room_type_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Room Type ID</label>
                            <input type="text" id="room_type_id" name="room_type_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value={{$data->room_type_id}} disabled>
                        </div>
                        <div>
                            <label for="room_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Room Name</label>
                            <input type="text" id="room_name" name="room_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value={{$data->room_name}} disabled>
                        </div>
                        <div>
                            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                            <input type="number" id="price" name="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value={{$data->price}} disabled>
                        </div>
                    </div>
                    <div class="mb-6">
                        <label for="area" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Area</label>
                        <textarea id="area" name="area" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>{{$data->area}}</textarea>
                    </div>
                    <div class="mb-6">
                        <label for="facility" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Facility</label>
                        <textarea id="facility" name="facility" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>{{$data->facility}}</textarea>
                    </div>
                </form>
            </div>
        </div>
    </x-slot>
</x-app-layout>
