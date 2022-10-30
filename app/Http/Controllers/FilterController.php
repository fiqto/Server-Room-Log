<?php

namespace App\Http\Controllers;
use App\Models\Submission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DateTime;

class FilterController extends Controller
{
    //
    public function acceptSubmission()
    {   
        $submission = DB::table('submissions')
        ->where('status', '=', 'Setuju')
        ->paginate(10);

        return view('admin.table')
            ->with('submissions', $submission);
    }

    public function rejectSubmission()
    {   
        $submission = DB::table('submissions')
        ->where('status', '=', 'Tolak')
        ->paginate(10);

        return view('admin.table')
            ->with('submissions', $submission);
    }

    public function newSubmission()
    {   
        $submission = DB::table('submissions')
        ->where('status', '=', 'Baru')
        ->paginate(10);

        return view('admin.table')
            ->with('submissions', $submission);
    }

    public function searchSubmission(Request $request)
    {   
        $keyword = $request->search;
        $category = $request->category;
        $start = (new DateTime($request->start_access))->format('Y-m-d');
        $end = (new DateTime($request->end_access))->format('Y-m-d');


        $submission = DB::table('submissions')
        ->where($category , 'like', '%'.$keyword.'%')
        ->whereBetween('entry_date',[$start, $end])
        ->paginate(10);

        return view('admin.table')
            ->with('submissions', $submission);
    }

    public function searchMember(Request $request)
    {   
        $keyword = $request->search;

        $member = DB::table('members')
        ->where('member_name' , 'like', '%'.$keyword.'%')
        ->orWhere('phone_number' , 'like', '%'.$keyword.'%')
        ->paginate(10);

        return view('member.table')
            ->with('members', $member);
    }

    public function ascSubmission(Request $request)
    {   
        $sort = $request->col;
        
        $submission = DB::table('submissions')
        ->orderBy($sort)
        ->paginate(10);
        

        return view('admin.table')
            ->with('submissions', $submission);
    }

    public function ascMember(Request $request)
    {   
        $sort = $request->col;
        
        $member = DB::table('members')
        ->orderBy($sort)
        ->paginate(10);
        

        return view('member.table')
            ->with('members', $member);
    }
    
    public function descSubmission(Request $request)
    {   
        $sort = $request->col;

        $submission = DB::table('submissions')
        ->orderByDesc($sort)
        ->paginate(10);

        return view('admin.table')
            ->with('submissions', $submission);
    }

    public function descMember(Request $request)
    {   
        $sort = $request->col;

        $member = DB::table('members')
        ->orderByDesc($sort)
        ->paginate(10);

        return view('member.table')
            ->with('members', $member);
    }
}
