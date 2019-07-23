@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
           Form Penilaian
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'nilaiAlternatifs.store']) !!}

                        @include('nilai_alternatifs.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
