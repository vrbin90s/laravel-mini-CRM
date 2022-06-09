@extends('layouts.app')

@section('title', 'CRM App | Employees')

@section('content')

<main class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
              <div class="card-header card-title">
                <div class="d-flex align-items-center">
                  <h2 class="mb-0">All Employees</h2>
                  <div class="ml-auto">
                    <a href="{{ route('employees.create') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Add New</a>
                  </div>
                </div>
              </div>
            <div class="card-body">
                @include('employees/partials/_filter')
              <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Company</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @if ($message = session('message'))
                        <div class="alert alert-success">{{ $message }}</div>
                    @endif
                    @if ($employees->count())
                        @foreach ($employees as $index => $employee)
                        <tr>
                            <th scope="row">{{ $index + $employees->firstItem() }}</th>
                            <td>{{ $employee->first_name}}</td>
                            <td>{{ $employee->last_name}}</td>
                            <td>{{ $employee->company->name }}</td>
                            <td>{{ $employee->email }}</td>
                            <td>{{ $employee->phone }}</td>
                            <td width="150">
                              <a href="{{ route('employees.show', $employee->id) }}" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a>
                              <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-sm btn-circle btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></a>
                              <a href="{{ route('employees.destroy', $employee->id) }}" class="btn-delete btn btn-sm btn-circle btn-outline-danger" title="Delete"><i class="fa fa-times"></i></a>
                            </td>
                          </tr>
                        @endforeach
                        @include('layouts._delete-form')
                    @endif
                </tbody>
              </table> 

              {{ $employees->appends(request()->only('company_id'))->links() }}

            </div>
          </div>
        </div>
      </div>
    </div>
  </main>



@endsection