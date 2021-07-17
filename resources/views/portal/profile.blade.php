@extends('layouts.template')
@section('content')

<div class="row">
  <div class="col-md-4 grid-margin stretch-card">
    <div class="card">
      <img src="assets/images/faces/avatar.png" class="responsive" alt="">
      <div class="card-body d-flex flex-wrap">
        <h4 class="text-center display-4">Victor Nyangasi</h4>
        <!-- <p class="card-description"> Write text in <code>&lt;p&gt;</code> tag </p> -->
        <div class="media">
          <i class="mdi mdi-note-text icon-md text-info d-flex align-self-start mr-3"></i>
          <div class="media-body">
            <p class="card-text">Victor Nyangasi is a third year computer science student at Kisii University.</p>
          </div>
        </div>
        <small class="text-muted mt-2 align-self-end"> Created on Tuesday 06/June/2021
        </small>
      </div>
    </div>
  </div>
  <div class="col-md-8 grid-margin stretch-card">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <h4 class="display-4">Account</h4>
            <hr>
            <div class="row">
              <div class="col-md-4">
                <address class="text-primary">
                  <p class="font-weight-bold"> Registration Number </p>
                  <div class="mb-2 d-flex flex-row align-items-center">
                    <i class="mdi mdi-account-card-details icon-sm text-primary"></i>
                    <p class="mb-0 ml-1"> IN13/12345/12 </p>
                  </div>
                  <p class="font-weight-bold"> Name </p>
                  <div class="mb-2 d-flex flex-row align-items-center">
                    <i class="mdi mdi-account icon-sm text-primary"></i>
                    <p class="mb-0 ml-1"> Victor M. </p>
                  </div>
                  <p class="font-weight-bold"> Surname Name </p>
                  <div class="mb-2 d-flex flex-row align-items-center">
                    <i class="mdi mdi-account icon-sm text-primary"></i>
                    <p class="mb-0 ml-1"> Nyangasi </p>
                  </div>
                </address>
                <address>
              </div>
              <div class="col-md-4">
                <address class="text-primary">
                  <p class="font-weight-bold"> E-mail </p>
                  <div class="mb-2 d-flex flex-row align-items-center">
                    <i class="mdi mdi-email icon-sm text-primary"></i>
                    <p class="mb-0 ml-1"> victor@examplemeail.com </p>
                  </div>
                  <p class="font-weight-bold"> Mobile </p>
                  <div class="mb-2 d-flex flex-row align-items-center">
                    <i class="mdi mdi-cellphone-android icon-sm text-primary"></i>
                    <p class="mb-0 ml-1"> 0712345689 </p>
                  </div>
                  <p class="font-weight-bold"> Portfolio </p>
                  <div class="mb-2 d-flex flex-row align-items-center">
                    <i class="mdi mdi-edge icon-sm text-primary"></i>
                    <p class="mb-0 ml-1"> www.Victor.com </p>
                  </div>
                </address>
              </div>
              <div class="col-md-4">
                <address class="text-primary">
                  <p class="font-weight-bold"> County </p>
                  <div class="mb-2 d-flex flex-row align-items-center">
                    <i class="mdi mdi-earth icon-sm text-primary"></i>
                    <p class="mb-0 ml-1"> Kisii </p>
                  </div>
                  <p class="font-weight-bold"> Sub-County </p>
                  <div class="mb-2 d-flex flex-row align-items-center">
                    <i class="mdi mdi-earth-box icon-sm text-primary"></i>
                    <p class="mb-0 ml-1"> Kisii </p>
                  </div>
                  <p class="font-weight-bold"> P.O.Box </p>
                  <div class="mb-2 d-flex flex-row align-items-center">
                    <i class="mdi mdi-email-open icon-sm text-primary"></i>
                    <p class="mb-0 ml-1"> 45 - 00100, Nairobi </p>
                  </div>
                </address>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12 mt-3">
        <div class="card">
          <div class="card-body">
            <h4 class="display-4">Organizational</h4>
            <hr>
            <div class="row">
              <div class="col-md-6">
                <address class="text-primary">
                  <p class="font-weight-bold"> Occupation </p>
                  <div class="mb-2 d-flex flex-row align-items-center">
                    <i class="mdi mdi-tag-multiple icon-sm text-primary"></i>
                    <p class="mb-0 ml-1"> Student </p>
                  </div>
                  <p class="font-weight-bold"> Faculty </p>
                  <div class="mb-2 d-flex flex-row align-items-center">
                    <i class="mdi mdi-office-building icon-sm text-primary"></i>
                    <p class="mb-0 ml-1"> Information Science and Technology </p>
                  </div>
                  <p class="font-weight-bold"> Course </p>
                  <div class="mb-2 d-flex flex-row align-items-center">
                    <i class="mdi mdi-school icon-sm text-primary"></i>
                    <p class="mb-0 ml-1"> Computer Science </p>
                  </div>
                </address>
              </div>
              <div class="col-md-6">
                <h4 class="card-title">Member Of</h4>
                <ul class="list-star">
                  <li>Accounts</li>
                  <li>Finance</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
