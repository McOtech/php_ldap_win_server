@extends('layouts.template')
@section('content')

<div class="row">
  <div class="col-md-4 grid-margin stretch-card">
    <div class="card">
      <img src="assets/images/faces/avatar.png" class="responsive" alt="">
      <div class="card-body d-flex flex-wrap">
        <h4 class="text-center display-4">{{ (isset($user['givenname'])) ? $user['givenname'] : '' }} {{ (isset($user['sn'])) ? $user['sn'] : '' }}</h4>
        <!-- <p class="card-description"> Write text in <code>&lt;p&gt;</code> tag </p> -->
        @if (isset($user['description']))
            <div class="media">
                <i class="mdi mdi-note-text icon-md text-info d-flex align-self-start mr-3"></i>
                <div class="media-body">
                    <p class="card-text">{{ $user['description'] }}</p>
                </div>
            </div>
        @endif

        <small class="text-muted mt-2 align-self-end"> Created on {{ (isset($user['whencreated'])) ? $user['whencreated'] : 'N/A' }}
        </small>
      </div>
    </div>
  </div>
  <div class="col-md-8 grid-margin stretch-card">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            @if ($errors->has(env('MESSAGE_LITERAL')))
            <!-- Alert Message Start -->
            <div class="alert alert-{{ $errors->get(env('MESSAGE_LITERAL'))['type'] }} mb-4">
                {{ $errors->get(env('MESSAGE_LITERAL'))['description'] }}
            </div>
            <!-- Alert Message End -->
            @endif
            <h4 class="display-4">Account </h4>
            <hr>
            <div class="row">
              <div class="col-md-4">
                <address class="text-primary">
                  <p class="font-weight-bold"> Registration Number </p>
                  <div class="mb-2 d-flex flex-row align-items-center">
                    <i class="mdi mdi-account-card-details icon-sm text-primary"></i>
                    <p class="mb-0 ml-1"> {{ strtoupper(str_replace('_', '/', $user['samaccountname'])) }} </p>
                  </div>
                  <p class="font-weight-bold"> Name </p>
                  <div class="mb-2 d-flex flex-row align-items-center">
                    <i class="mdi mdi-account icon-sm text-primary"></i>
                    <p class="mb-0 ml-1"> {{ (isset($user['givenname'])) ? $user['givenname'] : 'N/A' }} {{ (isset($user['initials'])) ? $user['initials'] : '' }}. </p>
                  </div>
                  <p class="font-weight-bold"> Surname Name </p>
                  <div class="mb-2 d-flex flex-row align-items-center">
                    <i class="mdi mdi-account icon-sm text-primary"></i>
                    <p class="mb-0 ml-1"> {{ (isset($user['sn'])) ? $user['sn'] : 'N/A' }} </p>
                  </div>
                </address>
                <address>
              </div>
              <div class="col-md-4">
                <address class="text-primary">
                  <p class="font-weight-bold"> E-mail </p>
                  <div class="mb-2 d-flex flex-row align-items-center">
                    <i class="mdi mdi-email icon-sm text-primary"></i>
                    <p class="mb-0 ml-1"> {{ (isset($user['mail'])) ? $user['mail'] : 'N/A' }} </p>
                  </div>
                  <p class="font-weight-bold"> Mobile </p>
                  <div class="mb-2 d-flex flex-row align-items-center">
                    <i class="mdi mdi-cellphone-android icon-sm text-primary"></i>
                    <p class="mb-0 ml-1"> {{ (isset($user['mobile'])) ? $user['mobile'] : 'N/A' }} </p>
                  </div>
                  <p class="font-weight-bold"> Portfolio </p>
                  <div class="mb-2 d-flex flex-row align-items-center">
                    <i class="mdi mdi-edge icon-sm text-primary"></i>
                    <p class="mb-0 ml-1"> {{ (isset($user['wwwhomepage'])) ? $user['wwwhomepage'] : 'N/A' }} </p>
                  </div>
                </address>
              </div>
              <div class="col-md-4">
                <address class="text-primary">
                  <p class="font-weight-bold"> County </p>
                  <div class="mb-2 d-flex flex-row align-items-center">
                    <i class="mdi mdi-earth icon-sm text-primary"></i>
                    <p class="mb-0 ml-1"> {{ (isset($user['st'])) ? $user['st'] : 'N/A' }} </p>
                  </div>
                  <p class="font-weight-bold"> Sub-County </p>
                  <div class="mb-2 d-flex flex-row align-items-center">
                    <i class="mdi mdi-earth-box icon-sm text-primary"></i>
                    <p class="mb-0 ml-1"> {{ (isset($user['homephone'])) ? $user['homephone'] : 'N/A' }} </p>
                  </div>
                  <p class="font-weight-bold"> P.O.Box </p>
                  <div class="mb-2 d-flex flex-row align-items-center">
                    <i class="mdi mdi-email-open icon-sm text-primary"></i>
                    <p class="mb-0 ml-1"> {{ (isset($user['postofficebox'])) ? $user['postofficebox'] : 'N/A' }} - {{ (isset($user['postalcode'])) ? $user['postalcode'] : 'N/A' }}, {{ (isset($user['l'])) ? $user['l'] : 'N/A' }} </p>
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
                  <p class="font-weight-bold"> Institution </p>
                  <div class="mb-2 d-flex flex-row align-items-center">
                    <i class="mdi mdi-office-building icon-sm text-primary"></i>
                    <p class="mb-0 ml-1"> {{ (isset($user['company'])) ? $user['company'] : 'N/A' }} </p>
                  </div>
                  <p class="font-weight-bold"> Faculty/Department </p>
                  <div class="mb-2 d-flex flex-row align-items-center">
                    <i class="mdi mdi-school icon-sm text-primary"></i>
                    <p class="mb-0 ml-1"> {{ (isset($user['department'])) ? $user['department'] : 'N/A' }} </p>
                  </div>
                  <p class="font-weight-bold"> Title </p>
                  <div class="mb-2 d-flex flex-row align-items-center">
                    <i class="mdi mdi-tag-multiple icon-sm text-primary"></i>
                    <p class="mb-0 ml-1"> {{ (isset($user['title'])) ? $user['title'] : 'N/A' }} </p>
                  </div>
                </address>
              </div>
              <div class="col-md-6">
                <h4 class="card-title">Member Of</h4>
                @if (isset($user['memberof']))
                    <ul class="list-star">
                        @foreach ($user['memberof'] as $key => $group)
                            <li>{{ $group }}</li>
                        @endforeach
                    </ul>
                @endif

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
