<!-- Kode Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kode', 'Kode:') !!}
    {!! Form::select('kode', ['C1' => 'C1', 'C2' => 'C2', 'C3' => 'C3', 'C4' => 'C4', '' => ''], null, ['class' => 'form-control']) !!}
</div>

<!-- Kriteria Field -->
@if(Request::segment(3)=="edit")
<div class="form-group col-sm-6">
    {!! Form::label('kriteria', 'Kriteria:') !!}
    {!! Form::text('kriteria', null, ['readonly','class' => 'form-control']) !!}
</div>
@else
<div class="form-group col-sm-6">
    {!! Form::label('kriteria', 'Kriteria:') !!}
    {!! Form::text('kriteria', null, ['class' => 'form-control']) !!}
</div>
@endif
<!-- Nilai Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nilai', 'Nilai:') !!}
    {!! Form::number('nilai', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::select('type', ['cost' => 'cost', 'benefit' => 'benefit'], null, ['class' => 'form-control']) !!}
</div>

<!-- Keterangan Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('keterangan', 'Keterangan:') !!}
    {!! Form::textarea('keterangan', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('kriterias.index') !!}" class="btn btn-default">Cancel</a>
</div>
