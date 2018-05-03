@extends('crm.layouts.main')
@section('pageClass','inscriptionPage')
@section('content')
<div class="account-pages"></div>
<div class="clearfix"></div>
<div class="wrapper-page">
    <div class="card-box">
        <div class="panel-heading">
            <img src="{{ asset('isolation-crm/images/Isole-Habitat-logo.svg')}}" alt="" class="logo block-center">
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
                        <input class="form-control" type="email" name="email" placeholder="Email">
                    </div>
                </div>
                <div class="btn-group bootstrap-select mb-20">
                    <select class="selectpicker" data-style="btn-success btn-custom" name="fonction">
                        <option value="admin">Admin</option>
                        <option value="secretaire">Secretaire</option>
                        <option value="commercial">Commercial</option>
                        <option value="technicien">Technicien</option>
                    </select>
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
@section('javascript')
    <script>
    // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('.selectpicker').select2();
        });
    </script>
@endsection