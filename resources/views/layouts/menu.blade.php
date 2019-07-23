
<li>
    <a href="{!! url('/home') !!}"><i class="fa fa-home"></i><span>Menu Utama</span></a>
</li>

@if(App\Helpers\spkHelper::akses('user')==='true')
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-user"></i><span>Data Users</span></a>
</li>
@endif

@if(App\Helpers\spkHelper::akses('akses')==='true')
<!-- <li class="{{ Request::is('hakAkses*') ? 'active' : '' }}">
    <a href="{!! route('hakAkses.index') !!}"><i class="fa fa-wrench"></i><span>Hak Akses</span></a>
</li> -->
@endif

@if(App\Helpers\spkHelper::akses('siswa')==='true')
<li class="{{ Request::is('siswas*') ? 'active' : '' }}">
    <a href="{!! route('siswas.index') !!}"><i class="fa fa-user"></i><span>Data Siswa</span></a>
</li>
@endif

@if(App\Helpers\spkHelper::akses('alternatif')==='true')
<li class="{{ Request::is('alternatifs*') ? 'active' : '' }}">
    <a href="{!! route('alternatifs.index') !!}"><i class="fa fa-edit"></i><span>Data Alternatif</span></a>
</li>
@endif

@if(App\Helpers\spkHelper::akses('kriteria')==='true')
<li class="{{ Request::is('kriterias*') ? 'active' : '' }}">
    <a href="{!! route('kriterias.index') !!}"><i class="fa fa-list"></i><span>Data Kriteria</span></a>
</li>
@endif

@if(App\Helpers\spkHelper::akses('crips')==='true')
<li class="{{ Request::is('crips*') ? 'active' : '' }}">
    <a href="{!! route('crips.index') !!}"><i class="fa fa-list"></i><span>Data Crips</span></a>
</li>
@endif

@if(App\Helpers\spkHelper::akses('penilaian')==='true')
<li  class="{{ Request::is('nilaiAlternatifs*') ? 'active treeview' : 'treeview' }}">
    <a href="#">
    <i class="fa fa-files-o"></i>
    <span>Form Penilaian</span>
    <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
    </span>
    </a>
    <ul class="treeview-menu">
   @if(App\Helpers\spkHelper::walikelas()==='true')
    <li class="{{ Request::get('id')==1 ? 'active' : '' }}"><a href="{!! route('nilaiAlternatifs.index',array('id' => 1)) !!}"><i class="fa fa-circle-o"></i>Absensi dan Raport</a></li>
   @endif
   @if(App\Helpers\spkHelper::kesiswaan()==='true')   
    <li class="{{ Request::get('id')==2 ? 'active' : '' }}"><a href="{!! route('nilaiAlternatifs.index',array('id' => 2)) !!}"><i class="fa fa-circle-o"></i> Sikap dan extrakulikuler</a></li>
   @endif    
    </ul>
</li>
@endif


@if(App\Helpers\spkHelper::akses('laporan')==='true')
<li class="{{ Request::is('laporan*') ? 'active treeview' : 'treeview' }}">
    <a href="#">
    <i class="fa fa-bar-chart"></i>
    <span>Laporan Penilaian </span>
    <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
    </span>
    </a>
    <ul class="treeview-menu">
    <li class="{{ Request::segment(2)==1 ? 'active' : '' }}"><a href="{!! URL::route('lap',1) !!}"><i class="fa fa-circle-o"></i>Data Nilai siswa</a></li>
    <li class="{{ Request::segment(2)==2 ? 'active' : '' }}"><a href="{!! URL::route('lap',2) !!}"><i class="fa fa-circle-o"></i>Hasil Analisa</a></li>
    <li class="{{ Request::segment(2)==3 ? 'active' : '' }}"><a href="{!! URL::route('lap',3) !!}"><i class="fa fa-circle-o"></i>Hasil Normalisasi</a></li>
    <li class="{{ Request::segment(2)==4 ? 'active' : '' }}"><a href="{!! URL::route('lap',4) !!}"><i class="fa fa-circle-o"></i>Hasil Perangkingan</a></li>
    <li class="{{ Request::segment(2)==5 ? 'active' : '' }}"><a href="{!! URL::route('lap',5) !!}"><i class="fa fa-circle-o"></i>Hasil Keputusan</a></li>    
    </ul>
</li>
@endif


<li>
    <a href="{!! url('/logout') !!}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i><span>Sign Out</span></a>
    <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
</li>




