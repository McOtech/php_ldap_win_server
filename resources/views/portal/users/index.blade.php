@extends('layouts.template')
@section('content')

<div class="row">
  <!-- OUs List -->
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <!-- Alert Message Start -->
        <div class="alert alert-success mb-4">
            These icons work great with the <code>fa-spin</code> class. Check out the <a href="http://fontawesome.io/examples/#animated" class="alert-link">spinning icons example</a>.
        </div>
        <!-- Alert Message End -->

        <h4 class="display-4">Users</h4>
        <form action="?r=groups" method="GET" class="forms-sample">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Filter by: </span>
            </div>
            <select class="form-control form-control-md">
              <option>Organization Unit</option>
              <option>Group</option>
            </select>
            <select class="form-control">
              <option>Nairobi</option>
              <option>Kisii</option>
              <option>Homabay</option>
              <option>Meru</option>
            </select>
            <div class="input-group-append">
              <button class="btn btn-primary" type="submit">Serach</button>
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
                <th>Group</th>
                <th>Username</th>
                <th>Name</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Students</td>
                <td>ACMP</td>
                <td>IN13/12345/12</td>
                <td>Grace Musimbi</td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn btn-transparent  icon-btn dropdown-toggle dropdown-toggle-split"
                      id="dropdownMenuIconButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="mdi mdi-dots-vertical" style="font-size: 1.2rem;"></i>
                    </button>
                    <div class="dropdown-menu bg-light" aria-labelledby="dropdownMenuIconButton3">
                      <h6 class="dropdown-header">Settings</h6>
                      <a class="dropdown-item" href="#"><i class="mdi mdi-eye"></i> View</a>
                      <a class="dropdown-item" href="#"><i class="mdi mdi-pencil-outline"></i> Update</a>
                      <a class="dropdown-item" href="#"><i class="mdi mdi-package-down"></i> Disable</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item bg-danger text-white" href="#"><i class="mdi mdi-trash-can-outline"></i>
                        Remove</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Students</td>
                <td>ACMP</td>
                <td>IN13/12345/12</td>
                <td>Grace Musimbi</td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn btn-transparent  icon-btn dropdown-toggle dropdown-toggle-split"
                      id="dropdownMenuIconButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="mdi mdi-dots-vertical" style="font-size: 1.2rem;"></i>
                    </button>
                    <div class="dropdown-menu bg-light" aria-labelledby="dropdownMenuIconButton3">
                      <h6 class="dropdown-header">Settings</h6>
                      <a class="dropdown-item" href="#"><i class="mdi mdi-eye"></i> View</a>
                      <a class="dropdown-item" href="#"><i class="mdi mdi-pencil-outline"></i> Update</a>
                      <a class="dropdown-item" href="#"><i class="mdi mdi-package-down"></i> Disable</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item bg-danger text-white" href="#"><i class="mdi mdi-trash-can-outline"></i>
                        Remove</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>Students</td>
                <td>ACMP</td>
                <td>IN13/12345/12</td>
                <td>Grace Musimbi</td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn btn-transparent  icon-btn dropdown-toggle dropdown-toggle-split"
                      id="dropdownMenuIconButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="mdi mdi-dots-vertical" style="font-size: 1.2rem;"></i>
                    </button>
                    <div class="dropdown-menu bg-light" aria-labelledby="dropdownMenuIconButton3">
                      <h6 class="dropdown-header">Settings</h6>
                      <a class="dropdown-item" href="#"><i class="mdi mdi-eye"></i> View</a>
                      <a class="dropdown-item" href="#"><i class="mdi mdi-pencil-outline"></i> Update</a>
                      <a class="dropdown-item" href="#"><i class="mdi mdi-package-down"></i> Disable</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item bg-danger text-white" href="#"><i class="mdi mdi-trash-can-outline"></i>
                        Remove</a>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
