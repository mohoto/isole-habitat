@extends('crm.layouts.main')
@section('pageClass','connexionPage')
@section('content')
<div class="wrapper-page">
    <div class="card-box">
        <div class="panel-heading logo">
            <img src="{{ asset('isolation-crm/images/Isole-Habitat-logo.svg')}}" alt="" class="logo">
        </div>
        @if (count($errors) > 0)
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
        @endif
        <div class="p-20">
            <form class="form-horizontal m-t-20" method="post" action="">
                {{ csrf_field() }}
                <div class="form-group ">
                    <div class="col-12">
                        <input class="form-control" type="text" name="name" placeholder="Prenom" value="{{ old('name') }}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-12">
                        <input class="form-control" type="password" name="password" placeholder="Mot de passe">
                    </div>
                </div>
                <div class="form-group ">
                    <div class="col-12">
                        <div class="checkbox checkbox-primary">
                            <input id="checkbox-signup" type="checkbox">
                            <label for="checkbox-signup">
                                Se rappeler de moi
                            </label>
                        </div>

                    </div>
                </div>
                <div class="form-group text-center m-t-40">
                    <div class="col-12">
                        <button class="btn btn-success btn-block text-uppercase waves-effect waves-light"
                                type="submit">Connexion
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection