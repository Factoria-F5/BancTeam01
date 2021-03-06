@extends('base') 

@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3 mgtop">Editar un candidat</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('beneficiary.update', $beneficiary->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group"><label for="name">Nom</label><input class="form-control" type="text"    name="name" value="{{ $beneficiary->name }}">
            </div>
            <div class="form-group"><label for="surname">Cognoms</label><input class="form-control"         type="text" name="surname" value="{{ $beneficiary->surname }}">
            </div>
            <div class="form-group"><label for="dni">DNI</label><input class="form-control" type="char"     name="dni" value="{{ $beneficiary->dni }}"></div>
            <div class="form-group"><label for="birthday">Aniversari</label><input class="form-control"     type="date" name="birthday" value="{{ $beneficiary->getDateForInput() }}">
            </div>
            <div class="form-group"><label for="adress">Adreça</label><input class="form-control"           type="text" name="adress" value="{{ $beneficiary->adress }}">
            </div>
            <div class="form-group"><label for="phone">Telèfon</label><input class="form-control"           type="integer" name="phone" value="{{ $beneficiary->phone }}">
            </div>
            <div class="form-group"><label for="email">Email</label><input class="form-control"             type="text" name="email" value="{{ $beneficiary->email }}">
            </div>
            <button type="submit" class="btn btn-primary">Editar</button>
        </form>
    </div>
</div>
@endsection