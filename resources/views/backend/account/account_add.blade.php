@extends('admin.admin_master')

@section('admin')

<div class="page-content">
                    <div class="container-fluid"></div>


                    <div class="row">
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-hdr">
                    <h2>Add New Account</h2>

                </div>
                <div class="panel-container">
                    <div class="panel-content">

                    <form method ="post" action= "{{ route('account.store') }}" id="myForm" enctype="multipart/form-data">
                                            @csrf 
                           
                            <div class="mb-3">
                                <label for="account">Account Title*</label>
                                <input type="text" class="form-control" id="account" name="account_id">

                            </div>
                            <div class="mb-3">
                                <label for="description">Description</label>
                                <input type="text" class="form-control" id="description" name="description">
                            </div>


                            
                                <div class="mb-3">
                                    <label for="balance_BDT">Initial Balance [ BDT ]</label>
                                    <input type="text" class="form-control amount" id="balance_BDT" name="balance_bdt" data-a-sign="৳" data-a-sep="," data-a-dec="." data-p-sign="p" data-d-group="3">
                                </div>

                            
                                <div class="mb-3">
                                    <label for="balance_USD">Initial Balance [ USD ]</label>
                                    <input type="text" class="form-control amount" id="balance_USD" name="balance_usd" data-a-sign="$" data-a-sep="," data-a-dec="." data-p-sign="p" data-d-group="3">
                                </div>


                            <div class="mb-3">
                                <label for="account_number">Account Number</label>
                                <input type="text" class="form-control" id="account_number" name="acc_number">
                            </div>

                            <div class="mb-3">
                                <label for="contact_person">Contact Person</label>
                                <input type="text" class="form-control" id="contact" name="contact">
                            </div>

                            <div class="mb-3">
                                <label for="contact_phone">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone">
                            </div>

                            <div class="mb-3">
                                <label for="ib_url">Internet Banking URL</label>
                                <input type="text" class="form-control" id="url" name="url">
                            </div>

                            <div class="mb-3">
                                <label for="owner_id">Owner</label>
                                <select class="form-control" name="owner" id="owner">
                                <option>Junaid Miaje</option>
                                <option>Tahmiduzzama Rafi</option>
                                   </select>
                            </div>



                            <button type="submit" class="btn btn-primary waves-effect waves-themed">Save</button>
                        </form>

                    </div>
                </div>
            </div>



        </div>



    </div>






</div>
</div>


@endsection