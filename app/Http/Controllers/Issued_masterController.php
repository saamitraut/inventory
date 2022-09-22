<?php namespace App\Http\Controllers;

use App\Models\Issued_master as Issued_master;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Hash;
class Issued_masterController extends Controller {

    public function index()
      { 
        $data['issued_masters'] = Issued_master::all();
        return view('issued_master/index',$data);
      }
    public function add()
      { 
        return view('issued_master/add');
      }
    public function addPost()
      {
        $issued_master_data = array(
             'material_id' => Input::get('material_id'), 
             'qty' => Input::get('qty'), 
             'unit_id' => Input::get('unit_id'), 
             'return_date' => Input::get('return_date'), 
             'rate' => Input::get('rate'), 
             'amount' => Input::get('amount'), 
            );
                        $issued_master_id = Issued_master::insert($issued_master_data);
        return redirect('issued_master')->with('message', 'Issued_master successfully added');
    }
    public function delete($id)
    {   
        $issued_master=Issued_master::find($id);
        $issued_master->delete();
        return redirect('issued_master')->with('message', 'Issued_master deleted successfully.');
    }
    public function edit($id)
    {   
        $data['issued_master']=Issued_master::find($id);
        return view('issued_master/edit',$data);
    }
    public function editPost()
    {   
        $id =Input::get('issued_master_id');
        $issued_master=Issued_master::find($id);
                                                       
        $issued_master_data = array(
          'material_id' => Input::get('material_id'), 
          'qty' => Input::get('qty'), 
          'unit_id' => Input::get('unit_id'), 
          'return_date' => Input::get('return_date'), 
          'rate' => Input::get('rate'), 
          'amount' => Input::get('amount'), 
        );
        $issued_master_id = Issued_master::where('id', '=', $id)->update($issued_master_data);
        return redirect('issued_master')->with('message', 'Issued_master Updated successfully');
    }

    
    public function changeStatus($id)
    {   
        $issued_master=Issued_master::find($id);
        $issued_master->status=!$issued_master->status;
        $issued_master->save();
        return redirect('issued_master')->with('message', 'Change issued_master status successfully');
    }
     public function view($id)
    {   
        $data['issued_master']=Issued_master::find($id);
        return view('issued_master/view',$data);
        
    }
}
