@extends('backend.layouts.app')

@section('title', 'Update Reservation')

@section('content')
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

    <div class="row">

        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                  <h4>{{__('Update Reservation')}} </h4>
                </div>
                <form action="{{ route('reservation.update') }}" class="needs-validation"  method="POST"  enctype="multipart/form-data" >
                    @csrf
                    <input type="hidden"  name="id" value="{{ $reservations->id }}">
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>{{__('Name')}}</label>
                                <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                    <i class="fas fa-user"></i>
                                    </div>
                                </div>
                                <input type="text" name="name"  value="{{ $reservations->name }}" class="form-control marker">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label>{{__('Email')}}</label>
                                <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                    <i class="far fa-envelope-open"></i>
                                    </div>
                                </div>
                                <input type="email" name="email" value="{{ $reservations->email }}" class="form-control marker">
                                </div>
                            </div>

                            <div class="form-group col-md-4">
                                <label>{{__('Phone')}}</label>
                                <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                    <i class="fas fa-phone"></i>
                                    </div>
                                </div>
                                <input type="phone" name="phone" value="{{ $reservations->phone }}" class="form-control marker">
                                </div>
                            </div>

                            <div class="form-group col-md-4">
                                <label>{{__('Date')}}</label>
                                <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                    <i class="fas fa-calendar-check"></i>
                                    </div>
                                </div>
                                <input type="date" name="date"  value="{{ $reservations->date }}" class="form-control marker">
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label>{{__('Time')}}</label>
                                <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                    <i class="far fa-clock"></i>
                                    </div>
                                </div>
                                <input type="time" name="time" value="{{ $reservations->time }}" class="form-control marker">
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label>{{__('Person')}}</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                        <i class="fas fa-users"></i>
                                        </div>
                                    </div>
                                    <input type="number" name="person" value="{{ $reservations->person }}" class="form-control marker">
                                </div>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="table_id">{{__('Select a table')}}</label>
                                <select class="form-control" name="table_id">
                                    <option  disabled>{{__('Select a table')}}</option>
                                    @foreach ($tables as $item)
                                        <option value="{{ $item->id }}" {{ $item->id   == $reservations->table_id  ? 'selected': '' }}  >{{__('Table')}} {{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="status">{{__('Select a Status')}}</label>
                                <select class="form-control" name="status">
                                    <option class="badge badge-Light badge-shadow" selected disabled >

                                        @if ($reservations->status   === 1)
                                            {{ __('Pending') }}
                                        @elseif ($reservations->status === 2)
                                            {{ __('Accepted') }}
                                        @else
                                            {{ __('Canceled') }}
                                        @endif
                                    </option>

                                    <option class="badge badge-info badge-shadow" value="1">
                                        <i class="fas fa-check-circle"></i>
                                        {{ __('Pending') }}
                                    </option>

                                    <option class="badge badge-success badge-shadow" value="2">
                                        <i class="fas fa-check-circle"></i>
                                        {{ __('Accepted') }}
                                    </option>

                                    <option class="badge badge-danger badge-shadow" value="0">
                                        <i class="fas fa-check-circle"></i>
                                        {{ __('Canceled') }}
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer text-right">
                        <button class="btn btn-success">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-save"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path><polyline points="17 21 17 13 7 13 7 21"></polyline><polyline points="7 3 7 8 15 8">
                            </polyline>
                            </svg>
                            {{__('Update')}}
                        </button>
                        <a href="{{ url('admin/reservations') }}" class="btn btn-info"><i class="fas fa-arrow-circle-left"></i> {{__('Back')}}</a>
                    </div>
                </form>
            </div>
        </div>

    </div>



@endsection
