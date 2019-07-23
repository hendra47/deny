@extends('layouts.app')

@section('content')

    <section class="content-header">
    @if(Request::get('id')==1)
        <h1 class="pull-left">Form penilaian - Absensi dan Raport</h1>
    @endif

     @if(Request::get('id')==2)
        <h1 class="pull-left">Form penilaian - Sikap dan extrakulikuler</h1>
    @endif
    </section>
    <div class="content">
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('nilai_alternatifs.table_nilai')
            </div>
        </div>
    </div>


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
                    @include('nilai_alternatifs.table')
            </div>
        </div>
    </div>

    <section class="content-header">
        <h1 class="pull-left">Tahap Analisa</h1>
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
        <section class="content-header">
        <h1 class="pull-left">Tahap Normalisasi</h1>
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
            <section class="content-header">
        <h1 class="pull-left">Tahap Perangkingan</h1>
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
@endsection

