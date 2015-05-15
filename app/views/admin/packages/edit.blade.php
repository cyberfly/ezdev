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

                                  {{ Form::model($package, array('route' => array('admin.packages.update', $package->id), 'method'=>'put', 'class'=>'cmxform form-horizontal tasi-form', 'id'=>'packageForm' )) }}

                                  <!-- {{ Form::model($package, array('route' => array('admin.packages.update', $package->id), 'method'=>'put', 'class'=>'cmxform form-horizontal tasi-form', 'id'=>'packageForm')) }} -->

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
