@extends('main')

@section('title','Edulevel')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Edulevel</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Edulevel</a></i>
                    <li class="active">Add</li>
                </ol>
            </div>
        </div>
    </div>
</div>
    
@endsection

@section('content')

<div class="content mt-3">
<div class="animated fadeIn">

    <div class="card">
        <div class="class-header">
            <div class="pull-left">
            <strong>Edit Jenjang</strong>
            </div>
            <div class="pull-right">
            <a href="{{url('edulevels')}}" class="btn btn-success btn-secondary btn-sm">
                <i class="fa fa-undo"></i>Back
            </a>
            </div>
        </div>
        <div class="card body"></div>

        <div class="row">
           <div class="col-md-4 offset-md-4">
            <form action="{{url('edulevels/'.$edulevel->id)}}" method="post">
            @method('patch')
                @csrf
                <div class="form-group">
                    <label > Nama Jenjang</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $edulevel->name) }}" autofocus required>
                    @error('name')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label >Keterangan</label>
                    <textarea name="desc" class="form-control @error('desc') is-invalid @enderror" >{{old('desc', $edulevel->desc)}}</textarea>
                    @error('desc')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success">save</button>
            </form>
           </div>
        </div>
        
    </div>
</div>
</div>

    
@endsection