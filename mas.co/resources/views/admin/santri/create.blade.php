@extends('layouts.app')

@section('title', 'Home')

@section('content')
	<section class="content">
        <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Create Data Example</h3>
            </div>
            <!-- /.box-header -->


            <!-- form start -->
            <form class="form-horizontal" action="{{ url('admin/santri') }}" method="post">
              @csrf
              <div class="box-body">

            {{-- menampilkan error validasi --}}
            @if (count($errors) > 0)
              <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
                <div class="form-group">
                  <label for="nama" class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                  </div>
                </div>

                <div class="form-group">
                  <label for="email" class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                  </div>
                </div>

                <div class="form-group">
                  <label for="gender" class="col-sm-2 control-label">Gender</label>
                  <div class="col-sm-10">
                    <input type="radio" id="0" name="gender" value="0"> 
                    <label for="0">Laki - Laki</label>
                    <br>
                    <input type="radio" id="1" name="gender" value="1">
                    <label for="1">Perempuan</label>
                  </div>
                </div>

                <div class="form-group">
                  <label for="password" class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                  </div>
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="{{ url('admin/santri') }}" class="btn btn-default">Cancel</a>
                <button type="submit" class="btn btn-info pull-right">Create</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
          </section>
@endsection