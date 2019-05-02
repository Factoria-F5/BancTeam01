@extends('base')

@section('main')
<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">Beneficiaries</h1>
        <div>
            <a style="margin: 19px;" href="{{ route('beneficiary.create')}}" class="btn btn-primary">New beneficiary</a>
        </div>     
      <table class="table table-striped">
        <thead>
            <tr>
                <td>name</td>
                <td>surname</td>
                <td>dni</td>
                <td>birthday</td>
                <td>adress</td>
                <td>phone</td>
                <td>email</td>
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
        @foreach($benefeciaries as $beneficiary)
            <tr>
                <td>{{$beneficiary->name}}</td>
                <td>{{$beneficiary->surname}}</td>
                <td>{{$beneficiary->dni}}</td>
                <td>{{$beneficiary->birthday}}</td>
                <td>{{$beneficiary->adress}}</td>
                <td>{{$beneficiary->phone}}</td>
                <td>{{$beneficiary->email}}</td>
                <td>
                    <a href="{{ route('beneficiary.edit',$beneficiary->id)}}" class="btn btn-primary">Edit</a>
                </td>
                <td>
                    <form action="{{ route('beneficiary.destroy', $beneficiary->id)}}" method="post">
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