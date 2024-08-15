// resources/views/holiday_plans/pdf.blade.php

<!DOCTYPE html>
<html>
<head>
    <title>Planos de Férias</title>
</head>
<body>
    <h1>{{ $holidayPlan->title }}</h1>
    <p>{{ $holidayPlan->description }}</p>
    <p>Data: {{ $holidayPlan->date }}</p>
    <p>Localização: {{ $holidayPlan->location }}</p>
    @if ($holidayPlan->participants)
        <p>Participantes: {{ $holidayPlan->participants }}</p>
    @endif
</body>
</html>
