@extends('layouts.master')

@section('content')
<ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>

{!! Form::open(array('route' => 'addStudent', 'class' => 'form')) !!}

<div class="form-group">
    {!! Form::label('Name') !!}
    {!! Form::text('name', null,
    array('required', 'class'=>'form-control',
    'placeholder'=>'Furkan')) !!}
</div>

<div class="form-group">
    {!! Form::label('Surname') !!}
    {!! Form::text('surname', null,
    array('required', 'class'=>'form-control',
    'placeholder'=>'Celik')) !!}
</div>

<div class="form-group">
    {!! Form::label('Department') !!}
    {!! Form::textarea('Department', null,
    array('required', 'class'=>'form-control',
    'placeholder'=>'Computer Engineer')) !!}
</div>

<div class="form-group">
    {!! Form::submit('Create Student',
    array('class'=>'btn btn-primary')) !!}
</div>
{!! Form::close() !!}

@stop

@endsection