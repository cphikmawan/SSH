@extends('layouts.front.app')

@section('title', 'FAQ')

@section('sidebar')
    @include('layouts.front.sidebar')
@endsection

@section('header')
    @include('layouts.front.header')    
@endsection

@section('content')
<!-- Frequently Asked Questions -->
<h2 class="content-heading">Frequently Asked Questions</h2>

<!-- Introduction -->
<div class="block">
    <div class="block-header block-header-default">
        <h3 class="block-title">
            <strong>1.</strong> Introduction
        </h3>
        <div class="block-options">
            <button type="button" class="btn-block-option">
                <i class="si si-question"></i>
            </button>
        </div>
    </div>
    <div class="block-content block-content-full">
        <div id="faq1" role="tablist" aria-multiselectable="true">
            <div class="block block-bordered block-rounded mb-5">
                <div class="block-header" role="tab" id="faq1_h1">
                    <a class="font-w600 text-body-color-dark" data-toggle="collapse" data-parent="#faq1" href="#faq1_q1"
                        aria-expanded="true" aria-controls="faq1_q1">1.1 Welcome to your own dashboard</a>
                </div>
                <div id="faq1_q1" class="collapse show" role="tabpanel" aria-labelledby="faq1_h1">
                    <div class="block-content border-t">
                        <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat
                            magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna
                            molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero
                            condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat
                            nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas
                            vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi
                            suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos
                            nibh orci.</p>
                    </div>
                </div>
            </div>
            <div class="block block-bordered block-rounded mb-5">
                <div class="block-header" role="tab" id="faq1_h2">
                    <a class="font-w600 text-body-color-dark" data-toggle="collapse" data-parent="#faq1" href="#faq1_q2"
                        aria-expanded="true" aria-controls="faq1_q2">1.2 The team behind the project</a>
                </div>
                <div id="faq1_q2" class="collapse" role="tabpanel" aria-labelledby="faq1_h2">
                    <div class="block-content border-t">
                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <a class="block block-link-pop" href="javascript:void(0)">
                                    <div class="block-content block-content-full text-center">
                                        <img class="img-avatar" src="assets/img/avatars/avatar6.jpg" alt="">
                                    </div>
                                    <div class="block-content block-content-full bg-body-light text-center">
                                        <div class="font-w600 mb-5">Marie Duncan</div>
                                        <div class="font-size-sm text-muted">Web Designer</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-xl-3">
                                <a class="block block-link-pop" href="javascript:void(0)">
                                    <div class="block-content block-content-full text-center">
                                        <img class="img-avatar" src="assets/img/avatars/avatar10.jpg" alt="">
                                    </div>
                                    <div class="block-content block-content-full bg-body-light text-center">
                                        <div class="font-w600 mb-5">Justin Hunt</div>
                                        <div class="font-size-sm text-muted">Web Development</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-xl-3">
                                <a class="block block-link-pop" href="javascript:void(0)">
                                    <div class="block-content block-content-full text-center">
                                        <img class="img-avatar" src="assets/img/avatars/avatar9.jpg" alt="">
                                    </div>
                                    <div class="block-content block-content-full bg-body-light text-center">
                                        <div class="font-w600 mb-5">Albert Ray</div>
                                        <div class="font-size-sm text-muted">Photographer</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-xl-3">
                                <a class="block block-link-pop" href="javascript:void(0)">
                                    <div class="block-content block-content-full text-center">
                                        <img class="img-avatar" src="assets/img/avatars/avatar5.jpg" alt="">
                                    </div>
                                    <div class="block-content block-content-full bg-body-light text-center">
                                        <div class="font-w600 mb-5">Megan Fuller</div>
                                        <div class="font-size-sm text-muted">Graphic Designer</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block block-bordered block-rounded mb-5">
                <div class="block-header" role="tab" id="faq1_h3">
                    <a class="font-w600 text-body-color-dark" data-toggle="collapse" data-parent="#faq1" href="#faq1_q3"
                        aria-expanded="true" aria-controls="faq1_q3">1.3 What are our values?</a>
                </div>
                <div id="faq1_q3" class="collapse" role="tabpanel" aria-labelledby="faq1_h3">
                    <div class="block-content border-t">
                        <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat
                            magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna
                            molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero
                            condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat
                            nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas
                            vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi
                            suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos
                            nibh orci.</p>
                        <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat
                            magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna
                            molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero
                            condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat
                            nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas
                            vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi
                            suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos
                            nibh orci.</p>
                    </div>
                </div>
            </div>
            <div class="block block-bordered block-rounded mb-5">
                <div class="block-header" role="tab" id="faq1_h4">
                    <a class="font-w600 text-body-color-dark" data-toggle="collapse" data-parent="#faq1" href="#faq1_q4"
                        aria-expanded="true" aria-controls="faq1_q4">1.4 What are our future plans?</a>
                </div>
                <div id="faq1_q4" class="collapse" role="tabpanel" aria-labelledby="faq1_h4">
                    <div class="block-content border-t">
                        <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat
                            magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna
                            molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero
                            condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat
                            nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas
                            vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi
                            suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos
                            nibh orci.</p>
                        <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat
                            magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna
                            molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero
                            condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat
                            nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas
                            vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi
                            suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos
                            nibh orci.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Introduction -->

