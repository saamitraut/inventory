<?php namespace App\Http\Controllers;
use App\Models\Material_master as Material_master;
use App\Models\Supplier as Supplier;
use App\Models\Report as Report;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Hash;

class ReportController extends Controller {

    public function index()
      { 
        $data['reports'] = Report::all();
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
        $data['suppliers'] = $res; 
        return view('report/index',$data);
      }
    public function add()
      { 
        return view('report/add');
      }
    public function addPost()
      {
        $report_data = array(
             'material_id' => Input::get('material_id'), 
             'credit' => Input::get('credit'), 
             'debit' => Input::get('debit'), 
             'availableStock' => Input::get('availableStock'), 
            );
                $report_id = Report::insert($report_data);
        return redirect('report')->with('message', 'Report successfully added');
    }
    public function delete($id)
    {   
        $report=Report::find($id);
        $report->delete();
        return redirect('report')->with('message', 'Report deleted successfully.');
    }
    public function edit($id)
    {   
        $data['report']=Report::find($id);
        return view('report/edit',$data);
    }
    public function editPost()
    {   
        $id =Input::get('report_id');
        $report=Report::find($id);
                                       
        $report_data = array(
          'material_id' => Input::get('material_id'), 
          'credit' => Input::get('credit'), 
          'debit' => Input::get('debit'), 
          'availableStock' => Input::get('availableStock'), 
        );
        $report_id = Report::where('id', '=', $id)->update($report_data);
        return redirect('report')->with('message', 'Report Updated successfully');
    }

    
    public function changeStatus($id)
    {   
        $report=Report::find($id);
        $report->status=!$report->status;
        $report->save();
        return redirect('report')->with('message', 'Change report status successfully');
    }
     public function view($id)
    {   
        $data['report']=Report::find($id);
        return view('report/view',$data);
        
    }
}