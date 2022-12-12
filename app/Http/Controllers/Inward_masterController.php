<?php namespace App\Http\Controllers;
use App\Models\Material_master as Material_master;
use App\Models\Supplier as Supplier;
use App\Models\Inward_master as Inward_master;
use App\Models\Unit_master as Unit_master;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Hash;

class Inward_masterController extends Controller {

    public function index()
      { 
        $data['inward_masters'] = Inward_master::all();
        $data['suppliers'] = Supplier::all()->toArray();  
        $data['units']=Unit_master::all()->toArray();
        
        $data['materials'] = Material_master::all()->toArray();        
        return view('inward_master/index',$data);
      }
    
    public function add()
      { 
        $data['materials'] = Material_master::all();
        return view('inward_master/add',$data);
      }
    public function addPost()
      {
        $inward_master_data = array(
             'material_id' => Input::get('material_id'), 
             'material_description' => Input::get('material_description'), 
             'supplier' => Input::get('supplier'), 
             'received' => Input::get('received'), 
             'return' => Input::get('return'), 
             'rate' => Input::get('rate'),
             'receivedon' => Input::get('receivedon'),             
             'amount' => Input::get('rate')*Input::get('received'), 
            );
        $inward_master_id = Inward_master::insert($inward_master_data);
        
        return redirect('inward_master')->with('message', 'Inward_master successfully added');
    }
    public function delete($id)
    {   
        $inward_master=Inward_master::find($id);
        $inward_master->delete();
        return redirect('inward_master')->with('message', 'Inward_master deleted successfully.');
    }
    public function edit($id)
    {   
        $data['inward_master']=Inward_master::find($id);
        $data['materials'] = Material_master::all()->toArray();        
        
        return view('inward_master/edit',$data);
    }
    public function editPost()
    {   
        $id =Input::get('inward_master_id');
        $inward_master=Inward_master::find($id);
                                                                       
        $inward_master_data = array(
          'material_id' => Input::get('material_id'), 
          'material_description' => Input::get('material_description'), 
          // 'opening_stock' => Input::get('opening_stock'), 
          'received' => Input::get('received'), 
          'return' => Input::get('return'), 
          // 'unit' => Input::get('unit'), 
          'rate' => Input::get('rate'), 
          'amount' => Input::get('amount'), 
        );
        $inward_master_id = Inward_master::where('id', '=', $id)->update($inward_master_data);
        return redirect('inward_master')->with('message', 'Inward_master Updated successfully');
    }

    
    public function changeStatus($id)
    {   
        $inward_master=Inward_master::find($id);
        $inward_master->status=!$inward_master->status;
        $inward_master->save();
        return redirect('inward_master')->with('message', 'Change inward_master status successfully');
    }
     public function view($id)
    {   
        $data['inward_master']=Inward_master::find($id);
        $data['units']=Unit_master::all()->toArray();
        $data['materials'] = Material_master::all()->toArray();
        return view('inward_master/view',$data);
        
    }


}