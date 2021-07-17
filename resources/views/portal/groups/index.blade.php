@extends('layouts.template')
@section('content')

<div class="row">
  <!-- OUs List -->
  <div class="col-lg-7 col-sm-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="display-4">Groups</h4>
        <form action="?r=groups" method="GET" class="forms-sample">
          <div class="row">
            <div class="col-12">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Filter by: </label>
                <div class="col-sm-9">
                  <!-- <div class="form-group"> -->
                  <input type="file" name="img[]" class="file-upload-default">
                  <div class="input-group col-xs-12">
                    <select class="form-control">
                      <option>Nairobi</option>
                      <option>Kisii</option>
                      <option>Homabay</option>
                      <option>Meru</option>
                    </select>
                    <span class="input-group-append">
                      <button class="file-upload-browse btn btn-primary" type="submit">Search</button>
                    </span>
                  </div>
                  <!-- </div> -->
                </div>
              </div>
            </div>
          </div>
        </form>
        <hr>
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th>OU</th>
                <th>Name</th>
                <th>Members</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Headquarters</td>
                <td>Administrative</td>
                <td>24</td>
                <td>
                  <button type="button" class="btn btn-rounded btn-icons btn-inverse-primary" title="update">
                    <i class="mdi mdi-pencil-outline"></i>
                  </button>
                  <button type="button" class="btn btn-rounded btn-icons btn-inverse-danger" title="delete">
                    <i class="mdi mdi-trash-can-outline"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Scientists</td>
                <td>Research</td>
                <td>24</td>
                <td>
                  <button type="button" class="btn btn-rounded btn-icons btn-inverse-primary" title="update">
                    <i class="mdi mdi-pencil-outline"></i>
                  </button>
                  <button type="button" class="btn btn-rounded btn-icons btn-inverse-danger" title="delete">
                    <i class="mdi mdi-trash-can-outline"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>Accountant</td>
                <td>Tellers</td>
                <td>24</td>
                <td>
                  <button type="button" class="btn btn-rounded btn-icons btn-inverse-primary" title="update">
                    <i class="mdi mdi-pencil-outline"></i>
                  </button>
                  <button type="button" class="btn btn-rounded btn-icons btn-inverse-danger" title="delete">
                    <i class="mdi mdi-trash-can-outline"></i>
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- Add New OU form -->
  <div class="col-lg-5 col-sm-12">
    <div class="card">
      <div class="card-body">
        <h4 class="display-4">Add Group</h4>
        <hr>
        <form class="forms-sample">
          <div class="form-group">
            <label for="ouName">Name</label>
            <input type="text" class="form-control" id="ouName" placeholder="Enter group name">
          </div>
          <button type="submit" class="btn btn-primary mr-2">Add</button>
          <button type="reset" class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
