<?php namespace App\Http\Controllers;

use App\Models\Outward_master as Outward_master;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Hash;
class Outward_masterController extends Controller {

    public function index()
      { 
        $data['outward_masters'] = Outward_master::all();
        return view('outward_master/index',$data);
      }
    public function add()
      { 
        return view('outward_master/add');
      }
    public function addPost()
      {
        $outward_master_data = array(
             'material_id' => Input::get('material_id'), 
             'material_description' => Input::get('material_description'), 
             'opening_stock' => Input::get('opening_stock'), 
             'issued' => Input::get('issued'), 
             'closing_stock' => Input::get('closing_stock'), 
             'unit_id' => Input::get('unit_id'), 
            );
                        $outward_master_id = Outward_master::insert($outward_master_data);
        return redirect('outward_master')->with('message', 'Outward_master successfully added');
    }
    public function delete($id)
    {   
        $outward_master=Outward_master::find($id);
        $outward_master->delete();
        return redirect('outward_master')->with('message', 'Outward_master deleted successfully.');
    }
    public function edit($id)
    {   
        $data['outward_master']=Outward_master::find($id);
        return view('outward_master/edit',$data);
    }
    public function editPost()
    {   
        $id =Input::get('outward_master_id');
        $outward_master=Outward_master::find($id);
                                                       
        $outward_master_data = array(
          'material_id' => Input::get('material_id'), 
          'material_description' => Input::get('material_description'), 
          'opening_stock' => Input::get('opening_stock'), 
          'issued' => Input::get('issued'), 
          'closing_stock' => Input::get('closing_stock'), 
          'unit_id' => Input::get('unit_id'), 
        );
        $outward_master_id = Outward_master::where('id', '=', $id)->update($outward_master_data);
        return redirect('outward_master')->with('message', 'Outward_master Updated successfully');
    }

    
    public function changeStatus($id)
    {   
        $outward_master=Outward_master::find($id);
        $outward_master->status=!$outward_master->status;
        $outward_master->save();
        return redirect('outward_master')->with('message', 'Change outward_master status successfully');
    }
     public function view($id)
    {   
        $data['outward_master']=Outward_master::find($id);
        return view('outward_master/view',$data);
        
    }
}
