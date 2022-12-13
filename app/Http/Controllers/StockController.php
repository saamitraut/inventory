<?php namespace App\Http\Controllers;

use App\Models\Stock as Stock;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Hash;
class StockController extends Controller {

    public function index()
      { 
        $data['Stocks'] = Stock::all();
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