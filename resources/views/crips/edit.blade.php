@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Crips
        </h1>
   </section>
   <div class="content">
       <div class="callout callout-warning" >
             <h4>Rumus yang digunakan :</h4>  
             <ul>
                 <li>Persamaan  = jika crip nya berisi nilai fix  crip:0 ,nilai:4,crip untuk absensi</li>
                 <li>Persamaan  = jika crip nya berisi nilai lebih besar / lebih kecil  crip:>=5 ,nilai:4,crip untuk absensi</li>                 
                 <li>Grade      = jika crip nya berisi nilai Grade seperti A crip:A ,nilai:1</li> 
                 <li>Array      = jika crip nya berisi nilai yang mengandung angka crip:1,2,3 ,nilai:1</li>   
                 <li>Range      = jika crip nya berisi nilai range contohnya crip:90-100 ,nilai:1</li>                                                                                                                  
             </ul>   
    </div>
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($crips, ['route' => ['crips.update', $crips->id], 'method' => 'patch']) !!}

                        @include('crips.edit_fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection