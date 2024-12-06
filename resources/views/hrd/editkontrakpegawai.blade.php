@extends('extranetlayout.master')
@section('headerkonten')
<div class="app-hero-header d-flex align-items-center">            
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <i class="bi bi-house lh-1 pe-3 me-3 border-end border-dark"></i>
          <a href="{{url('dashboard')}}" class="text-decoration-none">Dashboard</a>
        </li>
        <li class="breadcrumb-item text-secondary" aria-current="page">
          SK & Kontrak
        </li>
        <li class="breadcrumb-item text-secondary" aria-current="page">
          Kontrak Pegawai
        </li>
        <li class="breadcrumb-item text-secondary" aria-current="page">
          Edit Kontrak Pegawai
        </li>
    </ol>            
</div>
@endsection
@section('konten')
<div class="row gx-3">
    <div class="col-sm-12">
        <div class="card mb-3">
            <div class="card-header">
                  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2">
                      <h1 class="h2">{{ $title }}</h1>
                      <div class="btn-toolbar mb-2 mb-md-0">
                      <a href="{{ url('kontrakpegawai') }}"><button class="btn btn-primary btn-sm" type="button">Back</button></a>
                      </div>
                  </div> 
            </div>              
            <div class="card-body">
            <editkontrakpegawai :id="{{$id}}"></editkontrakpegawai> 
          </div>
        </div>
    </div>
</div>                 
@endsection
@section('footer')
<script src="{{ asset('js/modul/hrd.js') }}"></script>
@endsection