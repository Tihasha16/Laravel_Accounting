@extends('admin.admin_master')

@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
                    <div class="container-fluid">
                    <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                    <h4 class="card-title">Add Purchase </h4>


                                        <form method ="post" action= "{{ route('product.store') }}" id="myForm" enctype="multipart/form-data">
                                            @csrf 
                                           

                                    <div class="row mb-3"> 
                                         <label for="example-text-input" class="col-sm-2 col-from-label">Product Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="name" class="from-control" value=""  id="example-text-input">
                                        </div>
                                    </div>


                                    
                                    <div class="row mb-3"> 
                                         <label for="example-text-input" class="col-sm-2 col-from-label">Supplier name</label>
                                        <div class="col-sm-10">
                                            <select name="supplier_id" id="">
                                                <option selected="">Open select manu</option>
                                                @foreach($supplier as $sup)
                                                <option value="{{ $sup->id }}">{{ $sup->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>


                                    <div class="row mb-3"> 
                                         <label for="example-text-input" class="col-sm-2 col-from-label">Customer name</label>
                                        <div class="col-sm-10">
                                            <select name="customer_id" id="">
                                                <option selected="">Open select manu</option>
                                                @foreach($customer as $cus)
                                                <option value="{{ $cus->id }}">{{ $cus->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-3"> 
                                         <label for="example-text-input" class="col-sm-2 col-from-label">Company name</label>
                                        <div class="col-sm-10">
                                            <select name="company_id" id="">
                                                <option selected="">Open select manu</option>
                                                @foreach($company as $com)
                                                <option value="{{ $com->id }}">{{ $com->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>



                                    
                                

                                
<input type="submit" class="btn btn-rounded btn-info waves-effect waves-light" value="Add Product">
                                        </form>
                                </div>
                            </div> <!-- end col -->
                        </div>

</div>
</div>

<script type="text/javascript">
    
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

@endsection