@extends('admin.layout.master')
@section('content')

<div class="container">
    <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-4">
        <h1 class="h3 mb-0 text-gray-800">List user</h1>
    </div>
    <div class="card card-body border-light shadow-sm table-wrapper table-responsive pt-4">
          <table class="table table-hover">
              <thead>
                <tr>
                  <th class="col-sm-1">#</th>
                  <th class="col-sm-5">Name</th>
                  <th class="col-sm-5">Author</th>
                  <th>Action</th>
              </tr>
              
              </thead>
              <tbody>
                <tr>
                  <th>1</th>
                  <th>Cho toi xin 1 ve di tuoi tho</th>
                  <th>Nguyen Nhat anh</th>
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
                  <th>Co hai con meo ngoi ben cua so</th>
                  <th>Nguyen Nhat Anh</th>
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
                  <th>Co gai den tu hom qua</th>
                  <th>Nguyen Nhat Anh</th>
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
                <th>Bay buoc den mua he</th>
                <th>Nguyen Nhat Anh</th>
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