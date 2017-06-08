@extends('layouts.app')

@section('content')
<br>
<div class="card-panel grey lighten-4 z-depth-1 row" style="padding:10px">
	<span class="card-title"><h4 style="margin-left:10px"><strong>Partner Organization</strong></h4></span>
	<a href="#partnerModal" class="btn-floating btn-large waves-effect waves-light purple tooltipped right " data-position="bottom" data-delay="50" data-tooltip="Add"><i class="material-icons">add</i></a>
	<table class="bordered highlight centered">
		<thead>
			<tr>
				<th>Last Name</th>
				<th>First Name</th>
				<th>Organization</th>
				<th>Designation</th>
				<th>Primary Contact</th>
				<th>Secondary Contact</th>
				<th>Email</th>
				<th>Birthday</th>
			</tr>
		</thead>
		<tbody>
			@foreach($partner as $partners)
			<tr>
				<td>{{ $partners->last_name }}</td>
				<td>{{ $partners->first_name }}</td>
				<td>{{ $partners->designation }}</td>
				<td>{{ $partners->primary_contact }}</td>
				<td>{{ $partners->secondary_contact }}</td>
				<td>{{ $partners->email }}</td>
				<td>{{ $partners->birthday }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

  <!-- Modal Structure -->
  <div id="partnerModal" class="modal">
    <div class="modal-content">
      <h4><span class="card-title"><i class="material-icons small">add</i> Partner Organization</span>er</h4>
      <div class="row">
            <div class="col s12">
	        <form method="POST" action="{{ route('partner.store') }}">
	                {{ csrf_field() }}

	            <div class="row">
	                <div class="input-field col s6">
	                    <input type="text" name="last_name" id="last_name" class="validate">
	                    <label for="last_name">Last Name</label>
	                </div>
	                
	                <div class="input-field col s6">
	                    <input type="text" name="first_name" id="first_name" class="validate">
	                    <label for="first_name">First Name</label>
	                </div>
	            </div>    
	            
	            <div class="row">
	                <div class="input-field col s6">
	                    <i class="material-icons prefix">add_location</i>
	                    <select type="text" id="partner_designation" name="partner_designation">
	                      <option value="" disabled selected>Choose your option</option>
	                      @foreach(App\PartnerDesignation::get() as $partnerDesignation)
	                      	<option value="{{ $partnerDesignation->designation_id }}">{{ $partnerDesignation->designation }}</option>
	                      @endforeach
	                    </select>
	                    <label for="partner_designation">Designation</label>
	                </div>
	                <div class="input-field col s6">
	                    <select type="text" id="partner_organization" name="partner_organization">
	                      <option value="" disabled selected>Choose your option</option>
		                      @foreach(App\PartnerOrganization::get() as $partnerOrganization)
		                      	<option value="{{ $partnerOrganization->organization_id }}">{{ $partnerOrganization->organization }}</option>
		                      @endforeach
	                    </select>
	                    <label for="partner_organization">Organization</label>
	                </div>
	            </div>
	             
	            <div class="row">
	                <div class="input-field col s6">
	                    <i class="material-icons prefix">local_phone</i>
	                    <input type="text" name="primary_contact" id="primary_contact" class="validate">
	                    <label for="primary_contact">Primary Contact</label>
	                </div>

	                <div class="input-field col s6">
	                    <i class="material-icons prefix">local_phone</i>
	                    <input type="text" name="secondary_contact" id="secondary_contact" class="validate">
	                    <label for="secondary_contact">Secondary Contact</label>
	                </div>
	            </div>
	         
	            <div class="row">
	                <div class="input-field col s6">
	                        <i class="material-icons prefix">mail_outline</i>
	                        <input type="email" name="email" id="email" class="validate">
	                        <label for="email">Email</label>
	                </div>
	                <div class="input-field col s6">
	                    <input type="date" name="date_of_birth" id="date_of_birth" class="datepicker">
	                    <label for="date_of_birth">Date of Birth</label>
	                </div>  
	            </div>   
	            <div class="modal-footer">
	            	<button type="submit" class="waves-effect waves-light btn right">Submit<i class="material-icons right">send</i></button>
	            </div>	
	          </form>
            </div>
          </div>
    </div>
  </div>


@endsection
