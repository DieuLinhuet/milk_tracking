@extends('layouts.app')

@section('css')
<style>
  .table > tbody > tr > td{
    text-align: center;
    vertical-align: middle;
  }
  .table > thead > tr > th{
    text-align: center;
    vertical-align: middle;
  }

</style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
      @if(Request::url() == url('/sample/test'))
        @include('forms.sample_test_form')
      @elseif(Request::url() == url('/sample/normalize'))
        @include('forms.normalize_form')
      @elseif(Request::url() == url('/sample/assimilation'))
        @include('forms.assimilation_form')
      @elseif(Request::url() == url('/sample/pasteurization'))
        @include('forms.pasteurization_form')
      @else
        @include('forms.concentrate_form')
      @endif
    </div>
</div>
@endsection
