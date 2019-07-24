@extends('layouts.main')
@section('content')
  
			<p><br><br></p>
			<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit User') }}</div> 
                <div class="card-body">
                    <form method="POST" action="">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}*</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" 
                                value="{{$uid->name}}" required autocomplete="name" autofocus>
 
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Mobile No') }}*</label>

                            <div class="col-md-6">
                                <input id="uid" type="text" class="form-control" name="uid" 
                                value="{{ $uid->id}}" maxlength="10" required autofocus>
 
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$uid->email}}"  autocomplete="email"> 
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>

                            <div class="col-md-6">
                                <select name="role" >
                                    @if($uid->role == 'user')
                                    <option value="user" label="user" selected="selected">User</option>
                                    <option value="admin" label="admin">Admin</option>
                                    @else
                                    <option value="user" label="user">User</option>
                                    <option value="admin" label="admin" selected="selected">Admin</option> 
                                    @endif
                                </select>
                            </div>
                        </div> 

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection