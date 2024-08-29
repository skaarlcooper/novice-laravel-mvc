@extends('layouts.master')

@section('content')

      <!-- Page Title (Light)-->
      <div class="bg-secondary py-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
          <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb flex-lg-nowrap justify-content-center justify-content-lg-start">
                <li class="breadcrumb-item"><a class="text-nowrap" href="index-2.html"><i class="ci-home"></i>Home</a></li>
                <li class="breadcrumb-item text-nowrap"><a href="help-topics.html">Help center</a>
                </li>
                <li class="breadcrumb-item text-nowrap active" aria-current="page">Submit request</li>
              </ol>
            </nav>
          </div>
          <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h1 class="h3 mb-0">Submit a request</h1>
          </div>
        </div>
      </div>
      <div class="container py-5 mt-md-2 mb-md-4">
        <div class="row">
          <div class="col-lg-3">
            <!-- Related articles sidebar-->
            <div class="offcanvas offcanvas-collapse border-end" id="help-sidebar">
              <div class="offcanvas-header align-items-center shadow-sm">
                <h2 class="h5 mb-0">Related articles</h2>
                <button class="btn-close ms-auto" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body py-grid-gutter py-lg-1" data-simplebar data-simplebar-auto-hide="true">
                <!-- Links-->
                <div class="widget widget-links">
                  <h3 class="widget-title d-none d-lg-block">Related articles</h3>
                  <ul class="widget-list">
                    <li class="widget-list-item"><a class="widget-list-link" href="#"><i class="ci-book opacity-60 align-middle mt-n1 me-1"></i>Managing account</a></li>
                    <li class="widget-list-item"><a class="widget-list-link" href="#"><i class="ci-book opacity-60 align-middle mt-n1 me-1"></i>Working with dashboard</a></li>
                    <li class="widget-list-item"><a class="widget-list-link" href="#"><i class="ci-book opacity-60 align-middle mt-n1 me-1"></i>Available payment methods</a></li>
                    <li class="widget-list-item"><a class="widget-list-link" href="#"><i class="ci-book opacity-60 align-middle mt-n1 me-1"></i>Delivery information</a></li>
                    <li class="widget-list-item"><a class="widget-list-link" href="#"><i class="ci-book opacity-60 align-middle mt-n1 me-1"></i>Order tracking instructions</a></li>
                    <li class="widget-list-item"><a class="widget-list-link" href="#"><i class="ci-book opacity-60 align-middle mt-n1 me-1"></i>Refund policy</a></li>
                    <li class="widget-list-item"><a class="widget-list-link" href="#"><i class="ci-book opacity-60 align-middle mt-n1 me-1"></i>Offers and discounts</a></li>
                    <li class="widget-list-item"><a class="widget-list-link" href="#"><i class="ci-book opacity-60 align-middle mt-n1 me-1"></i>Reward points</a></li>
                    <li class="widget-list-item"><a class="widget-list-link" href="#"><i class="ci-book opacity-60 align-middle mt-n1 me-1"></i>Affiliate program</a></li>
                    <li class="widget-list-item"><a class="widget-list-link" href="#"><i class="ci-book opacity-60 align-middle mt-n1 me-1"></i>After purchase support</a></li>
                    <li class="widget-list-item"><a class="widget-list-link" href="#"><i class="ci-book opacity-60 align-middle mt-n1 me-1"></i>Service terms &amp; conditions</a></li>
                    <li class="widget-list-item"><a class="widget-list-link" href="#"><i class="ci-book opacity-60 align-middle mt-n1 me-1"></i>Most popular questions</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-9">
            <div class="alert alert-info d-flex fs-sm mb-4" role="alert">
              <div class="alert-icon"><i class="ci-announcement"></i></div>
              <div>Our friendly Support team is always here to help you. Begin by selecting a topic we can help you with.</div>
            </div>
            <form class="needs-validation" novalidate>
              <div class="row gx-4 gy-3">
                <div class="col-sm-6">
                  <label class="form-label" for="help-topic">Select a topic <strong class='text-danger'>*</strong></label>
                  <select class="form-select" required id="help-topic">
                    <option value>—</option>
                    <option value="Managing Account">Managing Account</option>
                    <option value="Working with Dashboard">Working with Dashboard</option>
                    <option value="Payment Methods">Payment Methods</option>
                    <option value="Delivery Information">Delivery Information</option>
                    <option value="Refund Policy">Refund Policy</option>
                    <option value="Affiliate Program">Affiliate Program</option>
                  </select>
                  <div class="invalid-feedback">Please choose a topic!</div>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="help-subject">Request Subject </label>
                  <input class="form-control" type="text" id="help-subject">
                </div>
                <div class="col-12">
                  <label class="form-label" for="help-message">Request Message <strong class='text-danger'>*</strong></label>
                  <textarea class="form-control" rows="6" required id="help-message"></textarea>
                  <div class="invalid-feedback">Please provide a detailed description of your problem!</div>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="help-name">Your Name <strong class='text-danger'>*</strong></label>
                  <input class="form-control" type="text" required id="help-name">
                  <div class="invalid-feedback">Please enter your name!</div>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="help-email">Your Email <strong class='text-danger'>*</strong></label>
                  <input class="form-control" type="email" required id="help-email">
                  <div class="invalid-feedback">Please enter valid email address!</div>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="help-url">Include a relevant URL</label>
                  <input class="form-control" type="text" id="help-url">
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="help-file">Attachments</label>
                  <input class="form-control" type="file" id="help-file">
                </div>
                <div class="col-12 pt-2">
                  <button class="btn btn-primary me-4" type="submit">Submit a request</button><a class="nav-link-style fw-medium d-inline-block align-middle fs-sm py-2" href="#">
                    <u>Privacy policy</u></a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

    
@endsection