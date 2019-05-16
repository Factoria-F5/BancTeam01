@extends('base')

@section('main')
<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">Offers</h1>
        <div>
            <a style="margin: 19px;" href="{{ route('offer.create')}}" class="btn btn-primary">New offer</a>
        </div>     
      <table class="table table-striped">
        <thead>
            <tr>
                <td>title</td>
                <td>description</td>
                <td>location</td>
                <td>agreementType</td>
                <td>quantity</td>
                <td>limitData</td>
                <td>beneficiary</td>
                <td>companyOffer</td>
                <td colspan = 2>Actions</td>
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
                <td>{{$offer->description}}</td>
                <td>{{$offer->location}}</td>
                <td>{{$offer->agreementType}}</td>
                <td>{{$offer->quantity}}</td>
                <td>{{$offer->limitDate->format('d/m/Y')}}</td>
                <td>{{$offer->beneficiary}}</td>
                <td>{{$offer->companyOffer}}</td>
                <td>
                    <a href="{{ route('offer.edit',$offer->id)}}" class="btn btn-primary">Edit</a>
                </td>
                <td>
                    <form action="{{ route('offer.destroy', $offer->id)}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div>
    </div>
@endsection