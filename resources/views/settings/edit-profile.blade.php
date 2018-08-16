@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('/home') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Ubah Profil</li>
                    </ul>
                <div class="card card-default">
                    <div class="card-header">
                        <h2 class="card-title">Ubah Profil</h2>
                    </div>
                <div class="card-body">
                    {!! Form::model(auth()->user(), ['url' => url('/settings/profile'),
                    'method' => 'post', 'class'=>'form-horizontal']) !!}
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    {!! Form::label('name', 'Nama', ['class'=>'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::text('name', null, ['class'=>'form-control']) !!}
                    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                </div>
                </div>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    {!! Form::label('email', 'Email', ['class'=>'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::email('email', null, ['class'=>'form-control']) !!}
                    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                {!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
                </div>
                </div>
                {!! Form::close() !!}
                 </div>
            </div>
        </div>
    </div>
</div>
@endsection