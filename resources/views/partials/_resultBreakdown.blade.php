<div class="border border-slate-900 flex items-center">
    <p class="text-center p-1 flex-1 border h-max border-r-slate-900 font-bold bg-slate-900 text-slate-50">
        RESULT BREAKDOWN
    </p>
</div>
<div class="border border-slate-900 flex items-center">
    <p class="text-center p-1 w-3/12 border h-max border-r-slate-900 font-bold">
        Subjects
    </p>
    <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
        Test1
    </p>
    <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
        Test2
    </p>
    <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
        Exam
    </p>
    <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
        Total
    </p>
    <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
        Grade
    </p>
    <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
        A.Total
    </p>
    <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
        G.Grade
    </p>
    <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
        Remark
    </p>
    <p class="text-center p-1 w-3/12 border h-max border-r-slate-900">
        Arabic Subjects
    </p>
</div>


@if (
    $result[0]->Class == 'Pre KG' or
        $result[0]->Class == 'KG1' or
        $result[0]->Class == 'KG2' or
        $result[0]->Class == 'KG3')
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ne1 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T11 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T21 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E1 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To1 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G1 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->At1 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]->Tg1 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]->Re1 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Na1 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ne2 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T12 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T22 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E2 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To2 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G2 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At2 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg2 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re2 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Na2 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ne3 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T13 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T23 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E3 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To3 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G3 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At3 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg3 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re3 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Na3 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ne4 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T14 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T24 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E4 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To4 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G4 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At4 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg4 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re4 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Na4 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ne5 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T15 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T25 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E5 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To5 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G5 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At5 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg5 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re5 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Na5 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ne6 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T16 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T26 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E6 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To6 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G6 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At6 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg6 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re6 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Na6 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ne7 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T17 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T27 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E7 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To7 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G7 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At7 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg7 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re7 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Na7 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ne8 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T18 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T28 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E8 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To8 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G8 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At8 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg8 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re8 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Na8 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ne9 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T19 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T29 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E9 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To9 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G9 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At9 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg9 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re9 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Na9 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ne10 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T110 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T210 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E10 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To10 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G10 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At10 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg10 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re10 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Na10 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ne11 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T111 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T211 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E11 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To11 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G11 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At11 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg11 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re11 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Na11 }}
        </p>
    </div>
@elseif ($result[0]->Class == 'Pry1' or $result[0]->Class == 'Pry2' or $result[0]->Class == 'Pry3')
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Le1 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T11 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T21 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E1 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To1 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G1 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At1 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg1 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re1 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->La1 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Le2 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T12 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T22 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E2 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To2 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G2 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->At2 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]->Tg2 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]->Re2 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->La2 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Le3 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T13 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T23 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E3 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To3 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G3 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->At3 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]->Tg3 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]->Re3 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->La3 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Le4 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T14 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T24 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E4 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To4 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G4 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->At4 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]->Tg4 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]->Re4 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->La4 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Le5 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T15 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T25 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E5 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To5 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G5 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->At5 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]->Tg5 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]->Re5 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->La5 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Le6 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T16 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T26 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E6 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To6 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G6 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->At6 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]->Tg6 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]->Re6 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->La6 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Le7 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T17 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T27 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E7 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To7 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G7 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->At7 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]->Tg7 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]->Re7 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->La7 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Le8 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T18 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T28 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E8 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To8 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G8 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->At8 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]->Tg8 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]->Re8 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->La8 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Le9 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T19 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T29 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E9 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To9 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G9 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->At9 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]->Tg9 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]->Re9 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->La9 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Le10 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T110 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T210 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E10 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To10 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G10 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->At10 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]->Tg10 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]->Re10 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->La10 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Le11 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T111 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T211 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E11 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To11 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G11 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->At11 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]->Tg11 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]->Re11 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->La11 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Le12 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T112 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T212 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E12 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To12 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G12 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->At12 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]->Tg12 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]->Re12 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->La12 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Le13 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T113 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T213 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E13 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To13 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G13 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At13 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg13 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re13 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->La13 }}
        </p>
    </div>
@elseif ($result[0]->Class == 'Pry4' or $result[0]->Class == 'Pry5' or $result[0]->Class == 'Pry6')
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ue1 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T11 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T21 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E1 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To1 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G1 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At1 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg1 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re1 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ua1 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ue2 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T12 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T22 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E2 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To2 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G2 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At2 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg2 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re2 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ua2 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ue3 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T13 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T23 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E3 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To3 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G3 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At3 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg3 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re3 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ua3 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ue4 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T14 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T24 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E4 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To4 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G4 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At4 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg4 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re4 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ua4 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ue5 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T15 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T25 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E5 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To5 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G5 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At5 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg5 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re5 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ua5 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ue6 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T16 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T26 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E6 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To6 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G6 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At6 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg6 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re6 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ua6 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ue7 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T17 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T27 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E7 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To7 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G7 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At7 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg7 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re7 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ua7 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ue8 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T18 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T28 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E8 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To8 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G8 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At8 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg8 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re8 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ua8 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ue9 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T19 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T29 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E9 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To9 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G9 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At9 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg9 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re9 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ua9 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ue10 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T110 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T210 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E10 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To10 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G10 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At10 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg10 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re10 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ua10 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ue11 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T111 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T211 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E11 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To11 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G11 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At11 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg11 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re11 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ua11 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ue12 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T112 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T212 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E12 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To12 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G12 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At12 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg12 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re12 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ua12 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ue13 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T113 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T213 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E13 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To13 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G13 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At13 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg13 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re13 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ua13 }}
        </p>
    </div>
