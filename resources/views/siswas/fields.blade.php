<!-- Nama Siswa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_siswa', 'Nama Siswa:') !!}
    {!! Form::text('nama_siswa', null, ['class' => 'form-control']) !!}
</div>

<!-- Tahun Ajaran Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tahun_ajaran', 'Tahun Ajaran:') !!}
    {!! Form::select('tahun_ajaran', ['2013' => '2013', '2014' => '2014', '2015' => '2015', '2016' => '2016', '2017' => '2017', '2018' => '2018'], null, ['class' => 'form-control']) !!}
</div>

<!-- Jk Field -->
<div class="form-group col-sm-12">
    {!! Form::label('jk', 'Jk:') !!}
    <label class="radio-inline">
        {!! Form::radio('jk', "Laki-laki", null) !!} Laki-laki
    </label>

    <label class="radio-inline">
        {!! Form::radio('jk', "Perempuan", null) !!} Perempuan
    </label>

</div>

<!-- Jurusan Field -->
<div class="form-group col-sm-12">
    {!! Form::label('jurusan', 'Jurusan:') !!}
    <label class="radio-inline">
        {!! Form::radio('jurusan', "otomotif", null) !!} Tenik Otomotif
    </label>

    <label class="radio-inline">
        {!! Form::radio('jurusan', "listrik", null) !!} Teknik Listrik
    </label>

    <label class="radio-inline">
        {!! Form::radio('jurusan', "jarkom", null) !!} Jaringan Komputer
    </label>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('siswas.index') !!}" class="btn btn-default">Cancel</a>
</div>
