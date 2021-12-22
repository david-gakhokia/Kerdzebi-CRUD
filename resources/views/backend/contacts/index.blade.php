@extends('backend.layouts.app')

@section('title', __('dashboard.Contact'))

@section('content')

            <div class="row">
              <div class="col-12">
                <div class="card">

                  <div class="card-header">
                    <h4 class="text-left">@lang('dashboard.Incoming Messages')</h4>
                    <a href="{{ route ('contacts.create') }}" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i> {{__('Add')}}</a>
                  </div>
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show mb-2 " role="alert">
                        <strong>{{ session('success') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show mb-2 " role="alert">
                        <p>ეს ველი სავალდებულოა:</p>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>

                            <th>#</th>
                            <th>@lang('dashboard.Name')</th>
                            <th>@lang('dashboard.Email')</th>
                            <th>@lang('dashboard.Phone')</th>
                            <th>@lang('dashboard.Subject')</th>
                            <th>@lang('dashboard.Message')</th>
                            <th>@lang('dashboard.Status')</th>
                            <th>@lang('dashboard.Action')</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($contacts as $index => $item)
                          <tr class="text-left">
                            <td>#{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td><a href="mailto:{{ $item->email }}" target="_blank" rel="noopener noreferrer"><i class="far fa-envelope-open"></i> </a>{{ $item->email }}</td>
                            <td><a href="tel:{{ $item->phone }}" target="_blank" rel="noopener noreferrer"><i class="fas fa-phone"></i> </a>{{ $item->phone }}</td>
                            <td>
                                <a href="{{ url('admin/reservation/edit/'.$item->id) }}" class="btn btn-icon btn-primary" data-toggle="tooltip" data-original-title="{{__('Edit')}}">
                                    <i class="far fa-edit"></i>
                                </a>
                                <a href="{{ url('admin/reservation/destroy/'.$item->id) }}"   onclick="return confirm('ნამდვილად წავშალო?')" class="btn btn-icon btn-danger" data-toggle="tooltip" data-original-title="{{__('Delete')}}">
                                    <i class="fas fa-times"></i>
                                </a>

                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

@endsection
