@extends('admin.admin_master')

@section('admin')
<div class="page-content">
                    <div class="container-fluid">
<div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                               
                                   
                                    <div class="card-body">
									<div class="panel-hdr">
                                            <h2>Companies</h2>
                    
                    <div class="panel-toolbar">
                        <div class="btn-group">

            <a href="{{ route('company.add') }}" class="btn btn-sm btn-success waves-effect waves-themed"> Add Company</a>
            <a href="#" class="btn btn-sm btn-warning waves-effect waves-themed"> Import</a>
                        </div>

                    </div>
                </div><div class="row mb-3">
                    <div class="col-sm-12 col-md-6 d-flex align-items-center justify-content-start">
                        <div id="clx_datatable_filter" class="dataTables_filter"><label></label></div></div><div class="col-sm-12 col-md-6 d-flex align-items-center justify-content-end"><div class="dt-buttons">          <button class="btn buttons-pdf buttons-html5 btn-danger btn-sm mr-1" tabindex="0" aria-controls="clx_datatable" type="button" title="Generate PDF"><span>PDF</span></button> <button class="btn buttons-excel buttons-html5 btn-success btn-sm mr-1" tabindex="0" aria-controls="clx_datatable" type="button" title="Generate Excel"><span>Excel</span></button> <button class="btn buttons-csv buttons-html5 btn-primary btn-sm mr-1" tabindex="0" aria-controls="clx_datatable" type="button" title="Generate CSV"><span>CSV</span></button> <button class="btn buttons-copy buttons-html5 btn-dark btn-sm mr-1" tabindex="0" aria-controls="clx_datatable" type="button" title="Copy to clipboard"><span>Copy</span></button> <button class="btn buttons-print btn-secondary btn-sm" tabindex="0" aria-controls="clx_datatable" type="button" title="Print Table"><span>Print</span></button> </div></div></div>
                                  
                                    
                         <table id="datatable" class="table table-bordered dt-responsive nowarp" style="border-collapse: collapse; border-specing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                    
                                                    <th>Logo</th>
                                                    <th>Code</th>
                                                    <th>Company Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Manage</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($company as $key =>$items)

                                                <tr>
                                                   <td><img style="max-height: 20px;" class="rounded float-start" type="file" name="logo" src="{{ asset('upload/Company_logo/'.$items->logo) }}" ></td>
                                                
                                                    <td>{{ $items->code }}</td>
                                                    <td>{{ $items->company_name }}</td>
                                                    <td>{{ $items->email }}</td>
                                                    <td>{{ $items->phone }}</td>                                    

                                                   
                                                </tr>
                                                <td>
                                                        <a href="{{ route('company.show', $items->id ) }}" class="btn btn-info sm" title="Edit data"><i class="fa fa-user" aria-hidden="true"></i></a>
                                                        <a href="{{ route('company.edit', $items->id ) }}" class="btn btn-warning sm" title="Edit data"> <i class="fas fa-edit"></i> </a>
                                                        <a href="{{ route('company.delete', $items->id ) }}" class="btn btn-danger sm" title="Delete Data" id="delete">  <i class="fas fa-trash-alt"></i> </a>
                                                    </td>


                                                @endforeach
                                            </tbody>
                                        </table>   
                                                


                                    </div>
                                </div>
                            </div>
        
                            
        
                            
        
                        </div>

</div>
</div>



@endsection