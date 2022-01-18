@extends('layouts.app')

@section('main')
    <v-main>
        <dashboard :user = "{{Auth::user()}}"></dashboard>
    </v-main>
    
@endsection