<!-- Functionality -->
<div class="block">
    <div class="block-header block-header-default">
        <h3 class="block-title">
            <strong>2.</strong> Functionality
        </h3>
        <div class="block-options">
            <button type="button" class="btn-block-option">
                <i class="si si-question"></i>
            </button>
        </div>
    </div>
    <div class="block-content block-content-full">
        <div id="faq2" role="tablist" aria-multiselectable="true">
            <div class="block block-bordered block-rounded mb-5">
                <div class="block-header" role="tab" id="faq2_h1">
                    <a class="font-w600 text-body-color-dark" data-toggle="collapse" data-parent="#faq2" href="#faq2_q1"
                        aria-expanded="true" aria-controls="faq2_q1">What are the key features?</a>
                </div>
                <div id="faq2_q1" class="collapse" role="tabpanel" aria-labelledby="faq2_h1">
                    <div class="block-content border-t">
                        <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat
                            magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna
                            molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero
                            condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat
                            nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas
                            vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi
                            suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos
                            nibh orci.</p>
                        <ul class="fa-ul list-li-push-sm">
                            <li>
                                <i class="fa fa-check fa-li"></i> Fully Responsive
                            </li>
                            <li>
                                <i class="fa fa-check fa-li"></i> API Support
                            </li>
                            <li>
                                <i class="fa fa-check fa-li"></i> Dynamic and real time data
                            </li>
                            <li>
                                <i class="fa fa-check fa-li"></i> Security
                            </li>
                        </ul>
                        <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat
                            magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna
                            molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero
                            condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat
                            nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas
                            vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi
                            suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos
                            nibh orci.</p>
                    </div>
                </div>
            </div>
            <div class="block block-bordered block-rounded mb-5">
                <div class="block-header" role="tab" id="faq2_h2">
                    <a class="font-w600 text-body-color-dark" data-toggle="collapse" data-parent="#faq2" href="#faq2_q2"
                        aria-expanded="true" aria-controls="faq2_q2">How to use your dashboard?</a>
                </div>
                <div id="faq2_q2" class="collapse" role="tabpanel" aria-labelledby="faq2_h2">
                    <div class="block-content border-t">
                        <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat
                            magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna
                            molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero
                            condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat
                            nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas
                            vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi
                            suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos
                            nibh orci.</p>
                        <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat
                            magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna
                            molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero
                            condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat
                            nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas
                            vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi
                            suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos
                            nibh orci.</p>
                    </div>
                </div>
            </div>
            <div class="block block-bordered block-rounded mb-5">
                <div class="block-header" role="tab" id="faq2_h3">
                    <a class="font-w600 text-body-color-dark" data-toggle="collapse" data-parent="#faq2" href="#faq2_q3"
                        aria-expanded="true" aria-controls="faq2_q3">How easy can I connect to third party services?</a>
                </div>
                <div id="faq2_q3" class="collapse" role="tabpanel" aria-labelledby="faq2_h3">
                    <div class="block-content border-t">
                        <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat
                            magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna
                            molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero
                            condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat
                            nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas
                            vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi
                            suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos
                            nibh orci.</p>
                        <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat
                            magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna
                            molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero
                            condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat
                            nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas
                            vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi
                            suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos
                            nibh orci.</p>
                    </div>
                </div>
            </div>
            <div class="block block-bordered block-rounded mb-5">
                <div class="block-header" role="tab" id="faq2_h4">
                    <a class="font-w600 text-body-color-dark" data-toggle="collapse" data-parent="#faq2" href="#faq2_q4"
                        aria-expanded="true" aria-controls="faq2_q4">How secure is my data?</a>
                </div>
                <div id="faq2_q4" class="collapse" role="tabpanel" aria-labelledby="faq2_h4">
                    <div class="block-content border-t">
                        <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat
                            magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna
                            molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero
                            condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat
                            nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas
                            vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi
                            suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos
                            nibh orci.</p>
                        <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat
                            magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna
                            molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero
                            condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat
                            nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas
                            vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi
                            suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos
                            nibh orci.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Functionality -->

