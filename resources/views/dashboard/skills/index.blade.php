@extends('dashboard.layouts.master')
@section('title_admin','Skills')
@section('skills.active','active')
@section('content')



            <!-- Content wrapper -->
            <div class=" content-wrapper">
                <!-- Content -->
                   
                <div class=" container-xxl flex-grow-1 container-p-y">
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"><a href="{{route('dashboard.index')}}">Dashboard</a> /</span> Skills </h4>

                    <div class=" card mb-4">
                        <div class="table-responsive text-nowrap">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>Name</th>
                                  <th>Progress</th>
                                  <th>Actions</th>
                                </tr>
                              </thead>
                              <tbody class="table-border-bottom-0">
                                <tr>
                                  <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular Project</strong></td>
                                  <td>Albert Cook</td>
                              
                                  <td>
                                    <div class="dropdown">
                                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                      </button>
                                      <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <!--/ Basic Bootstrap Table -->
                    </div>
                </div>

                </div>
                <!-- / Content -->

        <!-- / Layout page -->

@endsection


