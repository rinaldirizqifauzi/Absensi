@extends('layouts.app')

@section('title')
    <h1><center>Edit Pengguna</center></h1>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
       <div class="card">
          <div class="card-body">
              <div class="row justify-content-center">
                  <div class="col-lg-8">
                    <form action="{{ route('users.update',['user' => $user]) }}" method="POST">
                        @method('put')
                        @csrf
                        <!-- name -->
                        <div class="form-group">
                           <label for="input_user_name" class="font-weight-bold my-2">
                              Name
                           </label>
                           <input id="input_user_name" value="{{ old('name', $user->name) }}" name="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="" readonly />
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
                          <!-- role -->
                          <div class="form-group ">
                            <label for="select_user_role" class="font-weight-bold my-2">
                               Role
                            </label>
                            <select id="select_user_role" name="role" data-placeholder="" class="custom-select w-100 form-control @error('role') is-invalid @enderror">
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
                        <div class="float-right my-2">
                           <a class="btn btn-warning px-4 mx-2" href="{{ route('users.index') }}">
                              Back
                           </a>
                           <button type="submit" class="btn btn-primary float-right px-4">
                              Save
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
