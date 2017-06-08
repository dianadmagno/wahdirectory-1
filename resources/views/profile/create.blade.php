@extends('layouts.app')

@section('content')
<br>
    <div class="col s12 m8 offset-m2 l6 offset-l3" style="width:500px;">
        <div class="card-panel grey lighten-4 z-depth-1">
            <span class="card-title"><h5><i class="material-icons small">add</i> WAH NGO</h5></span>
          <div class="row valign-wrapper">
            <div class="col s12">
        <form method="POST" action="{{ route('profile.store') }}">
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
                <div class="input-field col s12">
                    <select type="text" id="designation" name="designation">
                      <option value="" disabled selected>Choose your option</option>
                        @foreach(App\UserRole::all() as $role)
                            <option value="{{ $role->role_id }}">{{ $role->role_name }}</option>
                        @endforeach
                    </select>
                    <label>Designation</label>
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

            <div class="row">
              <div class="input-field col s12">
                      <input type="date" name="date_of_hired" id="date_of_hired" class="datepicker">
                      <label for="date_of_hired">Date Of Hired</label>
              </div>
             </div>   


            <button type="submit" class="btn waves-effect waves-light right">Submit<i class="large material-icons right">send</i></button>

          </form>
                  </div>
          </div>
        </div>
      </div>
@endsection
