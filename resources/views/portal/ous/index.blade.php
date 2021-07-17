@extends('layouts.template')
@section('content')

<div class="row">
  <!-- OUs List -->
  <div class="col-lg-7 col-sm-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="display-4">Organization Units</h4>
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Groups</th>
                <th>Users</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Headquarters</td>
                <td>4</td>
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
                <td>4</td>
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
                <td>4</td>
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
                <td>4</td>
                <td>Finance</td>
                <td>4</td>
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
        <h4 class="display-4">Add Organization Unit</h4>
        <hr>
        <form class="forms-sample">
          <div class="form-group">
            <label for="ouName">Name</label>
            <input type="text" class="form-control" id="ouName" placeholder="Enter OU name">
          </div>
          <button type="submit" class="btn btn-primary mr-2">Add</button>
          <button type="reset" class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
