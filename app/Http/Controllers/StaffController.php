<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StaffController extends Controller
{
    //
    
    public function stafflist()
    {
        
        $stafflist = DB::table('staff')
            ->join('roles', 'roles.id', '=', 'staff.role_id')
           
            ->select('staff.*', 'roles.name as rolename')->get();
            // $stafflist = staff::paginate(5);
        // dd($stafflist);
        return view('admin.stafflist', compact('stafflist'));
    }
    public function addStaff()
    {
        $roles = DB::table('roles')
        ->select('roles.*')->get();
        // dd($roles);
        return view('./admin/staff',compact('roles'));
    }
   
   
    public function addStaffProcess(Request $request){
        $uuid = Str::uuid()->toString();
        $image = $uuid.'.'.$request->image->extension();
        $request->image->move(public_path('image/staff/'),$image);
        $staff = new Staff();
        $staff->name = $request->name;
        $staff->email = $request->email;
        $staff->address = $request->address;
        $staff->age = Carbon::parse($request->bd)->age;
        $staff->phone = $request->phone;
        $staff->role_id = $request->role;
        $staff->uuid= $uuid;
        $staff->image = $image;
        $staff->status= "Active";
        $staff->password =Hash::make($request->password);
        $staff->save();
        return redirect()->to('/staffList');
    }
    public function editStaff($id)
    {
        $roles = DB::table('roles')->select('roles.*')->get();
        $staff = DB::table('staff')->select('staff.*')->where('id','=',$id)->first();
        return view('./admin/staff',compact('staff','roles'));
    }

    public function editStaffProcess(Request $request){
    // dd("process");
        // dd( $request->image);
        if ($request->hasFile('image')) {
           
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            // dd($fileName);
            $file->move(public_path('image/staff/'), $fileName);
            Staff::where('id', $request->id)->update([
                'image' => $fileName,
                'name' => $request->name,
                'email' => $request->email,
                'address' => $request->address,
                'age' => Carbon::parse($request->bd)->age,
                'phone' => $request->phone,
                'role_id' => $request->role,
                // 'password' => $request->password
            ]);
            return redirect()->to('/staffList');
            
        } else {

            return back()->with('error', 'No file uploaded');
        }
       
    }
    public function deleteStaffProcess($id){
       DB::table('staff')->where('id', $id)->delete();
        return redirect()->to('/staffList');
    }
    
}