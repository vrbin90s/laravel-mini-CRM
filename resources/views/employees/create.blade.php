@extends('layouts.app')

@section('content')

<main class="py-5">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header card-title">
              <strong>Add New Employee</strong>
            </div>           
            <div class="card-body">
              <form action="{{ route('employees.store') }}" method="POST">
                @csrf
                @include('employees._form')
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  @endsection

  @section('title', 'CRM App | Add New Employee')