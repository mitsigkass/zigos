<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerFormRequest;
use Illuminate\Http\Request;
use App\Models\Customer;

class PagesController extends Controller
{
  //Normally the functions of the system will be devided in different controllers.
  //However  this is a small system and there is no need for that.
    public function index(){
      //This is the function which returns to the homepage
      return view('pages.index');
    }

    public function customers(){
      //This is the function which returns to the customers page.
      // It utilizes Laravel's Model to select all the important information of the customers.
      $customer = Customer::paginate(10);
      return view('pages.customers', compact('customer'));
    }


    public function addcustomers(){
      // This is the function which returns to the add customers page.
      return view('pages.addcustomers');
    }

    public function storecustomers(CustomerFormRequest $request){
      // This is the function which stores the customers to the database.
      // After the creation of the customer, it redirects to the customers page.
      $data = $request->validated();
      Customer::create($data);

      return redirect('customers')->with('status','Customer Added Successfully');
    }


    public function editcustomers($id){
      // This is the function which returns the edit customers page.
      // It utilizes Eloquent Model to find the specific customer, the users wants to edit.
      $customer = Customer::find($id);
      return view('pages.editcustomers', compact('customer'));
    }


    public function updatecustomers(Request $request, $id){
      // This is the function which updates the customer in the database.
      $customer = Customer::find($id);
      $customer->name = $request->input('name');
      $customer->gender = $request->input('gender');
      $customer->email = $request->input('email');
      $customer->address = $request->input('address');
      $customer->dateofbirth = $request->input('dateofbirth');
      $customer->phonenumber = $request->input('phonenumber');
      $customer->update();
      return redirect('customers')->with('status','Customer Updated Successfully');
    }


    public function deletecustomers($id){
      // This is the function which deletes the customer in the database.
      $customer = Customer::find($id);
      $customer->delete();
        return redirect('customers')->with('status','Customer Deleted Successfully');
    }

    public function searchcustomers(){
      // This is the function which searches the database by the name of customers..
      $search_text = $_GET['query'];
      $customer = Customer::where('name', 'LIKE', '%'.$search_text.'%')->get();
        return view('pages.search', compact('customer'));
    }

}
