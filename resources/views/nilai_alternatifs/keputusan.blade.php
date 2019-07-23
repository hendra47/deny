<?php
$tot_C1=0;
$tot_C2=0;
$tot_C3=0;
$tot_C4=0;
$total=0;
$obj=[];
$i=0;
$x=0;
?>
      @foreach($alternatifs as $alt)
             @foreach($kriterias2 as $k)
                @foreach($nilai as $n)
                    @if ($n->kriteria === $k->kode AND $n->kode === $alt->kode)
                              @if ($n->kriteria === 'C1')
                                <?php
                                    $tot_C1=round(($C1/$n->nilai)*10/100,2);
                                    $obj[$x]['C1']= $tot_C1;
                                ?>
                              @endif

                              @if ($n->kriteria === 'C2')
                                <?php
                                    $tot_C2=round(($n->nilai/$C2)*20/100,2);
                                    $obj[$x]['C2']= $tot_C1;                                    
                                ?>
                              @endif

                              @if ($n->kriteria === 'C3')
                                <?php
                                    $tot_C3=round(($n->nilai/$C3)*30/100,2);
                                    $obj[$x]['C3']= $tot_C1;                                    
                                    
                                ?>
                              @endif

                              @if ($n->kriteria === 'C4')
                                 <?php
                                    $tot_C4=round(($n->nilai/$C4)*40/100,2);
                                    $obj[$x]['C4']= $tot_C1;                                    
                                ?>
                              @endif
                                <?php
                                    // $total=$tot_C1+$tot_C2+$tot_C3+$tot_C4;
                                    $total=($tot_C4+$tot_C2+$tot_C3)-$tot_C1; 
                                ?>
                    @endif
                @endforeach   
             @endforeach
                   <?php
                        $obj[$x]['alt']=$alt->kode;
                           $obj[$x]['total']= $total;   
                                $x++;
                   ?>
    @endforeach

    <?php
        $hasil= App\Helpers\spkHelper::maxValueInArray($obj,'total');
    ?>

    <table class="table table-responsive" id="nilaiAlternatifs-table">
  
    <thead>
        <th>Alternatif & Kriteria</th>     
       <th>Hasil</th>
    </thead>
    <tbody>
        <tr style="background-color:pink;">
         @foreach($obj as $key => $val)
             @if ($val['total'] === $hasil)
                <td>{{ $val['alt'] }}</td>
                <td>{{ $val['total'] }}</td>
             @endif
         @endforeach
        </tr>
    </tbody>
</table>