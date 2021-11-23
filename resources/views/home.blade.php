@extends('main')

@section('title','dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li>
                        <a href=""> <i class="menu-icon fa fa-dashboard"></i> </a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
    
@endsection

@section('content')

<div class="content mt-3">
    Letakan Info si Admin disini, seperti :
                                           1. Info pesanan,meliputi :<br>
                                              a. siapa saja yang pesan.<br>
                                              b. hari, jam , tanggal pesan.<br>
                                              c. berikan media chat dari pemesan.<br><br>
                                           2. Ketersediaan program, meliputi:<br>
                                              a. jumlah member, misal member a tersedia hanya melayani 2 member.<br>
                                              b. nama program nya apa.<br>
    <!-- .animated -->
</div>
<!-- .content -->
    
@endsection