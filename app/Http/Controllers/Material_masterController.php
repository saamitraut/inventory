<?php namespace App\Http\Controllers;

use App\Models\Unit_master as Unit_master;
use App\Models\Material_master as Material_master;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Hash;

class Material_masterController extends Controller {

    public function index()
      { 
        $data['material_masters'] = Material_master::all();
        $data['units'] = Unit_master::all()->toArray();
        return view('material_master/index',$data);
      }
    
      public function add()
      { 
        return view('material_master/add');
      }
    public function addPost()
      {
        $material_master_data = array(
             'name' => Input::get('name'), 
             'rate' => Input::get('rate'), 
            );
        $material_master_id = Material_master::insert($material_master_data);
        return redirect('material_master')->with('message', 'Material_master successfully added');
    }
    public function delete($id)
    {   
        $material_master=Material_master::find($id);
        $material_master->delete();
        return redirect('material_master')->with('message', 'Material_master deleted successfully.');
    }
    public function edit($id)
    {   
        $data['material_master']=Material_master::find($id);
        return view('material_master/edit',$data);
    }
    public function editPost()
    {   
        $id =Input::get('material_master_id');
        $material_master=Material_master::find($id);
                       
        $material_master_data = array(
          'name' => Input::get('name'), 
          'rate' => Input::get('rate'), 
        );
        $material_master_id = Material_master::where('id', '=', $id)->update($material_master_data);
        return redirect('material_master')->with('message', 'Material_master Updated successfully');
    }

    
    public function changeStatus($id)
    {   
        $material_master=Material_master::find($id);
        $material_master->status=!$material_master->status;
        $material_master->save();
        return redirect('material_master')->with('message', 'Change material_master status successfully');
    }
     public function view($id)
    {   
        $data['material_master']=Material_master::find($id);
        return view('material_master/view',$data);
        
    }
}
