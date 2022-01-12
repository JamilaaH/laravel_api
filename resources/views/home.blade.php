@extends('layouts.index')

@section('content')
    @include('layouts.navhome')
        <shop :shop= "{{$shop}}" ></shop>
    
@endsection