@extends('layouts.app')

@section('content')
<div class="container py-4">
    <form class="form" method="POST" action="{{ route('tuk.store') }}" enctype="multipart/form-data"
        style="margin: 0 auto; width: 80%;">
        @csrf
        <h4><b>Personal Data</b></h4>
        <div class="row">
            <div class="col-lg-12">
                <x-forms.select label="Competence" id="competence_id" name="competence_id" :options="$competence"
                    selected="0" isRequired />
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <x-forms.input label="Full Name" name="full_name" type="text" isRequired />
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <x-forms.input label="Organization" name="organization_name" type="text" />
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <x-forms.input label="City" name="city" type="text" />
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <x-forms.date label="Birth Date" name="birth_date" />
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                @php
                $gender = [
                '0' => 'Choose your gender',
                'laki-laki' => 'Laki-laki',
                'perempuan' => 'Perempuan',
                ];
                @endphp
                <x-forms.select label="Gender" id="gender" name="gender" :options="$gender" selected="0" />
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                @php
                $nationality = [
                "0" => "Choose a nationality",
                "indonesia" => "Indonesia",
                "malaysia" => "Malaysia",
                "japan" => "Japan",
                ]
                @endphp
                <x-forms.select label="Nationality" id="nationality" name="nationality" :options="$nationality"
                    selected="0" />
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-lg-12">
                <x-forms.textarea label="Address" name="address" />
            </div>
        </div>

        <h4><b>Contact</b></h4>

        <div class="row">
            <div class="col-lg-12">
                <x-forms.input label="Phone Number" name="contact_phone_number" type="text" />
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <x-forms.input label="Email" name="contact_email" type="email" />
            </div>
        </div>

        <h4><b>Education</b></h4>

        <div class="row">
            <div class="col-lg-12">
                <x-forms.input label="Title" name="education_title" type="text" />
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <x-forms.input label="School/University" name="education_school_university" type="text" />
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <x-forms.input label="Major" name="education_major" type="text" />
            </div>
        </div>

        <h4><b>Company Data</b></h4>

        <div class="row">
            <div class="col-lg-12">
                <x-forms.input label="Company Name" name="company_name" type="text" />
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <x-forms.input label="Company Address" name="company_address" type="text" />
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <x-forms.input label="Position" name="company_position" type="text" />
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <x-forms.input label="Company Email" name="company_email" type="text" />
            </div>
        </div>

        <h4><b>Documents</b></h4>
        <div class="row">
            <div class="col-lg-12">
                <x-forms.file label="Photo" name="photo" />
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <x-forms.file label="Identify Card" name="identification_card" />
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <x-forms.file label="Education Certificate" id="education_certificate" name="education_certificate" />
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <x-forms.file label="Curriculum Vitae" id="curriculum_vitae" name="curriculum_vitae" />
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12">
                <h4>Other Documents</h4>
                <div class="bg-warning p-1 rounded text-center mb-2">
                    <p class="mb-0">Additional documents are optional. You can upload them by putting it in a google
                        drive and
                        put the link in the input below.</p>
                </div>
                <x-forms.input label="Link" name="additional_link" type="text" />
            </div>
        </div>

        <div class="row my-3">
            <div class="col-lg-12 d-flex justify-content-center">
                <button type="submit" class="btn btn-lg btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>

@endsection