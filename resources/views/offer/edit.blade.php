@extends('base') 

@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3 mgtop">Editar una oferta</h1>

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
    
        <form method="post" action="{{ route('offer.update', $offer->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group"><label for="title">Títol</label><input class="form-control"             type="text" name="title" value="{{ $offer->title }}">
            </div>
            <div class="form-group"><label for="companyOffer">Empresa</label><input class="form-control"    type="text" name="companyOffer" value="{{ $offer->companyOffer }}">
            </div>
            <div class="form-group"><label for="description">Descripció</label><input                       class="form-control" type="text" name="description" value="{{ $offer->description }}">
            </div>
            <div class="form-group"><label for="location">Lloc</label><input class="form-control"           type="text" name="location" value="{{ $offer->location }}">
            </div>
            <div class="form-group"><label for="agreementType">Tipus de conveni</label><input               class="form-control" type="text" name="agreementType" value="{{ $offer->agreementType }}">
            </div>
            <div class="form-group"><label for="quantity">Quantitat d'operaris</label><input                class="form-control" type="number" name="quantity" value="{{ $offer->quantity }}">
            </div>
            <div class="form-group"><label for="limitDate">Data</label><input class="form-control"          type="date" name="limitDate" value="{{ $offer->getDateForInput() }}">
            </div>
            <div class="form-group"><label for="beneficiary">Contactats</label><input                       class="form-control" type="text" name="beneficiary" value="{{ $offer->beneficiary }}">
            </div>
            <button type="submit" class="btn btn-primary">Editar</button>
        </form>
    </div>
</div>
@endsection