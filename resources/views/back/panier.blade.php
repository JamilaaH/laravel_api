@extends('layouts.app')

@section('main')
    <v-main>
        <panier :produits="{{$panier}}" :total="{{$total}}"></panier>
    </v-main>
@endsection