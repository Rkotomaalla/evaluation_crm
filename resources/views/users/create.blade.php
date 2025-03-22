@extends('layouts.master')
@section('heading')
    {{ __('Create user') }}
@stop

@section('content')
    {!! Form::open([
            'route' => 'users.store',
            'files'=>true,
            'enctype' => 'multipart/form-data'

            ]) !!}
    @include('users.form', ['submitButtonText' => __('Create user')])

    {!! Form::close() !!}

{{-- Ajout du formulaire pour l importation de fichier pour l utilisateur--}}
    {!! Form::open([
        'route' => 'users.import',
        'files'=>true,
        'enctype'=>'multipart/form-data'
    ]) !!}

         @include('users.import',['submitButtonText' =>__('Import File')])

    {!! Form::close() !!}
{{--  --}}

@stop

@push('scripts')
@include('images._uploadAvatarPreview')
@endpush