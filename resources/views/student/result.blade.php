@extends('layouts.app_result')

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
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-x-auto">
                    <table class="min-w-full">
                        <div class="border border-solid border-slate-60 max-w-6xl container mx-auto my-20 verflow-x-auto">
                            <div class="border border-slate-900 flex items-center justify-between p-2">
                                <img src='{{ 'data:image/jpeg;base64,' . base64_encode($branches->Header_Logo) }}'
                                    class="w-full h-32" alt="" />
                            </div>

                            <div class="border border-slate-900 flex items-center justify-center text-bold">
                                <p class="text-center p-1">
                                    {{ $branches->Additional_Title }}
                                </p>
                            </div>

                            <div class="border border-slate-900 flex items-center">
                                <p class="text-center p-1 flex-1 border border-slate-900">
                                    Date:
                                    {{ $currentDate = now()->toDateString() }}
                                </p>
                                <p class="text-center p-1 flex-1 border border-slate-900 font-bold uppercase">
                                    {{ $branches->Result_Title }}
                                </p>
                                <p class="text-center p-1 flex-1 border border-slate-900">
                                    Term:
                                    {{ $result[0]->Term }}
                                </p>
                            </div>
                            <div class="border border-slate-900 flex items-center">
                                <p class="text-center p-1 flex-1 border h-max border-r-slate-900">
                                    ID:
                                    {{ auth()->guard('student')->user()->Student_ID }}
                                </p>
                                <p class="text-center p-1 flex-1 border h-max border-r-slate-900 font-bold uppercase">
                                    SECTION:
                                    {{ $result[0]->Section1 }}
                                </p>
                                <p class="text-center p-1 flex-1 border h-max border-r-slate-900">
                                    CLASS:
                                    {{ $result[0]->Class }}
                                </p>
                                <p class="text-center p-1 flex-1 border h-max border-r-slate-900">
                                    POSITION:
                                    {{ $result[0]->Position_ }}
                                </p>
                                <p class="text-center p-1 flex-1 border h-max border-r-slate-900">
                                    OUT OF:
                                    {{ $totalStudent }}
                                </p>
                                <p class='text-center p-1 flex-1 border h-max border-r-slate-900'>
                                    <img src="{{ 'data:image/jpeg;base64,' .base64_encode(auth()->guard('student')->user()->Student_Image) }}"
                                        class="h-12 mx-auto" alt="" />
                                </p>
                            </div>
                            <div class="border border-slate-900 flex items-center">
                                <p class="text-center p-1 flex-1 border h-max border-r-slate-900 rounded">
                                    Fullname:
                                    {{ auth()->guard('student')->user()->Fullnames }}
                                </p>
                                <p class="text-center p-1 flex-1 border h-max border-r-slate-900 font-bold uppercase">
                                    ??????
                                </p>
                                <p class="text-center p-1 flex-1 border h-max border-r-slate-900">
                                    {{ auth()->guard('student')->user()->ArabicName }}
                                </p>
                            </div>

                            @include('partials._resultBreakdown')
                            @include('partials._resultSummary')

                            <div style="margin-top: 1rem;  padding: 1rem; display: flex; gap: 10px;" class="print-only">
                                <a href="/student" class="button" style="background: #9a031e;">Go Back</a>
                                <button class="button" style="background: #0f4c5c;" onclick="printPage()">Print
                                    Result</button>
                            </div>
                        </div>

                    </table>
                </div>
            </div>

        </div>


    </div>



    <script>
        function printPage() {
            // Exclude the button section from print
            document.querySelector('.print-only').style.display = 'none';
            window.print();
            // Restore the button section after printing
            document.querySelector('.print-only').style.display = 'flex';
        }
    </script>
@endsection
