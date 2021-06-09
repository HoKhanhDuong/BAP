@extends('admin.layout.master')
@section('content')

<div class="container">
    <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-4">
        <h1 class="h3 mb-0 text-gray-800">List book</h1>
    </div>
    <div class="card card-body border-light shadow-sm table-wrapper table-responsive pt-4">
          <table class="table table-hover">
              <thead>
                <tr>
                  <th class="col-sm-1">#</th>
                  <th class="col-sm-5">Name</th>
                  <th class="col-sm-5">Email</th>
                  <th>Action</th>
              </tr>
              </thead>
              <tbody>
                <tr>
                  <th>1</th>
                  <th>Nguyen Phuong</th>
                  <th>phuong@gmail.con</th>
                  <th>
                    <div class="row ml-1">
                        <form action="" method="POST">
                            <input hidden value="delete" name="_method">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                  </th>
                </tr>
                <tr>
                  <th>2</th>
                  <th>Binh An</th>
                  <th>an@gmail.com</th>
                  <th>
                    <div class="row ml-1">
                        <form action="" method="POST">
                            <input hidden value="delete" name="_method">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                  </th>
                </tr>
                <tr>
                  <th>3</th>
                  <th>Nguyen Van A</th>
                  <th>a@gmail.com</th>
                  <th>
                    <div class="row ml-1">
                        <form action="" method="POST">
                            <input hidden value="delete" name="_method">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                  </th>
               </tr>
               <tr>
                <th>4</th>
                <th>Lan</th>
                <th>Lan@gmail.com</th>
                <th>
                  <div class="row ml-1">
                      <form action="" method="POST">
                          <input hidden value="delete" name="_method">
                          <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                  </div>
                </th>
              </tr>
              </tbody>
          </table>

    </div>
    
</div>
@endsection