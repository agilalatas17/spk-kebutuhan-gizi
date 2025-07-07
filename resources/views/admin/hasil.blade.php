<x-dashboard-layout>
    {{-- HEADER --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Hasil
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
                        Alternatif
                    </th>

                    <th scope="col"
                        class="px-4 py-2 text-base font-semibold font-nunito text-left text-black border border-gray-200">
                        Total Nilai
                    </th>

                    <th scope="col"
                        class="px-4 py-2 text-base font-semibold font-nunito text-left text-black border border-gray-200">
                        Ranking
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <tr>
                    <td class="p-4 text-center text-sm font-medium whitespace-nowrap border border-gray-200 capitalize">
                        1
                    </td>
                    <td class="px-4 py-4 text-sm font-medium whitespace-nowrap border border-gray-200 capitalize">
                        Oatmeal buah
                    </td>
                    <td class="px-4 py-4 text-sm whitespace-nowrap border border-gray-200 capitalize">
                        64.75
                    </td>
                    <td class="px-4 py-4 text-sm whitespace-nowrap border border-gray-200 capitalize">
                        1
                    </td>
                </tr>
                <tr>
                    <td class="p-4 text-center text-sm font-medium whitespace-nowrap border border-gray-200 capitalize">
                        2
                    </td>
                    <td class="px-4 py-4 text-sm font-medium whitespace-nowrap border border-gray-200 capitalize">
                        salad alpukat + telur rebus
                    </td>
                    <td class="px-4 py-4 text-sm font-medium whitespace-nowrap border border-gray-200 capitalize">
                        92.75
                    </td>
                    <td class="px-4 py-4 text-sm whitespace-nowrap border border-gray-200 capitalize">
                        2
                    </td>
                </tr>
                <tr>
                    <td class="p-4 text-center text-sm font-medium whitespace-nowrap border border-gray-200 capitalize">
                        3
                    </td>
                    <td class="px-4 py-4 text-sm font-medium whitespace-nowrap border border-gray-200 capitalize">
                        ikan salmon kukus + kentang
                    </td>
                    <td class="px-4 py-4 text-sm font-medium whitespace-nowrap border border-gray-200 capitalize">
                        91.75
                    </td>
                    <td class="px-4 py-4 text-sm whitespace-nowrap border border-gray-200 capitalize">
                        3
                    </td>
                </tr>
            </tbody>
        </table>
    </section>
</x-dashboard-layout>
