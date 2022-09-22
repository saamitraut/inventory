<?php namespace App\Http\Controllers;

use App\Models\Return_master as Return_master;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Hash;
class Return_masterController extends Controller {

    public function index()
      { 
        $data['return_masters'] = Return_master::all();
        return view('return_master/index',$data);
      }
    public function add()
      { 
        return view('return_master/add');
      }
    public function addPost()
      {
        $return_master_data = array(
             'material_id' => Input::get('material_id'), 
             'qty' => Input::get('qty'), 
             'unit_id' => Input::get('unit_id'), 
             'return_date' => Input::get('return_date'), 
             'rate' => Input::get('rate'), 
             'amount' => Input::get('amount'), 
            );
                        $return_master_id = Return_master::insert($return_master_data);
        return redirect('return_master')->with('message', 'Return_master successfully added');
    }
    public function delete($id)
    {   
        $return_master=Return_master::find($id);
        $return_master->delete();
        return redirect('return_master')->with('message', 'Return_master deleted successfully.');
    }
    public function edit($id)
    {   
        $data['return_master']=Return_master::find($id);
        return view('return_master/edit',$data);
    }
    public function editPost()
    {   
        $id =Input::get('return_master_id');
        $return_master=Return_master::find($id);
                                                       
        $return_master_data = array(
          'material_id' => Input::get('material_id'), 
          'qty' => Input::get('qty'), 
          'unit_id' => Input::get('unit_id'), 
          'return_date' => Input::get('return_date'), 
          'rate' => Input::get('rate'), 
          'amount' => Input::get('amount'), 
        );
        $return_master_id = Return_master::where('id', '=', $id)->update($return_master_data);
        return redirect('return_master')->with('message', 'Return_master Updated successfully');
    }

    
    public function changeStatus($id)
    {   
        $return_master=Return_master::find($id);
        $return_master->status=!$return_master->status;
        $return_master->save();
        return redirect('return_master')->with('message', 'Change return_master status successfully');
    }
     public function view($id)
    {   
        $data['return_master']=Return_master::find($id);
        return view('return_master/view',$data);
        
    }
}
