@extends('layouts.app')

@section('content')
    @include('components.form-header', ['title' => 'Edit result'])
    @include('components.form-alert')

    <div class="row g-0">
        <div class="col-lg-12 pe-lg-2">
            <div class="card">
                <div class="card-header bg-body-tertiary">
                    <h6 class="mb-0">Result</h6>
                </div>
                <div class="card-body">
                    <form action="/results/{{ $result->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <!-- Form -->
                        <div class="row">
                            @include('components.form-fields-result', [
                                'name' => 'student_id',
                                'label' => 'Student ID',
                                'value' => $result->student_id,
                            ])
                            @include('components.form-fields-result', [
                                'name' => 'Name',
                                'label' => 'Name',
                                'value' => $result->Name,
                            ])
                            @include('components.form-fields-result', [
                                'name' => 'Session',
                                'label' => 'Session',
                                'value' => $result->session,
                            ])
                            @include('components.form-fields-result', [
                                'name' => 'Class',
                                'label' => 'Class',
                                'value' => $result->Class,
                            ])
                            @include('components.form-fields-result', [
                                'name' => 'Term',
                                'label' => 'Term',
                                'value' => $result->Term,
                            ])
                        </div>

                        <div class="row my-4 gx-5 gy-3">
                            @include('components.form-fields-result-option', [
                                'name' => 'English',
                                'label' => 'English',
                                'value' => $result->English,
                            ])
                            @include('components.form-fields-result-option', [
                                'name' => 'Maths',
                                'label' => 'Maths',
                                'value' => $result->Maths,
                            ])
                            @include('components.form-fields-result-option', [
                                'name' => 'Civic',
                                'label' => 'Civic',
                                'value' => $result->Civic,
                            ])
                            @include('components.form-fields-result-option', [
                                'name' => 'Marketing',
                                'label' => 'Marketing',
                                'value' => $result->Marketing,
                            ])
                            @include('components.form-fields-result-option', [
                                'name' => 'Economics',
                                'label' => 'Economics',
                                'value' => $result->Economics,
                            ])
                            @include('components.form-fields-result-option', [
                                'name' => 'Biology',
                                'label' => 'Biology',
                                'value' => $result->Biology,
                            ])
                            @include('components.form-fields-result-option', [
                                'name' => 'Chemistry',
                                'label' => 'Chemistry',
                                'value' => $result->Chemistry,
                            ])
                            @include('components.form-fields-result-option', [
                                'name' => 'Islamic_Stud',
                                'label' => 'Islamic_Stud',
                                'value' => $result->Islamic_Stud,
                            ])
                            @include('components.form-fields-result-option', [
                                'name' => 'Gen_Stud',
                                'label' => 'Gen_Stud',
                                'value' => $result->Gen_Stud,
                            ])
                            @include('components.form-fields-result-option', [
                                'name' => 'Business_Stud',
                                'label' => 'Business_Stud',
                                'value' => $result->Business_Stud,
                            ])
                            @include('components.form-fields-result-option', [
                                'name' => 'Grammer',
                                'label' => 'Grammer',
                                'value' => $result->Grammer,
                            ])
                            @include('components.form-fields-result-option', [
                                'name' => 'Computer',
                                'label' => 'Computer',
                                'value' => $result->Computer,
                            ])
                            @include('components.form-fields-result-option', [
                                'name' => 'C_Arts',
                                'label' => 'C_Arts',
                                'value' => $result->C_Arts,
                            ])
                            @include('components.form-fields-result-option', [
                                'name' => 'Basic_Sc',
                                'label' => 'Basic_Sc',
                                'value' => $result->Basic_Sc,
                            ])
                            @include('components.form-fields-result-option', [
                                'name' => 'Agric_Sc',
                                'label' => 'Agric_Sc',
                                'value' => $result->Agric_Sc,
                            ])
                            @include('components.form-fields-result-option', [
                                'name' => 'Arabic',
                                'label' => 'Arabic',
                                'value' => $result->Arabic,
                            ])
                            @include('components.form-fields-result-option', [
                                'name' => 'Hadith',
                                'label' => 'Hadith',
                                'value' => $result->Hadith,
                            ])
                            @include('components.form-fields-result-option', [
                                'name' => 'Tefseer',
                                'label' => 'Tefseer',
                                'value' => $result->Tefseer,
                            ])
                            @include('components.form-fields-result-option', [
                                'name' => 'Taoheed',
                                'label' => 'Taoheed',
                                'value' => $result->Taoheed,
                            ])
                            @include('components.form-fields-result-option', [
                                'name' => 'Tarikh',
                                'label' => 'Tarikh',
                                'value' => $result->Tarikh,
                            ])
                            @include('components.form-fields-result-option', [
                                'name' => 'Qawaid',
                                'label' => 'Qawaid',
                                'value' => $result->Qawaid,
                            ])
                            @include('components.form-fields-result-option', [
                                'name' => 'Fiqh',
                                'label' => 'Fiqh',
                                'value' => $result->Fiqh,
                            ])
                            @include('components.form-fields-result-option', [
                                'name' => 'Adab',
                                'label' => 'Adab',
                                'value' => $result->Adab,
                            ])
                            @include('components.form-fields-result-option', [
                                'name' => 'Balaga',
                                'label' => 'Balaga',
                                'value' => $result->Balaga,
                            ])

                            @include('components.button', ['label' => 'Submit'])
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
