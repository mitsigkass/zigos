@extends('layouts.frontend')

@section('content')


  <div class="container">


    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h4>Edit Customer</h4>
            <a href="{{ url('customers')}}" class="btn btn-danger float-end">BACK</a>

          </div>
          <div class="card-body">
            <form class="" action="{{ url('update-customer/'.$customer->id)}}" method="post">
              @csrf
              @method('PUT')

              <div class="form-group mb-3">
                <label for="">Name</label>
                <input type="text" name="name" value="{{ $customer->name }}"  class="form-control">
              </div>
              <div class="form-group mb-3">
                <label for="">Gender</label>
                <input type="text" name="gender" value="{{ $customer->gender }}" class="form-control">
              </div>
              <div class="form-group mb-3">
                <label for="">Email</label>
                <input type="text" name="email" value="{{ $customer->email }}" class="form-control">
              </div>
              <div class="form-group mb-3">
                <label for="">Address</label>
                <input type="text" name="address" value="{{ $customer->address }}" class="form-control">
              </div>
              <div class="form-group mb-3">
                <label for="">Date Of Birth</label>
                <input type="text" name="dateofbirth" value="{{ $customer->dateofbirth }}" class="form-control">
              </div>
              <div class="form-group mb-3">
                <label for="">Phonenumbers</label>
                <input type="text" name="phonenumber" value="{{ $customer->phonenumber }}" class="form-control">
              </div>

              <div class="form-group mb-3">
                <button type="submit" name="button" class="btn btn-primary">Update</button>

              </div>

            </form>

          </div>
        </div>
      </div>

    </div>
  </div>


@endsection
