<!-- departments.blade.php -->

@if(isset($departments) && count($departments) > 0)
    <!-- Iterate over departments and display them -->
    @foreach($departments as $department)
        <div>{{ $department->name }}</div>
        <!-- Include options to edit/delete each department -->
    @endforeach
@else
    <p>No departments found.</p>
@endif
