
@extends('admin.admin_master')

@section('admin')

<div class="page-content">
    <div class="container-fluid">



<div class="row">

        <div class="col-lg-8">
            <div class="panel">
                <div class="panel-hdr">
                    <h2>
                       Add Service
                        

                    </h2>

                </div>
                <div class="panel-container" id="ibox_form">
                    <div class="panel-content">
                        <div class="alert alert-danger" id="emsg" style="display: none;">
                            <span id="emsgbody"></span>
                        </div>
                        <form method ="post" action= "{{ route('service.update') }}" id="myForm" enctype="multipart/form-data">
                         @csrf 
                         <input type="hidden" name = "id" value="{{ $service->id }}">

                            <div class="mb-3"><label for="name">Name*</label>
                                <input type="text" id="name" value="{{ $service->name }}" name="name" class="form-control" autocomplete="off">
                            </div>

                            
                            <div class="mb-3"><label for="sale_price">Sales Price</label>

                                <input type="text" id="sale_price" value="{{ $service->sale_price }}" name="sale_price" class="form-control amount" autocomplete="off" data-a-sign="৳ " data-a-dec="." data-a-sep="," data-d-group="3">
                            </div>

                            <div class="mb-3"><label for="item_number">Item Number</label>

                                <input type="text" id="item_number" value="{{ $service->item_number }}" name="item_number" class="form-control" autocomplete="off">
                            </div>



                            <div class="mb-3">

                                <label for="tax_code">TAX Coden</label>

                                <input type="text" id="tax_code" value="{{ $service->tax_code }}" name="tax_code" class="form-control" autocomplete="off">
                            </div>
                            <div class="mb-3"><label for="description">Description</label>

                            <div class="redactor-box" role="application">
                              <div class="redactor-editor" contenteditable="true" dir="ltr" style="min-height: 200px;"><p>&ZeroWidthSpace;</p></div><textarea id="description" value="{{ $service->description }}"  name="description" class="form-control" rows="3" dir="ltr" style="display: none;"></textarea></div>
                            </div>

                            <hr>


                            

                            <input type="hidden" id="type" name="type" value="Service">
                            <input type="hidden" name="file_link" id="file_link" value="">

                            <div class="mb-3">
                                <button class="btn btn-primary waves-effect waves-themed" type="submit" id="submit">Submit</button>
                            </div>
                        </form>
                    </div>



                </div>
            </div>
        </div>


        <div class="col-lg-4">
            <div class="panel">
                <div class="panel-hdr">
                   <h2>Image</h2>
                </div>
                <div class="panel-container" id="ibox_form">
                    <div class="panel-content">
                    

<input type="file" id="inventory" name="image" class="form-control" autocomplete="off">
</div>
                    </div>



                </div>
            </div>
        </div>


    </div>
    </div>
    </div>
@endsection    