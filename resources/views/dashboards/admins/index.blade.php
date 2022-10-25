@extends('layouts.admin')

@section('main')
<main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="w-50 mx-auto text-center justify-content-center py-5 my-5">
                <h2 class="page-title mb-0">How can we help?</h2>
                <p class="lead text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <form class="searchform searchform-lg">
                  <input class="form-control form-control-lg bg-white rounded-pill pl-5" type="search" placeholder="Search" aria-label="Search">
                  <p class="help-text mt-2 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </form>
              </div>
              <div class="row my-4">
                <div class="col-6 col-lg-3">
                  <div class="card shadow mb-4">
                    <div class="card-body">
                      <i class="fe fe-info fe-32 text-primary"></i>
                      <a href="#">
                        <h3 class="h5 mt-4 mb-1">Getting start</h3>
                      </a>
                      <p class="text-muted">Start working with theme</p>
                    </div> <!-- .card-body -->
                  </div> <!-- .card -->
                </div> <!-- .col-md-->
                <div class="col-6 col-lg-3">
                  <div class="card shadow mb-4">
                    <div class="card-body">
                      <i class="fe fe-help-circle fe-32 text-success"></i>
                      <a href="./page-faqs.html">
                        <h3 class="h5 mt-4 mb-1">FAQs</h3>
                      </a>
                      <p class="text-muted">Frequently asked questions</p>
                    </div> <!-- .card-body -->
                  </div> <!-- .card -->
                </div> <!-- .col-md-->
                <div class="col-6 col-lg-3">
                  <div class="card shadow mb-4">
                    <div class="card-body">
                      <i class="fe fe-globe fe-32 text-warning"></i>
                      <a href="#">
                        <h3 class="h5 mt-4 mb-1">Knowledge Base</h3>
                      </a>
                      <p class="text-muted">Learn more about products?</p>
                    </div> <!-- .card-body -->
                  </div> <!-- .card -->
                </div> <!-- .col-md-->
                <div class="col-6 col-lg-3">
                  <div class="card shadow">
                    <div class="card-body">
                      <i class="fe fe-alert-triangle fe-32 text-danger"></i>
                      <a href="#">
                        <h3 class="h5 mt-4 mb-1">Reporting</h3>
                      </a>
                      <p class="text-muted">Report a bug</p>
                    </div> <!-- .card-body -->
                  </div> <!-- .card -->
                </div> <!-- .col-md-->
              </div> <!-- .row -->
              <div class="my-5 p-5">
                <div class="text-center">
                  <h2 class="mb-0">Knowledge Base</h2>
                  <p class="lead text-muted mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="row my-5">
                  <div class="col-md-4">
                    <h3 class="h5 mt-4 mb-1">Getting start</h3>
                    <p class="text-muted mb-4">Start working with theme</p>
                    <ul class="list-unstyled">
                      <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>Lorem ipsum dolor sit amet</li>
                      <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>Consectetur adipiscing elit</li>
                      <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>Integer molestie lorem at massa</li>
                      <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>Facilisis in pretium nisl aliquet</li>
                      <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>Nulla volutpat aliquam velit</li>
                    </ul>
                  </div> <!-- .col-md-->
                  <div class="col-md-4">
                    <h3 class="h5 mt-4 mb-1">Integrations</h3>
                    <p class="text-muted mb-4">How to integrate the theme?</p>
                    <ul class="list-unstyled">
                      <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>Lorem ipsum dolor sit amet</li>
                      <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>Consectetur adipiscing elit</li>
                      <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>Integer molestie lorem at massa</li>
                      <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>Facilisis in pretium nisl aliquet</li>
                      <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>Nulla volutpat aliquam velit</li>
                    </ul>
                  </div> <!-- .col-md-->
                  <div class="col-md-4">
                    <h3 class="h5 mt-4 mb-1">Reporting</h3>
                    <p class="text-muted mb-4">Report a bug or request a feature</p>
                    <ul class="list-unstyled">
                      <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>Lorem ipsum dolor sit amet</li>
                      <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>Consectetur adipiscing elit</li>
                      <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>Integer molestie lorem at massa</li>
                      <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>Facilisis in pretium nisl aliquet</li>
                      <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>Nulla volutpat aliquam velit</li>
                    </ul>
                  </div> <!-- .col-md-->
                </div> <!-- .row -->
              </div>
              <div class="row my-4">
                <div class="col-md-6">
                  <div class="card shadow bg-primary text-center mb-4">
                    <div class="card-body p-5">
                      <span class="circle circle-md bg-primary-light">
                        <i class="fe fe-navigation fe-24 text-white"></i>
                      </span>
                      <h3 class="h4 mt-4 mb-1 text-white">Sumit a ticket</h3>
                      <p class="text-white mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                      <a href="#" class="btn btn-lg bg-primary-light text-white">New Ticket<i class="fe fe-arrow-right fe-16 ml-2"></i></a>
                    </div> <!-- .card-body -->
                  </div> <!-- .card -->
                </div> <!-- .col-md-->
                <div class="col-md-6">
                  <div class="card shadow bg-success text-center mb-4">
                    <div class="card-body p-5">
                      <span class="circle circle-md bg-success-light">
                        <i class="fe fe-message-circle fe-24 text-white"></i>
                      </span>
                      <h3 class="h4 mt-4 mb-1 text-white">Live chart</h3>
                      <p class="text-white mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                      <a href="#" class="btn btn-lg bg-success-light text-white">Let chat<i class="fe fe-arrow-right fe-16 ml-2"></i></a>
                    </div> <!-- .card-body -->
                  </div> <!-- .card -->
                </div> <!-- .col-md-->
              </div> <!-- .row -->
            </div> <!-- .col-12 -->
          </div> <!-- .row -->
        </div> <!-- .container-fluid -->
        <div class="modal fade modal-notif modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="defaultModalLabel">Notifications</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="list-group list-group-flush my-n3">
                  <div class="list-group-item bg-transparent">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <span class="fe fe-box fe-24"></span>
                      </div>
                      <div class="col">
                        <small><strong>Package has uploaded successfull</strong></small>
                        <div class="my-0 text-muted small">Package is zipped and uploaded</div>
                        <small class="badge badge-pill badge-light text-muted">1m ago</small>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item bg-transparent">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <span class="fe fe-download fe-24"></span>
                      </div>
                      <div class="col">
                        <small><strong>Widgets are updated successfull</strong></small>
                        <div class="my-0 text-muted small">Just create new layout Index, form, table</div>
                        <small class="badge badge-pill badge-light text-muted">2m ago</small>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item bg-transparent">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <span class="fe fe-inbox fe-24"></span>
                      </div>
                      <div class="col">
                        <small><strong>Notifications have been sent</strong></small>
                        <div class="my-0 text-muted small">Fusce dapibus, tellus ac cursus commodo</div>
                        <small class="badge badge-pill badge-light text-muted">30m ago</small>
                      </div>
                    </div> <!-- / .row -->
                  </div>
                  <div class="list-group-item bg-transparent">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <span class="fe fe-link fe-24"></span>
                      </div>
                      <div class="col">
                        <small><strong>Link was attached to menu</strong></small>
                        <div class="my-0 text-muted small">New layout has been attached to the menu</div>
                        <small class="badge badge-pill badge-light text-muted">1h ago</small>
                      </div>
                    </div>
                  </div> <!-- / .row -->
                </div> <!-- / .list-group -->
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Clear All</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade modal-shortcut modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="defaultModalLabel">Shortcuts</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body px-5">
                <div class="row align-items-center">
                  <div class="col-6 text-center">
                    <div class="squircle bg-success justify-content-center">
                      <i class="fe fe-cpu fe-32 align-self-center text-white"></i>
                    </div>
                    <p>Control area</p>
                  </div>
                  <div class="col-6 text-center">
                    <div class="squircle bg-primary justify-content-center">
                      <i class="fe fe-activity fe-32 align-self-center text-white"></i>
                    </div>
                    <p>Activity</p>
                  </div>
                </div>
                <div class="row align-items-center">
                  <div class="col-6 text-center">
                    <div class="squircle bg-primary justify-content-center">
                      <i class="fe fe-droplet fe-32 align-self-center text-white"></i>
                    </div>
                    <p>Droplet</p>
                  </div>
                  <div class="col-6 text-center">
                    <div class="squircle bg-primary justify-content-center">
                      <i class="fe fe-upload-cloud fe-32 align-self-center text-white"></i>
                    </div>
                    <p>Upload</p>
                  </div>
                </div>
                <div class="row align-items-center">
                  <div class="col-6 text-center">
                    <div class="squircle bg-primary justify-content-center">
                      <i class="fe fe-users fe-32 align-self-center text-white"></i>
                    </div>
                    <p>Users</p>
                  </div>
                  <div class="col-6 text-center">
                    <div class="squircle bg-primary justify-content-center">
                      <i class="fe fe-settings fe-32 align-self-center text-white"></i>
                    </div>
                    <p>Settings</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
@endsection
