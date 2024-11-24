@extends('layouts.app')

@section('title', 'Kendaraan')

@section('content')
    <div class="container mx-auto">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <center>
            <h1 class="text-5xl font-extrabold dark:text-white m-10">Kendaraan
            </h1>
        </center>

        <a href="{{ route('cars.create') }}">
            <center>
                <button
                    class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                    <span
                        class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                        Tambah Mobil
                    </span>
                </button>
            </center>
        </a>
        <div class="p-4">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nama Kendaraan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Merek
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tahun Kendaraan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Harga Sewa
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cars as $car)
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $car->name }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $car->brand }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $car->year }}</ </td>
                                <td class="px-6 py-4">
                                    Rp {{ number_format($car->price_per_day, 2, ',', '.') }}
                                </td>
                                <td class="px-6 py-4 space-x-4">
                                    <a href="{{ route('cars.edit', $car) }}"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    <form action="{{ route('cars.destroy', $car) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</button>
                                    </form>
                                    <a href="{{ route('rentals.create', $car) }}" class="font-medium text-green-600 dark:text-green-500 hover:underline">Rent</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>

    </div>
@endsection
