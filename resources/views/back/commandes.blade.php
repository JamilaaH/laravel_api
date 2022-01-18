@extends('layouts.app')

@section('main')
    <v-main>
        <commandes :commandes="{{$commandes}}"></commandes>
    </v-main>
@endsection