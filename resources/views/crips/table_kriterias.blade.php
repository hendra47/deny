<table class="table table-responsive" id="kriterias-table">
    <thead>
        <th>Id Kriteria</th>    
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
            <td>#{!! $kriteria->id !!}</td>        
            <td>{!! $kriteria->kode !!}</td>
            <td>{!! $kriteria->kriteria !!}</td>
            <td>{!! $kriteria->nilai !!}</td>
            <td>{!! $kriteria->type !!}</td>
            <td>{!! $kriteria->keterangan !!}</td>
            <td>
                <div class='btn-group'>
                    <a class="btn btn-primary pull-right"  href="{!! URL::route('cripsNew',$kriteria->id) !!}">Tambah Crips</a>

                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>