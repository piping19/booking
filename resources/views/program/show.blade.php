@extends('main')

@section('title','Program')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Program</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Program</a></i>
                    <li><a href="#">Data</a></i>
                    <li class="active">Detail</li>
                </ol>
            </div>
        </div>
    </div>
</div>
    
@endsection

@section('content')

<div class="content mt-3">
<div class="content mt-3">
<div class="animated fadeIn">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    <div class="card">
        <div class="class-header">
            <div class="pull-left">
            <strong>Detail Program</strong>
            </div>
            <div class="pull-right">
            <a href="{{url('programs')}}" class="btn btn-success btn-secondary btn-sm">
                <i class="fa fa-undo"></i>Back
            </a>
            </div>
        </div>
        <div class="card body table-responsive"></div>
            <div class="row">
                <div class="col-md8 offset-md-2">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th style="widht:30%">Edulevel</th>
                                <td>{{$program->edulevel->name}}</td>
                            </tr>
                            <tr>
                                <th>Program</th>
                                <td>{{$program->name}}</td>
                            </tr>
                            <tr>
                                <th>Student price</th>
                                <td>{{$program->student_price}}</td>
                            </tr>
                            <tr>
                                <th>Student max</th>
                                <td>{{$program->student_max}}</td>
                            </tr>
                            <tr>
                                <th>Info</th>
                                <td>{{$program->info}}</td>
                            </tr>
                            <tr>
                                <th>Image</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Created at</th>
                                <td>{{$program->created_at}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
</div>
</div>
    
@endsection