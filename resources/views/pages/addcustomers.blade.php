@extends('layouts.frontend')

@section('content')

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">

        @if ($errors->any())
        <ul class="alert alert-warning">
          @foreach ($errors->all() as $error)
          <li> {{ $error }}</li>
          @endforeach
        </ul>
        @endif

        <div class="card">
          <div class="card-header">
            <h4>Add Customer</h4>
            <a href="{{ url('customers')}}" class="btn btn-danger float-end">BACK</a>
          </div>

          <div class="card-body">
            <form class="" action="{{ url('store-customer')}}" method="post">
              @csrf

              <div class="form-group mb-3">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control">
              </div>
              <div class="form-group mb-3">
                <label for="">Gender</label>

              <select name="gender" class="form-control" >

                  <option value="">Select Gender</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="other">Other</option>
                  </select>
              </div>
              <div class="form-group mb-3">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control">
              </div>
              <div class="form-group mb-3">
                <label for="">Address</label>
                <input type="text" name="address" class="form-control">
              </div>
              <div class="form-group mb-3">
                <label for="">Date Of Birth</label>
                <input type="date" name="dateofbirth" class="form-control">
              </div>
              <div class="form-group mb-3">
                <label for="">Phonenumbers</label>
                <input type="text" name="phonenumber" class="form-control">
              </div>

              <div class="form-group mb-3">
                <button type="submit" name="button" class="btn btn-primary">Submit</button>

              </div>

            </form>

          </div>
        </div>
      </div>

    </div>
  </div>


@endsection
