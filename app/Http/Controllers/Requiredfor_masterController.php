<?php namespace App\Http\Controllers;

use App\Models\Requiredfor_master as Requiredfor_master;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Hash;
class Requiredfor_masterController extends Controller {

    public function index()
      { 
        $data['requiredfor_masters'] = Requiredfor_master::all();
        return view('requiredfor_master/index',$data);
      }
    public function add()
      { 
        return view('requiredfor_master/add');
      }
    public function addPost()
      {
        $requiredfor_master_data = array(
             'name' => Input::get('name'), 
            );
    $requiredfor_master_id = Requiredfor_master::insert($requiredfor_master_data);
        return redirect('requiredfor_master')->with('message', 'Requiredfor_master successfully added');
    }
    public function delete($id)
    {   
        $requiredfor_master=Requiredfor_master::find($id);
        $requiredfor_master->delete();
        return redirect('requiredfor_master')->with('message', 'Requiredfor_master deleted successfully.');
    }
    public function edit($id)
    {   
        $data['requiredfor_master']=Requiredfor_master::find($id);
        return view('requiredfor_master/edit',$data);
    }
    public function editPost()
    {   
        $id =Input::get('requiredfor_master_id');
        $requiredfor_master=Requiredfor_master::find($id);
               
        $requiredfor_master_data = array(
          'name' => Input::get('name'), 
        );
        $requiredfor_master_id = Requiredfor_master::where('id', '=', $id)->update($requiredfor_master_data);
        return redirect('requiredfor_master')->with('message', 'Requiredfor_master Updated successfully');
    }

    
    public function changeStatus($id)
    {   
        $requiredfor_master=Requiredfor_master::find($id);
        $requiredfor_master->status=!$requiredfor_master->status;
        $requiredfor_master->save();
        return redirect('requiredfor_master')->with('message', 'Change requiredfor_master status successfully');
    }
     public function view($id)
    {   
        $data['requiredfor_master']=Requiredfor_master::find($id);
        return view('requiredfor_master/view',$data);
        
    }
}