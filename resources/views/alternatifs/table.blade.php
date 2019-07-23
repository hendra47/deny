<table class="table table-responsive" id="alternatifs-table">
    <thead>
        <th>Kode</th>
        <th>Id Siswa</th>
        <th>Keterangan</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($alternatifs as $alternatif)
        <tr>
            <td>{!! $alternatif->kode !!}</td>
            <td>{!! $alternatif->nama_siswa !!}</td>
            <td>{!! $alternatif->keterangan !!}</td>
            <td>
                {!! Form::open(['route' => ['alternatifs.destroy', $alternatif->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('alternatifs.show', [$alternatif->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('alternatifs.edit', [$alternatif->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>