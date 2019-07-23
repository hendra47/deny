@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Hak Akses
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($hakAkses, ['route' => ['hakAkses.update', $hakAkses->id], 'method' => 'patch']) !!}

                        @include('hak_akses.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection