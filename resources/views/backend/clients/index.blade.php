@extends('backend.layouts.app')

@section('title', __('dashboard.Clients'))

@section('content')



        <section class="section">
          <ul class="breadcrumb breadcrumb-style ">
            <li class="breadcrumb-item">
              <h4 class="page-title m-b-0">Data Tables</h4>
            </li>
            <li class="breadcrumb-item">
              <a href="index.html">
                <i data-feather="home"></i></a>
            </li>
            <li class="breadcrumb-item">Tables</li>
            <li class="breadcrumb-item">Data Tables</li>
          </ul>
          <div class="section-body">

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>@lang('dashboard.Clients')</h4>
                    <h4 class="nav-item ml-auto">
                      <a href="{{ route ('clients.create')  }}" class="btn btn-icon icon-left btn-success rounded-pill">
                          <i class="fas fa-plus"></i> @lang('dashboard.Add')</a>
                      </h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-2">
                        <thead>
                          <tr>
                            <th class="text-center pt-3">
                              <div class="custom-checkbox custom-checkbox-table custom-control">
                                <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad"
                                  class="custom-control-input" id="checkbox-all">
                                <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                              </div>
                            </th>
                            <th>@lang('dashboard.Name')</th>
                            <th>@lang('dashboard.Link')</th>
                            <th>@lang('dashboard.Logo')</th>
                            <th>@lang('dashboard.Date')</th>
                            <th>@lang('dashboard.Status')</th>
                            <th>@lang('dashboard.Action')</th>
                          </tr>
                        </thead>
                        <tbody>

                          <tr>
                            <td class="text-center pt-2">
                              <div class="custom-checkbox custom-control">
                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                  id="checkbox-2">
                                <label for="checkbox-2" class="custom-control-label">&nbsp;</label>
                              </div>
                            </td>
                            <td>Redesign homepage</td>
                            <td class="align-middle">
                              <div class="progress progress-xs">
                                <div class="progress-bar width-per-60"></div>
                              </div>
                            </td>
                            <td>
                              <img alt="image" src="{{ asset('backend/img/users/user-1.png') }}" width="35">
                            </td>
                            <td>2018-04-10</td>
                            <td>
                              <div class="badge badge-info badge-shadow">Todo</div>
                            </td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </section>



@endsection

