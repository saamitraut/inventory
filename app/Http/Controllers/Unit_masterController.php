<?php namespace App\Http\Controllers;

use App\Models\Unit_master as Unit_master;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Hash;
class Unit_masterController extends Controller {

    public function index()
      { 
        $data['unit_masters'] = Unit_master::all();
        return view('unit_master/index',$data);
      }
    public function add()
      { 
        return view('unit_master/add');
      }
    public function addPost()
      {
        $unit_master_data = array(
             'name' => Input::get('name'), 
            );
    $unit_master_id = Unit_master::insert($unit_master_data);
        return redirect('unit_master')->with('message', 'Unit_master successfully added');
    }
    public function delete($id)
    {   
        $unit_master=Unit_master::find($id);
        $unit_master->delete();
        return redirect('unit_master')->with('message', 'Unit_master deleted successfully.');
    }
    public function edit($id)
    {   
        $data['unit_master']=Unit_master::find($id);
        return view('unit_master/edit',$data);
    }
    public function editPost()
    {   
        $id =Input::get('unit_master_id');
        $unit_master=Unit_master::find($id);
               
        $unit_master_data = array(
          'name' => Input::get('name'), 
        );
        $unit_master_id = Unit_master::where('id', '=', $id)->update($unit_master_data);
        return redirect('unit_master')->with('message', 'Unit_master Updated successfully');
    }

    
    public function changeStatus($id)
    {   
        $unit_master=Unit_master::find($id);
        $unit_master->status=!$unit_master->status;
        $unit_master->save();
        return redirect('unit_master')->with('message', 'Change unit_master status successfully');
    }
     public function view($id)
    {   
        $data['unit_master']=Unit_master::find($id);
        return view('unit_master/view',$data);
        
    }
}