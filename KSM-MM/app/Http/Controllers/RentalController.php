<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Rental;
use Illuminate\Http\Request;
use Carbon\Carbon;

class RentalController extends Controller
{
    public function create(Car $car)
    {
        return view('rentals.create', compact('car'));
    }

    public function store(Request $request, Car $car)
{
    $request->validate([
        'start_date' => 'required|date|after_or_equal:today',
        'end_date' => 'required|date|after:start_date',
    ]);

    
    $startDate = Carbon::parse($request->start_date);
    $endDate = Carbon::parse($request->end_date);

    $days = $endDate->diffInDays($startDate) + 1;

    $totalPrice = $days * $car->price_per_day;

    Rental::create([
        'car_id' => $car->id,
        'user_id' => auth()->id(),
        'start_date' => $request->start_date,
        'end_date' => $request->end_date,
        'total_price' => $totalPrice,
    ]);

    return redirect()->route('cars.index')->with('success', 'Rental successfully booked!');
}

    public function index()
    {
        $rentals = Rental::where('user_id', auth()->id())->with('car')->get();
        return view('rentals.index', compact('rentals'));
    }
}
