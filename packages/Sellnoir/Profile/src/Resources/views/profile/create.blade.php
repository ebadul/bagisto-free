@extends('admin::layouts.content')

@section('page_title')
    {{ __('career_lang::app.career.add_title') }}
@stop

@section('content')
    <div class="content">
        <form method="POST" action="{{ route('admin.career.store') }}">

            <div class="page-header">
                <div class="page-title">
                    <h1>
                        <i class="icon angle-left-icon back-link" onclick="history.length > 1 ? history.go(-1) : window.location = '{{ url('/admin/dashboard') }}';"></i>

                        {{ __('career_lang::app.career.add_title') }}

                        {{ Config::get('carrier.social.facebook.url') }}
                    </h1>
                </div>

                <div class="page-action">
                    <button type="submit" class="btn btn-lg btn-primary">
                        {{ __('career_lang::app.career.save-btn-title') }}
                    </button>
                </div>
            </div>

            <div class="page-content">

                <div class="form-container">
                    @csrf()

                    <accordian :title="'{{ __('career_lang::app.account.general') }}'" :active="true">
                        <div slot="body">
                            <div class="control-group" :class="[errors.has('position') ? 'has-error' : '']">
                                <label for="position" class="required">{{ __('career_lang::app.career.position') }}</label>
                                <input type="text" class="control" name="position" v-validate="'required'" value="{{ old('position') }}" data-vv-as="&quot;{{ __('career_lang::app.career.position') }}&quot;">
                                <span class="control-error" v-if="errors.has('position')">@{{ errors.first('position') }}</span>
                            </div>


                            <div class="control-group" :class="[errors.has('vacancy') ? 'has-error' : '']">
                                <label for="vacancy" class="required">{{ __('career_lang::app.career.vacancy') }}</label>
                                <input type="text" class="control" name="vacancy" v-validate="'required'" value="{{ old('vacancy') }}" data-vv-as="&quot;{{ __('career_lang::app.career.vacancy') }}&quot;">
                                <span class="control-error" v-if="errors.has('vacancy')">@{{ errors.first('vacancy') }}</span>
                            </div>


                            <div class="control-group" :class="[errors.has('responsibility') ? 'has-error' : '']">
                                <label for="responsibility" class="required">{{ __('career_lang::app.career.responsibility') }}</label>
                                <textarea v-validate="'required'" class="control" id="responsibility" name="responsibility" data-vv-as="&quot;{{ __('career_lang::app.career.responsibility') }}&quot;">{{ old('responsibility') }}</textarea>
                                <span class="control-error" v-if="errors.has('responsibility')">@{{ errors.first('responsibility') }}</span>
                            </div>

                            
                            <div class="control-group" :class="[errors.has('employment_status') ? 'has-error' : '']">
                                <label for="employment_status" class="required">{{ __('career_lang::app.career.employment_status') }}</label>
                                <input type="text" class="control" name="employment_status" v-validate="'required'" value="{{ old('employment_status') }}" data-vv-as="&quot;{{ __('career_lang::app.career.employment_status') }}&quot;">
                                <span class="control-error" v-if="errors.has('employment_status')">@{{ errors.first('employment_status') }}</span>
                            </div>

                            
                            <div class="control-group" :class="[errors.has('skill_type') ? 'has-error' : '']">
                                <label for="skill_type" class="required">{{ __('career_lang::app.career.skill_type') }}</label>
                                <input type="text" class="control" name="skill_type" v-validate="'required'" value="{{ old('skill_type') }}" data-vv-as="&quot;{{ __('career_lang::app.career.skill_type') }}&quot;">
                                <span class="control-error" v-if="errors.has('skill_type')">@{{ errors.first('skill_type') }}</span>
                            </div>









                            <div class="control-group" :class="[errors.has('educational_requirement') ? 'has-error' : '']">
                                <label for="educational_requirement" class="required">{{ __('career_lang::app.career.educational_requirement') }}</label>
                                <textarea v-validate="'required'" class="control" id="educational_requirement" name="educational_requirement" data-vv-as="&quot;{{ __('career_lang::app.career.educational_requirement') }}&quot;">{{ old('educational_requirement') }}</textarea>
                                <span class="control-error" v-if="errors.has('educational_requirement')">@{{ errors.first('educational_requirement') }}</span>
                            </div>





                            <div class="control-group" :class="[errors.has('aditional_requirement') ? 'has-error' : '']">
                                <label for="aditional_requirement" class="required">{{ __('career_lang::app.career.aditional_requirement') }}</label>
                                <textarea v-validate="'required'" class="control" id="aditional_requirement" name="aditional_requirement" data-vv-as="&quot;{{ __('career_lang::app.career.aditional_requirement') }}&quot;">{{ old('aditional_requirement') }}</textarea>
                                <span class="control-error" v-if="errors.has('aditional_requirement')">@{{ errors.first('aditional_requirement') }}</span>
                            </div>








                            
                            <div class="control-group" :class="[errors.has('job_location') ? 'has-error' : '']">
                                <label for="job_location" class="required">{{ __('career_lang::app.career.job_location') }}</label>
                                <input type="text" class="control" name="job_location" v-validate="'required'" value="{{ old('job_location') }}" data-vv-as="&quot;{{ __('career_lang::app.career.job_location') }}&quot;">
                                <span class="control-error" v-if="errors.has('job_location')">@{{ errors.first('job_location') }}</span>
                            </div>

                            
                            <div class="control-group" :class="[errors.has('salary') ? 'has-error' : '']">
                                <label for="salary" class="required">{{ __('career_lang::app.career.salary') }}</label>
                                <input type="text" class="control" name="salary" v-validate="'required'" value="{{ old('salary') }}" data-vv-as="&quot;{{ __('career_lang::app.career.salary') }}&quot;">
                                <span class="control-error" v-if="errors.has('salary')">@{{ errors.first('salary') }}</span>
                            </div>









                            <div class="control-group" :class="[errors.has('compensation') ? 'has-error' : '']">
                                <label for="compensation" class="required">{{ __('career_lang::app.career.compensation') }}</label>
                                <textarea v-validate="'required'" class="control" id="compensation" name="compensation" data-vv-as="&quot;{{ __('career_lang::app.career.compensation') }}&quot;">{{ old('compensation') }}</textarea>
                                <span class="control-error" v-if="errors.has('compensation')">@{{ errors.first('compensation') }}</span>
                            </div>

                            
                            <div class="control-group" :class="[errors.has('deadline') ? 'has-error' : '']">
                                <label for="deadline" class="required">{{ __('career_lang::app.career.deadline') }}</label>
                                <input type="date" class="control" name="deadline" v-validate="'required'" value="{{ old('deadline') }}" data-vv-as="&quot;{{ __('career_lang::app.career.deadline') }}&quot;">
                                <span class="control-error" v-if="errors.has('deadline')">@{{ errors.first('deadline') }}</span>
                            </div>

                            
                            <div class="control-group" :class="[errors.has('email') ? 'has-error' : '']">
                                <label for="email" class="required">{{ __('career_lang::app.career.email') }}</label>
                                <input type="email" class="control" name="email" v-validate="'required'" value="{{ old('email') }}" data-vv-as="&quot;{{ __('career_lang::app.career.email') }}&quot;">
                                <span class="control-error" v-if="errors.has('email')">@{{ errors.first('email') }}</span>
                            </div>






                            
                            <div class="control-group" :class="[errors.has('job_status') ? 'has-error' : '']">
                                <label for="job_status" class="required">{{ __('career_lang::app.career.job_status') }}</label>
                                <select id="job_status" class="control" name="job_status" v-validate="'required'" value="{{ old('job_status') }}" data-vv-as="&quot;{{ __('career_lang::app.career.job_status') }}&quot;">
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
