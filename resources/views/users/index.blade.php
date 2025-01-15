<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">


                    <div class="py-12">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 text-gray-900">
                                <table class="min-w-full divide-y divide-gray-200 border">
                                    <thead>
                                        <tr>
                                            <th class="px-6 py-3 bg-gray-50 text-left">
                                                <span class="text-xs leading-4 font-medium text-gray-500">First Name</span>
                                            </th>
                                            <th class="px-6 py-3 bg-gray-50 text-left">
                                                <span class="text-xs leading-4 font-medium text-gray-500">Last Name</span>
                                            </th>
                                            <th class="px-6 py-3 bg-gray-50 text-left">
                                                <span class="text-xs leading-4 font-medium text-gray-500">Email</span>
                                            </th>
                                            <th class="px-6 py-3 bg-gray-50 text-left">
                                                <span class="text-xs leading-4 font-medium text-gray-500"></span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach($users as $user)
                                        <tr class="bg-white">
                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                                {{ $user->first_name }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                                {{ $user->last_name }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                                {{ $user->email }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                                Edit / Delete
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <div class="mt-4"> {{ $users->links() }} </div>
                            </div>
                            </div>
                        </div>
                        </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
