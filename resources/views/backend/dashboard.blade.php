@extends('backend.layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    @can('page-list')
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <a href="{{ route('pages.index') }}">
            <div class="card card-statistic-1">
                <div class="card-icon l-bg-purple">
                <i class="fas fa-hiking"></i>
                </div>
                <div class="card-wrap">
                <div class="padding-20">
                    <div class="text-right">
                    <h3 class="font-light mb-0">
                        <i class="ti-arrow-up text-success"></i> {{ $pages->count() }}
                    </h3>
                    <span class="text-muted">@lang('dashboard.Pages')</span>
                    </div>
                </div>
                </div>
            </div>
        </a>
    </div>
    @endcan

    @can('post-list')
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <a href="{{ route('posts.index') }}">
            <div class="card card-statistic-1">
                <div class="card-icon l-bg-green">
                <i class="fas fa-file-signature"></i>
                </div>
                <div class="card-wrap">
                <div class="padding-20">
                    <div class="text-right">
                    <h3 class="font-light mb-0">
                        <i class="ti-arrow-up text-success"></i> {{ $posts->count() }}
                    </h3>
                    <span class="text-muted">@lang('dashboard.Posts')</span>
                    </div>
                </div>
                </div>
            </div>
        </a>
    </div>
    @endcan

    @can('user-list')
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <a href="{{ route('users.index') }}">
            <div class="card card-statistic-1">
                <div class="card-icon l-bg-cyan">
                <i class="fas fa-users"></i>
                </div>
                <div class="card-wrap">
                <div class="padding-20">
                    <div class="text-right">
                    <h3 class="font-light mb-0">
                        <i class="ti-arrow-up text-success"></i> {{ $users->count() }}
                    </h3>
                    <span class="text-muted">@lang('dashboard.Users')</span>
                    </div>
                </div>
                </div>
            </div>
        </a>
    </div>
    @endcan

    @can('user-list')
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <a href="#0">
            <div class="card card-statistic-1">
                <div class="card-icon l-bg-orange">
                <i class="far fa-bell"></i>
                </div>
                <div class="card-wrap">
                <div class="padding-20">
                    <div class="text-right">
                    <h3 class="font-light mb-0">
                        <i class="ti-arrow-up text-success"></i> {{ $users->count() }}
                    </h3>
                    <span class="text-muted">@lang('dashboard.Notifications')</span>
                    </div>
                </div>
                </div>
            </div>
        </a>
    </div>
    @endcan

</div>

@endsection

