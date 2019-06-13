@extends('base')

@section('main')

<div class="row">
        <div class="col-sm-8 offset-sm-2">
                <h1 class="display-3 mgtop">Afegir una oferta</h1>
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

    <form method="post" action="{{route('offer.store')}}">
    @csrf
    <div class="form-group"><label for="title">Títol</label><input class="form-control" type="text"         name="title">
    </div>
    <div class="form-group"><label for="companyOffer">Empresa</label><input class="form-control"            type="text" name="companyOffer">
    </div>
    <div class="form-group"><label for="description">Descripció</label><input class="form-control"          type="text" name="description">
    </div>
    <div class="form-group"><label for="location">Lloc</label><input class="form-control" type="text"       name="location">
    </div>
    <div class="form-group"><label for="agreementType">Tipus de conveni</label><input                       class="form-control" type="text" name="agreementType">
    </div>
    <div class="form-group"><label for="quantity">Quantitat d'operaris</label><input class="form-control"   type="number" name="quantity">
    </div>
    <div class="form-group"><label for="limitDate">Data</label><input class="form-control"             type="date" name="limitDate">
    </div>
    <div class="form-group"><label for="beneficiary">Contractats</label><input class="form-control"         type="text" name="beneficiary">
    </div>
    <button type="submit" class="btn btn-primary-outline">Afegir oferta</button>
    </form>
@endsection