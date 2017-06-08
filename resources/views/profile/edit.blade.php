@extends('layouts.app')

@section('content')
    <br>
    <div class="col s12 m8 offset-m2 l6 offset-l3" style="width:100%;">
        <div class="card-panel grey lighten-4 z-depth-1">
          <div class="row valign-wrapper">
            <div class="col s12">
                      <form method="POST" action="{{ route('profile.update', $user->id) }}">    
                          <div class="row">
                              <div class="input-field col s6">
                                  <input type="text" name="last_name" id="last_name" class="validate" value="{{ $user->last_name }}">
                                  <label for="last_name">Last Name</label>
                              </div>

                              <div class="input-field col s6">
                                  <label for="first_name">First Name</label>
                                  <input type="text" name="first_name" id="first_name" class="validate" value="{{ $user->first_name }}">
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
                                  <label for="designation">Designation</label>
                              </div>
                          </div>

                      <div class="row">
                          <div class="input-field col s6">
                                <input type="text" name="primary_contact" id="primary_contact" class="validate" value="{{ $user->primary_contact }}">
                                <label for="primary_contact">Primary Contact</label>
                         </div>

                        <div class="input-field col s6">
                                <input type="text" name="secondary_contact" id="secondary_contact" class="validate" value="{{ $user->secondary_contact }}">
                                <label for="secondary_contact">Secondary Contact</label>
                         </div>
                     </div>
                     <div class="row">
                        <div class="input-field col s6">
                                <input type="email" name="email" id="email" class="validate" value="{{ $user->email }}">
                                <label for="email">Email</label>
                        </div>
                     <div class="input-field col s6">
                            <label for="date_of_birth">Date Of Birth</label>
                            <input type="date" name="date_of_birth" id="date_of_birth" class="datepicker" value="{{ $user->date_of_birth }}">
                    </div>  
                     </div> 
                     <div class="row">
                      <div class="input-field col s12">
                              <input type="date" name="date_of_hired" id="date_of_hired" class="datepicker" value="{{ $user->date_of_hired }}">
                              <label for="date_of_hired">Date Of Hired</label>
                      </div>
                     </div>

                         <div class="card-content grey lighten-4">
                     <div class="row">
                        <div class="col-md-6">
                          <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                        <div class="col-md-6">
                            <input type="hidden" name="_token" value="{{ Session::token() }}">
                            <a href="{{ route('profile.index') }}" class="btn btn-default btn-block">Cancel</a>
                            {{ method_field('PUT') }}
                        </div>
                     </div>
    </div>

                     </form>
            </div>
          </div>
        </div>
      </div>

@endsection
