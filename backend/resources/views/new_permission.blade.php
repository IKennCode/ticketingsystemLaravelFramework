@extends('layout.app')

@section('content')
    <div class="container-fluid pt-5">
        <div class="card mt-5">
            <div class="card-header"><Strong>Create New Permission</Strong></div>
            <div class="card-body">
                <form action="/permissions/save" method="post">
                    @csrf
                <div class="input-group mb-3">
                    <label for="description" class="input-group-text">Permission Name</label>
                    <input type="text" name="description" id="description" class="form-control form-control-sm" autofocus required>
                </div>
                
                <div id="accordion">
                    <div class="card">
                      <div class="card-header">
                        <a class="btn" data-bs-toggle="collapse" href="#collapseOne">
                          Tickets
                        </a>
                      </div>
                      <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                        <div class="card-body">
                            <div class="container">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="view_all_tickets" name="view_all_tickets" value="1">
                                    <label class="form-check-label" for="view_all_tickets">View All Tickets</label>
                                </div>

                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="view_my_tickets" name="view_my_tickets" value="1">
                                    <label class="form-check-label" for="view_my_tickets">View My Tickets</label>
                                </div>

                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="view_new_tickets" name="view_new_tickets" value="1">
                                    <label class="form-check-label" for="view_new_tickets">View New Tickets</label>
                                </div>

                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="view_open_tickets" name="view_open_tickets" value="1">
                                    <label class="form-check-label" for="view_open_tickets">View Open Tickets</label>
                                </div>

                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="view_resolved_tickets" name="view_resolved_tickets" value="1">
                                    <label class="form-check-label" for="view_resolved_tickets">View Resolved Tickets</label>
                                </div>

                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="view_closed_tickets" name="view_closed_tickets" value="1">
                                    <label class="form-check-label" for="view_closed_tickets">View Closed Tickets</label>
                                </div>

                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="view_cancelled_tickets" name="view_cancelled_tickets" value="1">
                                    <label class="form-check-label" for="view_cancelled_tickets">View Cancelled Tickets</label>
                                </div>

                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="add_tickets" name="add_tickets" value="1">
                                    <label class="form-check-label" for="add_tickets">Create Tickets</label>
                                </div>

                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="close_tickets" name="close_tickets" value="1">
                                    <label class="form-check-label" for="close_tickets">Close Tickets</label>
                                </div>

                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="cancel_tickets" name="cancel_tickets" value="1">
                                    <label class="form-check-label" for="cancel_tickets">Cancel Tickets</label>
                                </div>    
                            </div>
                        </div>
                      </div>
                    </div>
                  
                    <div class="card">
                      <div class="card-header">
                        <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseTwo">
                          Users
                        </a>
                      </div>
                      <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                        <div class="card-body">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="view_users" name="view_users" value="1">
                                <label class="form-check-label" for="view_users">View Users</label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="create_users" name="create_users" value="1">
                                <label class="form-check-label" for="create_users">Create Users</label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="update_users" name="update_users" value="1">
                                <label class="form-check-label" for="update_users">Update Users</label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="disable_users" name="disable_users" value="1">
                                <label class="form-check-label" for="disable_users">Disable Users</label>
                            </div>
                        </div>
                      </div>
                    </div>
                  
                    <div class="card">
                      <div class="card-header">
                        <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseThree">
                          Departments
                        </a>
                      </div>
                      <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
                        <div class="card-body">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="view_departments" name="view_departments" value="1">
                                <label class="form-check-label" for="view_departments">View Departments</label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="create_departments" name="create_departments" value="1">
                                <label class="form-check-label" for="create_departments">Create Departments</label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="update_departments" name="update_departments" value="1">
                                <label class="form-check-label" for="update_departments">Update Departments</label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="disable_departments" name="disable_departments" value="1">
                                <label class="form-check-label" for="disable_departments">Disable Departments</label>
                            </div>
                        </div>
                      </div>
                    </div>

                    <div class="card">
                      <div class="card-header">
                        <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseFour">
                          Job Titles
                        </a>
                      </div>
                      <div id="collapseFour" class="collapse" data-bs-parent="#accordion">
                        <div class="card-body">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="view_job_titles" name="view_job_titles" value="1">
                                <label class="form-check-label" for="view_job_titles">View Job Titles</label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="create_job_titles" name="create_job_titles" value="1">
                                <label class="form-check-label" for="create_job_titles">Create Job Titles</label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="update_job_titles" name="update_job_titles" value="1">
                                <label class="form-check-label" for="update_job_titles">Update Job Titles</label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="disable_job_titles" name="disable_job_titles" value="1">
                                <label class="form-check-label" for="disable_job_titles">Disable Job Titles</label>
                            </div>
                        </div>
                      </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                          <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseFive">
                            Permissions
                          </a>
                        </div>
                        <div id="collapseFive" class="collapse" data-bs-parent="#accordion">
                          <div class="card-body">
                              <div class="form-check form-switch">
                                  <input class="form-check-input" type="checkbox" id="view_permissions" name="view_permissions" value="1">
                                  <label class="form-check-label" for="view_permissions">View Permissions</label>
                              </div>
  
                              <div class="form-check form-switch">
                                  <input class="form-check-input" type="checkbox" id="create_permissions" name="create_permissions" value="1">
                                  <label class="form-check-label" for="create_permissions">Create Job Permissions</label>
                              </div>
  
                              <div class="form-check form-switch">
                                  <input class="form-check-input" type="checkbox" id="update_permissions" name="update_permissions" value="1">
                                  <label class="form-check-label" for="update_permissions">Update Permissions</label>
                              </div>
  
                              <div class="form-check form-switch">
                                  <input class="form-check-input" type="checkbox" id="disable_permissions" name="disable_permissions" value="1">
                                  <label class="form-check-label" for="disable_permissions">Disable Permissions</label>
                              </div>
                          </div>
                        </div>
                      </div>
                      
                      <button type="submit" class="btn btn-sm btn-primary mt-3">Create Permission</button>
                  </div>
                </form>
                </div>
        </div>
    </div>
@endsection