<!-- Payments -->
<div class="block">
    <div class="block-header block-header-default">
        <h3 class="block-title">
            <strong>3.</strong> Payments
        </h3>
        <div class="block-options">
            <button type="button" class="btn-block-option">
                <i class="si si-question"></i>
            </button>
        </div>
    </div>
    <div class="block-content block-content-full">
        <div id="faq3" role="tablist" aria-multiselectable="true">
            <div class="block block-bordered block-rounded mb-5">
                <div class="block-header" role="tab" id="faq3_h1">
                    <a class="font-w600 text-body-color-dark" data-toggle="collapse" data-parent="#faq3" href="#faq3_q1"
                        aria-expanded="true" aria-controls="faq3_q1">What are the available plans?</a>
                </div>
                <div id="faq3_q1" class="collapse" role="tabpanel" aria-labelledby="faq3_h1">
                    <div class="block-content border-t">
                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <!-- Developer Plan -->
                                <a class="block block-link-pop block-rounded block-bordered text-center" href="javascript:void(0)">
                                    <div class="block-header">
                                        <h3 class="block-title">Developer</h3>
                                    </div>
                                    <div class="block-content bg-gray-lighter">
                                        <div class="h1 font-w700 mb-10">$19</div>
                                        <div class="h5 text-muted">per month</div>
                                    </div>
                                    <div class="block-content">
                                        <p><strong>2</strong> Projects</p>
                                        <p><strong>10GB</strong> Storage</p>
                                        <p><strong>15</strong> Clients</p>
                                        <p><strong>Email</strong> Support</p>
                                    </div>
                                    <div class="block-content block-content-full bg-gray-lighter">
                                        <span class="btn btn-hero btn-sm btn-rounded btn-noborder btn-success">Sign Up</span>
                                    </div>
                                </a>
                                <!-- END Developer Plan -->
                            </div>
                            <div class="col-md-6 col-xl-3">
                                <!-- Startup Plan -->
                                <a class="block block-link-pop block-rounded block-bordered text-center" href="javascript:void(0)">
                                    <div class="block-header">
                                        <h3 class="block-title">Startup</h3>
                                    </div>
                                    <div class="block-content bg-gray-lighter">
                                        <div class="h1 font-w700 mb-10">$39</div>
                                        <div class="h5 text-muted">per month</div>
                                    </div>
                                    <div class="block-content">
                                        <p><strong>10</strong> Projects</p>
                                        <p><strong>30GB</strong> Storage</p>
                                        <p><strong>100</strong> Clients</p>
                                        <p><strong>FULL</strong> Support</p>
                                    </div>
                                    <div class="block-content block-content-full bg-gray-lighter">
                                        <span class="btn btn-hero btn-sm btn-rounded btn-noborder btn-success">Sign Up</span>
                                    </div>
                                </a>
                                <!-- END Startup Plan -->
                            </div>
                            <div class="col-md-6 col-xl-3">
                                <!-- Business Plan -->
                                <a class="block block-link-pop block-rounded block-bordered text-center" href="javascript:void(0)">
                                    <div class="block-header">
                                        <h3 class="block-title">Business</h3>
                                    </div>
                                    <div class="block-content bg-gray-lighter">
                                        <div class="h1 font-w700 mb-10">$99</div>
                                        <div class="h5 text-muted">per month</div>
                                    </div>
                                    <div class="block-content">
                                        <p><strong>50</strong> Projects</p>
                                        <p><strong>100GB</strong> Storage</p>
                                        <p><strong>1000</strong> Clients</p>
                                        <p><strong>FULL</strong> Support</p>
                                    </div>
                                    <div class="block-content block-content-full bg-gray-lighter">
                                        <span class="btn btn-hero btn-sm btn-rounded btn-noborder btn-success">Sign Up</span>
                                    </div>
                                </a>
                                <!-- END Business Plan -->
                            </div>
                            <div class="col-md-6 col-xl-3">
                                <!-- VIP Plan -->
                                <a class="block block-link-pop block-rounded block-bordered text-center" href="javascript:void(0)">
                                    <div class="block-header">
                                        <h3 class="block-title">VIP</h3>
                                    </div>
                                    <div class="block-content bg-gray-lighter">
                                        <div class="h1 font-w700 mb-10">$249</div>
                                        <div class="h5 text-muted">per month</div>
                                    </div>
                                    <div class="block-content">
                                        <p><strong>Unlimited</strong> Projects</p>
                                        <p><strong>Unlimited</strong> Storage</p>
                                        <p><strong>Unlimited</strong> Clients</p>
                                        <p><strong>FULL</strong> Support</p>
                                    </div>
                                    <div class="block-content block-content-full bg-gray-lighter">
                                        <span class="btn btn-hero btn-sm btn-rounded btn-noborder btn-success">Sign Up</span>
                                    </div>
                                </a>
                                <!-- END VIP Plan -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block block-bordered block-rounded mb-5">
                <div class="block-header" role="tab" id="faq3_h2">
                    <a class="font-w600 text-body-color-dark" data-toggle="collapse" data-parent="#faq3" href="#faq3_q2"
                        aria-expanded="true" aria-controls="faq3_q2">What are the available withdrawal options?</a>
                </div>
                <div id="faq3_q2" class="collapse" role="tabpanel" aria-labelledby="faq3_h2">
                    <div class="block-content border-t">
                        <div class="row">
                            <div class="col-md-6 col-xl-4">
                                <a class="block block-link-pop" href="javascript:void(0)">
                                    <div class="block-content block-content-full text-center">
                                        <i class="fa fa-paypal fa-2x"></i>
                                    </div>
                                    <div class="block-content block-content-full bg-body-light text-center">
                                        <div class="font-w600 mb-5">Paypal</div>
                                        <div class="font-size-sm text-muted">0.5% + .25c</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <a class="block block-link-pop" href="javascript:void(0)">
                                    <div class="block-content block-content-full text-center">
                                        <i class="fa fa-credit-card fa-2x"></i>
                                    </div>
                                    <div class="block-content block-content-full bg-body-light text-center">
                                        <div class="font-w600 mb-5">Credit Card</div>
                                        <div class="font-size-sm text-muted">$7.50 flat fee</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-12 col-xl-4">
                                <a class="block block-link-pop" href="javascript:void(0)">
                                    <div class="block-content block-content-full text-center">
                                        <i class="fa fa-bank fa-2x"></i>
                                    </div>
                                    <div class="block-content block-content-full bg-body-light text-center">
                                        <div class="font-w600 mb-5">Bank Transfer</div>
                                        <div class="font-size-sm text-muted">$20.00 flat fee</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

