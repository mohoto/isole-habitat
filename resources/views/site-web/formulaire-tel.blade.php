@extends('site-web.layouts.main')
@section('pageTitle', 'isolez votre maison pour 1 euro')
@section('pageClass', 'page_accueil')
@section('content')

   {{--<form action="{{ route('site-web.formulaire-rappel') }}" method="post" class="p-y-3 p-x-2" novalidate>
       @if (count($errors) > 0)
           @foreach ($errors->all() as $error)
               <div class="alert alert-danger">{{ $error }}</div>
           @endforeach
       @endif
       --}}{{--@if(Session::has('success'))
           toastr.success("{{ Session::get('success') }}")
       @endif--}}{{--
        {{ csrf_field() }}
        <input type="text" name="rappel_civilite" class="form-control" placeholder="civilité" value="{{ old('rappel_civilite') }}">
        <input type="text" name="rappel_nom" class="form-control" placeholder="nom" value="{{ old('rappel_nom') }}">
        <input type="text" name="rappel_telephone" class="form-control" placeholder="tel" value="{{ old('rappel_telephone') }}">
        <input type="text" name="rappel_heure_modal" class="form-control" placeholder="heure" value="{{ old('rappel_heure_modal') }}">
        <input type="text" name="civilite_modal" class="form-control" placeholder="civilité" value="{{ old('civilite') }}">
        <input type="submit" class="btn btn-success" value="Inscription">
    </form>--}}

@endsection