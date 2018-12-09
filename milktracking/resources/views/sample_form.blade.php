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
      @include('forms.sample_test')
    </div>
</div>
@endsection
