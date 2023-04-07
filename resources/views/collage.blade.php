<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Collage Form</title>
</head>
<body>
<div class="container p-5">
        <h3>Collage Form</h3>
        @include('layout.message.alert')
        <div class="container">
        {{-- <form  method="post" action="{{ route('collage.stores') }}"> --}}
            <form>    
                @csrf
                <div class="row">
                    <div class="col">
                      <label for="">Name</label>
                      <input type="text" name="name" class="form-control" placeholder="Enter name here..">
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="col">
                      <label for="">Email Id</label>
                      <input type="text" name="email" class="form-control" placeholder="Enter email here..">
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                </div>
                <div class="row">
                </div>
                <div class="row">
                    <div class="col">
                      <label for="">Passowrd</label>
                      <input type="password" name="password" class="form-control" placeholder="Enter passowrd here..">
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                    </div>
                    <div class="col">
                      <label for="">Confirm Password</label>
                      <input type="password" name="confirmpassword" class="form-control" placeholder="Enter confirm passowrd here..">
                            @if ($errors->has('confirmpassword'))
                                <span class="text-danger">{{ $errors->first('confirmpassword') }}</span>
                            @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                    </div>
                    <div class="col">
                        <div class="my-2 p-3">
                            <button type="submit" class="btn btn-success w-100">Submit</button>
                        </div>
                    </div>
                    <div class="col">
                    </div>
                </div>
            </form>
        </div>
    </div>  
</body>
</html>