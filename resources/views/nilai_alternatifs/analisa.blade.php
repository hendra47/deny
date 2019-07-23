
<table class="table table-responsive" id="nilaiAlternatifs-table">
  
    <thead>
        <th>Alternatif & Kriteria</th>
       @foreach($kriterias2 as $ktr)
            <th>{{ $ktr->kode }}</th>
       @endforeach
    </thead>
    <tbody>
      @foreach($alternatifs as $alt)
        <tr>
            <td>{{ $alt->kode }}</td>
             @foreach($kriterias2 as $k)
                @foreach($nilai as $n)
				
					@if ($n->kriteria === $k->kode AND $n->kode === $alt->kode)
                            <td>{{$n->nilai}}</td>
                    @endif
                @endforeach   
             @endforeach
        </tr>
    @endforeach
    </tbody>
</table>