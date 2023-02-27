<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Pos\SupplierController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DepositeController;
use App\Http\Controllers\ExpanceController;
use App\Http\Controllers\TransferController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HRMEmployeeController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\DefaultController;
use App\Http\Controllers\InvoiceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

// Admin All Route
Route::controller(AdminController::class)->group(function(){
    Route::get('/admin/logout', 'destroy')->name('admin.logout');
    Route::get('/admin/profile', 'Profile')->name('admin.profile');
    Route::get('/edit/profile', 'EditProfile')->name('edit.profile');
    Route::post('/store/profile', 'StoreProfile')->name('store.profile');
  
});

// Supplier All 
Route::controller(SupplierController::class)->group(function(){
    Route::get('/supplier/all', 'SupplierAll')->name('supplier.all');
    Route::get('/supplier/add', 'SupplierAdd')->name('supplier.add');
    Route::post('/supplier/store', 'SupplierStore')->name('supplier.store');
    Route::get('/supplier/edit/{id}', 'SupplierEdit')->name('supplier.edit');
    Route::post('/supplier/update', 'SupplierUpdate')->name('supplier.update');
    Route::get('/supplier/delete/{id}', 'SupplieDelete')->name('supplier.delete');
  
});

// Customer All 
Route::controller(CustomerController::class)->group(function(){
    Route::get('/customer/all', 'customerAll')->name('customer.all');
    Route::get('/customer/add', 'customerAdd')->name('customer.add');
    Route::post('/customer/store', 'CustomerStore')->name('customer.store');
    Route::get('/customer/edit/{id}', 'CustomerEdit')->name('customer.edit');
    Route::post('/customer/update', 'CustomerUpdate')->name('customer.update');
    Route::get('/customer/delete/{id}', 'CustomerDelete')->name('customer.delete');
    Route::get('/customer/show/{id}', 'CustomerShow')->name('customer.show');
});

// Company All 
Route::controller(CompanyController::class)->group(function(){
    Route::get('/company/all', 'companyAll')->name('company.all');
    Route::get('/company/add', 'companyAdd')->name('company.add');
    Route::post('/company/store', 'CompanyStore')->name('company.store');
    Route::get('/company/edit/{id}', 'CompanyEdit')->name('company.edit');
    Route::post('/company/update', 'CompanyUpdate')->name('company.update');
    Route::get('/company/delete/{id}', 'CompanyDelete')->name('company.delete');
    Route::get('/company/show/{id}', 'CompanyShow')->name('company.show');
    
});

// Deposite All 
Route::controller(DepositeController::class)->group(function(){
    Route::get('/deposite/all', 'DepositeAll')->name('deposite.all');
    Route::post('/deposite/store', 'DpositeStore')->name('deposite.store');
    Route::get('/deposite/show{id}', 'DpositeShow')->name('deposite.show');
   
    
});


// Expance All 
Route::controller(ExpanceController::class)->group(function(){
    Route::get('/expance/all', 'ExpanceAll')->name('expance.all');
    Route::post('/expance/store', 'ExpanceStore')->name('expance.store');
    Route::get('/expance/show{id}', 'ExpanceShow')->name('expance.show');
});

// Transfer All 
Route::controller(TransferController::class)->group(function(){
    Route::get('/transfer/all', 'TransferAll')->name('transfer.all');
    Route::post('/transfer/store', 'TransferStore')->name('transfer.store');
    Route::get('/transfer/show{id}', 'TransferShow')->name('transfer.show');
});

// Bill All 
Route::controller(BillController::class)->group(function(){
    Route::get('/bill/all', 'BillAll')->name('bill.all');
    Route::get('/bill/add', 'BillAdd')->name('bill.add');
    Route::get('/bill/summery', 'SummeryAdd')->name('summery.add');
    Route::post('/bill/store', 'BillStore')->name('bill.store');
    Route::get('/bill/show{id}', 'BillShow')->name('bill.show');
    
});

