@extends('base')

@section('main')

<div class="row">
        <div class="col-sm-8 offset-sm-2">
                <h1 class="display-3 mgtop">Afegir un candidat</h1>
                <div>
                  @if ($errors->any())
                    <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                    </div><br />
                    @endif

    <form method="post" action="{{route('beneficiary.store')}}">
    @csrf
    <div class="form-group"><label for="name">Nom</label><input class="form-control" type="text"            name="name">
    </div>
    <div class="form-group"><label for="surname">Cognoms</label><input class="form-control" type="text"     name="surname">
    </div>
    <div class="form-group"><label for="dni">DNI</label><input class="form-control" type="char"             name="dni">
    </div>
    <div class="form-group"><label for="birthday">Aniversari</label><input class="form-control" type="date"   name="birthday">
    </div>
    <div class="form-group"><label for="adress">Adreça</label><input class="form-control" type="text"       name="adress">
    </div>
    <div class="form-group"><label for="phone">Telèfon</label><input class="form-control" type="integer"      name="phone">
    </div>
    <div class="form-group"><label for="email">Email</label><input class="form-control" type="text"         name="email">
    </div>
    <button type="submit" class="btn btn-primary-outline">Afegir candidat</button>
    </form>
@endsection