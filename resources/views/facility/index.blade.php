@extends('layouts.app')

@section('content')
    	    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Sites</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="region_code">Region</label>
                            <select type="text" class="form-control" id="region_code" name="region_code">
                              <option value="">--Select--</option>
                              @foreach($region as $region)
                                <option value="{{ $region->region_code }}">{{ $region->region_name }}</option>
                              @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="province_code">Province</label>
                            <select type="text" class="form-control" id="province_code" name="province_code">
                              <option value="">--Select--</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
