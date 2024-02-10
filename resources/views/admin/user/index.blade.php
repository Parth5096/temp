@extends('admin.layouts.home')
@section('user','active')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1><a href="{{ route('dashboard')}}">Dashboard</a></h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="{{ route('user')}}">User Management</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">User Management</h5>
              <!-- <a href="{{ route('user.create') }}"class="btn btn-primary float-right"><i class="fa fa-plus"></i></a> -->
              <!-- Table with stripped rows -->
              <table class="table datatable table-bordered table-striped">
                <thead>
                 <tr>
                    <th>S.No</th>
                    <th>Email</th>
                    <th>Mobile No</th>
                    <th>Status</th>
                    <th>Action</th>
                 </tr>
                </thead>
                <tbody>
                <?php $i = 0 ?>
                   @foreach($records as $data)
                  <?php $i++ ?>
                  <tr>
                   <td>{{$i}}</td>
                   <td>{{$data->email}}</td>
                   <td>{{$data->phone}}</td>
                   <td>
                       @if($data->status == 0)
                          <a href="{{ route('user.status',$data->id) }}" class="btn btn-success">Active</a>
                        @else
                          <a href="{{ route('user.status',$data->id) }}" class="btn btn-info">Inactive</a>
                       @endif
                   </td>
                   <td>
                      <a href="{{ route('user.delete',$data->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                   </td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main>
@endsection