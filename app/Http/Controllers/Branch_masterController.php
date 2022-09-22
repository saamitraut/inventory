<?php namespace App\Http\Controllers;

use App\Models\Branch_master as Branch_master;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Hash;
class Branch_masterController extends Controller {

    public function index()
      { 
        $data['branch_masters'] = Branch_master::all();
        return view('branch_master/index',$data);
      }
    public function add()
      { 
        return view('branch_master/add');
      }
    public function addPost()
      {
        $branch_master_data = array(
             'name' => Input::get('name'), 
            );
    $branch_master_id = Branch_master::insert($branch_master_data);
        return redirect('branch_master')->with('message', 'Branch_master successfully added');
    }
    public function delete($id)
    {   
        $branch_master=Branch_master::find($id);
        $branch_master->delete();
        return redirect('branch_master')->with('message', 'Branch_master deleted successfully.');
    }
    public function edit($id)
    {   
        $data['branch_master']=Branch_master::find($id);
        return view('branch_master/edit',$data);
    }
    public function editPost()
    {   
        $id =Input::get('branch_master_id');
        $branch_master=Branch_master::find($id);
               
        $branch_master_data = array(
          'name' => Input::get('name'), 
        );
        $branch_master_id = Branch_master::where('id', '=', $id)->update($branch_master_data);
        return redirect('branch_master')->with('message', 'Branch_master Updated successfully');
    }

    
    public function changeStatus($id)
    {   
        $branch_master=Branch_master::find($id);
        $branch_master->status=!$branch_master->status;
        $branch_master->save();
        return redirect('branch_master')->with('message', 'Change branch_master status successfully');
    }
     public function view($id)
    {   
        $data['branch_master']=Branch_master::find($id);
        return view('branch_master/view',$data);
        
    }
}