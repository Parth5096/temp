@extends('admin.layouts.home')
@section('password','active')
@section('content')
<main id="main" class="main">

<div class="pagetitle">
  <h1><a href="{{route('dashboard')}}">Dashboard</a></h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="{{route('change.password')}}">Change password</a></li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Change password Management</h5>
          @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
              </div>
              @endif
              @if (session('error'))
              <div class="alert alert-danger">
                {{ session('error') }}
              </div>
              @endif
              @if (session('success'))
              <div class="alert alert-success">
                {{ session('success') }}
              </div>
              @endif
          <!-- Horizontal Form -->
          <form class="form-horizontal" method="POST" action="{{ route('changePasswordPost') }}">
            {{ csrf_field() }}
    
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Current Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" name="current-password" id="inputText">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">New Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" name="new-password" id="inputText">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Confirma Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" name="new-password_confirmation" id="inputText">
              </div>
            </div>
            <div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</section>

</main>
@endsection