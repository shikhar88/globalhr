
@extends('admin.template')
@section('content')
    <div class="main-content">
        <div class="container">
            <!-- start: PAGE HEADER -->
            <!-- start: TOOLBAR -->
            <div class="toolbar row">
                <div class="col-sm-6 hidden-xs">
                    <div class="page-header">
                        <h1>Dashboard
                            <small>overview &amp; stats</small>
                        </h1>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    {{--<div class="toolbar-tools pull-right">--}}
                        {{--<!-- start: TOP NAVIGATION MENU -->--}}
                        {{--<ul class="nav navbar-right">--}}
                            {{--<!-- start: TO-DO DROPDOWN -->--}}
                            {{--<li class="menu-search">--}}
                                {{--<a href="" onclick="updatePassowrd();">--}}
                                    {{--<i class="fa fa-floppy-o 2x"></i> SAVE--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                        {{--<!-- end: TOP NAVIGATION MENU -->--}}
                    {{--</div>--}}
                </div>
            </div>
            <!-- end: TOOLBAR -->
            <!-- end: PAGE HEADER -->
            <!-- start: BREADCRUMB -->
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li>
                            <a href="#">
                                Dashboard
                            </a>
                        </li>
                        <li class="active">
                            Dashboard
                        </li>
                    </ol>
                </div>
            </div>
            <!-- end: BREADCRUMB -->
            <!-- start: PAGE CONTENT -->
            <div class="row">
                <div class="col-sm-12">
                    <!-- start: TEXT FIELDS PANEL -->
                    <div class="panel panel-white">
                        <div class="panel-heading">
                            <h4 class="panel-title">Text <span class="text-bold">Fields</span></h4>
                        </div>
                        <div class="panel-body">
                            <form role="form" class="form-horizontal" id="form" method="POST" action="/admin/passwordchange">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="form-field-2">
                                        Old Password <span class="symbol required"></span>
                                    </label>
                                    <div class="col-sm-9">
                                        <input type="password" name="oldPassword" placeholder="Enter old password" id="form-field-2" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="form-field-2">
                                        Password <span class="symbol required"></span>
                                    </label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" name="password" id="password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="form-field-2">
                                        Confirm Password <span class="symbol required"></span>
                                    </label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="password_again" name="password_again">
                                    </div>
                                </div>
                                    <input class="btn btn-block" type="submit" style="width: 15%;margin-left: 44%">

                            </form>
                        </div>
                    </div>
                    <!-- end: TEXT FIELDS PANEL -->
                </div>
            </div>

            <!-- end: PAGE CONTENT-->
        </div>
        <div class="subviews">
            <div class="subviews-container"></div>
        </div>
    </div>
@endsection
@section('javascript')
    {{--<script src="../assets/js/form-validation.js"></script>--}}
    <script type="text/javascript">
        var FormValidator = function () {
            "use strict";
            var runValidator1 = function () {
                var form1 = $('#form');
                var errorHandler1 = $('.errorHandler', form1);
                var successHandler1 = $('.successHandler', form1);
                $.validator.addMethod("FullDate", function () {
                    //if all values are selected
                    if ($("#dd").val() != "" && $("#mm").val() != "" && $("#yyyy").val() != "") {
                        return true;
                    } else {
                        return false;
                    }
                }, 'Please select a day, month, and year');
                $('#form').validate({
                    errorElement: "span", // contain the error msg in a span tag
                    errorClass: 'help-block',
                    errorPlacement: function (error, element) { // render error placement for each input type
                        if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
                            error.insertAfter($(element).closest('.form-group').children('div').children().last());
                        } else if (element.attr("name") == "dd" || element.attr("name") == "mm" || element.attr("name") == "yyyy") {
                            error.insertAfter($(element).closest('.form-group').children('div'));
                        } else {
                            error.insertAfter(element);
                            // for other inputs, just perform default behavior
                        }
                    },
                    ignore: "",
                    rules: {
                        firstname: {
                            minlength: 2,
                            required: true
                        },
                        lastname: {
                            minlength: 2,
                            required: true
                        },
                        email: {
                            required: true,
                            email: true
                        },
                        password: {
                            minlength: 7,
                            required: true
                        },
                        password_again: {
                            required: true,
                            minlength: 7,
                            equalTo: "#password"
                        },
                        yyyy: "FullDate",
                        gender: {
                            required: true
                        },
                        zipcode: {
                            required: true,
                            number: true,
                            minlength: 5
                        },
                        city: {
                            required: true
                        },
                        newsletter: {
                            required: true
                        }
                    },
                    messages: {
                        firstname: "Please specify your first name",
                        lastname: "Please specify your last name",
                        email: {
                            required: "We need your email address to contact you",
                            email: "Your email address must be in the format of name@domain.com"
                        },
                        gender: "Please check a gender!"
                    },
                    groups: {
                        DateofBirth: "dd mm yyyy",
                    },
                    invalidHandler: function (event, validator) { //display error alert on form submit
                        successHandler1.hide();
                        errorHandler1.show();
                    },
                    highlight: function (element) {
                        $(element).closest('.help-block').removeClass('valid');
                        // display OK icon
                        $(element).closest('.form-group').removeClass('has-success').addClass('has-error').find('.symbol').removeClass('ok').addClass('required');
                        // add the Bootstrap error class to the control group
                    },
                    unhighlight: function (element) { // revert the change done by hightlight
                        $(element).closest('.form-group').removeClass('has-error');
                        // set error class to the control group
                    },
                    success: function (label, element) {
                        label.addClass('help-block valid');
                        // mark the current input as valid and display OK icon
                        $(element).closest('.form-group').removeClass('has-error').addClass('has-success').find('.symbol').removeClass('required').addClass('ok');
                    },
                    submitHandler: function (form) {
                        successHandler1.show();
                        errorHandler1.hide();
                        // submit form
                        $('#form').submit();
                    }
                });
            };
            runValidator1();
        }
        jQuery(document).ready(function() {
            FormValidator();
        });
    </script>
@endsection