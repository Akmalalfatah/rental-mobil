@extends('layouts.app')

@section('title', 'Edit Kendaraan - {{ $car->name }}')

@section('content')
    <div class="container">
        <center>
            <h1 class="text-5xl font-extrabold dark:text-white mb-5">Edit Mobil
            </h1>
        </center>

        <form class="max-w-4xl mx-auto" action="{{ route('cars.update',$car) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-5">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Kendaraan</label>
                <input type="text" name="name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required value="{{ $car->name }}" />
            </div>
            <div class="mb-5">
                <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Merek</label>
                <input type="text" name="brand"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required value="{{ $car->brand }}" />
            </div>
            <div class="mb-5">
                <label for="year" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tahun Kendaraan</label>
                <input type="number" name="year"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required value="{{ $car->year }}" />
            </div>
            <div class="mb-5">
                <label for="price_per_day" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga Sewa / hari</label>
                <input type="number" name="price_per_day"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required value="{{ $car->price_per_day }}" />
            </div>
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                <a href="{{ route('cars.index') }}" class="btn btn-secondary mt-3"><button type="button"
                    class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Back</button></a>

        </form>

    </div>
@endsection
