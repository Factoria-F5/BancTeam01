@extends('base')

@section('main')
<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3 mgtop">Candidats</h1>
        <div>
            <a style="margin: 19px;" href="{{ route('beneficiary.create')}}" class="btn btn-primary">Nou candidat</a>
        </div>     
      <table class="table table-striped">
        <thead>
            <tr>
                <td>Nom</td>
                <td>Cognoms</td>
                <td>DNI</td>
                <td>Aniversari</td>
                <td>Adreça</td>
                <td>Telèfon</td>
                <td>Email</td>
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
        @foreach($beneficiaries as $beneficiary)
            <tr>
                <td>{{$beneficiary->name}}</td>
                <td>{{$beneficiary->surname}}</td>
                <td>{{$beneficiary->dni}}</td>
                <td>{{$beneficiary->birthday->format('d/m/Y')}}</td>
                <td>{{$beneficiary->adress}}</td>
                <td>{{$beneficiary->phone}}</td>
                <td>{{$beneficiary->email}}</td>
                <td>
                    <a href="{{ route('beneficiary.edit',$beneficiary->id)}}" class="btn btn-primary">Editar</a>
                </td>
                <td>
                    <form action="{{ route('beneficiary.destroy', $beneficiary->id)}}" method="post">
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