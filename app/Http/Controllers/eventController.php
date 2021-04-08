<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\add_event;
use App\Models\registration;
use App\Helpers\ValidatorMsgHelper;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class eventController extends Controller
{
    public function save_admin(Request $request){
        $this->validate($request,[
            'ad_name'=>'required|max:100|min:3',            
            'ad_email'=>'required|email',
            'ad_mobile'=>'required|regex:/^[0-9]{10}+$/|min:10|max:10',            
            'ad_password'=>'required|max:20|min:6'           
                        
        ]);        

     
        $add = new User;
        $add-> name=$request->ad_name;
        $add-> mobile=$request->ad_mobile;        
        $add-> email=$request->ad_email;                
        $add-> password=Hash::make($request->ad_password);
        $add->save();

        return redirect('/add_admin');

    }

    public static function viewadmin(){
        $data=User::all();
        return View("add_admin")->with(array('data'=>$data));
    }

    public static function save_reg(Request $request){
        $add = new registration;
        $add-> name=$request->reg_name;
        $add-> mobile=$request->reg_number;        
        $add-> email=$request->reg_email; 
        $add-> address=$request->reg_add;
        $add-> nic=$request->reg_nic;
        $add-> event=$request->reg_event;
        $add-> address=$request->reg_add;
        $add->save();

        return redirect()->back();
    }

    public static function event_registration(){
        $data=registration::all();
        return View("event_registration")->with(array('data'=>$data));
    }

    public static function save_event(Request $request){
        $add = new add_event;
        $add-> event=$request->event_name;
        $add-> date=$request->event_date; 
        $add->save();

        return redirect()->back();
    }

    public static function event_list(){
        $data=add_event::all();
        return View("add_event")->with(array('data'=>$data));
    }

    public static function event_delete($id){
        $data=add_event::find($id);
        $data->delete();
        return redirect('/add_event');
    }

    public static function eve_list(){
        $data=add_event::all();
        return View("welcome")->with(array('data'=>$data));
    }


    public function adminlogin(Request $request){

        if (Auth::attempt(['email' => $request->log_email, 'password' => $request->log_password])) {
            
            return redirect('/event_registration');       

        }

    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
      }

      public static function update_eve_data($id){

        $data=add_event::find($id);
        return View("update_event")->with(array('data'=>$data));
    }

    public static function update_event(Request $request){

        $data=add_event::find($request->id);               
        $data-> event =$request->up_event;
        $data-> date =$request->up_date;
        $data->save();
        
        return redirect('/add_event');
    }

    public static function admin_delete($id){
        $data=User::find($id);
        $data->delete();
        return redirect('/add_admin');
    }

    public static function reg_delete($id){
        $data=registration::find($id);
        $data->delete();
        return redirect('/event_registration');
    }


}
