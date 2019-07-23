<table class="table table-responsive" id="alternatifs-table">
    <thead>
        <th>Kode Alternatif</th>
        <th>Nama Siswa</th>
        <th>Keterangan</th>
        <th colspan="4">Masukan Nilai</th>
    </thead>
    <tbody>
    @foreach($alternatifs as $alternatif)
        <tr>
            <td>{!! $alternatif->kode !!}</td>
            <td>{!! $alternatif->nama_siswa !!}</td>
            <td>{!! $alternatif->keterangan !!}</td>
            <td>
                 <div class='btn-group'>
                   @foreach($kriterias as $kriteria)
                    @if(Request::get('id')==1)
                        @if($kriteria->kriteria=="Absensi" OR $kriteria->kriteria=="Raport")
                        <a class="btn btn-primary pull-right" style="margin-left:6px"  href="{!! URL::route('inputNilai',['id'=>$kriteria->id,'kode'=>$alternatif->kode,'kriteria'=>$kriteria->kriteria,'kode_kriteria'=>$kriteria->kode]) !!}">{!! $kriteria->kriteria !!}</a>
                        @endif                        
                    @endif
                    @if(Request::get('id')==2)
                        @if($kriteria->kriteria=="eskul" OR $kriteria->kriteria=="Sikap")
                        <a class="btn btn-primary pull-right" style="margin-left:6px"  href="{!! URL::route('inputNilai',['id'=>$kriteria->id,'kode'=>$alternatif->kode,'kriteria'=>$kriteria->kriteria,'kode_kriteria'=>$kriteria->kode]) !!}">{!! $kriteria->kriteria !!}</a>
                        @endif                        
                    @endif
                   @endforeach
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>