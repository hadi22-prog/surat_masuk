@extends('layouts.skeleton')
@section('content')
<!DOCTYPE html>
<html>
<head>
</head>

 <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>
  
        <section class="content">

                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        {{$counts}}                     
                                                       </h3>
                                    <p>
                                        Surat Masuk
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-email"></i>
                                </div>
                                <a href="surat_masuk/index" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->



                           <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>
                                                                            {{$count}}                     

                                                                            </h3>
                                    </h3>
                                    <p>
                                        Surat Keluar
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-email"></i>
                                </div>
                                <a href="surat_keluar/index" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                   
                                @if(Auth::user()->role_id == "2")
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>
                                        {{$countd}}
                                    </h3>
                                    <p>
                                        User Registrasi
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>

                                <a href="Admin/index" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                     
                    </div><!-- /.row -->
@endif
                                <!-- top row -->
                    <div class="row">
                        <div class="col-xs-12 connectedSortable">
                            
                        </div><!-- /.col -->
                    </div>     

@endsection