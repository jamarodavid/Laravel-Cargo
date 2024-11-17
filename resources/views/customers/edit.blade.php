@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Edit Customer</h6>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/customers/{{ $customer->id }}" method="post">
                @method('put')
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Name</label>
                  <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name" value="{{$customer->name}}">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email</label>
                  <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" value="{{$customer->email}}">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Phone</label>
                  <input name="phone" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone" value="{{$customer->phone}}">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Address</label>
                  <input name="address" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Address" value="{{$customer->address}}">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
        </div>
        </div>
@endsection
