@extends('layouts.app')

@section('main')
    <v-main>
        <mon-shop :produits ="{{$mesProduits}}"></mon-shop>

    </v-main>
@endsection