// Transaction All 
Route::controller(TransactionController::class)->group(function(){
    Route::get('/transaction/all', 'TransactionAll')->name('transaction.all');
    Route::post('/transaction/store', 'TransactionStore')->name('transaction.store');
    Route::get('/transaction/show{id}', 'TransactionShow')->name('transaction.show');
    Route::get('/transaction/unclear', 'TransactionUnclear')->name('transaction.unclear');
});


// Account All 
Route::controller(AccountController::class)->group(function(){
    Route::get('/account/add', 'AccountAdd')->name('account.add');
    Route::get('/account/all', 'AccountAll')->name('account.all');
    Route::post('/account/store', 'AccountStore')->name('account.store');
    Route::get('/account/edit/{id}', 'AccountEdit')->name('account.edit');
    Route::post('/account/update', 'AccountUpdate')->name('account.update');
    Route::get('/account/delete/{id}', 'AccountDelete')->name('account.delete');
    Route::get('/account/record', 'AccountRecord')->name('account.record');

});


// Asset All 
Route::controller(AssetController::class)->group(function(){
    Route::get('/asset/add', 'AssetAdd')->name('asset.add');
    Route::get('/asset/all', 'AssetAll')->name('asset.all');
    Route::post('/asset/store', 'AssetStore')->name('asset.store');
    Route::get('/asset/edit/{id}', 'AssetEdit')->name('asset.edit');
    Route::post('/asset/update', 'AssetUpdate')->name('asset.update');
    Route::get('/asset/delete/{id}', 'AssetDelete')->name('asset.delete');
   

});

// all employee 
Route::controller(HRMEmployeeController::class)->group(function(){
    Route::get('/employee/add', 'EmployeeAdd')->name('employee.add');
    Route::get('/employee/all', 'EmployeeAll')->name('employee.all');
    Route::post('/employee/store', 'EmployeeStore')->name('employee.store');
    Route::get('/employee/edit/{id}', 'EmployeeEdit')->name('employee.edit');
    Route::post('/employee/update', 'EmployeeUpdate')->name('employee.update');
});

// Attandance All 
Route::controller(AttendanceController::class)->group(function(){
    Route::get('/attandance/all', 'AttandanceAll')->name('attandance.all');

});


// Payroll All 
Route::controller(PayrollController::class)->group(function(){
    Route::get('/payroll/all', 'PayrollAll')->name('payroll.all');
    Route::get('/payroll/add', 'PayrollAdd')->name('payroll.add');

});


// Group All
Route::controller(GroupController::class)->group(function(){
    Route::get('/group/all', 'GroupAll')->name('group.all');
    Route::get('/group/add', 'groupAdd')->name('group.add');
   
    
});


// Product All 
Route::controller(ProductController::class)->group(function(){
    Route::get('/product/all', 'productAll')->name('product.all');
    Route::get('/product/add', 'productAdd')->name('product.add');
    Route::post('/product/store', 'ProductStore')->name('product.store');
    Route::get('/product/edit/{id}', 'ProductEdit')->name('product.edit');
    Route::post('/product/update', 'ProductUpdate')->name('product.update');
    Route::get('/product/delete/{id}', 'ProductDelete')->name('product.delete');
    
});


// purchase All 
Route::controller(PurchaseController::class)->group(function(){
    Route::get('/purchase/all', 'PurchaseAll')->name('purchase.all');
    Route::get('/purchase/add', 'PurchaseAdd')->name('purchase.add');

});

// Invoice All 
Route::controller(InvoiceController::class)->group(function(){
    Route::get('/invoice/all', 'InvoiceAll')->name('invoice.all');

});

// Default All 
Route::controller(DefaultController::class)->group(function(){
    Route::get('/get-customer', 'GetCustomer')->name('get-customer');
    Route::get('/get-company', 'GetCompany')->name('get-company');
    

}); 


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
