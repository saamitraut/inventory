<?php namespace App\Http\Controllers;
use App\Models\Requiredfor_master as Requiredfor_master;
use App\Models\Outward_master as Outward_master;
use App\Models\Material_master as Material_master;
use App\Models\Branch_master as Branch_master;
use App\Models\Supplier as Supplier;
use App\Models\Inward_master as Inward_master;
use App\Models\Unit_master as Unit_master;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Models\Purpose_master as Purpose_master;
use Hash;
use Carbon\Carbon;

class Outward_masterController extends Controller {

    public function index()
      { 
        $data['outward_masters'] = Outward_master::paginate(5);

        // searching purpose
        if (request()->has('material_id')) {
            $data['outward_masters']=Outward_master::where('material_id', '=', request()->input('material_id'))->get();
        }
        if (request()->has('branch_id')) {
          $data['outward_masters']=Outward_master::where('branch_id', '=', request()->input('branch_id'))->get();
        }
        
        $data['suppliers'] = Supplier::all()->toArray();       
        
        $data['units']=Unit_master::all()->toArray(); 

        $data['required_fors'] = Requiredfor_master::list(); 

        $data['purposes'] = Purpose_master::list();

        $data['materials'] = Material_master::list();
        
        $data['Branches'] = Branch_master::list(); 
        
        return view('outward_master/index',$data);
        
      }
    public function add()
      { 
        $data['materials'] = Material_master::all();
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
             'created_at' => Carbon::now()->toDateTimeString(), 
             'unit_id' => Input::get('unit_id'),
             'branch_id' => Input::get('branch_id'), 
             'required_for' => Input::get('required_for'),  
             'purpose' => Input::get('purpose'),
             'aa' => Input::get('aa'),
             'customer_name' => Input::get('customer_name'),
             'mobile' => Input::get('mobile'),
             'area' => Input::get('area'),
             'issued_to_staff' => Input::get('issued_to_staff'),
             'responsible_person' => Input::get('responsible_person'),
             'receipt_no' => Input::get('receipt_no'),          
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
        $data['materials'] = Material_master::all()->toArray();  
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
          'issuedon' => Input::get('issuedon'),
          'branch_id' => Input::get('branch_id'), 
          'required_for' => Input::get('required_for'),  
          'purpose' => Input::get('purpose'),
          'aa' => Input::get('aa'),
          'customer_name' => Input::get('customer_name'),
          'mobile' => Input::get('mobile'),
          'area' => Input::get('area'),
          'issued_to_staff' => Input::get('issued_to_staff'),
          'responsible_person' => Input::get('responsible_person'),
          'receipt_no' => Input::get('receipt_no'),
         
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
         $data['units']=Unit_master::all()->toArray();
        $data['materials'] = Material_master::all()->toArray();
        return view('outward_master/view',$data);
        
    }
}
