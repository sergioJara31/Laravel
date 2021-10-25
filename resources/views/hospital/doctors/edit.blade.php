@extends('hospital.master')

@section('content')
<form action="{{ route("doctor.update",$doctor->id) }}" method="post">
   @method('PUT')
    @include('hospital.doctors._form')
</form>
@endsection