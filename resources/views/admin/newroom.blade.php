@extends('layouts.Userbody')
@section('content')
    
    
    
    {{-- <div class="mb-3">
        <form action="">
            <label for="" class="form-label">Hotel id</label>
            <input type="hidden" name="" id="" class="form-control" placeholder="" aria-describedby="helpId" value="1" >
            <small id="helpId" class="text-muted">Help text</small>
            <label for="" class="form-label">room_number</label>
            <input type="text" name="" id="" class="form-control-sm" placeholder="" aria-describedby="helpId">
            <small id="helpId" class="text-muted">Help text</small>
            <br>
            <label for="" class="form-label">Type</label>
            <input type="text" name="" id="" class="form-control-sm" placeholder="" aria-describedby="helpId">
            <small id="helpId" class="text-muted">Help text</small>
            <br>
            <label for="" class="form-label">Capacity</label>
            <input type="text" name="" id="" class="form-control-sm" placeholder="" aria-describedby="helpId">
            <small id="helpId" class="text-muted">Help text</small>
            <br>
            <label for="" class="form-label">Price per night</label>
            <input type="text" name="" id="" class="form-control-sm" placeholder="" aria-describedby="helpId">
            <small id="helpId" class="text-muted">Help text</small>
            <hr>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div> --}}


    <div class="card">
        <h5 class="text-center mb-4">Add Room Form</h5>
        <form class="form-card" >
            <div class="row justify-content-between text-left">
                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Room Number<span class="text-danger"> *</span></label> <input type="text" id="fname" name="fname" placeholder="Enter your first name" onblur="validate(1)"> </div>
                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Type<span class="text-danger"> *</span></label> <input type="text" id="lname" name="lname" placeholder="Enter your last name" onblur="validate(2)"> </div>
            </div>
            <div class="row justify-content-between text-left">
                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Capacity<span class="text-danger"> *</span></label> <input type="text" id="email" name="email" placeholder="" onblur="validate(3)"> </div>
                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Price per night<span class="text-danger"> *</span></label> <input type="text" id="mob" name="mob" placeholder="" onblur="validate(4)"> </div>
            </div>
            {{-- <div class="row justify-content-between text-left">
                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Job title<span class="text-danger"> *</span></label> <input type="text" id="job" name="job" placeholder="" onblur="validate(5)"> </div>
            </div>
            <div class="row justify-content-between text-left">
                <div class="form-group col-12 flex-column d-flex"> <label class="form-control-label px-3">What would you be using Flinks for?<span class="text-danger"> *</span></label> <input type="text" id="ans" name="ans" placeholder="" onblur="validate(6)"> </div>
            </div> --}}
            <div class="row justify-content-end">
                <div class="form-group col-sm-6"> <button type="submit" class="btn-block btn-primary">Request a demo</button> </div>
            </div>
        </form>
    </div>

    <style>
        body{color: #000;overflow-x: hidden;height: 100%;background-image: url("https://i.imgur.com/GMmCQHC.png");background-repeat: no-repeat;background-size: 100% 100%}.card{padding: 30px 40px;margin-top: 60px;margin-bottom: 60px;border: none !important;box-shadow: 0 6px 12px 0 rgba(0,0,0,0.2)}.blue-text{color: #00BCD4}.form-control-label{margin-bottom: 0}input, textarea, button{padding: 8px 15px;border-radius: 5px !important;margin: 5px 0px;box-sizing: border-box;border: 1px solid #ccc;font-size: 18px !important;font-weight: 300}input:focus, textarea:focus{-moz-box-shadow: none !important;-webkit-box-shadow: none !important;box-shadow: none !important;border: 1px solid #00BCD4;outline-width: 0;font-weight: 400}.btn-block{text-transform: uppercase;font-size: 15px !important;font-weight: 400;height: 43px;cursor: pointer}.btn-block:hover{color: #fff !important}button:focus{-moz-box-shadow: none !important;-webkit-box-shadow: none !important;box-shadow: none !important;outline-width: 0}
    </style>
    

    
@endsection