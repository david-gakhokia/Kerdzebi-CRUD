@extends('backend.layouts.app')

@section('title', 'Currency')

@section('content')

        <section class="section">
            <ul class="breadcrumb breadcrumb-style ">
                <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">
                    <i data-feather="home"></i></a>
                </li>
                <li class="breadcrumb-item">
                <h4 class="page-title m-b-0">@lang('dashboard.Currency')</h4>
                </li>
            </ul>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
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
                            <th>@lang('currency.code')</th>
                            <th>@lang('currency.quantity')</th>
                            <th>@lang('currency.rateFormated')</th>
                            <th>@lang('currency.diffFormated')</th>
                            <th>@lang('currency.rate')</th>
                            <th>@lang('currency.name')</th>
                            <th>@lang('currency.diff')</th>
                            <th>@lang('currency.date')</th>
                            <th>@lang('currency.validFromDate')</th>
                          </tr>
                        </thead>
                        <tbody>

                                @foreach ($currencies as $key =>$currecy)
                                    @foreach ($currecy->currencies  as $item)
                                    <tr>
                                        <td class="text-center pt-2">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                                id="checkbox-2">
                                                <label for="checkbox-2" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>{{ $item->code }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>{{ $item->rateFormated }}</td>
                                        <td>{{ $item->diffFormated }}</td>
                                        <td>{{ $item->rate }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->diff }}</td>
                                        <td>{{ $item->date }}</td>
                                        <td>{{ $item->validFromDate }}</td>
                                    </tr>
                                    @endforeach
                                @endforeach
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
