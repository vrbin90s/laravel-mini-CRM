@extends('layouts.app')

@section('content')

<main class="py-5">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header card-title">
              <strong>Edit Company Details</strong>
            </div>           
            <div class="card-body">
              <form action="{{ route('companies.update', $company->id) }}" enctype="multipart/form-data" method="POST">
                @method('PUT')
                @csrf
                @include('companies._form')
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  @endsection

  @section('title', 'CRM App | Edit Company Details')