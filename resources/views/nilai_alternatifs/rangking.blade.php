<?php
$tot_C1=0;
$tot_C2=0;
$tot_C3=0;
$tot_C4=0;
$total=0;
?>
<table class="table table-responsive" id="nilaiAlternatifs-table">
  
    <thead>
        <th>Alternatif & Kriteria</th>
       @foreach($kriterias2 as $ktr)
            <th>{{ $ktr->kode }}</th>
       @endforeach
       <th>Hasil</th>
    </thead>
    <tbody>
      @foreach($alternatifs as $alt)
        <tr>
            <td>{{ $alt->kode }}</td>
             @foreach($kriterias2 as $k)
                @foreach($nilai as $n)
                  
                    @if ($n->kriteria === $k->kode AND $n->kode === $alt->kode)
                              @if ($n->kriteria === 'C1')
                                     <td>{{round(($C1/$n->nilai)*10/100,2)}}</td>
                                <?php
                                    $tot_C1=round(($C1/$n->nilai)*10/100,2);
                                ?>
                              @endif

                              @if ($n->kriteria === 'C2')
                                <td>{{round(($n->nilai/$C2)*20/100,2)}}</td>
                                <?php
                                    $tot_C2=round(($n->nilai/$C2)*20/100,2);
                                ?>
                              @endif

                              @if ($n->kriteria === 'C3')
                                     <td>{{round(($n->nilai/$C3)*30/100,2)}}</td>
                                <?php
                                    $tot_C3=round(($n->nilai/$C3)*30/100,2);
                                ?>
                              @endif

                              @if ($n->kriteria === 'C4')
                                     <td>{{round(($n->nilai/$C4)*40/100,2)}}</td>
                                 <?php
                                    $tot_C4=round(($n->nilai/$C4)*40/100,2);
                                ?>
                              @endif
                                <?php
                                    // $total=$tot_C1+$tot_C2+$tot_C3+$tot_C4;
                                    $total=($tot_C4+$tot_C2+$tot_C3)-$tot_C1; 
                                ?>
                    @endif
                @endforeach   
             @endforeach
             <td>{{$total}}</td>
        </tr>
    @endforeach
    </tbody>
</table>