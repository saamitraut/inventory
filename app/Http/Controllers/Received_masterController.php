<?php namespace App\Http\Controllers;

use App\Models\received_master as received_master;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Hash;
class received_masterController extends Controller {

    public function index()
      { 
        $data['received_masters'] = received_master::all();
        return view('received_master/index',$data);
      }
    public function add()
      { 
        return view('received_master/add');
      }
    public function addPost()
      {
        $received_master_data = array(
             'material_id' => Input::get('material_id'), 
             'qty' => Input::get('qty'), 
             'unit_id' => Input::get('unit_id'), 
             'received_on' => Input::get('received_on'), 
             'rate' => Input::get('rate'), 
             'amount' => Input::get('amount'), 
            );
                        $received_master_id = received_master::insert($received_master_data);
        return redirect('received_master')->with('message', 'received_master successfully added');
    }
    public function delete($id)
    {   
        $received_master=received_master::find($id);
        $received_master->delete();
        return redirect('received_master')->with('message', 'received_master deleted successfully.');
    }
    public function edit($id)
    {   
        $data['received_master']=received_master::find($id);
        return view('received_master/edit',$data);
    }
    public function editPost()
    {   
        $id =Input::get('received_master_id');
        $received_master=received_master::find($id);
                                                       
        $received_master_data = array(
          'material_id' => Input::get('material_id'), 
          'qty' => Input::get('qty'), 
          'unit_id' => Input::get('unit_id'), 
          'received_on' => Input::get('received_on'), 
          'rate' => Input::get('rate'), 
          'amount' => Input::get('amount'), 
        );
        $received_master_id = received_master::where('id', '=', $id)->update($received_master_data);
        return redirect('received_master')->with('message', 'received_master Updated successfully');
    }

    
    public function changeStatus($id)
    {   
        $received_master=received_master::find($id);
        $received_master->status=!$received_master->status;
        $received_master->save();
        return redirect('received_master')->with('message', 'Change received_master status successfully');
    }
     public function view($id)
    {   
        $data['received_master']=received_master::find($id);
        return view('received_master/view',$data);
        
    }
}