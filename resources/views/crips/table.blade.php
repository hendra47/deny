
<table class="table table-responsive" id="crips-table">
    <thead>
        <th>id Crips</th>    
        <th>Kode kriteria</th>
        <th>Nama kriteria</th>
        <th>Crips</th>
        <th>Nilai</th>
        <th>Rumus</th>
        <th>Keterangan</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($crips as $crips)
        <tr>
            <td>#{!! $crips->id_crips !!}</td>        
            <td>{!! $crips->kode !!}</td>
            <td>{!! $crips->kriteria !!}</td>            
            <td>{!! $crips->nama !!}</td>
            <td>{!! $crips->nilai_crips !!}</td>
            <td>{!! $crips->rumus !!}</td>
            <td>{!! $crips->ket !!}</td>
            <td>
                {!! Form::open(['route' => ['crips.destroy', $crips->id_crips], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <!-- <a href="{!! route('crips.show', [$crips->id_crips]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a> -->
                    <a href="{!! route('crips.edit', [$crips->id_crips]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>