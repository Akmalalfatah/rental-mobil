@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <center>
            <h1 class="text-5xl font-extrabold dark:text-white m-10">Mobil yang dirental
            </h1>
        </center>

        <div class="p-4">


            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Mobil
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanggal Mulai
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanggal Selesai
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Total Harga
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rentals as $rental)
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $rental->car->name }} ({{ $rental->car->brand }})
                                </th>
                                <td class="px-6 py-4">
                                    {{ \Carbon\Carbon::parse($rental->start_date)->format('d M Y') }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ \Carbon\Carbon::parse($rental->end_date)->format('d M Y') }} </td>
                                <td class="px-6 py-4">
                                    Rp {{ number_format($rental->total_price, 2, ',', '.') }}

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>

    </div>
@endsection
