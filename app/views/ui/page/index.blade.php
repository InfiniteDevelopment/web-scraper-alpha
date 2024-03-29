@extends('ui.__templates.container')

@section('title')
web-scraper-alpha
@stop

@section('css')
@stop

@section('content')
<div class="col-lg-10 col-lg-offset-1">
    <form class="form-horizontal">
        <fieldset>
            <legend>Add New TV Station</legend>
            <div class="form-group">
                <label for="inputTitle" class="col-lg-2 control-label">Title:</label>

                <div class="col-lg-4">
                    <input type="text" class="form-control" id="inputTitle">
                </div>
            </div>
            <div class="form-group">
                <label for="inputURL" class="col-lg-2 control-label">URL:</label>

                <div class="col-lg-4">
                    <input type="text" class="form-control" id="inputURL">
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    <button class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </fieldset>
    </form>
</div>
<div class="col-lg-12">
    @foreach($tvStations as $tvStation)
        <h4>{{ $tvStation->tv_station_name }}</h4>
        <br/>
        @foreach($tvStation->tvSlots as $tvSlot)
            {{$tvSlot->title}}
        @endforeach
        <br/>
    @endforeach
</div>
@stop

@section('javascript')
@stop