@extends('layouts.app')

@section('title')
    <h1><center>Edit Pengguna</center></h1>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
       <div class="card">
           @include('components.card-header-menu')
          <div class="card-body">
              <div class="row justify-content-center">
                  <div class="col-lg-8">
                    <form action="{{ route('users.update',['user' => $user]) }}" method="POST">
                        @method('put')
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                  <!-- name -->
                                <div class="form-group">
                                   <center>
                                        <label for="input_user_name" class="font-weight-bold my-2">
                                            Name
                                        </label>
                                   </center>
                                    <input id="input_user_name" value="{{ old('name', $user->name) }}" name="name" type="text" class="form-control  @error('name') is-invalid @enderror" placeholder="" readonly />
                                    <!-- error message -->
                                    @error('name')
                                        <span style="color: red">
                                            <strong>
                                                {{ $message }}
                                            </strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <!-- email -->
                                <div class="form-group">
                                   <center>
                                        <label for="input_user_email" class="font-weight-bold my-2">
                                            Email
                                        </label>
                                   </center>
                                    <input id="input_user_email" value="{{ old('email', $user->email) }}" name="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder=""
                                    autocomplete="email" readonly />
                                    <!-- error message -->
                                    @error('email')
                                    <span style="color: red">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                          <!-- role -->
                          <div class="form-group ">
                            <center>
                                <label for="select_user_role" class="font-weight-bold my-2">
                                    Role
                                 </label>
                            </center>
                            <select id="select_user_role" name="role" data-placeholder="" class="custom-select w-100 input form-control @error('role') is-invalid @enderror">
                                <option value="{{ old('role') }}" selected disabled>Role</option>
                                 @foreach ($roles as $role)
                                     <option value="{{ $role->id }}" selected>{{ $role->name }}</option>
                                 @endforeach
                            </select>
                            <!-- error message -->
                            @error('role')
                             <span style="color: red">
                                 <strong>
                                     {{ $message }}
                                 </strong>
                             </span>
                             @enderror
                         </div>
                         <div class="container">
                            <div class="d-grid my-3 gap-2 d-md-flex justify-content-md-end">
                                <a class="btn btn-primary px-4" href="{{ route('users.index') }}">Kembali</a>
                                <button type="submit" class="btn btn-primary px-4">Simpan</button>
                            </div>
                        </div>
                    </form>
                  </div>
              </div>
          </div>
       </div>
    </div>
</div>
@endsection
