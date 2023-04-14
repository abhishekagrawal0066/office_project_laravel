@extends('collage.admin.master')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Category /</span> Add Category</h4>

        <div class="row">
            <div class="col-md-10">
                <div class="card mb-4">
                    <form action="{{ route('category.add') }}" method="post">
                        @csrf
                        <div class="card-body">
                            <div>
                                @if(session()->has('success'))
                                    <div class="alert alert-success">
                                        {{ session()->get('success') }}
                                    </div>
                                @endif
                                <label for="defaultFormControlInput" class="form-label">Category Name</label>
                                <input type="text" name="name" class="form-control" id="defaultFormControlInput"
                                    placeholder="John Doe" aria-describedby="defaultFormControlHelp" />
                                <div id="defaultFormControlHelp" class="form-text">
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <button class="btn btn-dark mt-3" type="submit" name="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
