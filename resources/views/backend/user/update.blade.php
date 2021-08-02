@extends('backend.main')

@section('contact')

<center class="mb-5">
    <h2>Update</h2>
</center>

<form action="/admin/user/update" method="POST" enctype="multipart/form-data">
    @csrf

    <input hidden name="id" type="text" class="form-control" value="{{ $user->id }}">

    <div class="form-group">
        <label>User name</label>

        <input name="name" type="text" class="form-control" value="{{ $user->name }}">
    </div>
    <div class="form-group">
        <label>User email</label>

        <input name="email" type="text" class="form-control" value="{{ $user->email }}">
    </div>
    <div class="form-group">
        <label>User type</label>
        <select class="form-control" name="user_type">
            <option>{{ $user->user_type }}</option>
            @if($user->user_type == 'user')
            <option>admin</option>
            @else
            <option>user</option>
            @endif
        </select>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a class="btn btn-danger" href="/admin/user">Cancel</a>
</form>
@endsection