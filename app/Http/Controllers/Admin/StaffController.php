<?php

namespace App\Http\Controllers\Admin;

use App\Models\Staff;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class StaffController extends Controller
{
    public function __construct()
    {
        // echo "Staff Controller";
    }

    public function stafflist()
    {

        $stafflist = DB::table('staff')
            ->join('roles', 'roles.id', '=', 'staff.role_id')

            ->select('staff.*', 'roles.name as rolename')
            ->paginate(3);
        // dd($stafflist);
        return view('admin.stafflist', compact('stafflist'));
    }
    public function addStaff()
    {
        $roles = DB::table('roles')
            ->select('roles.*')->get();
        // dd($roles);
        return view('./admin/staff', compact('roles'));
    }


    public function addStaffProcess(Request $request)
    {
        $path = $request->file('image')->store('images', 'public');
        $url = Storage::url($path);
        $uuid = Str::uuid()->toString();
        $staff = new Staff();
        $staff->name = $request->name;
        $staff->email = $request->email;
        $staff->address = $request->address;
        $staff->age = Carbon::parse($request->bd)->age;
        $staff->phone = $request->phone;
        $staff->role_id = $request->role;
        $staff->uuid = $uuid;
        $staff->image = $url;
        $staff->status = "Active";
        $staff->password = Hash::make($request->password);
        $staff->save();
        return redirect()->to('/staffList');
    }
    public function editStaff($id)
    {
        $roles = DB::table('roles')->select('roles.*')->get();
        $staff = DB::table('staff')->select('staff.*')->where('id', '=', $id)->first();
        return view('./admin/staff', compact('staff', 'roles'));
    }

    public function editStaffProcess(Request $request)
    {


        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $url = Storage::url($path);

            Staff::where('id', $request->id)->update([
                'image' => $url,
                'name' => $request->name,
                'email' => $request->email,
                'address' => $request->address,
                'age' => Carbon::parse($request->bd)->age,
                'phone' => $request->phone,
                'role_id' => $request->role,
            ]);
            return redirect()->to('/staffList');
        } else {

            return back()->with('error', 'No file uploaded');
        }
    }
    public function deleteStaffProcess($id)
    {
        DB::table('staff')->where('id', $id)->delete();
        return redirect()->to('/staffList');
    }
    public function searchStaff(Request $request)
    {
       
        $search = $request->input('search');
        $stafflist = DB::table('staff')
            ->join('roles', 'roles.id', '=', 'staff.role_id')
            ->select('staff.*', 'roles.name as rolename')
            ->where('staff.name', 'like', "%$search%")
           
            ->paginate(3);
        return view('admin.stafflist', compact('stafflist'));
    }
    public function dateFilter(Request $request)
    {
        $startDate = Carbon::parse($request->date1);
        $endDate = Carbon::parse($request->date2);
        $stafflist = DB::table('staff')
        
        ->join('roles', 'roles.id', '=', 'staff.role_id')
        ->select('staff.*', 'roles.name as rolename')
        ->whereBetween('staff.created_at', [$startDate, $endDate])
        ->paginate(3);
        return view('./admin/stafflist', compact('stafflist'));

    }

    public function sortStaff(Request $request){
        $stafflist=DB::table('staff')
        ->join('roles', 'roles.id', '=', 'staff.role_id')
        ->select('staff.*', 'roles.name as rolename')
        ->orderBy('staff.id', $request->sort)
        ->paginate(2);
    return view('./admin/stafflist', compact('stafflist'));
    }
}
