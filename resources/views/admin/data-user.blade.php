<x-dashboard-layout>
    {{-- HEADER --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Users') }}
        </h2>
    </x-slot>

    {{-- CONTENT --}}
    <section class="w-2/4 lg:m-6 lg:p-6 rounded-md bg-white">
        <table class="divid border table-auto w-full rounded-lg">
            <thead class="border bg-violet-200">
                <tr>
                    <th scope="col"
                        class="px-4 py-2 w-6 text-base font-semibold font-nunito text-left text-black border border-gray-200">
                        No
                    </th>

                    <th scope="col"
                        class="px-4 py-2 text-base font-semibold font-nunito text-left text-black border border-gray-200">
                        Nama
                    </th>

                    <th scope="col"
                        class="px-4 py-2 text-base font-semibold font-nunito text-left text-black border border-gray-200">
                        Email
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @if (isset($data) && count($data) > 0)
                    @foreach ($data as $key => $value)
                        <tr>
                            <td class="p-4 text-center text-sm font-medium whitespace-nowrap border border-gray-200">
                                {{ $key + 1 }}
                            </td>
                            <td class="px-4 py-4 text-sm font-medium whitespace-nowrap border border-gray-200">
                                {{ $value->nama }}
                            </td>
                            <td class="px-4 py-4 text-sm whitespace-nowrap border border-gray-200">
                                {{ $value->email }}
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr class="outline-gray-200">
                        <td colspan="3" class="py-8 text-center">
                            <img src="{{ asset('assets/icons/no-data-table.svg') }}" width="120" class="mx-auto">
                            <p class="mt-4 text-lg text-gray-400">Data tidak tersedia!</p>
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
    </section>
</x-dashboard-layout>
