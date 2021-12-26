@extends('layouts.app')

@section('title')
    <h1><center>Tambah Hak Akses</center></h1>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
       <div class="card">
          <form action="{{ route('akses.store') }}" method="POST">
              @csrf
             <div class="card-body">
                <div class="form-group">
                   <label for="input_role_name" class="font-weight-bold">
                      Nama Hak Akses
                   </label>
                   <input id="input_role_name" value="" name="name" type="text" class="form-control @error('name') is-invalid @enderror"/>
                   @error('name')
                        <span class="invalid-feedback" style="color: red">
                            <strong>{{ $message }}</strong>
                        </span>
                   @enderror
                </div>
                <!-- permission -->
                <div class="form-group">
                   <label for="input_role_permission" class="font-weight-bold">
                      Hak Akses
                   </label>
                   <div class="form-control overflow-auto h-100  @error('permissions') is-invalid @enderror " id="input_role_permission">
                      <div class="row justify-content-center">
                         <!-- list manage name:start -->
                         @foreach ($authorities as $manageName => $permissions)
                         <div class="col-md-3">
                            <ul class="list-group mx-1">
                               <li class="list-group-item bg-dark text-white">
                                   {{ $manageName }}
                               </li>
                               <!-- list permission:start -->
                               @foreach ($permissions as $permission)
                               <li class="list-group-item">
                                  <div class="form-check">
                                      @if (old('permissions'))
                                        <input id="{{ $permission }}" name="permissions[]"
                                        class="form-check-input" type="checkbox" value="{{ $permission }}"
                                        {{ in_array($permission, old('permissions')) ? "checked" : null }}>
                                      @else
                                        <input id="{{ $permission }}" name="permissions[]"
                                        class="form-check-input" type="checkbox" value="{{ $permission }}">
                                      @endif
                                     <label for="{{ $permission }}" class="form-check-label">
                                        {{ $permission }}
                                     </label>
                                  </div>
                               </li>
                               @endforeach
                               <!-- list permission:end -->
                            </ul>
                        </div>
                        @endforeach
                         <!-- list manage name:end  -->
                      </div>
                      <div class="float-right my-4">
                    </div>
                </div>
                @error('permissions')
                        <span class="invalid-feedback" style="color: red">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                <a class="btn btn-primary px-4 my-3" href="{{ route('akses.index') }}">
                   Kembali
                </a>
                <button type="submit" class="btn btn-primary px-4">
                   Simpan
                </button>
                </div>
             </div>
          </form>
       </div>
    </div>
</div>
@endsection