@elseif ($result[0]->Class == 'JSS1' or $result[0]->Class == 'JSS2' or $result[0]->Class == 'JSS3')
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Je1 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T11 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T21 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E1 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To1 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G1 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At1 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg1 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re1 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ja1 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Je2 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T12 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T22 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E2 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To2 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G2 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At2 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg2 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re2 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ja2 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Je3 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T13 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T23 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E3 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To3 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G3 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At3 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg3 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re3 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ja3 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Je4 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T14 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T24 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E4 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To4 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G4 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At4 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg4 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re4 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ja4 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Je5 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T15 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T25 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E5 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To5 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G5 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At5 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg5 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re5 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ja5 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Je6 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T16 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T26 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E6 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To6 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G6 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At6 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg6 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re6 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ja6 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Je7 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T17 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T27 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E7 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To7 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G7 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At7 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg7 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re7 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ja7 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Je8 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T18 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T28 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E8 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To8 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G8 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At8 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg8 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re8 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ja8 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Je9 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T19 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T29 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E9 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To9 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G9 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At9 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg9 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re9 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ja9 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Je10 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T110 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T210 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E10 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To10 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G10 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At10 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg10 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re10 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ja10 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Je11 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T111 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T211 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E11 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To11 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G11 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At11 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg11 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re11 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ja11 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Je12 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T112 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T212 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E12 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To12 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G12 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At12 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg12 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re12 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ja12 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Je13 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T113 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T213 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E13 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To13 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G13 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At13 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg13 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re13 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ja13 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Je14 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T114 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T214 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E14 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To14 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G14 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At14 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg14 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re14 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ja14 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Je15 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T115 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T215 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E15 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To15 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G15 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At15 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg15 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re15 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ja15 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Je16 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T116 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T216 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E16 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To16 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G16 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At16 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg16 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re16 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ja16 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Je17 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T117 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T217 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E17 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To17 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G17 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At17 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg17 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re17 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ja17 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Je18 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T118 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T218 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E18 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To18 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G18 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At18 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg18 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re18 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ja18 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Je19 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T119 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T219 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E19 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To19 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G19 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At19 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg19 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re19 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Ja19 }}
        </p>
    </div>
@elseif ($result[0]->Class == 'SS1' or $result[0]->Class == 'SS2' or $result[0]->Class == 'SS3')
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Se1 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T11 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T21 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E1 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To1 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G1 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At1 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg1 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re1 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Sa1 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Se2 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T12 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T22 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E2 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To2 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G2 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At2 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg2 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re2 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Sa2 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Se3 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T13 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T23 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E3 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To3 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G3 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At3 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg3 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re3 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Sa3 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Se4 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T14 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T24 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E4 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To4 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G4 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At4 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg4 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re4 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Sa4 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Se5 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T15 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T25 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E5 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To5 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G5 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At5 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg5 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re5 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Sa5 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Se6 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T16 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T26 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E6 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To6 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G6 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At6 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg6 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re6 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Sa6 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Se7 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T17 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T27 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E7 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To7 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G7 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At7 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg7 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re7 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Sa7 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Se8 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T18 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T28 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E8 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To8 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G8 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At8 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg8 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re8 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Sa8 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Se9 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T19 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T29 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E9 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To9 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G9 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At9 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg9 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re9 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Sa9 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Se10 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T110 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T210 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E10 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To10 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G10 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At10 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg10 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re10 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Sa10 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Se11 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T111 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T211 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E11 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To11 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G11 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At11 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg11 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re11 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Sa11 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Se12 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T112 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T212 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E12 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To12 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G12 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At12 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg12 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re12 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Sa12 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Se13 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T113 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T213 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E13 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To13 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G13 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At13 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg13 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re13 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Sa13 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Se14 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T114 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T214 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E14 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To14 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G14 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At14 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg14 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re14 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Sa14 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Se15 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T115 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T215 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E15 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To15 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G15 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At15 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg15 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re15 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Sa15 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Se16 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T116 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T216 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E16 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To16 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G16 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At16 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg16 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re16 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Sa16 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Se17 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T117 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T217 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E17 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To17 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G17 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At17 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg17 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re17 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Sa17 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Se18 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T118 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T218 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E18 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To18 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G18 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At18 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg18 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re18 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Sa18 }}
        </p>
    </div>
    <div class="border border-slate-900 flex items-center">
        <p class="text-left p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Se19 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T119 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->T219 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]->E19 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-red-100">
            {{ $result[0]->To19 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-100">
            {{ $result[0]->G19 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900">
            {{ $result[0]?->At19 }}
        </p>
        <p class="text-center p-1 w-1/12 border h-max border-r-slate-900 bg-yellow-200">
            {{ $result[0]?->Tg19 }}
        </p>
        <p class="text-center p-1 w-2/12 border h-max border-r-slate-900">
            {{ $result[0]?->Re19 }}
        </p>
        <p class="text-right p-1 w-3/12 border h-max border-r-slate-900">
            {{ $subjects->Sa19 }}
        </p>
    </div>
@endif
