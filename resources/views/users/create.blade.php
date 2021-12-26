@extends('layouts.app')

@section('title')
    <h1><center>Tambah Pengguna</center></h1>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
       <div class="card">
          <div class="card-body">
              <div class="row justify-content-center">
                  <div class="col-lg-8">
                    <form action="{{ route('users.store') }}" method="POST">
                        @csrf
                        <!-- name -->
                        <div class="form-group">
                           <label for="input_user_name" class="font-weight-bold my-2">
                              Name
                           </label>
                           <input id="input_user_name" value="{{ old('name') }}" name="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="" />
                           <!-- error message -->
                            @error('name')
                                <span style="color: red">
                                    <strong>
                                        {{ $message }}
                                    </strong>
                                </span>
                            @enderror
                        </div>
                        <!-- email -->
                        <div class="form-group">
                           <label for="input_user_email" class="font-weight-bold my-2">
                              Email
                           </label>
                           <input id="input_user_email" value="{{ old('email') }}" name="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder=""
                              autocomplete="email" />
                           <!-- error message -->
                           @error('email')
                           <span style="color: red">
                               <strong>
                                   {{ $message }}
                               </strong>
                           </span>
                           @enderror
                        </div>
                        <!-- password -->
                        <div class="form-group">
                           <label for="input_user_password" class="font-weight-bold my-2">
                              Password
                           </label>
                           <input id="input_user_password" name="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder=""
                              autocomplete="new-password" />
                           <!-- error message -->
                           @error('password')
                           <span style="color: red">
                               <strong>
                                   {{ $message }}
                               </strong>
                           </span>
                           @enderror
                        </div>
                        <!-- password_confirmation -->
                        <div class="form-group">
                           <label for="input_user_password_confirmation" class="font-weight-bold my-2">
                              Password confirmation
                           </label>
                           <input id="input_user_password_confirmation" name="password_confirmation" type="password"
                              class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="" autocomplete="new-password" />
                           <!-- error message -->
                           @error('password_confirmation')
                           <span style="color: red">
                               <strong>
                                   {{ $message }}
                               </strong>
                           </span>
                           @enderror
                        </div>
                          <!-- role -->
                          <div class="form-group ">
                            <label for="select_user_role" class="font-weight-bold my-2">
                               Role
                            </label>
                            <select id="select_user_role" name="role" data-placeholder="" class="custom-select w-100 form-control @error('role') is-invalid @enderror">
                                <option value="{{ old('role') }}" selected="selected">Role</option>
                                 @foreach ($roles as $role)
                                     <option value="{{ $role->id }}">{{ $role->name }}</option>
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
                        <div class="float-right my-2">
                           <a class="btn btn-primary px-4 mx-2" href="{{ route('users.index') }}">
                              Kembali
                           </a>
                           <button type="submit" class="btn btn-primary float-right px-4">
                              Simpan
                           </button>
                        </div>
                    </form>
                  </div>
              </div>
          </div>
       </div>
    </div>
</div>
@endsection

