<?php namespace App\Http\Controllers;

use App\Models\Purpose_master as Purpose_master;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Hash;
class Purpose_masterController extends Controller {

    public function index()
      { 
        $data['purpose_masters'] = Purpose_master::all();
        return view('purpose_master/index',$data);
      }
    public function add()
      { 
        return view('purpose_master/add');
      }
    public function addPost()
      {
        $purpose_master_data = array(
             'name' => Input::get('name'), 
            );
    $purpose_master_id = Purpose_master::insert($purpose_master_data);
        return redirect('purpose_master')->with('message', 'Purpose_master successfully added');
    }
    public function delete($id)
    {   
        $purpose_master=Purpose_master::find($id);
        $purpose_master->delete();
        return redirect('purpose_master')->with('message', 'Purpose_master deleted successfully.');
    }
    public function edit($id)
    {   
        $data['purpose_master']=Purpose_master::find($id);
        return view('purpose_master/edit',$data);
    }
    public function editPost()
    {   
        $id =Input::get('purpose_master_id');
        $purpose_master=Purpose_master::find($id);
               
        $purpose_master_data = array(
          'name' => Input::get('name'), 
        );
        $purpose_master_id = Purpose_master::where('id', '=', $id)->update($purpose_master_data);
        return redirect('purpose_master')->with('message', 'Purpose_master Updated successfully');
    }

    
    public function changeStatus($id)
    {   
        $purpose_master=Purpose_master::find($id);
        $purpose_master->status=!$purpose_master->status;
        $purpose_master->save();
        return redirect('purpose_master')->with('message', 'Change purpose_master status successfully');
    }
     public function view($id)
    {   
        $data['purpose_master']=Purpose_master::find($id);
        return view('purpose_master/view',$data);
        
    }
}