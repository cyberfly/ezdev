
              @extends('layouts.backend_default')
              @section('content')

                  <!-- page start-->


                  <div class="row">
                      <div class="col-lg-12">

                          <section class="panel">
                              <div class="panel-body">

                                  <div class="pull-left">

                                      {{  create_link_route('admin.packages.create', 'Create Package') }}

                                  </div>
                              </div>
                          </section>


                          <section class="panel">
                              <header class="panel-heading">
                                  {{$data['title']}}
                              </header>

                              <table class="table table-striped table-advance table-hover">
                                  <thead>
                                  <tr>
                                      <th>Package Name</th>
                                      <th>Package Description</th>
                                      <th>Action</th>
                                  </tr>
                                  </thead>
                                  <tbody>

                                  @foreach ($packages as $package)

                                  <tr>
                                      <td>{{{ $package->package_name }}}</td>
                                      <td>{{{ Str::words($package->package_description,10) }}}</td>
                                      <td>

                                          {{  edit_link_route('admin.packages.edit', '', array($package->id)) }}
                                          {{  delete_link_route('admin.packages.destroy', '', array($package->id)) }}

                                      </td>
                                  </tr>

                                  @endforeach

                                  </tbody>
                              </table>

                              <div class="text-center">
                                <?php echo $packages->links(); ?>
                              </div>


                          </section>
                      </div>
                  </div>
                  <!-- page end-->



              @stop

              @section('application_js')

              {{ HTML::script('assets/admin/js/packages.index.js') }}


              @stop



