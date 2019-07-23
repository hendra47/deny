
<!-- id_crips Field -->
<!-- <div class="form-group col-sm-6">
{!! Form::label('Absensi', $kriteria.':') !!}
<select name="id_crips" class="form-control">
  @foreach($crips as $crip)
    <option value="{!! $crip->id_crips !!}">{!! $crip->nama !!}</option>
  @endforeach                 
</select>
</div> -->
<!-- {{$crips}} -->
<div class="form-group col-sm-6">
    {!! Form::label('crips', 'Nilai :') !!}
    {!! Form::text('input', null, ['class' => 'form-control','id'=>'crips']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::hidden('id_crips', null, ['class' => 'form-control','id'=>'id_crips']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::hidden('id_alternatif', $id, ['class' => 'form-control','id'=>'id']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::hidden('kriteria', $kode_kriteria, ['class' => 'form-control','id'=>'kriteria']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::hidden('kode', $kode, ['class' => 'form-control','id'=>'kode']) !!}
</div>



<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <!-- <a href="{!! route('nilaiAlternatifs.index') !!}" class="btn btn-default">Cancel</a> -->
</div>
