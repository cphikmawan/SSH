@extends('layouts.app')

@section('title', 'Home')

@section('sidebar')
    @include('layouts.sidebar')
@endsection

@section('header')
    @include('layouts.header')    
@endsection

@section('content')
    <main id="main-container">
        <!-- Hero -->
        <div class="bg-primary">
            <div class="bg-pattern bg-black-op-25" style="background-image: url('assets/img/various/bg-pattern.png');">
                <div class="content content-top text-center">
                    <div class="py-50">
                        <h1 class="font-w700 text-white mb-10">Get In Touch</h1>
                        <h2 class="h4 font-w400 text-white-op">Do you have any questions?</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Contact Form -->
        <div class="content content-full">
            <div class="row justify-content-center py-30">
                <div class="col-lg-8 col-xl-6">
                    <form class="js-validation-be-contact" action="be_pages_generic_contact.html" method="post">
                        <div class="form-group row">
                            <div class="col-12">
                                <label for="be-contact-name">Name</label>
                                <input type="text" class="form-control form-control-lg" id="be-contact-name" name="be-contact-name" placeholder="Enter your name..">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="be-contact-email">Email</label>
                            <div class="col-12">
                                <input type="email" class="form-control form-control-lg" id="be-contact-email" name="be-contact-email" placeholder="Enter your email..">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="be-contact-subject">Where?</label>
                            <div class="col-12">
                                <select class="form-control form-control-lg" id="be-contact-subject" name="be-contact-subject">
                                    <option value="1">Support</option>
                                    <option value="2">Billing</option>
                                    <option value="3">Management</option>
                                    <option value="4">Feature Request</option>
                                    <option value="5">Hiring Team</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="be-contact-message">Message</label>
                            <div class="col-12">
                                <textarea class="form-control form-control-lg" id="be-contact-message" name="be-contact-message" rows="10" placeholder="Enter your message.."></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-hero btn-alt-primary min-width-175">
                                    <i class="fa fa-send mr-5"></i> Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- END Contact Form -->

        <!-- Google Maps, functionality is initialized in js/pages/be_pages_generic_contact.js, for more examples you can check out https://hpneo.github.io/gmaps/ -->
        <div id="js-map-be-contact" style="height: 380px;"></div>
    </main>
@endsection