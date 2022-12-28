@extends('apps.master')

@section('master')

<div class="gray py-3">
    <div class="container">
        <div class="row">
            <div class="colxl-12 col-lg-12 col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Inscription</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>


<section class="middle">
    <div class="container">
        <div class="row align-items-start justify-content-between">

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mfliud">
                <form class="border p-3 rounded" action="{{route('register')}}" method="POST">
                    @csrf

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Nom d'utiliateur *  @error('name')
                                <small  class="text-danger">{{$message}}</small>

                            @enderror</label>
                            <input type="text" class="form-control" placeholder="Entrer votre nom d'utilisateur" name="name">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Telephone  @error('phone')
                                <small  class="text-danger">{{$message}}</small>

                            @enderror</label>
                            <input type="tel" class="form-control" placeholder="Votr Telephone" name="phone">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Email *</label>
                        <input type="email" class="form-control" placeholder="Votre E-mail*" name="email">
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Votre mot de passe *</label>
                            <input type="password" class="form-control" placeholder="Password*" name="password">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Confirmer votre mot de passe *</label>
                            <input type="password" class="form-control" placeholder="Confirm Password*" name="password_confirmation">
                        </div>
                    </div>

                    <div class="form-group">
                        <p>En enregistrant vos coordonnées, vous acceptez nos conditions générales et notre politique de confidentialité et de cookies.</p>
                    </div>

                    <div class="form-group">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="flex-1">
                                <input id="ddd" class="checkbox-custom" name="ddd" type="checkbox">
                                <label for="ddd" class="checkbox-custom-label">Je veux me inscrire à la Newsletter !</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-md full-width theme-bg text-light fs-md ft-medium">Créer votre compte</button>
                    </div>
                </form>
            </div>


            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mfliud">
                <form class="border p-3 rounded">
                <div class="bnr_thumb position-relative">
                    <img src="assets/img/intro.png" class="img-fluid bnr_img" alt="">
                </div>
                    </form>

            </div>

        </div>
    </div>
</section>


@endsection
