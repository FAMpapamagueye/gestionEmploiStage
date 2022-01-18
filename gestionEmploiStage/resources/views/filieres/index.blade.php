@extends('layouts.app')

@section('navigation')
<div class="col-sm-6">
    <h1 class="m-0">Filières</h1>
  </div><!-- /.col -->
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="{{ route('welcome')}}">Home</a></li>
      <li class="breadcrumb-item active"><a href="{{ route('welcome')}}">promotion</a></li>
      <li class="breadcrumb-item active"><a href="{{ route('departements')}}">département</a></li>
      <li class="breadcrumb-item active">Filières</li>

    </ol>
  </div><!-- /.col -->
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <button type="button" class="btn btn-success">Ajouter une filière</button><br><br>
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <p>Développement Back-end</p>
                <br><br>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{ route('etudiants') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
      </div>
    </div>
</section>
@endsection
