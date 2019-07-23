<!-- Group Field -->
<div class="form-group col-sm-6">
    {!! Form::label('group', 'Group:') !!}
    {!! Form::select('group', ['admin' => 'admin', 'kesiswaan' => 'kesiswaan', 'walikelas' => 'walikelas', 'kepala_sekolah' => 'kepala sekolah'], null, ['class' => 'form-control']) !!}
</div>

<!-- Menu Field -->
<div class="form-group col-sm-6">
    {!! Form::label('menu', 'Menu:') !!}
    {!! Form::select('menu', ['user' => 'user', 
                               'akses'=>'akses',
                               'siswa' => 'siswa', 
                               'alternatif' => 'alternatif', 
                               'kriteria' => 'kriteria',
                               'crips' => 'crips',
                               'penilaian' => 'penilaian',
                               'laporan' => 'laporan'], null, ['multiple' => 'multiple','class' => 'form-control','name'=>'menu[]']) !!}


</div>



<!-- Keterangan Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('keterangan', 'Keterangan:') !!}
    {!! Form::textarea('keterangan', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('hakAkses.index') !!}" class="btn btn-default">Cancel</a>
</div>
