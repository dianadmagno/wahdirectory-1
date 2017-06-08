@extends('layouts.app')

@section('content')
    <br>
    <div class="col s12 m8 offset-m2 l6 offset-l3">
        <div class="card-panel grey lighten-4 z-depth-1">
            <span class="card-title"><h5><i class="material-icons small">add</i> Partner Organization</h5></span>
          <div class="row valign-wrapper">
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
                      @foreach($partnerDesignation as $partDesig)
                        <option value="{{ $partDesig->designation_id }}">{{ $partDesig->designation }}</option>
                      @endforeach
                    </select>
                    <label for="partner_designation">Designation</label>
                </div>
                <div class="input-field col s6">
                    <select type="text" id="partner_organization" name="partner_organization">
                      <option value="" disabled selected>Choose your option</option>
                      @foreach($partnerOrganization as $partOrg)
                        <option value = "{{ $partOrg->organization_id }}"> {{ $partOrg->designation }}</option>
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

            <button type="submit" class="waves-effect waves-light btn right">Submit<i class="material-icons right">send</i></button>

          </form>
            </div>
          </div>
        </div>
      </div>
@endsection
