@extends('admin::layouts.content')

@section('page_title')
    {{ __('salereport_lang::app.salereport.add-title') }}
@stop

@section('content')
    <div class="content">
        <form method="POST" action="{{ route('admin.salereport.store') }}">

            <div class="page-header">
                <div class="page-title">
                    <h1>
                        <i class="icon angle-left-icon back-link" onclick="history.length > 1 ? history.go(-1) : window.location = '{{ url('/admin/dashboard') }}';"></i>

                        {{ __('salereport_lang::app.salereport.add-title') }}

                        {{ Config::get('carrier.social.facebook.url') }}
                    </h1>
                </div>

                <div class="page-action">
                    <button type="submit" class="btn btn-lg btn-primary">
                        {{ __('salereport_lang::app.salereport.save-btn-title') }}
                    </button>
                </div>
            </div>

            <div class="page-content">

                <div class="form-container">
                    @csrf()

                    <accordian :title="'{{ __('salereport_lang::app.salereport.general') }}'" :active="true">
                        <div slot="body">
                            <div class="control-group" :class="[errors.has('position') ? 'has-error' : '']">
                                <label for="position" class="required">{{ __('salereport_lang::app.salereport.position') }}</label>
                                <input type="text" class="control" name="position" v-validate="'required'" value="{{ old('position') }}" data-vv-as="&quot;{{ __('salereport_lang::app.salereport.position') }}&quot;">
                                <span class="control-error" v-if="errors.has('position')">@{{ errors.first('position') }}</span>
                            </div>

                            <div class="control-group" :class="[errors.has('responsibility') ? 'has-error' : '']">
                                <label for="responsibility" class="required">{{ __('salereport_lang::app.salereport.responsibility') }}</label>
                                <textarea v-validate="'required'" class="control" id="responsibility" name="responsibility" data-vv-as="&quot;{{ __('salereport_lang::app.salereport.responsibility') }}&quot;">{{ old('responsibility') }}</textarea>
                                <span class="control-error" v-if="errors.has('responsibility')">@{{ errors.first('responsibility') }}</span>
                            </div>

                            <div class="control-group" :class="[errors.has('deadline') ? 'has-error' : '']">
                                <label for="deadline" class="required">{{ __('salereport_lang::app.salereport.deadline') }}</label>
                                <input type="date" class="control" name="deadline" v-validate="'required'" value="{{ old('deadline') }}" data-vv-as="&quot;{{ __('salereport_lang::app.salereport.deadline') }}&quot;">
                                <span class="control-error" v-if="errors.has('deadline')">@{{ errors.first('deadline') }}</span>
                            </div>

                            
                            <div class="control-group" :class="[errors.has('email') ? 'has-error' : '']">
                                <label for="email" class="required">{{ __('salereport_lang::app.salereport.email') }}</label>
                                <input type="email" class="control" name="email" v-validate="'required'" value="{{ old('email') }}" data-vv-as="&quot;{{ __('salereport_lang::app.salereport.email') }}&quot;">
                                <span class="control-error" v-if="errors.has('email')">@{{ errors.first('email') }}</span>
                            </div>


                            <div class="control-group" :class="[errors.has('job_status') ? 'has-error' : '']">
                                <label for="job_status" class="required">{{ __('salereport_lang::app.salereport.job_status') }}</label>
                                <select id="job_status" class="control" name="job_status" v-validate="'required'" value="{{ old('job_status') }}" data-vv-as="&quot;{{ __('salereport_lang::app.salereport.job_status') }}&quot;">
                                    <option value="1">Publish</option>
                                    <option value="0">Unpublish</option>
                                </select>
                                <span class="control-error" v-if="errors.has('job_status')">@{{ errors.first('job_status') }}</span>
                            </div>


                        </div>
                    </accordian>

                </div>
            </div>
        </form>
    </div>
@stop



@push('scripts')
    <script src="{{ asset('vendor/webkul/admin/assets/js/tinyMCE/tinymce.min.js') }}"></script>

    <script>
        $(document).ready(function () {
            
            tinymce.init({
                selector: 'textarea#responsibility, textarea#educational_requirement, textarea#aditional_requirement, textarea#compensation, textarea#skill_type',
                height: 200,
                width: "100%",
                plugins: 'image imagetools media wordcount save fullscreen code',
                toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify | numlist bullist outdent indent  | removeformat | code',
                image_advtab: true
            });
        });
    </script>
@endpush
