@extends('backend.layouts.app')

@section('title', __('dashboard.Clients'))

  {{-- <link rel="stylesheet" href="{{ asset('backend/css/app.min.css' ) }}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('backend/css/style.css' ) }}">
  <link rel="stylesheet" href="{{ asset('backend/css/components.css' ) }}">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{ asset('backend/css/custom.css' ) }}"> --}}

@section('content')


        <section class="section">
          <ul class="breadcrumb breadcrumb-style ">
            <li class="breadcrumb-item">
              <h4 class="page-title m-b-0">Notes</h4>
            </li>
            <li class="breadcrumb-item">
              <a href="index.html">
                <i data-feather="home"></i></a>
            </li>
            <li class="breadcrumb-item">Notes</li>
          </ul>
          <div class="section-body">
            <div class="card note">
              <div class="card-body">
                <div class="page-content note-has-grid">
                  <ul class="nav nav-pills p-3 mb-3 rounded-pill align-items-center">
                    <li class="nav-item">
                      <a href="javascript:void(0)"
                        class="nav-link rounded-pill note-link d-flex align-items-center px-2 px-md-3 mr-0 mr-md-2 active"
                        id="all-category">
                        <i data-feather="check-circle"></i><span class="d-md-block">All</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="javascript:void(0)"
                        class="nav-link rounded-pill note-link d-flex align-items-center px-2 px-md-3 mr-0 mr-md-2"
                        id="note-ka"> <i data-feather="briefcase"></i><span class="d-md-block">Georgian</span></a>
                    </li>
                    <li class="nav-item">
                      <a href="javascript:void(0)"
                        class="nav-link rounded-pill note-link d-flex align-items-center px-2 px-md-3 mr-0 mr-md-2 "
                        id="note-en"> <i data-feather="users"></i><span class="d-md-block">English</span></a>
                    </li>
                    <li class="nav-item">
                      <a href="javascript:void(0)"
                        class="nav-link rounded-pill note-link d-flex align-items-center px-2 px-md-3 mr-0 mr-md-2"
                        id="note-ru"> <i data-feather="star"></i><span class="d-md-block">Russian</span></a>
                    </li>
                    <li class="nav-item ml-auto">
                      <a href="#" class="btn btn-icon icon-left btn-success rounded-pill">
                          <i class="fas fa-save"></i>@lang('dashboard.Save')</a>
                    </li>
                  </ul>
                  <div class="tab-content bg-transparent">
                    <div id="note-full-container" class="note-has-grid row">
                      <div class="col-md-4 single-note-item all-category note-en">
                        <div class="note-card note-card-body note-bg-green">
                          <span class="side-stick"></span>
                          <div class="note-header">
                            <h5 class="note-title text-truncate w-75 mb-0" data-noteheading="Birthday Gift for wife">English</h5>
                            <div class="text-right w-25">
                              <span class="mr-1 "><i class="far fa-star favourite-note font-17"></i></span>
                              <span class="mr-1"><i class="far fa-trash-alt remove-note font-17"></i></span>
                            </div>
                          </div>
                          <p class="note-date font-12">16 July 2020</p>
                          <div class="note-content">
                            <p class="note-inner-content"
                              data-notecontent="Looking started he up perhaps against. How remainder all additions get elsewhere resources. ">
                              Looking started he up perhaps against. How remainder all additions get elsewhere
                              resources. </p>
                          </div>
                          <div class="d-flex align-items-center">
                            <ul class="list-unstyled order-list m-b-0">
                              <li class="team-member team-member-sm"><img class="rounded-circle"
                                  src="assets/img/users/user-1.png" alt="user" data-toggle="tooltip" title=""
                                  data-original-title="Wildan Ahdian"></li>
                              <li class="team-member team-member-sm"><img class="rounded-circle"
                                  src="assets/img/users/user-6.png" alt="user" data-toggle="tooltip" title=""
                                  data-original-title="John Deo"></li>
                              <li class="team-member team-member-sm"><img class="rounded-circle"
                                  src="assets/img/users/user-3.png" alt="user" data-toggle="tooltip" title=""
                                  data-original-title="Sarah Smith"></li>
                              <li class="avatar avatar-sm"><span class="badge badge-primary">+2</span></li>
                            </ul>
                            <div class="ml-auto">
                              <div class="category-selector btn-group">
                                <a class="nav-link dropdown-toggle category-dropdown label-group p-0"
                                  data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                                  aria-expanded="true">
                                  <div class="category">
                                    <div class="category-work"></div>
                                    <div class="category-family"></div>
                                    <div class="category-important"></div>
                                    <span class="more-options text-dark"><i class="icon-options-vertical"></i></span>
                                  </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right category-menu">
                                  <a class="note-work badge-group-item badge-work dropdown-item position-relative category-work"
                                    href="javascript:void(0);">
                                    <i class="far fa-dot-circle mr-2"></i>Work
                                  </a>
                                  <a class="note-family badge-group-item badge-family dropdown-item position-relative category-family"
                                    href="javascript:void(0);">
                                    <i class="far fa-dot-circle mr-2"></i> Family
                                  </a>
                                  <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important"
                                    href="javascript:void(0);">
                                    <i class="far fa-dot-circle mr-2"></i> Important
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4 single-note-item all-category note-ka">
                        <div class="note-card note-card-body note-bg-red">
                          <span class="side-stick"></span>
                          <div class="note-header">
                            <h5 class="note-title text-truncate w-75 mb-0" data-noteheading="Mobile Rechart">Georgian</h5>
                            <div class="text-right w-25">
                              <span class="mr-1 "><i class="far fa-star favourite-note font-17"></i></span>
                              <span class="mr-1"><i class="far fa-trash-alt remove-note font-17"></i></span>
                            </div>
                          </div>
                          <p class="note-date font-12">10 January 2020</p>
                          <div class="note-content">
                            <p class="note-inner-content"
                              data-notecontent="Ladies stairs enough esteem add fat all enable. Needed its design number winter see.">
                              Ladies stairs enough esteem add fat all enable. Needed its design number winter see.</p>
                          </div>
                          <div class="d-flex align-items-center">
                            <ul class="list-unstyled order-list m-b-0">
                              <li class="team-member team-member-sm"><img class="rounded-circle"
                                  src="assets/img/users/user-4.png" alt="user" data-toggle="tooltip" title=""
                                  data-original-title="Wildan Ahdian"></li>
                              <li class="team-member team-member-sm"><img class="rounded-circle"
                                  src="assets/img/users/user-6.png" alt="user" data-toggle="tooltip" title=""
                                  data-original-title="John Deo"></li>
                              <li class="team-member team-member-sm"><img class="rounded-circle"
                                  src="assets/img/users/user-1.png" alt="user" data-toggle="tooltip" title=""
                                  data-original-title="Sarah Smith"></li>
                              <li class="avatar avatar-sm"><span class="badge badge-primary">+1</span></li>
                            </ul>
                            <div class="ml-auto">
                              <div class="category-selector btn-group">
                                <a class="nav-link dropdown-toggle category-dropdown label-group p-0"
                                  data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                                  aria-expanded="true">
                                  <div class="category">
                                    <div class="category-work"></div>
                                    <div class="category-family"></div>
                                    <div class="category-important"></div>
                                    <span class="more-options text-dark"><i class="icon-options-vertical"></i></span>
                                  </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right category-menu">
                                  <a class="note-work badge-group-item badge-work dropdown-item position-relative category-work"
                                    href="javascript:void(0);">
                                    <i class="far fa-dot-circle mr-2"></i>Work
                                  </a>
                                  <a class="note-family badge-group-item badge-family dropdown-item position-relative category-family"
                                    href="javascript:void(0);">
                                    <i class="far fa-dot-circle mr-2"></i> Family
                                  </a>
                                  <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important"
                                    href="javascript:void(0);">
                                    <i class="far fa-dot-circle mr-2"></i> Important
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4 single-note-item all-category note-ru">
                        <div class="note-card note-card-body note-bg-purple">
                          <span class="side-stick"></span>
                          <div class="note-header">
                            <h5 class="note-title text-truncate w-75 mb-0"
                              data-noteheading="Error solve in live website">Russian</h5>
                            <div class="text-right w-25">
                              <span class="mr-1 "><i class="far fa-star favourite-note font-17"></i></span>
                              <span class="mr-1"><i class="far fa-trash-alt remove-note font-17"></i></span>
                            </div>
                          </div>
                          <p class="note-date font-12">21 July 2020</p>
                          <div class="note-content">
                            <p class="note-inner-content"
                              data-notecontent="Yourself off its pleasant ecstatic now law. Ye their mirth seems of songs.">
                              Yourself off its pleasant ecstatic now law. Ye their mirth seems of songs.</p>
                          </div>
                          <div class="d-flex align-items-center">
                            <ul class="list-unstyled order-list m-b-0">
                              <li class="team-member team-member-sm"><img class="rounded-circle"
                                  src="assets/img/users/user-8.png" alt="user" data-toggle="tooltip" title=""
                                  data-original-title="Wildan Ahdian"></li>
                              <li class="team-member team-member-sm"><img class="rounded-circle"
                                  src="assets/img/users/user-2.png" alt="user" data-toggle="tooltip" title=""
                                  data-original-title="John Deo"></li>
                              <li class="team-member team-member-sm"><img class="rounded-circle"
                                  src="assets/img/users/user-7.png" alt="user" data-toggle="tooltip" title=""
                                  data-original-title="Sarah Smith"></li>
                              <li class="avatar avatar-sm"><span class="badge badge-primary">+3</span></li>
                            </ul>
                            <div class="ml-auto">
                              <div class="category-selector btn-group">
                                <a class="nav-link dropdown-toggle category-dropdown label-group p-0"
                                  data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                                  aria-expanded="true">
                                  <div class="category">
                                    <div class="category-work"></div>
                                    <div class="category-family"></div>
                                    <div class="category-important"></div>
                                    <span class="more-options text-dark"><i class="icon-options-vertical"></i></span>
                                  </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right category-menu">
                                  <a class="note-work badge-group-item badge-work dropdown-item position-relative category-work"
                                    href="javascript:void(0);">
                                    <i class="far fa-dot-circle mr-2"></i>Work
                                  </a>
                                  <a class="note-family badge-group-item badge-family dropdown-item position-relative category-family"
                                    href="javascript:void(0);">
                                    <i class="far fa-dot-circle mr-2"></i> Family
                                  </a>
                                  <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important"
                                    href="javascript:void(0);">
                                    <i class="far fa-dot-circle mr-2"></i> Important
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>





@endsection

