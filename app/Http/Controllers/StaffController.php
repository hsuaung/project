<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StaffController extends Controller
{
    //
    public function stafflist()
    {
        $stafflist = DB::table('staff')
            ->join('roles', 'roles.id', '=', 'staff.role_id')
            // ->where('staff.status', '=', 'Active')
            ->select('staff.*', 'roles.name as rolename')->get();
        // dd($stafflist);
        return view('admin.stafflist', compact('stafflist'));
    }
    public function addStaff()
    {
        return view('./admin/addStaff');
    }
   
   
    public function addStaffProcess(Request $request){
        

        $uuid = Str::uuid()->toString();
        $image = $uuid.'.'.$request->image->extension();
        $request->image->move(public_path('image/staff/'),$image);

        $staff = new Staff();
        $staff->name = $request->name;
        $staff->email = $request->email;
        $staff->address = $request->address;
        $staff->age = $request->age;
        $staff->phone = $request->phone;
        $staff->role_id = $request->role_id;
        $staff->uuid= $uuid;
        $staff->image = $image;
        $staff->status= "Active";
        $staff->password =bcrypt($request->password);
        
        $staff->save();
        return redirect()->to('/staffList');
        


    }
    public function editStaff($id)
    {
     
        $staff = new Staff();
        $staff = DB::table('staff')->select('id', 'name','email','address','age','phone','role_id','password')->where('id','=',$id)->first();
        return view('./admin/editStaff',compact('staff'));
    }

    public function editStaffProcess(Request $request){
        // dd($request->id);
       
            Staff::where('id', $request->id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'address' => $request->address,
                'age' => $request->age,
                'phone' => $request->phone,
                'role_id' => $request->role_id,
                'password' => $request->password
            ]);
         return redirect()->to('/staffList');

        
        // $role = DB::table('roles')->select('id', 'name')->where('status','=','Active')->get();
        // dd($role);
    }
    public function deleteStaffProcess($id){
       DB::table('staff')->where('id', $id)->delete();
        return redirect()->to('/staffList');
    }
    
}