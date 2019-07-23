<!-- Nama id_kriteria -->
<div class="form-group col-sm-6">
    {!! Form::hidden('id_kriteria', $kriterias->id, ['class' => 'form-control']) !!}
</div>
<!-- kriteria -->
<div class="form-group col-sm-6">
    {!! Form::hidden('type', $kriterias->type, ['class' => 'form-control']) !!}
</div>

<!-- Nama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama', 'Crips:') !!}
    {!! Form::text('nama', null, ['class' => 'form-control']) !!}
</div>

<!-- Nilai Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nilai', 'Nilai:') !!}
    {!! Form::number('nilai', null, ['class' => 'form-control']) !!}
</div>
<!-- RUmus Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rumus', 'Rumus:') !!}
    {!! Form::select('rumus', ['persamaan' => 'persamaan','grade' => 'grade','array' => 'array','range' => 'range'], null, ['class' => 'form-control']) !!}
</div>

<!-- Keterangan Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('keterangan', 'Keterangan:') !!}
    {!! Form::textarea('keterangan', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('crips.index') !!}" class="btn btn-default">Cancel</a>
</div>


