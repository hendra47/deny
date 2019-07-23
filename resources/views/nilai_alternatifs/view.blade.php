
<table class="table table-responsive" id="nilaiAlternatifs-table">
    <thead>
        <th>Alternatif</th>
        <th>Kode</th>
        <th>Kriteria</th>
        <th>Nilai</th>
    </thead>
    <tbody>
    @foreach($nilai as $nilaiAlternatif)
        <tr>
            <td>{{ App\Helpers\spkHelper::alternatif($nilaiAlternatif->nilai_kode) }}</td>
            <td>{!! $nilaiAlternatif->kode !!}</td>            
            <td>{{ App\Helpers\spkHelper::kriteria($nilaiAlternatif->kriteria) }}</td>
            <td>{!! $nilaiAlternatif->input !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>