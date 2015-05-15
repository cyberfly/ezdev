@extends('layouts.backend_default')
@section('content')

<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             {{$data['title']}}
                          </header>
                          <div class="panel-body">
                              <div class="form">

                                  {{ Form::open(array('url' => 'user.put', 'class'=>'cmxform form-horizontal tasi-form', 'id'=>'signupForm')) }}

                                      <div class="form-group ">
                                          <label for="first_name" class="control-label col-lg-2">First Name</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" name="first_name" id="first_name" name="first_name" type="text" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="last_name" class="control-label col-lg-2">Last Name</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" name="last_name" id="last_name" name="last_name" type="text" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="email" class="control-label col-lg-2">Email</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " name="email" id="email" name="email" type="email" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="password" class="control-label col-lg-2">Password</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " name="password" id="password" name="password" type="password" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="confirm_password" class="control-label col-lg-2">Confirm Password</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " name="confirm_password" id="confirm_password" name="confirm_password" type="password" />
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-danger" type="submit">Save</button>
                                              <a href="{{ URL::to('dashboard') }}" class="btn btn-default" >Cancel</a>
                                          </div>
                                      </div>

                                  {{ Form::close() }}

                              </div>
                          </div>
                      </section>
                  </div>
              </div>

@stop