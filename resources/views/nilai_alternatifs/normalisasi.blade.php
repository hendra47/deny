
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
                              @if ($n->kriteria === 'C1')
                                     <td>{{round($C1/$n->nilai,2)}}</td>
                              @endif

                              @if ($n->kriteria === 'C2')

                               <td>{{round($n->nilai/$C2,2)}}</td>
                              @endif

                              @if ($n->kriteria === 'C3')
                                 <td>{{round($n->nilai/$C3,2)}}</td>
                              @endif

                              @if ($n->kriteria === 'C4')
                                 <td>{{round($n->nilai/$C4,2)}}</td>
                              @endif
                    @endif
                @endforeach   
             @endforeach
        </tr>
    @endforeach
    </tbody>
</table>