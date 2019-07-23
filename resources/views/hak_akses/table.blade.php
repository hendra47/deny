<table class="table table-responsive" id="hakAkses-table">
    <thead>
        <th>Group</th>
        <th>Menu</th>
        <th>Keterangan</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($hakAkses as $hakAkses)
        <tr>
            <td>{!! $hakAkses->group !!}</td>
            <td>{!! $hakAkses->menu !!}</td>
            <td>{!! $hakAkses->keterangan !!}</td>
            <td>
                {!! Form::open(['route' => ['hakAkses.destroy', $hakAkses->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('hakAkses.show', [$hakAkses->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('hakAkses.edit', [$hakAkses->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>