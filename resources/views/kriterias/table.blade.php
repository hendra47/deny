<table class="table table-responsive" id="kriterias-table">
    <thead>
        <th>Kode</th>
        <th>Kriteria</th>
        <th>Nilai</th>
        <th>Type</th>
        <th>Keterangan</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($kriterias as $kriteria)
        <tr>
            <td>{!! $kriteria->kode !!}</td>
            <td>{!! $kriteria->kriteria !!}</td>
            <td>{!! $kriteria->nilai !!}</td>
            <td>{!! $kriteria->type !!}</td>
            <td>{!! $kriteria->keterangan !!}</td>
            <td>
                {!! Form::open(['route' => ['kriterias.destroy', $kriteria->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('kriterias.show', [$kriteria->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('kriterias.edit', [$kriteria->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>