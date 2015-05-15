
              @extends('layouts.backend_default')
              @section('content')

                  <!-- page start-->


                  <div class="row">
                      <div class="col-lg-12">
                          <section class="panel">
                              <header class="panel-heading">
                                  {{$data['title']}}
                              </header>
                              <table class="table table-striped table-advance table-hover">
                                  <thead>
                                  <tr>
                                      <th><i class="fa fa-bullhorn"></i> First Name</th>
                                      <th class="hidden-phone"><i class="fa fa-question-circle"></i> Last Name</th>
                                      <th><i class="fa fa-bookmark"></i> Email</th>
                                      <th><i class=" fa fa-edit"></i> Status</th>
                                      <th></th>
                                  </tr>
                                  </thead>
                                  <tbody>

                                  @foreach ($users as $user)

                                  <tr>
                                      <td><a href="#">{{{ $user->first_name }}}</a></td>
                                      <td class="hidden-phone">{{{ $user->last_name }}}</td>
                                      <td>{{{ $user->email }}} </td>
                                      <td><span class="label label-info label-mini">Active</span></td>
                                      <td>
                                          <a href="{{ URL::to('edit_user') }}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                          <a href="{{ URL::to('edit_user') }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                                      </td>
                                  </tr>

                                  @endforeach

                                  </tbody>
                              </table>
                          </section>
                      </div>
                  </div>
                  <!-- page end-->



              @stop



