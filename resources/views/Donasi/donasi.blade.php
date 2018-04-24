@extends('layouts.app')

@section('title', 'Donation')

@section('sidebar')
    @include('layouts.sidebar')
@endsection

@section('header')
    @include('layouts.header')    
@endsection

@section('content')
    {{--  <!-- Progress Wizards -->  --}}
    <h2 class="content-heading">SSH Donation</h2>
    <div class="row">
        <div class="col-md-12">
            {{--  <!-- Progress Wizard 2 -->  --}}
            <div class="js-wizard-simple block">
                {{--  <!-- Wizard Progress Bar -->  --}}
                <div class="progress rounded-0" data-wizard="progress" style="height: 8px;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                {{--  <!-- END Wizard Progress Bar -->  --}}

                {{--  <!-- Step Tabs -->  --}}
                <ul class="nav nav-tabs nav-tabs-alt nav-fill" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#wizard-progress2-step1" data-toggle="tab">Step 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#wizard-progress2-step2" data-toggle="tab">Step 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#wizard-progress2-step3" data-toggle="tab">Step 3</a>
                    </li>
                </ul>
                {{--  <!-- END Step Tabs -->  --}}

                {{--  <!-- Form -->  --}}
                <form action="be_forms_wizard.html" method="post">
                    {{--  <!-- Steps Content -->  --}}
                    <div class="block-content block-content-full tab-content" style="min-height: 274px;">
                        {{--  <!-- Step 1 -->  --}}
                        <div class="tab-pane active" id="wizard-progress2-step1" role="tabpanel">
                            <div class="form-group">
                                <div class="form-material floating">
                                    <input class="form-control" type="text" id="wizard-progress2-firstname" name="wizard-progress2-firstname">
                                    <label for="wizard-progress2-firstname">Name</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-material floating">
                                    <input class="form-control" type="text" id="wizard-progress2-lastname" name="wizard-progress2-lastname">
                                    <label for="wizard-progress2-lastname">Address</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-material floating">
                                    <input class="form-control" type="email" id="wizard-progress2-email" name="wizard-progress2-email">
                                    <label for="wizard-progress2-email">Email</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-material floating">
                                    <input class="form-control" type="number" id="wizard-progress2-nominal" name="wizard-progress2-nominal">
                                    <label for="wizard-progress2-nominal">Amount</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="form-material floating">
                                        <textarea class="form-control" id="material-textarea-small2" name="material-textarea-small2" rows="3"></textarea>
                                        <label for="material-textarea-small2">Notes</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <i class="si si-question fa-2x float-right"></i><br>
                            </div>
                        </div>
                        {{--  <!-- END Step 1 -->  --}}

                        {{--  <!-- Step 2 -->  --}}
                        <div class="tab-pane" id="wizard-progress2-step2" role="tabpanel">
                            <label>Chose Transfer Method</label>
                            <div class="col-6">
                                <label class="css-control css-control-primary css-radio">
                                    <input type="radio" class="css-control-input" name="radio-group2" checked>
                                    <span class="css-control-indicator"></span> Bank Transfer
                                </label>
                            </div>
                            <div class="col-6">
                                <label class="css-control css-control-primary css-radio">
                                    <input type="radio" class="css-control-input" name="radio-group2" checked>
                                    <span class="css-control-indicator"></span> Mandiri Clickpay
                                </label>
                            </div>
                            <div class="col-6">
                                <label class="css-control css-control-primary css-radio">
                                    <input type="radio" class="css-control-input" name="radio-group2" checked>
                                    <span class="css-control-indicator"></span> BCA Clickpay
                                </label>
                            </div>
                            <div class="col-6">
                                <label class="css-control css-control-primary css-radio">
                                    <input type="radio" class="css-control-input" name="radio-group2" checked>
                                    <span class="css-control-indicator"></span> Others Method
                                </label>
                            </div>
                        </div>
                        {{--  <!-- END Step 2 -->  --}}

                        {{--  <!-- Step 3 -->  --}}
                        <div class="tab-pane" id="wizard-progress2-step3" role="tabpanel">
                            <div class="form-group">
                                <label for="wizard-simple2-location">Transfer Method is Correct</label>
                            </div>
                        </div>
                        {{--  <!-- END Step 3 -->  --}}
                    </div>
                    {{--  <!-- END Steps Content -->  --}}

                    {{--  <!-- Steps Navigation -->  --}}
                    <div class="block-content block-content-sm block-content-full bg-body-light">
                        <div class="row">
                            <div class="col-6">
                                <button type="button" class="btn btn-alt-secondary" data-wizard="prev">
                                    <i class="fa fa-angle-left mr-5"></i> Previous
                                </button>
                            </div>
                            <div class="col-6 text-right">
                                <button type="button" class="btn btn-alt-secondary" data-wizard="next">
                                    Next <i class="fa fa-angle-right ml-5"></i>
                                </button>
                                <button type="submit" class="btn btn-alt-primary d-none" data-wizard="finish">
                                    <i class="fa fa-check mr-5"></i> Submit
                                </button>
                            </div>
                        </div>
                    </div>
                    {{--  <!-- END Steps Navigation -->  --}}
                </form>
                {{--  <!-- END Form -->  --}}
            </div>
            {{--  <!-- END Progress Wizard 2 -->  --}}
        </div>
    </div>
    {{--  <!-- END Progress Wizards -->  --}}
@endsection