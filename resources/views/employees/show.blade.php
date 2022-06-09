@extends('layouts.app')

@section('content')

<main class="py-5">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header card-title">
              <strong>Contact Details</strong>
            </div>           
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <label for="first_name" class="col-md-3 col-form-label">First Name</label>
                    <div class="col-md-9">
                      <p class="form-control-plaintext text-muted">{{ $employee->first_name }}</p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="last_name" class="col-md-3 col-form-label">Last Name</label>
                    <div class="col-md-9">
                      <p class="form-control-plaintext text-muted">{{ $employee->last_name }}</p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="email" class="col-md-3 col-form-label">Email</label>
                    <div class="col-md-9">
                      <p class="form-control-plaintext text-muted">{{ $employee->email }}</p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="phone" class="col-md-3 col-form-label">Phone</label>
                    <div class="col-md-9">
                      <p class="form-control-plaintext text-muted">{{ $employee->phone }}</p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="company_id" class="col-md-3 col-form-label">Company</label>
                    <div class="col-md-9">
                      <p class="form-control-plaintext text-muted">{{ $employee->company->name }}</p>
                    </div>
                  </div>
                  <hr>
                  <div class="form-group row mb-0">
                    <div class="col-md-9 offset-md-3">
                        <a href="{{ route('employees.edit', $employee->id)}}" class="btn btn-info">Edit</a>
                        <a href="{{ route('employees.destroy', $employee->id) }}" class="btn-delete btn btn-outline-danger">Delete</a>
                        <a href="{{ route('employees.index')}}" class="btn btn-outline-secondary">Cancel</a>
                      @include('layouts._delete-form')
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  @endsection

  @section('title', 'CRM App | Employee Details')