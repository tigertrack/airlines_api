@extends('layout')

@section('content')
<div class="col-md-12">
          <form action="/create" method="POST">
            @csrf
            <input type="hidden" name="UniqueID" value="{{$max->UniqueID+1}}">
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Airline</label>
              <div class="col-sm-2">
                <select name="airline" class="form-control form-control-sm">
                @foreach($airlines as $airline)
                <option value="{{$airline->CODE}}">{{$airline->SHORT_NAME}}</option>
                @endforeach
                
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Flight Number</label>
              <div class="col-sm-4">
                <input type="number" name="flight" class="form-control">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">FROM</label>
              <div class="col-sm-2">
                <select name="from" class="form-control form-control-sm">
                @foreach($station as $item)
                <option value="{{$item->CODE}}">{{$item->LONG_NAME}}</option>
                @endforeach
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">TO</label>
              <div class="col-sm-2">
                <select name="to" class="form-control form-control-sm">
                
                @foreach($station as $item)
                <option value="{{$item->CODE}}">{{$item->LONG_NAME}}</option>
                @endforeach
                
                  
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Landing Time</label>
              <div class="col-sm-4">
                <input type="text" name="landing" id="datetimepicker" class="form-control">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Baggage Claim Number</label>
              <div class="col-sm-4">
                <input type="text" name="claim" class="form-control">
              </div>
            </div>   

            <div class="form-group row">
              <div class="col-sm-4">
                  <input type="submit" value="Submit" class="btn btn-primary" name="sbmt">
              </div>
              
            </div>
          </form>
        </div>
@endsection