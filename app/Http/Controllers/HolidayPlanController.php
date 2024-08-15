<?php

namespace App\Http\Controllers;

use App\Models\HolidayPlan;
use Illuminate\Http\Request;
use PDF;


class HolidayPlanController extends Controller
{

    public function index()
    {
        return HolidayPlan::all();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date_format:Y-m-d',
            'location' => 'required|string|max:255',
            'participants' => 'nullable|string',
        ]);

        return HolidayPlan::create($validatedData);
    }

    public function show(HolidayPlan $holidayPlan)
    {
        return $holidayPlan;
    }

    public function update(Request $request, HolidayPlan $holidayPlan)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date_format:Y-m-d',
            'location' => 'required|string|max:255',
            'participants' => 'nullable|string',
        ]);

        $holidayPlan->update($validatedData);

        return $holidayPlan;
    }

    public function destroy(HolidayPlan $holidayPlan)
    {
        $holidayPlan->delete();

        return response()->noContent();
    }

    public function generatePdf(HolidayPlan $holidayPlan)
    {
        $pdf = PDF::loadView('holiday_plans.pdf', compact('holidayPlan'));
        return $pdf->download('holiday_plan.pdf');
    }
}
