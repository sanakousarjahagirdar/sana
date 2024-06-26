 

@extends('index')

@section('content')
<div class="container">
    <h3 class="text-center">Subject Details</h3>

    <div class="row">
        <div class="col-md-6">
            <p><strong>Faculty Name:</strong> <span id="facultyName">{{ $fname }}</span></p>
            <p><strong>Academic Year:</strong> <span id="academicYear">{{ $academic_year }}</span></p>
        </div>
        <div class="col-md-6">
            <p><strong>Standard:</strong> <span id="standard">{{ $std }}</span></p>
            <p><strong>Division:</strong> <span id="division">{{ $dv }}</span></p>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-10">
            <div class="table">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Sl No.</th>
                            <th>Topic</th>
                            <th>Subtopic</th>
                            <th>Class ID</th>
                        </tr>
                    </thead>
                    <tbody id="lessonsTableBody">
                        @foreach($lessons as $index => $lesson)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $lesson->topic }}</td>
                            <td>{{ $lesson->sub_topic }}</td>
                            
                            <td>{{ $lesson->class_id }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"></script>

<script>
    document.getElementById('subjectForm').addEventListener('submit', function(event) {
        event.preventDefault();

        var formData = new FormData(this);

        fetch('{{ route('get-subject-details') }}', {
            method: 'POST',
            body: formData
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            console.log(data); 
            document.getElementById('facultyName').textContent = data.fname;
            document.getElementById('academicYear').textContent = data.academic_year;
            document.getElementById('standard').textContent = data.std;
            document.getElementById('division').textContent = data.dv; 
            
            var lessonsTableBody = document.getElementById('lessonsTableBody');
            lessonsTableBody.innerHTML = '';
            data.lessons.forEach((lesson, index) => {
                var row = `
                    <tr>
                        <td>${index + 1}</td>
                        <td>${lesson.topic}</td>
                        <td>${lesson.sub_topic}</td>
                        <td>${lesson.class_id}</td>
                    </tr>`;
                lessonsTableBody.insertAdjacentHTML('beforeend', row);
            });
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });
    });
</script>

@endsection
