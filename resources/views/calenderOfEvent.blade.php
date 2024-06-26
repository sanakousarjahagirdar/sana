@extends('index')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-3">
        <div class="col-md-8">  
            <h3 class="text-center">Calendar Of Events</h3>
            <div class="row">
                <div class="col-md-6">
                    <p><strong>Branch Name:</strong> {{ $boxData['branch_name'] }}</p>
                    <p><strong>Academic Year:</strong> {{ $boxData['academic_year'] }}</p>
                </div>
                <div class="col-md-6">
                    <p><strong>H.M:</strong> {{ $boxData['hm'] }}</p>
                    <p><strong>Class Teacher:</strong> {{ $boxData['class_teacher'] }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-4">
        <div class="col-md-10"> 
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Activity</th>
                            <th>Description</th>
                            <th>Date</th>
                            <th>Files</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($activities as $index => $activity)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $activity->activity }}</td>
                            <td>{{ $activity->description }}</td>
                            <td>{{ $activity->date }}</td>
                             
                            <td>
                                {{-- @if ($activity->files)
                                <a href="{{ asset('storage/filefolder/nature-images (1).jpg') }}" download>
                                      <i class="fa fa-download"></i> Download
                                </a> --}}

                                @if ($activity->files)
                                <a href="{{ asset($activity->files) }}" download>
                                        <i class="fa fa-download"></i> Download
                                    </a>
                                @else
                                    No file
                                @endif
                            </td> 
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"></script>
@endsection



