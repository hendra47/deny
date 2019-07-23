@extends('layouts.app')

@section('content')
   
    <section class="content">
        <h1>
           Form Penilaian - {{ $kriteria }}
        </h1>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{ $kode }}</h3>

              <p>Kode Alternatif</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
          </div>
        </div>
    </section>

    <div class="content">
                <div id="alert_placeholder"></div>
    
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'nilaiAlternatifs.store','class' => 'validate-form']) !!}

                        @include('nilai_alternatifs.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection