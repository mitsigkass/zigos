@extends('layouts.frontend')

@section('content')

<h1>Welcome to Customers Page</h1>
<p>This is where the customers are displayed</p>


<div class="container">
  <div class="row">
    <div class="col-md-12 mt-4 text-center">

      @if(session('status'))
      <div class="alert alert-success"> {{session('status')}}</div>
      @endif

      <div class="card">
        <div class="card-header">
          <h4>Fetch Data</h4>
          <a href="{{ url('add-customer')}}"class="btn btn-primary float-end">Add new customer</a>
          <div class="row">
            <div class="col-lg-3">

                      <form class="input-group custom-search-form" type="get" action="{{ url('/search') }}">
                      <input type="text" class="form-control" name="query"type="search" placeholders="Search" aria-label="Search">
                      <span class="input-group-btn">


                      <button class="btn btn-default" type="submit">Search</button>
                     </button>
                     </span>
                     </form>
                </div>
          </div>
        </div>
        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phonenumbers</th>
                <th>Date Of Birth</th>
                <th>Edit</th>
                @if(Auth::user()->status=='1')
                <th>Delete</th>
                  @endif

              </tr>
            </thead>
            <tbody>
              @foreach ($customer as $cusdata)
              <tr>
                <th> {{ $cusdata->id}} </th>
                <td>{{ $cusdata->name}} </td>
                <td>{{ $cusdata->gender}} </td>
                <td>{{ $cusdata->email}} </td>
                <td>{{ $cusdata->address}} </td>
                <td>{{ $cusdata->phonenumber}} </td>
                <td>{{ $cusdata->dateofbirth}} </td>
                <td> <a href="{{ url('edit-customer/'.$cusdata->id) }}" class="btn btn-primary">Edit</a> </td>


                  @if(Auth::user()->status=='1')
                  <td>     <a href="{{ url('delete-customer/'.$cusdata->id) }}" class="btn btn-danger">Delete</a> </td>
                    @endif



              </tr>
              @endforeach


            </tbody>

          </table>

        </div>


      </div>

    </div>

  </div>

</div>

@endsection
