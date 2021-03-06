@extends('layouts.app')

@section('title', 'Startseite')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Startseite</div>

                <div class="card-body">
                    Willkommen {{ auth()->user()->name ?? '' }} bei MyHobbies!
                    <span class="btn btn-primary"><i class="fas fa-plus"></i> Hey Hey</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
