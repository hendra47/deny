<table class="table table-responsive" id="siswas-table">
    <thead>
        <th>Nama Siswa</th>
        <th>Tahun Ajaran</th>
        <th>Jk</th>
        <th>Jurusan</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($siswas as $siswa)
        <tr>
            <td>{!! $siswa->nama_siswa !!}</td>
            <td>{!! $siswa->tahun_ajaran !!}</td>
            <td>{!! $siswa->jk !!}</td>
            <td>{!! $siswa->jurusan !!}</td>
            <td>
                {!! Form::open(['route' => ['siswas.destroy', $siswa->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('siswas.show', [$siswa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('siswas.edit', [$siswa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>