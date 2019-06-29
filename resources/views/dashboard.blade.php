@extends('layout')

@section('content')
<!-- DataTables Example -->
<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>UniqueID</th>
                    <th>Flight</th>
                    <th>To</th>
                    <th>Date</th>
                    <th>Claim</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($fri as $item)
                    <tr>
                    <td><a href="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data={{$item->UniqueID}}}}">{{$item->UniqueID}}</a></td>
                    <td>{{$item->AIRLINE_COPD.$item->FLIGHT_NUM}}</td>
                    <td>{{$item->DLINE_CITY1}}</td>
                    <td>{{$item->EffectiveDate}}</td>
                    <td>{{preg_replace('/\D/', '', $item->ACTUAL_CLAIM)}}</td>
                    <td>
                    <a href="/edit/{{$item->UniqueID }}">EDIT</a> 
                    | DELETE 
                     @if($item->RECLAIM_FIRST_BAG_TIME == '0000-00-00 00:00:00')
                    |   <a href="/reclaim/{{$item->UniqueID }}">RECLAIM</a>
                    @endif
                    </td> 
                    </tr>
                   
                   
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
@endsection