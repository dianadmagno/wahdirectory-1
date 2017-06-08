@extends('layouts.app')

@section('content')
<br>
<div class="card-panel grey lighten-4 z-depth-1 row" style="padding:10px">
    <span class="card-title"><h4 style="margin-left:10px"><strong>WAH Non Government Organization</strong></h4></span>
    <a href="#wahngoModal" href="{{ route('profile.create') }}" class="btn-floating btn-large waves-effect waves-light purple tooltipped right" data-position="bottom" data-delay="50" data-tooltip="Add"><i class="material-icons">add</i></a>
            <table class="bordered highlight">
            <thead>
                <tr>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Username</th>
                    <th>Designation</th>
                    <th>Primary Contact #</th>
                    <th>Secondary Contact #</th>
                    <th>Email Address</th>
                    <th>Date of Birth</th>
                    <th>Date of Hired</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($user as $users)
                <tr>
                    <td>{{ $users->last_name }}</td>
                    <td>{{ $users->first_name }}</td>
                    <td>{{ $users->username }}</td>
                    <td>{{ $users->designation }}</td>
                    <td>{{ $users->primary_contact }}</td>
                    <td>{{ $users->seconday_contact }}</td>
                    <td>{{ $users->email }}</td>
                    <td>{{ $users->date_of_birtd }}</td>
                    <td>{{ $users->date_of_hired }}</td>
                    <td><a href="{{ route('profile.edit',$users->id) }}" class="waves-effect waves-light tooltipped" data-position="bottom" data-delay="50" data-tooltip="Edit"><i class="small material-icons">mode_edit</i></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
</div>

<!-- Modal Structure -->
  <div id="wahngoModal" class="modal">
    <div class="modal-content">
      <h4><span class="card-title"><i class="material-icons small">add</i>WAH NGO</span></h4>
      <div class="row">
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
