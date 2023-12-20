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
                                'name' => 'Grammar',
                                'label' => 'Grammar',
                                'value' => $result->Grammar,
                            ])
                            @include('components.form-fields-result-option', [
                                'name' => 'Phonics',
                                'label' => 'Phonics',
                                'value' => $result->Phonics,
                            ])
                            @include('components.form-fields-result-option', [
                                'name' => 'Science',
                                'label' => 'Science',
                                'value' => $result->Science,
                            ])
                            @include('components.form-fields-result-option', [
                                'name' => 'C_Arts',
                                'label' => 'C_Arts',
                                'value' => $result->C_Arts,
                            ])
                            @include('components.form-fields-result-option', [
                                'name' => 'V_Stud',
                                'label' => 'V_Stud',
                                'value' => $result->V_Stud,
                            ])
                            @include('components.form-fields-result-option', [
                                'name' => 'N_Value',
                                'label' => 'N_Value',
                                'value' => $result->N_Value,
                            ])
                            @include('components.form-fields-result-option', [
                                'name' => 'Literature',
                                'label' => 'Literature',
                                'value' => $result->Literature,
                            ])
                            @include('components.form-fields-result-option', [
                                'name' => 'Business',
                                'label' => 'Business',
                                'value' => $result->Business,
                            ])
                            @include('components.form-fields-result-option', [
                                'name' => 'IRK',
                                'label' => 'IRK',
                                'value' => $result->IRK,
                            ])
                            @include('components.form-fields-result-option', [
                                'name' => 'Computer',
                                'label' => 'Computer',
                                'value' => $result->Computer,
                            ])
                            @include('components.form-fields-result-option', [
                                'name' => 'Arabic',
                                'label' => 'Arabic',
                                'value' => $result->Arabic,
                            ])
                            @include('components.form-fields-result-option', [
                                'name' => 'Qawaid',
                                'label' => 'Qawaid',
                                'value' => $result->Qawaid,
                            ])
                            @include('components.form-fields-result-option', [
                                'name' => 'Hadith',
                                'label' => 'Hadith',
                                'value' => $result->Hadith,
                            ])
                            @include('components.form-fields-result-option', [
                                'name' => 'Taoheed',
                                'label' => 'Taoheed',
                                'value' => $result->Taoheed,
                            ])
                            @include('components.form-fields-result-option', [
                                'name' => 'Fiqh',
                                'label' => 'Fiqh',
                                'value' => $result->Fiqh,
                            ])
                            @include('components.form-fields-result-option', [
                                'name' => 'Tarikh',
                                'label' => 'Tarikh',
                                'value' => $result->Tarikh,
                            ])
                            @include('components.form-fields-result-option', [
                                'name' => 'Ulum',
                                'label' => 'Ulum',
                                'value' => $result->Ulum,
                            ])
                            @include('components.form-fields-result-option', [
                                'name' => 'Tefseer',
                                'label' => 'Tefseer',
                                'value' => $result->Tefseer,
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
                            @include('components.form-fields-result-option', [
                                'name' => 'Economics',
                                'label' => 'Economics',
                                'value' => $result->Economics,
                            ])
                            @include('components.form-fields-result-option', [
                                'name' => 'Marketing',
                                'label' => 'Marketing',
                                'value' => $result->Marketing,
                            ])
                            @include('components.form-fields-result-option', [
                                'name' => 'Civic',
                                'label' => 'Civic',
                                'value' => $result->Civic,
                            ])
                            @include('components.form-fields-result-option', [
                                'name' => 'Biology',
                                'label' => 'Biology',
                                'value' => $result->Biology,
                            ])
                            @include('components.form-fields-result-option', [
                                'name' => 'Physics',
                                'label' => 'Physics',
                                'value' => $result->Physics,
                            ])
                            @include('components.form-fields-result-option', [
                                'name' => 'Agric',
                                'label' => 'Agric',
                                'value' => $result->Agric,
                            ])
                            @include('components.form-fields-result-option', [
                                'name' => 'Chemistry',
                                'label' => 'Chemistry',
                                'value' => $result->Chemistry,
                            ])
                            @include('components.form-fields-result-option', [
                                'name' => 'Kitaabah',
                                'label' => 'Kitaabah',
                                'value' => $result->Kitaabah,
                            ])

                            @include('components.button', ['label' => 'Update'])
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
