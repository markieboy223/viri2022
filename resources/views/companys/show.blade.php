@extends('companys.layout')

@section('content')
    <div style="margin-top: 10%" class="row ">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Company</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('companys.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <img style="width: 250px" src="{{ $company->image }}" alt=""/>
            </div>
        </div>
        <br>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Company name:</strong>
                {{ $company->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Company email:</strong>
                {{ $company->email }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {{ $company->description }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>checked:</strong>
                @if($company->checked == 1)
                    <a><i class="fa fa-check fa-lg"></i></a>
                @endif
            </div>
        </div>
    </div>
@endsection
