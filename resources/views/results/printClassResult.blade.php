@extends('layouts.app_print')

<style>
    .button {
        padding: 10px 10px;
        border-radius: 5px;
        color: #fff;
    }

    @media print {

        /* Hide the buttons when printing */
        .print-only {
            display: none;
        }
    }
</style>

@section('content')
    <div class="card mt-4 mb-3 print-only">
        <div class="card-body">
            <div class="row flex-between-center">
                <div class="col-md">
                    <h5 class="mb-2 mb-md-0">Print {{ $class }} Student Result</h5>
                </div>
                <div class="col-auto">
                    <a href="/class-results" class="btn btn-primary" role="button">Go Back
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="row my-4">
        <div class="col-lg-12">
            <div class="card mb-3">
                <div class="card-body">
                    @if ($class == 'SS1' || $class == 'SS2' || $class == 'SS3')
                        <table class="table mb-0 fs--1" data-datatables="data-datatables">
                            <thead class="bg-200">
                                <tr>
                                    <th class="text-900 sort">ID</th>
                                    <th class="text-900 sort">Name</th>

                                    <th class="text-900 sort">Eng</th>
                                    <th class="text-900 sort">Mat</th>
                                    <th class="text-900 sort">Lit</th>
                                    <th class="text-900 sort">IRK</th>
                                    <th class="text-900 sort">Com</th>
                                    <th class="text-900 sort">Ara</th>
                                    <th class="text-900 sort">Qaw</th>
                                    <th class="text-900 sort">Had</th>
                                    <th class="text-900 sort">Tao</th>
                                    <th class="text-900 sort">Fiq</th>
                                    <th class="text-900 sort">Tar</th>
                                    <th class="text-900 sort">Tef</th>
                                    <th class="text-900 sort">Ada</th>
                                    <th class="text-900 sort">Bal</th>
                                    <th class="text-900 sort">Eco</th>
                                    <th class="text-900 sort">Mar</th>
                                    <th class="text-900 sort">Civ</th>
                                    <th class="text-900 sort">Bio</th>
                                    <th class="text-900 sort">Phy</th>
                                    <th class="text-900 sort">Agr</th>
                                    <th class="text-900 sort">Che</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($results as $result)
                                    <tr>
                                        <td>{{ $result->student_id }}</td>
                                        <td>{{ $result->Name }}</td>

                                        <td>{{ $result->English }}</td>
                                        <td>{{ $result->Maths }}</td>
                                        <td>{{ $result->Literature }}</td>
                                        <td>{{ $result->IRK }}</td>
                                        <td>{{ $result->Computer }}</td>
                                        <td>{{ $result->Arabic }}</td>
                                        <td>{{ $result->Qawaid }}</td>
                                        <td>{{ $result->Hadith }}</td>
                                        <td>{{ $result->Taoheed }}</td>
                                        <td>{{ $result->Fiqh }}</td>
                                        <td>{{ $result->Tarikh }}</td>
                                        <td>{{ $result->Tefseer }}</td>
                                        <td>{{ $result->Adab }}</td>
                                        <td>{{ $result->Balaga }}</td>
                                        <td>{{ $result->Economics }}</td>
                                        <td>{{ $result->Marketing }}</td>
                                        <td>{{ $result->Civic }}</td>
                                        <td>{{ $result->Biology }}</td>
                                        <td>{{ $result->Physics }}</td>
                                        <td>{{ $result->Agric }}</td>
                                        <td>{{ $result->Chemistry }}</td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <table class="table mb-0 fs--1" data-datatables="data-datatables">
                            <thead class="bg-200">
                                <tr>
                                    <th class="text-900 sort">ID</th>
                                    <th class="text-900 sort">Name</th>
                                    <th class="text-900 sort">Eng</th>
                                    <th class="text-900 sort">Mat</th>
                                    <th class="text-900 sort">Gra</th>
                                    <th class="text-900 sort">Pho</th>
                                    <th class="text-900 sort">Sci</th>
                                    <th class="text-900 sort">C.Art</th>
                                    <th class="text-900 sort">V.St</th>
                                    <th class="text-900 sort">N.Va</th>
                                    <th class="text-900 sort">Lit</th>
                                    <th class="text-900 sort">Bus</th>
                                    <th class="text-900 sort">IRK</th>
                                    <th class="text-900 sort">Com</th>
                                    <th class="text-900 sort">Ara</th>
                                    <th class="text-900 sort">Qaw</th>
                                    <th class="text-900 sort">Had</th>
                                    <th class="text-900 sort">Tao</th>
                                    <th class="text-900 sort">Fiq</th>
                                    <th class="text-900 sort">Tar</th>
                                    <th class="text-900 sort">Ulu</th>
                                    <th class="text-900 sort">Tef</th>
                                    <th class="text-900 sort">Kit</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($results as $result)
                                    <tr>
                                        <td>{{ $result->student_id }}</td>
                                        <td>{{ $result->Name }}</td>
                                        <td>{{ $result->English }}</td>
                                        <td>{{ $result->Maths }}</td>
                                        <td>{{ $result->Grammar }}</td>
                                        <td>{{ $result->Phonics }}</td>
                                        <td>{{ $result->Science }}</td>
                                        <td>{{ $result->C_Arts }}</td>
                                        <td>{{ $result->V_Stud }}</td>
                                        <td>{{ $result->N_Value }}</td>
                                        <td>{{ $result->Literature }}</td>
                                        <td>{{ $result->Business }}</td>
                                        <td>{{ $result->IRK }}</td>
                                        <td>{{ $result->Computer }}</td>
                                        <td>{{ $result->Arabic }}</td>
                                        <td>{{ $result->Qawaid }}</td>
                                        <td>{{ $result->Hadith }}</td>
                                        <td>{{ $result->Taoheed }}</td>
                                        <td>{{ $result->Fiqh }}</td>
                                        <td>{{ $result->Tarikh }}</td>
                                        <td>{{ $result->Ulum }}</td>
                                        <td>{{ $result->Tefseer }}</td>
                                        <td>{{ $result->Kitaabah }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div style="margin-top: 1rem;  padding: 1rem; display: flex; gap: 10px;" class="print-only1">
        <button class="button" style="background: #0f4c5c;" onclick="printPage()">Print
            Result</button>
    </div>

    <script>
        function printPage() {
            // Exclude the button section from print
            document.querySelector('.print-only').style.display = 'none';
            document.querySelector('.print-only1').style.display = 'none';
            window.print();
            // Restore the button section after printing
            document.querySelector('.print-only').style.display = 'flex';
            document.querySelector('.print-only1').style.display = 'flex';
        }
    </script>
@endsection
