@extends('layout')
@section('content')
<div class="col-md-12">
          <form action="/update" method="POST">
          @csrf
          <input type="hidden" name="id" value="{{$fri->UniqueID}}">

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Airline</label>
              <div class="col-sm-2">
                <select name="airline" class="form-control form-control-sm">
                  @foreach($airlines as $item)
                  <option value="{{$item->CODE}}"
                    @if($item->CODE == $fri->AIRLINE_CODE)selected 
                    @endif
                  >{{$item->SHORT_NAME}}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Arrival Claim</label>
              <div class="col-sm-4">
                <input type="text" name="claim" value="{{$fri->ACTUAL_CLAIM}}" class="form-control">
              </div>
            </div>
            
            <div class="form-group row">
              <div class="col-sm-4">
                  <input type="submit" value="Submit" class="btn btn-primary" name="sbmt">
              </div>
              </form>
                @if($fri->RECLAIM_FIRST_BAG_TIME == '0000-00-00 00:00:00')
                <div class="col-sm-4">
                <form method="GET" action="/reclaim/{{$fri->UniqueID}}">
                    <input type="submit" value="RECLAIM"  class="btn btn-success"/>
                </form>
                </div>
            </div>
            @endif
            
        </div>
@endsection
