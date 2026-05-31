<!DOCTYPE html>
<html>
<head>
    <title>Student Evaluation System</title>
</head>
<body>

<h2>Student Evaluation System</h2>

@if($name && $prelim && $midterm && $final)

    @php
        $average = ($prelim + $midterm + $final) / 3;
    @endphp

    <p><strong>Name:</strong> {{ $name }}</p>
    <p><strong>Prelim:</strong> {{ $prelim }}</p>
    <p><strong>Midterm:</strong> {{ $midterm }}</p>
    <p><strong>Final:</strong> {{ $final }}</p>

    <h3>Results:</h3>

    <p><strong>Average:</strong> {{ number_format($average, 2) }}</p>

    {{-- Letter Grade --}}
    <p><strong>Letter Grade:</strong>
        @if($average >= 90)
            A
        @elseif($average >= 80)
            B
        @elseif($average >= 70)
            C
        @elseif($average >= 60)
            D
        @else
            F
        @endif
    </p>

    {{-- Remarks --}}
    <p><strong>Remarks:</strong>
        @if($average >= 75)
            Passed
        @else
            Failed
        @endif
    </p>

    {{-- Academic Award --}}
    <p><strong>Award:</strong>
        @if($average >= 98)
            With Highest Honors
        @elseif($average >= 95)
            With High Honors
        @elseif($average >= 90)
            With Honors
        @else
            No Award
        @endif
    </p>

@else
    <p>Please provide student data in the URL.</p>
    <p>Example:</p>
    <p>/evaluation/Maria Lopez/92/88/94</p>
@endif

</body>
</html>