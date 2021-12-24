@extends('backend.layouts.app')

@section('title', __('dashboard.Contact'))

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
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>@lang('dashboard.Contact')</h4>
                  </div>
                  <div class="card-body">
                <form action="{{ route('contacts.store') }}" class="needs-validation" novalidate="" method="POST"  enctype="multipart/form-data" >
                    @csrf
                    <div class="form-group row mb-4">
                      <p class="col-form-label text-md-right col-12 col-md-3 col-lg-3">@lang('dashboard.Name')</p>
                      <div class="col-sm-12 col-md-7">
                        <input type="text"  class="form-control" name="name" required >
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <p class="col-form-label text-md-right col-12 col-md-3 col-lg-3">@lang('dashboard.Email')</p>
                      <div class="col-sm-12 col-md-7">
                        <input type="text"  class="form-control" name="email" required >
                      </div>
                    </div>


                    <div class="form-group row mb-4">
                      <p class="col-form-label text-md-right col-12 col-md-3 col-lg-3">@lang('dashboard.Phone')</p>
                      <div class="col-sm-12 col-md-7">
                        <input type="number"  class="form-control" name="phone" required >
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <p class="col-form-label text-md-right col-12 col-md-3 col-lg-3">@lang('dashboard.Subject')</p>
                      <div class="col-sm-12 col-md-7">
                        <input type="text"  class="form-control" name="subject" required >
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <p class="col-form-label text-md-right col-12 col-md-3 col-lg-3">@lang('dashboard.Message')</p>
                      <div class="col-sm-12 col-md-7">

                        <textarea class="form-control" name="message" required></textarea>

                      </div>
                    </div>




                    {{-- <div class="form-group row mb-4">
                      <p class="col-form-label text-md-right col-12 col-md-3 col-lg-3">@lang('dashboard.Subject')</p>
                      <div class="col-sm-12 col-md-7">
                        <input type="file"  class="form-control" name="image" required >
                      </div>
                    </div> --}}



                    {{-- <div class="form-group row mb-4">
                      <p class="col-form-label text-md-right col-12 col-md-3 col-lg-3">@lang('dashboard.Message')</p>
                      <div class="col-sm-12 col-md-7">
                        <textarea class="summernote-simple" name="message" ></textarea>
                      </div>
                    </div> --}}

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-success"><i class="far fa-paper-plane"></i> @lang('dashboard.Send')</button>
                        <a href="{{ route ('contacts.index') }}" class="btn btn-info"><i class="fas fa-arrow-circle-left"></i> @lang('dashboard.Back')</a>
                      </div>
                    </div>
                </form>
                  </div>
                </div>
              </div>
            </div>


@endsection
