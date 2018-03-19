@extends('crm.layouts.main')
@section('pageClass','inscriptionPage')
@section('content')
<div class="account-pages"></div>
<div class="clearfix"></div>
<div class="wrapper-page">
    <div class="card-box">
        <div class="panel-heading">
            <h3 class="text-center"> Sign Up to <strong class="text-custom">UBold</strong> </h3>
        </div>
        @if (count($errors) > 0)
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
        @endif
        <div class="p-20">
            <form class="form-horizontal m-t-20" method="post" action="">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="col-12">
                        <input class="form-control" type="text" name="name" placeholder="Prénom">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-12">
                        <input class="form-control" type="password" name="password" placeholder="Mot de passe">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-12">
                        <input class="form-control" type="password" name="passwordConfirm" placeholder="Confirmer mot de passe">
                    </div>
                </div>
                <div class="form-group text-center m-t-40">
                    <div class="col-12">
                        {{--<button class="btn btn-success btn-block text-uppercase waves-effect waves-light" type="submit">
                            Enregitrer
                        </button>--}}
                        <input type="submit" class="btn btn-success" value="Connexion">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection