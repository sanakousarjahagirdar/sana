@extends('index')

@section('content')

{{-- file to show student details on top --}}
@include('student_header')

    <div class="container mt-3">
        <h3 class="text-center">Time Table</h3>
        <table id="timetable" class="table table-bordered table-striped mt-3">
            <thead>
                <tr>
                    <th>Sl No.</th>
                    <th>Period</th>
                    <th>Day</th>
                    <th>Subject</th>
                    <th>Teacher</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($timetable as $time)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $time->period }}</td>
                        <td>{{ $time->day }}</td>
                        <td>{{ $time->sname }}</td>
                        <td>{{ $time->teacher_name }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">No records found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        @if ($timetable->total() > 0)
            {{ $timetable->links('vendor.pagination.default') }}
        @endif
    </div>
@endsection
