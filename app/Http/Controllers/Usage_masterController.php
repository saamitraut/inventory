<?php namespace App\Http\Controllers;

use App\Models\Usage_master as Usage_master;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Hash;
class Usage_masterController extends Controller {

    public function index()
      { 
        $data['usage_masters'] = Usage_master::all();
        return view('usage_master/index',$data);
      }
    public function add()
      { 
        return view('usage_master/add');
      }
    public function addPost()
      {
        $usage_master_data = array(
             'material_id' => Input::get('material_id'), 
             'no_of_units' => Input::get('no_of_units'), 
             'branch_id' => Input::get('branch_id'), 
             'Requiredfor_id' => Input::get('Requiredfor_id'), 
             'Purpose_id' => Input::get('Purpose_id'), 
             'customer_id' => Input::get('customer_id'), 
             'engineer_id' => Input::get('engineer_id'), 
             'responsible_person_id' => Input::get('responsible_person_id'), 
             'Receiptno' => Input::get('Receiptno'), 
             'amount' => Input::get('amount'), 
            );
                                        $usage_master_id = Usage_master::insert($usage_master_data);
        return redirect('usage_master')->with('message', 'Usage_master successfully added');
    }
    public function delete($id)
    {   
        $usage_master=Usage_master::find($id);
        $usage_master->delete();
        return redirect('usage_master')->with('message', 'Usage_master deleted successfully.');
    }
    public function edit($id)
    {   
        $data['usage_master']=Usage_master::find($id);
        return view('usage_master/edit',$data);
    }
    public function editPost()
    {   
        $id =Input::get('usage_master_id');
        $usage_master=Usage_master::find($id);
                                                                                       
        $usage_master_data = array(
          'material_id' => Input::get('material_id'), 
          'no_of_units' => Input::get('no_of_units'), 
          'branch_id' => Input::get('branch_id'), 
          'Requiredfor_id' => Input::get('Requiredfor_id'), 
          'Purpose_id' => Input::get('Purpose_id'), 
          'customer_id' => Input::get('customer_id'), 
          'engineer_id' => Input::get('engineer_id'), 
          'responsible_person_id' => Input::get('responsible_person_id'), 
          'Receiptno' => Input::get('Receiptno'), 
          'amount' => Input::get('amount'), 
        );
        $usage_master_id = Usage_master::where('id', '=', $id)->update($usage_master_data);
        return redirect('usage_master')->with('message', 'Usage_master Updated successfully');
    }

    
    public function changeStatus($id)
    {   
        $usage_master=Usage_master::find($id);
        $usage_master->status=!$usage_master->status;
        $usage_master->save();
        return redirect('usage_master')->with('message', 'Change usage_master status successfully');
    }
     public function view($id)
    {   
        $data['usage_master']=Usage_master::find($id);
        return view('usage_master/view',$data);
        
    }
}
