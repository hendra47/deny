@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Data Kriteria</h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('crips.table_kriterias')
            </div>
        </div>
    </div>

     <section class="content-header">
        <h1 class="pull-left">Data Crips</h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>
        @include('flash::message')
        <div class="box box-primary">
            <div class="box-body">
                    @include('crips.table')
            </div>
        </div>
    </div>
@endsection

