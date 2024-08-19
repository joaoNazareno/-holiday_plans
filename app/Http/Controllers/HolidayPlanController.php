<?php

namespace App\Http\Controllers;

use App\Models\HolidayPlan;
use App\Http\Requests\StoreHolidayPlanRequest;
use PDF;

class HolidayPlanController extends Controller
{
    public function index()
    {
        return HolidayPlan::all();
    }

    public function store(StoreHolidayPlanRequest $request)
    {
        $validatedData = $request->validated();

        return HolidayPlan::create($validatedData);
    }

    public function show(HolidayPlan $holidayPlan)
    {
        return $holidayPlan;
    }

    public function update(StoreHolidayPlanRequest $request, HolidayPlan $holidayPlan)
    {
        $validatedData = $request->validated();

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
