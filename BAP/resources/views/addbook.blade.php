@extends('layout.master')
@section('content')
<div class="container">
    <div class="main-body">
        <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-4">
            <h1 class="h3 mb-0 text-gray-800">Add book</h1>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="img/anh1.jpg" alt="anh1" style="width: 95%; height: 95%"/>
                            <button class="btn btn-primary">Choose Picture</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Title</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Writer</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Book's contents</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9 text-secondary">
                                <input type="button" class="btn btn-primary px-4" value="Save Changes">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection