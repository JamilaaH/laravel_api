@extends('layouts.app')

@section('main')
    <v-main>
        <mes-commandes :commande ="{{$commandes}}"></mes-commandes>
    </v-main>
    {{-- @dump($commandes) --}}
    {{-- @foreach ($commandes as $commande)
        @dump($commande->produits)
    @endforeach--}}
@endsection 