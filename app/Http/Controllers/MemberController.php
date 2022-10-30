<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Http\Requests\StoreMemberRequest;
use App\Http\Requests\UpdateMemberRequest;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    
    public function index()
    {
        //
        $member = DB::table('members')
            ->paginate(10);

        return view('member.table')
            ->with('members', $member);
    }

    public function create()
    {
        //
        return view('member.add');
    }

    public function store(StoreMemberRequest $request)
    {
        //
        DB::table('members')->insert($request->validated());
        
        return redirect()->route('members.index')
            ->with('success', 'Berhasil DiTambahkan!');
    }

    public function show(Member $member)
    {
        //
    }

    public function edit(Member $member)
    {
        //
        return view('member.edit', compact('member'));
    }

    public function update(UpdateMemberRequest $request, Member $member)
    {
        //
        $member->update($request->validated());
        
        return redirect()->route('members.index')
            ->with('success', 'Berhasil DiUpdate!');
    }

    public function destroy(Member $member)
    {
        //
        $member->delete();
        
        return redirect()->route('members.index')
            ->with('success', 'Berhasil Dihapus!');
    }
}
