<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clients') }}
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

                                <a href="{{route('clients.create')}}" class="underline">Add new client</a>

                                <table class="min-w-full divide-y divide-gray-200 border mt-4">
                                    <thead>
                                        <tr>
                                            <th class="px-6 py-3 bg-gray-50 text-left">
                                                <span class="text-xs leading-4 font-medium text-gray-500">Company</span>
                                            </th>
                                            <th class="px-6 py-3 bg-gray-50 text-left">
                                                <span class="text-xs leading-4 font-medium text-gray-500">VAT</span>
                                            </th>
                                            <th class="px-6 py-3 bg-gray-50 text-left">
                                                <span class="text-xs leading-4 font-medium text-gray-500">Address</span>
                                            </th>
                                            <th class="px-6 py-3 bg-gray-50 text-left">
                                                <span class="text-xs leading-4 font-medium text-gray-500"></span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach($clients as $client)
                                        <tr class="bg-white">
                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                                {{ $client->company_name }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                                {{ $client->company_vat }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                                {{ $client-> company_address }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                                <a href="{{route('clients.edit', $client)}}" class="underline"> Edit </a>
                                                |
                                                <form method="POST" class="inline-block"
                                                action="{{route('clients.destroy', $client)}}"
                                                onsubmit="return confirm('Are you sure? ')">
                                                @method('DELETE')
                                                @csrf
                                                    <button type="submit" class="text-red-500 underline"> Delete </button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <div class="mt-4"> {{ $clients->links() }} </div>
                            </div>
                            </div>
                        </div>
                        </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
