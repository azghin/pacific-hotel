@extends('layouts.Userbody')
@section('datatable')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

@endsection
@section('content')
<h4>Users</h4>
    <div class="table-responsive">
        <table id="myTable" class="table  table-hover display">
            <thead class="table-light">
                <tr>
                    <th>#Id</th>
                    <th>Usrname</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Date Create</th>
                </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach($users as $user)
                        @if( $user->user_type  == "client")
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone_number }}</td>
                            <td>{{ $user->created_at }}</td>
                        </tr>
                        @endif
                    @endforeach
                </tbody>
                <tfoot>
                    
                </tfoot>
        </table>
    </div>

    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
    
@endsection

