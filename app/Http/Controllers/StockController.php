<?php namespace App\Http\Controllers;
use App\Models\Material_master as Material_master;
use App\Models\Supplier as Supplier;
use App\Models\Stock as Stock;
use App\Models\Report as Report;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Hash;
use App\Models\Inward_master as Inward_master;

class StockController extends Controller {

    public function index()
      { 
        $data['Stocks'] = Stock::orderBy('date')->get();
         $materials= Material_master::all()->toArray();   
        $res=array();
        foreach ($materials as $material) {
          $res[$material['id']]=$material;
        }
        $data['materials'] = $res; 
        
        $suppliers = Supplier::all()->toArray();  
        $res=array();
        foreach ($suppliers as $supplier) {
          $res[$supplier['id']]=$supplier;
        }

        $data['reports'] = Report::all();
        $materials= Material_master::all()->toArray();   
        $res=array();
        foreach ($materials as $material) {
          $res[$material['id']]=$material;
        }
        $data['materials'] = $res; 
        $data['suppliers'] = $res; 
        $data['inward_masters'] = Inward_master::all();
        return view('Stock/index',$data);
      }
    public function add()
      { 
        return view('Stock/add');
      }
    public function addPost()
      {
        $Stock_data = array(
             'material_id' => Input::get('material_id'), 
             'credit' => Input::get('credit'), 
             'credited_on' => Input::get('credited_on'), 
             'debit' => Input::get('debit'), 
             'debited_on' => Input::get('debited_on'), 
            );
                    $Stock_id = Stock::insert($Stock_data);
        return redirect('Stock')->with('message', 'Stock successfully added');
    }
    public function delete($id)
    {   
        $Stock=Stock::find($id);
        $Stock->delete();
        return redirect('Stock')->with('message', 'Stock deleted successfully.');
    }
    public function edit($id)
    {   
        $data['Stock']=Stock::find($id);
        return view('Stock/edit',$data);
    }
    public function editPost()
    {   
        $id =Input::get('Stock_id');
        $Stock=Stock::find($id);
                                               
        $Stock_data = array(
          'material_id' => Input::get('material_id'), 
          'credit' => Input::get('credit'), 
          'credited_on' => Input::get('credited_on'), 
          'debit' => Input::get('debit'), 
          'debited_on' => Input::get('debited_on'), 
        );
        $Stock_id = Stock::where('id', '=', $id)->update($Stock_data);
        return redirect('Stock')->with('message', 'Stock Updated successfully');
    }

    
    public function changeStatus($id)
    {   
        $Stock=Stock::find($id);
        $Stock->status=!$Stock->status;
        $Stock->save();
        return redirect('Stock')->with('message', 'Change Stock status successfully');
    }
     public function view($id)
    {   
        $data['Stock']=Stock::find($id);
        return view('Stock/view',$data);
        
    }
}