<!-- Result Summary -->



<div class="border border-slate-900 flex items-center">
    <p class="text-center p-1 flex-1 border h-max border-r-slate-900 font-bold bg-slate-900 text-slate-50">
        RESULT SUMMARY
    </p>
</div>
<div class="border border-slate-900 flex items-center uppercase">
    <p class="text-center p-1 flex-1 border-r-2 h-max text-xs">
        total score:
    </p>
    <p class="text-center p-1 w-1/12 border-r-2 h-max text-xs font-bold">
        {{ $result[0]->T_Score }}
    </p>

    @if ($result[0]->Term == '3rd Term')
        <p class="text-center p-1 flex-1 border-r-2 h-max text-xs">
            Average total:
        </p>
        <p class="text-center p-1 w-1/12 border-r-2 h-max text-xs font-bold">
            {{ $result[0]->Third_Result }}
        </p>
    @endif

    <p class="text-center p-1 flex-1 border-r-2 h-max text-xs">
        percentage score:
    </p>
    <p class="text-center p-1 w-1/12 border-r-2 h-max text-xs font-bold">
        {{ $result[0]->Percent_Score }}%
    </p>
    <p class="text-center p-1 flex-1 border-r-2 h-max text-xs">
        subject failed:
    </p>
    <p class="text-center p-1 w-1/12 border-r-2 h-max text-xs font-bold">
        {{ $result[0]->Subjects_Failed }}
    </p>
    <p class="text-center p-1 flex-1 border-r-2 h-max text-xs">
        core subject failed:
    </p>
    <p class="text-center p-1 w-1/12 border-r-2 h-max text-xs font-bold">
        {{ $result[0]->Core_Subjects }}
    </p>
</div>
<div class="border border-slate-900 flex items-center uppercase">
    <p class="text-center p-1 flex-1 border-r-2 h-max text-xs">
        termly grade:
    </p>
    <p class="text-center p-1 flex-1 border-r-2 h-max text-xs font-bold">
        {{ $result[0]->Termly_Grade }}
    </p>
    <p class="text-center p-1 flex-1 border-r-2 h-max text-xs">
        termly remarks:
    </p>
    <p class="text-center p-1 flex-1 border-r-2 h-max text-xs font-bold">
        {{ $result[0]->Termly_Rem }}
    </p>
</div>
<div class="border border-slate-900 flex items-center">
    <p class="text-justify p-2 pl-4 w-4/12 border-r-2 h-max text-xs">
        TEACHER'S COMMENT:
    </p>
    <p class="text-justify p-2 pl-4 w-8/12 border-r-2 h-max text-xs font-bold">
        {{ $result[0]->Teachers_Comment }}
    </p>
</div>

<div class="border border-slate-900 flex items-center">
    <p class="p-2 pl-4 w-full border-r-2 h-max text-md text-justify">
        Mamagement Comment
    </p>
    <p class="text-justify p-2 pl-4 w-8/12 border-r-2 h-max text-xs font-bold">
        {{ $result[0]->Mgt_Comment }}
    </p>
</div>
<div class="border border-slate-900 flex items-center">
    <p class="p-2 pl-4 w-full border-r-2 h-max text-md text-justify">
        {{ $branches->NextTerm }}
    </p>
</div>
<div class="border border-slate-900 flex items-center">
    <p class="p-2 pl-4 flex-1 border-r-2 h-max text-md text-center">
        Phone: {{ $branches->Branch_Phone }}
    </p>
    <p class="p-2 pl-4 flex-1 border-r-2 h-max text-md text-center">
        Email: {{ $branches->Branch_Email . ' || Website:  ' . $branches->Branch_Website }}
    </p>
    <p class="p-2 pl-4 border-r-2 h-max text-md text-right">
        <img src='<?= 'data:image/jpeg;base64,' . base64_encode($branches->Branch_Sign) ?>' class="w-20 h-20"
        alt="" />
    </p>
</div>
<!-- Result Summary End -->
