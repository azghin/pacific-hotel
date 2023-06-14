<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Download</title>
</head>
<body>
<div class="card d-flex   ">
    <div class="card-body row">
      <h2 class="card-title text-center"> <span class="text-primary">Pacific</span> Hotel</h2> <hr>
      <h4 class="text-center">reservation file <span class="text-danger">Code Resevation </span> 1R</h4> <hr>
      <div class="container">
        
            <div class="mb-3 row">
                <label for="inputName" class="col-4 col-form-label">Name and last name</label>
                <div class="col-8">
                    <p>{{ $user->username }}</p>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputName" class="col-4 col-form-label">Check in</label>
                <div class="col-8">
                    <p>{{ $checkin}}</p>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputName" class="col-4 col-form-label">Check out</label>
                <div class="col-8">
                    <p>{{ $checkout}}</p>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputName" class="col-4 col-form-label">Room</label>
                <div class="col-8">
                    <p>{{ $room}}</p>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputName" class="col-4 col-form-label">Room deatils</label>
                <div class="col-8">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam nostrum, minima ipsam saepe dolorem vel facere. Deserunt blanditiis, aliquam dolores quae fugiat quod laudantium fugit nulla! Nobis minus provident amet.</p>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputName" class="col-4 col-form-label">price</label>
                <div class="col-8">
                    <p>{{ $price}} <span class="text-muted">MAD</span></p>
                </div>
            </div>
            
            <div class="mb-3 row">
                <div class="offset-sm-4 col-sm-8">
                    <p><img src="{{ $qrcodeDataUri }}" alt="QR Code"></p>
                </div>
            </div>
        
      </div>
    </div>
</div>
</body>
</html>