<x-dashboard-layout>
    {{-- HEADER --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Sub Kriteria
        </h2>
    </x-slot>

    {{-- CONTENT --}}
    <section class="w-2/4 lg:m-6 lg:p-6 rounded-md bg-white">
        <div class="flex justify-end mb-4">
            <x-primary-button class="!w-fit capitalize">
                Add Data
            </x-primary-button>
        </div>
        <table class="divid border w-full rounded-lg">
            <thead class="border bg-violet-200">
                <tr>
                    <th scope="col"
                        class="px-4 py-2 w-6 text-base font-semibold font-nunito text-left text-black border border-gray-200">
                        Kode
                    </th>

                    <th scope="col"
                        class="px-4 py-2 text-base font-semibold font-nunito text-left text-black border border-gray-200">
                        Kriteria
                    </th>

                    <th scope="col"
                        class="px-4 py-2 text-base font-semibold font-nunito text-left text-black border border-gray-200">
                        Sub Kriteria
                    </th>

                    <th scope="col"
                        class="px-4 py-2 text-base font-semibold font-nunito text-left text-black border border-gray-200">
                        Nilai
                    </th>
                    <th scope="col"
                        class="px-4 py-2 text-base text-center font-semibold font-nunito text-black border border-gray-200">
                        Aksi
                    </th>

                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <tr>
                    <td class="p-4 text-center text-sm font-medium whitespace-nowrap border border-gray-200">
                        C1
                    </td>
                    <td class="px-4 py-4 text-sm font-medium whitespace-nowrap border border-gray-200">
                        Kalori
                    </td>
                    <td class="px-4 py-4 text-sm whitespace-nowrap border border-gray-200">
                        > 450 Kcal
                    </td>
                    <td class="px-4 py-4 text-sm whitespace-nowrap border border-gray-200">
                        1
                    </td>
                    <td class="px-4 py-4 text-sm text-center whitespace-nowrap border border-gray-200">
                        <x-primary-button class="!w-fit bg-yellow-500 hover:bg-yellow-300 capitalize">
                            Edit
                        </x-primary-button>
                        <x-primary-button class="!w-fit bg-red-500 hover:bg-red-300 capitalize">
                            Delete
                        </x-primary-button>
                    </td>
                </tr>
                <tr>
                    <td class="p-4 text-center text-sm font-medium whitespace-nowrap border border-gray-200">
                        C2
                    </td>
                    <td class="px-4 py-4 text-sm font-medium whitespace-nowrap border border-gray-200">
                        Protein
                    </td>
                    <td class="px-4 py-4 text-sm whitespace-nowrap border border-gray-200">
                        < 5 gr </td>
                    <td class="px-4 py-4 text-sm whitespace-nowrap border border-gray-200">
                        1
                    </td>
                    <td class="px-4 py-4 text-sm text-center whitespace-nowrap border border-gray-200">
                        <x-primary-button class="!w-fit bg-yellow-500 hover:bg-yellow-300 capitalize">
                            Edit
                        </x-primary-button>
                        <x-primary-button class="!w-fit bg-red-500 hover:bg-red-300 capitalize">
                            Delete
                        </x-primary-button>
                    </td>
                </tr>
                <tr>
                    <td class="p-4 text-center text-sm font-medium whitespace-nowrap border border-gray-200">
                        C3
                    </td>
                    <td class="px-4 py-4 text-sm font-medium whitespace-nowrap border border-gray-200">
                        Lemak sehat
                    </td>
                    <td class="px-4 py-4 text-sm whitespace-nowrap border border-gray-200">
                        < 450 gr </td>
                    <td class="px-4 py-4 text-sm whitespace-nowrap border border-gray-200">
                        1
                    </td>
                    <td class="px-4 py-4 text-sm text-center whitespace-nowrap border border-gray-200">
                        <x-primary-button class="!w-fit bg-yellow-500 hover:bg-yellow-300 capitalize">
                            Edit
                        </x-primary-button>
                        <x-primary-button class="!w-fit bg-red-500 hover:bg-red-300 capitalize">
                            Delete
                        </x-primary-button>
                    </td>
                </tr>
                <tr>
                    <td class="p-4 text-center text-sm font-medium whitespace-nowrap border border-gray-200">
                        C4
                    </td>
                    <td class="px-4 py-4 text-sm font-medium whitespace-nowrap border border-gray-200">
                        Serat
                    </td>
                    <td class="px-4 py-4 text-sm whitespace-nowrap border border-gray-200">
                        < 2 gr </td>
                    <td class="px-4 py-4 text-sm whitespace-nowrap border border-gray-200">
                        1
                    </td>
                    <td class="px-4 py-4 text-sm text-center whitespace-nowrap border border-gray-200">
                        <x-primary-button class="!w-fit bg-yellow-500 hover:bg-yellow-300 capitalize">
                            Edit
                        </x-primary-button>
                        <x-primary-button class="!w-fit bg-red-500 hover:bg-red-300 capitalize">
                            Delete
                        </x-primary-button>
                    </td>
                </tr>

            </tbody>
        </table>
    </section>
</x-dashboard-layout>
