@extends('layouts.app')
@section('content')
<div class="container">
    <div class="justify-content-center">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Opps!</strong> Something went wrong, please check below errors.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card">
            <div class="card-header">{{ __('Add New Post') }}
                <span class="float-right">
                    <a class="btn btn-primary" href="{{ route('posts.index') }}">Posts</a>
                </span>
            </div>

            <div class="card-body">
                <form method="POST" action="{{ route('posts.store') }}">
                    @csrf
                    @foreach(config('translatable.locales') as $locale)
                        <div class="form-group">
                            <strong> @lang('Title') ({{ strtoupper($locale) }}):</strong>
                            <input  class="form-group" type="text" name="{{ $locale }}[title]"  value="{{ old($locale . '.title') }}" required/>
                        </div>
                        <div class="form-group">
                            <strong>@lang('Text') ({{ strtoupper($locale) }}):</strong>
                            <input class="form-group" type="text" name="{{ $locale }}[text]"  value="{{ old($locale . '.text') }}" required/>
                        </div>
                    @endforeach
                    <button type="submit" class="btn btn-primary">@lang('Submit')</button>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
