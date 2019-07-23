<!-- Kode Field -->

<div class="form-group col-sm-6">
    {!! Form::label('kode', 'Kode:') !!}
    {!! Form::select('kode', ['A1' => 'A1', 'A2' => 'A2', 'A3' => 'A3', 'A4' => 'A4', 'A5' => 'A5'], null, ['class' => 'form-control']) !!}
</div>

<!-- Id Siswa Field -->
<div class="form-group col-sm-6">
 {!! Form::label('Siswa', 'Nama Siswa:') !!}
<select name="id_siswa" class="form-control">
  @foreach($siswas as $siswa)
    <option value="{!! $siswa->id !!}">{!! $siswa->nama_siswa !!}</option>
  @endforeach                 
</select>
</div>

<!-- Keterangan Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('keterangan', 'Keterangan:') !!}
    {!! Form::textarea('keterangan', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('alternatifs.index') !!}" class="btn btn-default">Cancel</a>
</div>
