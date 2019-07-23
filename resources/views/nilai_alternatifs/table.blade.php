
<table class="table table-responsive" id="nilaiAlternatifs-table">
    <thead>
        <th>Alternatif</th>
        <th>Kriteria</th>
        <th>Nilai</th>
        <th>Bobot</th>
        <th colspan="3">Delete</th>
    </thead>
    <tbody>
    @foreach($nilai as $nilaiAlternatif)
      @if(Request::get('id')==1)
        @if(App\Helpers\spkHelper::kriteria($nilaiAlternatif->kriteria)=="Absensi" OR App\Helpers\spkHelper::kriteria($nilaiAlternatif->kriteria)=="Raport")
        <tr>
            <td>{{ App\Helpers\spkHelper::alternatif($nilaiAlternatif->nilai_kode) }}</td>
            <td>{{ App\Helpers\spkHelper::kriteria($nilaiAlternatif->kriteria) }}</td>
            <td>{!! $nilaiAlternatif->input !!}</td>            
            <td>{!! $nilaiAlternatif->nilai !!}</td>
            <td>
                {!! Form::open(['route' => ['nilaiAlternatifs.destroy', $nilaiAlternatif->id_nilai], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
        @endif
    @endif
    @if(Request::get('id')==2)
        @if(App\Helpers\spkHelper::kriteria($nilaiAlternatif->kriteria)=="eskul" OR App\Helpers\spkHelper::kriteria($nilaiAlternatif->kriteria)=="Sikap")
        <tr>
            <td>{{ App\Helpers\spkHelper::alternatif($nilaiAlternatif->nilai_kode) }}</td>
            <td>{{ App\Helpers\spkHelper::kriteria($nilaiAlternatif->kriteria) }}</td>
            <td>{!! $nilaiAlternatif->input !!}</td>            
            
            <td>{!! $nilaiAlternatif->nilai !!}</td>
            <td>
                {!! Form::open(['route' => ['nilaiAlternatifs.destroy', $nilaiAlternatif->id_nilai], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
        @endif
    @endif
    @endforeach
    </tbody>
</table>