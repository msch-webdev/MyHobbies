@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Neues Hobby</div>

                <div class="card-body">
                    
                    <form action="/hobby" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control {{ $errors->has('name') ? 'border-danger' : ''}}" id="name" name="name" value="{{ old('name')}}">
                            <small class="form-text text-danger">{!! $errors->first('name') !!}</small>
                        </div>
                        
                        <div class="form-group">
                            <label for="beschreibung">Beschreibung</label>
                            <textarea name="beschreibung" id="beschreibung" rows="5" class="form-control {{ $errors->has('name') ? 'border-danger' : ''}}">{{ old('beschreibung') }}</textarea>
                            <small class="form-text text-danger">{!! $errors->first('beschreibung') !!}</small>
                        </div>
                        
                        <input type="submit" class="btn btn-primary" value="absenden">
                    </form>


                    <a class="btn btn-primary btn-sm mt-3 float-right" href="/hobby"> <i class="fas fa-arrow-circle-up"></i>Zurück</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection