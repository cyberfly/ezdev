@extends('layouts.backend_default')
@section('content')

<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             {{ $data['title']  }}
                          </header>
                          <div class="panel-body">
                              <div class="form">

                                  {{ Form::open(array('route' => 'admin.packages.store', 'class'=>'cmxform form-horizontal tasi-form', 'id'=>'packageForm')) }}

                                      @include('admin.packages._partials.form');

                                  {{ Form::close() }}

                              </div>
                          </div>
                      </section>
                  </div>
              </div>

@stop

@section('application_js')



@stop
