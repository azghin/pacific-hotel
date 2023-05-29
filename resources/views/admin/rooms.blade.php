@extends('layouts.Userbody')
@section('content')
    <div class="table-responsive">
        <table class="table table-striped table-hover table-borderless table-primary align-middle">
            <thead class="table-light">
                <caption>Rooms</caption>
                <tr>
                    <th>Room Number</th>
                    <th>Type</th>
                    <th>Capacity</th>
                    <th>Price per night</th>
                    <th>Operation</th>
                </tr>
                </thead>
                <tbody class="table-group-divider">
                    <tr class="table-primary" >
                        <td scope="row">Item</td>
                        <td>Item</td>
                        <td>Item</td>
                        <td>Item</td>
                        <td><a href="" class="btn btn-primary">Update</a></td>
                    </tr>
                    <tr class="table-primary">
                        <td scope="row">Item</td>
                        <td>Item</td>
                        <td>Item</td>
                        <td>Item</td>
                        <td><a href="" class="btn btn-primary">Update</a></td>
                    </tr>
                </tbody>
                <tfoot>
                    
                </tfoot>
        </table>
    </div>

@endsection