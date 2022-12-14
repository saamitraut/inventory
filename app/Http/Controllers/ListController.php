<?php namespace App\Http\Controllers;

use App\Models\List_master as List_master;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Hash;
class ListController extends Controller {

    public function index()
      { 
        $data['lists'] = List_master::all();
        return view('List/index',$data);
      }
    public function add()
      { 
        return view('List/add');
      }
    public function addPost()
      {
        $List_master_data = array(
             'name' => Input::get('name'), 
            'image' => '', 
            );
    
        if (Input::hasFile('image')) {
            $destinationPath = 'uploads'; 
            $image = Input::file('image');
            $image_name = $image->getClientOriginalName();
            $image->move($destinationPath,$image_name);
            $List_master_data['image'] = $image_name;
        }
        $List_master_id = List_master::insert($List_master_data);
        return redirect('List_master')->with('message', 'List_master successfully added');
    }
    public function delete($id)
    {   
        $List_master=List_master::find($id);
        $List_master->delete();
        return redirect('List_master')->with('message', 'List_master deleted successfully.');
    }
    public function edit($id)
    {   
        $data['List_master']=List_master::find($id);
        return view('List/edit',$data);
    }
    public function editPost()
    {   
        $id =Input::get('List_master_id');
        $List_master=List_master::find($id);
                     
        if (Input::hasFile('image')) {
          $destinationPath = 'uploads'; 
          $image = Input::file('image');
          $image_name = $image->getClientOriginalName();
          $image->move($destinationPath,$image_name);
          @unlink($destinationPath.'/'.$List_master->image);
        }
        else
        {
          $image_name=$List_master->image;
        }
         
        $List_master_data = array(
          'name' => Input::get('name'), 
         'image' => $image_name, 
        );
        $List_master_id = List_master::where('id', '=', $id)->update($List_master_data);
        return redirect('List_master')->with('message', 'List_master Updated successfully');
    }

    
    public function changeStatus($id)
    {   
        $List_master=List_master::find($id);
        $List_master->status=!$List_master->status;
        $List_master->save();
        return redirect('List_master')->with('message', 'Change List_master status successfully');
    }
     public function view($id)
    {   
        $data['List_master']=List_master::find($id);
        return view('List/view',$data);
        
    }
}