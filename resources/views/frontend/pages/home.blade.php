

@extends('frontend\layout\app')

@section('content')

@include('frontend\components\fixed\hero')
@include('frontend\components\device\device')
@include('frontend\components\device\latestDevice')
@include('frontend\components\team')
@include('frontend\components\about\about')

@endsection
