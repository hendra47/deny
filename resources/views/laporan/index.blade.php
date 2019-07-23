@extends('layouts.app')

@section('content')
    <section class="content-header">
      <h1 class="pull-left">
           <a class="btn btn-primary pull-right" id='print' style="margin-top: 10px;margin-bottom: 5px" href="">
           <i class="fa fa-print fa-print"></i>
           PRINT</a>
        </h1>
         <div class="clearfix"></div>
    </section>
    <div id='printarea'>
@if($id==="1")
    <section class="content-header">
        <h1 class="pull-left">Data Nilai Siswa</h1>
        <!-- <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('nilaiAlternatifs.create') !!}">Add New</a>
        </h1> -->
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('nilai_alternatifs.view')
            </div>
        </div>
    </div>
@endif

@if($id==="2")
    <section class="content-header">
        <h1 class="pull-left">Hasil Analisa</h1>
        <!-- <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('nilaiAlternatifs.create') !!}">Add New</a>
        </h1> -->
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('nilai_alternatifs.analisa')
            </div>
        </div>
    </div>
@endif


@if($id==="3")

    <section class="content-header">
        <h1 class="pull-left">Hasil Normalisasi</h1>
        <!-- <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('nilaiAlternatifs.create') !!}">Add New</a>
        </h1> -->
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('nilai_alternatifs.normalisasi')
            </div>
        </div>
    </div>
@endif

@if($id==="4")
    <section class="content-header">
        <h1 class="pull-left"> Hasil Perangkingan</h1>
        <!-- <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('nilaiAlternatifs.create') !!}">Add New</a>
        </h1> -->
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('nilai_alternatifs.rangking')
            </div>
        </div>
    </div>
@endif

@if($id==="5")

    <section class="content-header">
        <h1 class="pull-left">Hasil Keputusan</h1>
        <!-- <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('nilaiAlternatifs.create') !!}">Add New</a>
        </h1> -->
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('nilai_alternatifs.keputusan')            
            </div>
        </div>
    </div>

@endif
</div>
@endsection

