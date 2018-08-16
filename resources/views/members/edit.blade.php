@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb">
					<li class="breadcrumb-item active" aria-current="page"><a href="{{ url('/home') }}">Dashboard</a></li>
					<li class="breadcrumb-item active" aria-current="page"><a href="{{ url('/admin/members') }}">Member</a></li>
					<li class="breadcrumb-item active" aria-current="page">Ubah Member</li>
				</ul>

				<div class="card">
					<div class="card-header">
						Ubah Member
					</div>

					<div class="card-body">
						{!! Form::model($member, ['url'=>route('members.update', $member->id), 'method'=>'put', 'files'=>'true', 'class'=>'form-horizontal']) !!}
						@include('members._form')
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection