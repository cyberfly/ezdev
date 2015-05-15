@if ($errors->has() || Session::has('success'))

            <div class="row">

              <div class="col-lg-12">

                  <section class="panel">
                      <div class="panel-body">

                        @if(Session::has('success'))

                        <!-- success  -->

                        <div class="alert alert-success fade in">
                            <button type="button" class="close close-sm" data-dismiss="alert">
                                <i class="fa fa-times"></i>
                            </button>
                            <strong>Success!</strong> {{ Session::get('success') }}
                        </div>

                        @endif

                        @if ($errors->has())


                        <!-- error -->

                        <div class="alert alert-block alert-danger fade in">
                            <button type="button" class="close close-sm" data-dismiss="alert">
                                <i class="fa fa-times"></i>
                            </button>
                            <strong>Error!</strong> Please fix the error and try again.
                        </div>

                        @endif


                      </div>
                  </section>

              </div>

            </div>

            @endif