@extends('backend.main')

@section('contact')

<!-- <a href="" class="btn btn-success float-right mb-3"><i class="fa fa-plus"></i> New</a> -->

<table id="dtBasicExample" class="mt-3 table table-striped table-bordered table-sm" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th class="th-sm">Name</th>
            <th class="th-sm">Email</th>
            <th class="th-sm">User_type</th>
            <th class="th-sm"></th>
        </tr>
    </thead>
    <tbody>
        @foreach( $users as $user )
        <tr>
            <td class="h6" >{{ $user->name }}</td>
            <td class="h6">{{ $user->email }}</td>
            <td>{{ $user->user_type }}</td>
            <td>
                <a href='user/update/{{ $user->id }}' class="h3" ><i class="text-success fa fa-pencil"></i></a>&nbsp
                <!-- <a href='user/detail/{{ $user->id }}' class="h3" ><i class="text-warning fa fa-info"></i></a>&nbsp -->
                <a href='user/delete/{{ $user->id }}' class="h3" ><i class="text-danger fa fa-trash"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>User_type</th>
            <th></th>
        </tr>
    </tfoot>
</table>

{{ $users->links() }}


@endsection