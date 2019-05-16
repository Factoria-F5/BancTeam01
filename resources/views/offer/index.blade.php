@extends('base')

@section('main')
<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">Ofertes</h1>
        <div>
            <a style="margin: 19px;" href="{{ route('offer.create')}}" class="btn btn-primary">Nova oferta</a>
        </div>     
      <table class="table table-striped">
        <thead>
            <tr>
                <td>Títol</td>
                <td>Empresa</td>
                <td>Descripció</td>
                <td>Lloc</td>
                <td>Tipo de Convenio</td>
                <td>Quantitat d'operaris</td>
                <td>Data</td>
                <td>Contractats</td>
                <td colspan = 2>Accions</td>
            </tr>
        </thead>
        <div class="col-sm-12">
    
                @if(session()->get('success'))
                  <div class="alert alert-success">
                    {{ session()->get('success') }}  
                  </div>
                @endif
              </div>
        <tbody>
        @foreach($offers as $offer)
            <tr>
                <td>{{$offer->title}}</td>
                <td>{{$offer->companyOffer}}</td>
                <td>{{$offer->description}}</td>
                <td>{{$offer->location}}</td>
                <td>{{$offer->agreementType}}</td>
                <td>{{$offer->quantity}}</td>
                <td>{{$offer->limitDate->format('d/m/Y')}}</td>
                <td>{{$offer->beneficiary}}</td>
                <td>
                    <a href="{{ route('offer.edit',$offer->id)}}" class="btn btn-primary">Editar</a>
                </td>
                <td>
                    <form action="{{ route('offer.destroy', $offer->id)}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger" type="submit">Esborrar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div>
    </div>
@endsection