@extends('layouts.Userbody')

@section('content')
    <section class="table-responsive col-8 text-center">
        <table class="table table-striped table-hover table-borderless table-primary align-middle">
            <caption>Rooms</caption>
            <thead class="table-light">
                <tr>
                    <th>Room Number</th>
                    <th>Type</th>
                    <th>Capacity</th>
                    <th>Price per night</th>
                    <th>Operation</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @isset($rooms)
                    @foreach($rooms as $room)
                        <tr class="table-primary">
                            <td scope="row">{{ $room->room_number }}</td>
                            <td>{{ $room->type }}</td>
                            <td>{{ $room->capacity }}</td>
                            <td>{{ $room->price_per_night }}</td>
                            <td>
                                <a href="#" class="btn btn-primary col-3"><i class="fa fa-light fa-eye"></i></a>
                                <a href="#" class="col-3" ><button class="editbtn btn btn-success " data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-regular fa-pen-to-square"></i></button></a>
                                <a href="#" class="btn btn-danger col-3"><i class="fa fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                @endisset
            </tbody>
        </table>

        <!-- modal -->
        <div class="modal fedal " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog odal-dialog-scrollable modal-dialog-top modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Categorie</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body justify-content-center">
                    <form action="" method="post" class="form-card" enctype="multipart/form-data">
                        @csrf
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-12 flex-column d-flex"> 
                                <label class="form-control-label px-3">image<span class="text-danger"> *</span></label> 
                                <input type="file" id="photo" name="photo"  > 
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> 
                                <label class="form-control-label px-3">Room Number<span class="text-danger"> *</span></label> 
                                <input type="text" id="fname" name="room_number" placeholder="Enter your first name" > 
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> 
                                <label class="form-control-label px-3">Type<span class="text-danger"> *</span></label> 
                                <input type="text" id="lname" name="type" placeholder="Enter your last name" > 
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> 
                                <label class="form-control-label px-3">Capacity<span class="text-danger"> *</span></label> 
                                <input type="text" id="email" name="capacity" placeholder="" > 
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> 
                                <label class="form-control-label px-3">Price per night<span class="text-danger"> *</span></label> 
                                <input type="text" id="mob" name="price" placeholder="" > 
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> 
                                <label class="form-control-label px-3">Hotel<span class="text-danger"> *</span></label> 
                                <select class="form-control-label px-3" name="hotel" id="">
                                <option value="">1</option>
                                </select>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="form-group col-sm-12"> <button type="submit" class="btn-block btn-primary">Add</button> </div>
                        </div>
                    </form>
                    </div>
                </div>
                </div>
        </div>
    </section>

    <script>
    $(document).ready(function () {
        $(document).on('click' , '.editbtn' , function() {
            var idCat = $(this).val();
            
            $('#exampleModal').modal('show');
            
            $.ajax({
                type: "GET",
                url: "/editCat/"+idCat,
                success: function (response){
                    //console.log(response);
                    $("#id_cat").val(response.categorie.id);
                    $("#name_cat").val(response.categorie.name);

                }
            })
        })
    })
    </script>
    
@endsection