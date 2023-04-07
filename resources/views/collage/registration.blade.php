<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        /* .card-registration .select-input.form-control[readonly]:not([disabled]) {
            font-size: 1rem;
            line-height: 2.15;
            padding-left: .75em;
            padding-right: .75em;
        }
        .card-registration .select-arrow {
            top: 13px;
        } */
    </style>
</head>
<body>
    <section class="h-100 bg-dark">
      @include('../layout.message.alert');
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
              <div class="card card-registration my-4">
                <form method="POST" action="{{route('collage.ragistration')}}">    
                  @csrf
                <div class="row g-0">
                  <div class="col-xl-6 d-none d-xl-block">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp"
                      alt="Sample photo" class="img-fluid"
                      style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                  </div>
                  <div class="col-xl-6">
                    <div class="card-body p-md-5 text-black">
                      <h3 class="mb-5 text-uppercase">Student registration form</h3>
      
                      <div class="row">
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <label class="form-label" for="form3Example1m">First name</label>
                            <input type="text" name="firstname" id="form3Example1m" class="form-control form-control-lg" />
                            @if ($errors->has('firstname'))
                              <span class="text-danger">{{ $errors->first('firstname') }}</span>
                            @endif
                          </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <label class="form-label" for="form3Example1n">Last name</label>
                            <input type="text" name="lastname" id="form3Example1n" class="form-control form-control-lg" />
                            @if ($errors->has('lastname'))
                              <span class="text-danger">{{ $errors->first('lastname') }}</span>
                            @endif
                          </div>
                        </div>
                      </div>
      
                      <div class="row">
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <label class="form-label" for="form3Example1m1">Mother's name</label>
                            <input type="text" name="mothername" id="form3Example1m1" class="form-control form-control-lg" />
                            @if ($errors->has('mothername'))
                              <span class="text-danger">{{ $errors->first('mothername') }}</span>
                            @endif
                          </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <label class="form-label" for="form3Example1n1">Father's name</label>
                            <input type="text" name="fathername" id="form3Example1n1" class="form-control form-control-lg" />
                            @if ($errors->has('fathername'))
                              <span class="text-danger">{{ $errors->first('fathername') }}</span>
                            @endif
                          </div>
                        </div>
                      </div>
      
                      <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example8">Address</label>
                        <input type="text" name="address" id="form3Example8" class="form-control form-control-lg" />
                            @if ($errors->has('address'))
                              <span class="text-danger">{{ $errors->first('address') }}</span>
                            @endif
                      </div>
      
                      <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
      
                        <h6 class="mb-0 me-4">Gender: </h6>
      
                        <div class="form-check form-check-inline mb-0 me-4">
                          <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                            value="option1" />
                          <label class="form-check-label" for="femaleGender">Female</label>
                        </div>
      
                        <div class="form-check form-check-inline mb-0 me-4">
                          <input class="form-check-input" type="radio" name="gender" id="maleGender"
                            value="option2" />
                          <label class="form-check-label" for="maleGender">Male</label>
                        </div>
      
                        <div class="form-check form-check-inline mb-0">
                          <input class="form-check-input" type="radio" name="gender" id="otherGender"
                            value="option3" />
                          <label class="form-check-label" for="otherGender">Other</label>
                        </div>
                        @if ($errors->has('gender'))
                          <span class="text-danger">{{ $errors->first('gender') }}</span>
                        @endif
                      </div>
      
                      <div class="row">
                        <div class="col-md-6 mb-4">
                          <label class="form-label" for="">State</label>
                          <select name="state" class="select">
                            <option value="">SELECT</option>
                            <option value="1">State</option>
                            <option value="2">Option 1</option>
                            <option value="3">Option 2</option>
                            <option value="4">Option 3</option>
                          </select>
                          @if ($errors->has('state'))
                            <span class="text-danger">{{ $errors->first('state') }}</span>
                          @endif
                        </div>
                        <div class="col-md-6 mb-4">
                          <label class="form-label" for="">City</label>
                          <select name="city" class="select">
                            <option value="">SELECT</option>
                            <option value="1">City</option>
                            <option value="2">Option 1</option>
                            <option value="3">Option 2</option>
                            <option value="4">Option 3</option>
                          </select>
                          @if ($errors->has('city'))
                            <span class="text-danger">{{ $errors->first('city') }}</span>
                          @endif
                        </div>
                      </div>
      
                      <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example9">DOB</label>
                        <input type="date" name="dob" id="form3Example9" class="form-control form-control-lg" />
                          @if ($errors->has('dob'))
                            <span class="text-danger">{{ $errors->first('dob') }}</span>
                          @endif
                      </div>
      
                      <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example90">Pincode</label>
                        <input type="text" name="pincode" id="form3Example90" class="form-control form-control-lg" />
                        @if ($errors->has('pincode'))
                          <span class="text-danger">{{ $errors->first('pincode') }}</span>
                        @endif
                      </div>
      
                      <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example99">Course</label>
                        <input type="text" name="course" id="form3Example99" class="form-control form-control-lg" />
                        @if ($errors->has('course'))
                          <span class="text-danger">{{ $errors->first('course') }}</span>
                        @endif
                      </div>
      
                      <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example97">Email ID</label>
                        <input type="text" name="email" id="form3Example97" class="form-control form-control-lg" />
                        @if ($errors->has('email'))
                          <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                      </div>
                      {{-- <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example98">Password</label>
                        <input type="password" name="password" id="form3Example98" class="form-control form-control-lg" />
                        @if ($errors->has('email'))
                          <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                      </div> --}}
      
                      <div class="d-flex justify-content-end pt-3">
                        <button type="button" class="btn btn-light btn-lg">Reset all</button>
                        <input type="submit" name="submit" class="btn btn-warning btn-lg ms-2" value="Submit">
                      </div>
      
                    </div>
                  </div>
                </div>
              </form>
              </div>
            </div>
          </div>
        </div>
    </section>
</body>
</html>