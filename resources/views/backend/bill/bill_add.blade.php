@extends('admin.admin_master')
@section('admin')


<div class="page-content">
    <div class="container-fluid">


<div id="panel-12" class="panel">
        <div class="panel-hdr">
            <h2>
                Bills <span class="fw-300"><i></i></span>
            </h2>
            <div class="panel-toolbar">
                <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-bs-toggle="tooltip" data-offset="0,10" data-original-title="Collapse" data-bs-original-title="" title=""></button>
                <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-bs-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen" data-bs-original-title="" title=""></button>
            </div>
        </div>
        <div class="panel-container show">
            <div class="panel-content">
                <div class="row">
                    <div class="col-3">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active svg-icon svg-icon-primary" id="v-pills-home-tab" href="{{ route('summery.add') }}" aria-controls="v-pills-home" aria-selected="true">
                               <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"></rect>
                                        <path d="M3.95709826,8.41510662 L11.47855,3.81866389 C11.7986624,3.62303967 12.2013376,3.62303967 12.52145,3.81866389 L20.0429,8.41510557 C20.6374094,8.77841684 21,9.42493654 21,10.1216692 L21,19.0000642 C21,20.1046337 20.1045695,21.0000642 19,21.0000642 L4.99998155,21.0000673 C3.89541205,21.0000673 2.99998155,20.1046368 2.99998155,19.0000673 L2.99999828,10.1216672 C2.99999935,9.42493561 3.36258984,8.77841732 3.95709826,8.41510662 Z M10,13 C9.44771525,13 9,13.4477153 9,14 L9,17 C9,17.5522847 9.44771525,18 10,18 L14,18 C14.5522847,18 15,17.5522847 15,17 L15,14 C15,13.4477153 14.5522847,13 14,13 L10,13 Z" fill="#000000"></path>
                                    </g>
                                </svg>
                                <span class="hidden-sm-down ml-1">Summary</span>
                            </a>
                            <a class="nav-link svg-icon svg-icon-primary" id="v-pills-profile-tab" href="{{ route('bill.all') }}" aria-controls="v-pills-profile" aria-selected="false">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"></rect>
                                        <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"></rect>
                                        <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"></path>
                                    </g>
                                </svg>

                                <span class="hidden-sm-down ml-1"> All</span>
                            </a>
                            <a class="nav-link svg-icon svg-icon-primary" id="v-pills-messages-tab" href="#" aria-controls="v-pills-messages" aria-selected="false">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"></rect>
                                        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"></rect>
                                    </g>
                                </svg>
                                <span class="hidden-sm-down ml-1"> Add a bill</span>
                            </a>   

                        </div>
                    </div>



                    <div class="col">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <h3>
                                    </h3><h3>Add Bills </h3>
                                
                                    <form method ="post" action= "{{ route('bill.store') }}" id="myForm" enctype="multipart/form-data">
                                            @csrf 

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-from-label">Title</label>    
                                     <input type="text" name="title" class="form-control select2-hidden-accessible" value="" id="example-text-input">
                            </div>

                            
                            <div class="row mb-12">
                                <label for="example-text-input" class="col-sm-2 col-from-label">Due Date</label>    
                                     <input type="date" name="duedate" class="form-control select2-hidden-accessible" value="" id="example-text-input">
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-from-label">Repeat</label>    
                                     <input type="text" name="repeat"  class="form-control select2-hidden-accessible" value="" >
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-from-label">Currency</label>    
                                <select id="currency" name="currency" class="form-control select2-hidden-accessible">
                                    <option>BDT</option>
                                    <option>USD</option>
                            </select>
                            </div>


                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-from-label">Amount</label>    
                                     <input type="text" name="amount"  class="form-control select2-hidden-accessible" value="" id="example-text-input">
                            </div>
                            

                            <div class="row mb-12">
                            <label for="example-text-input" class="col-sm-2 col-from-label">From Account</label>
                                <select id="account" name="account" class="form-control select2-hidden-accessible">
                                    <option>Choose an Account</option>
                                    <option>bKash Merchant</option>
                                    <option>City Bank</option>
                                    <option>Nagad Merchant</option>
                                    <option>aamarPay</option>
                                    <option>(Publicia) bKash Personal</option>
                                    <option>(Publicia) Nagad Personal</option>
                                    <option>(Publicia) Brac Bank</option>
                                    <option>Cash</option>
                                    <option>PayPal (business@limda.net)</option>
                                </select>
                        
                            </div>


                            <div class="row mb-3"> 
                                         <label for="example-text-input" class="col-sm-2 col-from-label">Payee</label>
                                    <select id="payee" name="payee" class="form-control select2-hidden-accessible">
                                        <option>Choose Contact</option>
                                        <option>Junaid Miaje</option>
                                        <option>Mostaim Billah Murad</option>
                                        <option>Farhad Hossen Kayes</option>
                                        <option>Main Uddin</option>
                                        <option>Hashibul Hassan</option>
                                        <option>Raisuddin Faham</option>
                                        <option>Rubaiyat Bin Arif</option>
                                        <option>MD Ashraf Hossain</option>
                                    </select>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-from-label">Catagory</label>    
                                <select id="catagory" name="catagory" class="form-control select2-hidden-accessible">
                                        <option value="Uncategorized" data-select2-id="6">Uncategorized</option>
					                    <option value="Uncategorized">Uncategorized</option>
                                        <option value="Regular Income">Regular Income</option>
                                        <option value="Selling Software">Selling Software</option>
                                        <option value="Part Time Work">Part Time Work</option>
                                        <option value="Account Transfer">Account Transfer</option>
                                        <option value="Home equity">Home equity</option>
                                        <option value="Rent &amp; Royalties">Rent &amp; Royalties</option>
                                        <option value="Equities">Equities</option>
                                        <option value="Salary">Salary</option>
                                        <option value="Other Income">Other Income</option>
                                        <option value="Expense Refund">Expense Refund</option>
                                        <option value="Interest Income">Interest Income</option>
                                        <option value="Owner Contribution">Owner Contribution</option>   
                            </select>
                            </div>
                                
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-from-label">Website</label>    
                                     <input type="text" name="Website"  class="form-control select2-hidden-accessible" value="" id="example-text-input">
                            </div>

                            <input type="submit" class="btn btn-rounded btn-info waves-effect waves-light" value="Add Bill">

                                </div>

                            </div>

                        </div>

                    </div>
    
           
                        </form>

                            </div>

                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>


@endsection
