@extends('base')
@section('main')
    <a href="{{ route('offer.create') }}">create</a>
    <table class="table">
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
            </tr>
        </thead>
        <tbody>
        @foreach($offers as $offer)
            <tr>
                <td>{{$offer->title}}</td>
                <td>{{$offer->description}}</td>
                <td>{{$offer->location}}</td>
                <td>{{$offer->agreementType}}</td>
                <td>{{$offer->quantity}}</td>
                <td>{{$offer->limitData}}</td>
                <td>{{$offer->beneficiary}}</td>
                <td>{{$offer->companyOffer}}</td>
            </tr>
        @endforeach
        </tbody>
        
    
    </table>
@endsection