@php
    $value = session('value') ? (object) session('value') : null;
@endphp

@if ($value)
    <div>
        <h2>Profile Dashboard</h2>
        <p>First Name: {{ $value->first_name }}</p>
        <p>Last Name: {{ $value->last_name }}</p>
        <!-- more fields... -->
    </div>
@else
    <p>No profile data to display.</p>
@endif
