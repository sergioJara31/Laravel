@extends('hospital.master')
@section('content')
<form action="{{ route('doctor.store') }}" method="post">
    @include('hospital.doctors._form')
</form>
@endsection