@extends('shop::layouts.master')

@section('page_title')
    {{ __('career_lang::app.shop.title') }}
@endsection

<style>
    .block {
        margin: 3px auto;
        padding: 10px;
    }

    .block label {
        font-size: 17px;
        display: block;
        font-weight: bold;
        margin-bottom: 10px;
        border-bottom: 1px dotted #e9e9e9;
    }

    .block span {
        font-size: 13px;
    }


    .career-body {
        background: #ffffff;
        color: #000000;
        padding: 10px 20px;
        border: 1px solid #c3c3c3;
        margin-top: 30px;
    }

    .left-sided {
        border-right: 1px solid #cccccc;
        padding: 10px;
        text-align: right;
        padding-right: 20px !important;
    }

    .right-sided {
        padding: 10px;
        padding-left: 20px !important;
    }

    .email-container {
        padding: 10px 15px;
        background: #d7d7d7;
        color: #000000;
        text-align: center;
    }

    @media only screen and (max-width: 600px) {
        .left-sided {
            border-right: 0;
            text-align: left;
            padding: 5px !important;
        }

        .right-sided {
            padding: 5px !important;
        }
    }
</style>

@section('content-wrapper')
    <div class="container">

        <div class="main">

            <div class="extend-container">

                <div class="extend-block">

                    <div class="career-body">
                        <div>
                            <h2 style="margin-top: 0;">{{$career->position}}</h2>
                            <div>
                                <b style="text-transform: uppercase;">B2B China Bangla | Bangladesh</b>
                            </div>
                            <div>
                                Posted On {{ date('d/m/Y', strtotime($career->created_at)) }}
                            </div>
                        </div>

                        <hr/>

                        <div class="row">
                            <div class="col-md-3 left-sided">
                                <h3>Job Information</h3>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3 left-sided">
                                <b>Vacancy</b>
                            </div>
                            <div class="col-md-9 right-sided">
                                {{$career->vacancy}}
                            </div>

                            <div class="col-md-3 left-sided">
                                <b>Deadline</b>
                            </div>
                            <div class="col-md-9 right-sided">
                                {{date("F jS, Y", strtotime($career->deadline))}}
                            </div>

                            <div class="col-md-3 left-sided">
                                <b>Skill Type</b>
                            </div>
                            <div class="col-md-9 right-sided">
                                {{$career->skill_type}}
                            </div>

                            <div class="col-md-3 left-sided">
                                <b>Salary</b>
                            </div>
                            <div class="col-md-9 right-sided">
                                {{$career->salary}}
                            </div>
                        </div>

                        <hr/>

                        <div class="row">
                            <div class="col-md-3 left-sided" style="padding-top: 30px;">
                                <h3 style="margin-top: 0;">Job Description</h3>
                            </div>
                            <div class="col-md-9 right-sided" style="padding-top: 30px;">

                                <div style="margin-bottom: 30px;">
                                    <div><b>Employment Status:</b></div>
                                    <div>
                                        {{$career->employment_status}}
                                    </div>
                                </div>

                                <div style="margin-bottom: 30px;">
                                    <div><b>Job Locations:</b></div>
                                    <div>
                                        {{$career->job_location}}
                                    </div>
                                </div>

                                <div style="margin-bottom: 30px;">
                                    <div><b>Responsibilities:</b></div>
                                    <div>
                                        {!!$career->responsibility!!}
                                    </div>
                                </div>

                                <div style="margin-bottom: 30px;">
                                    <div><b>Educational Requirements:</b></div>
                                    <div>
                                        {!!$career->educational_requirement!!}
                                    </div>
                                </div>

                                <div style="margin-bottom: 30px;">
                                    <div><b>Additional Requirements:</b></div>
                                    <div>
                                        {!!$career->aditional_requirement!!}
                                    </div>
                                </div>

                                <div>
                                    <div><b>Compensation:</b></div>
                                    <div>
                                        {!!$career->compensation!!}
                                    </div>
                                </div>

                            </div>
                        </div>

                        <br/>
                        <br/>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="email-container">
                                    Please send your cv at <b>{{$career->email}}</b>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <br/>
    <br/>


@section('footer')
    {!! view_render_event('bagisto.shop.layout.footer.before') !!}

    @include('shop::layouts.footer.index')

    {!! view_render_event('bagisto.shop.layout.footer.after') !!}
@endsection



@stop

@push('scripts')
    <script>
        var hammenu = $('.icon-menu-close');
        var header_bottom = $('.header-bottom');
        hammenu.removeClass('icon-menu-close');
        hammenu.addClass('icon-menu');
        header_bottom.css('display', 'none');


    </script>
@endpush






