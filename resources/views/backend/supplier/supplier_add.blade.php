@extends('admin.admin_master')
@section('admin')
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Tedarikçi Ekleme Sayfası </h4><br><br>
            
  

            <form method="post" action="{{ route('supplier.store') }}" id="myForm" >
                @csrf

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Tedarikçi İsmi </label>
                <div class="form-group col-sm-10">
                    <input name="name" class="form-control" type="text"    >
                </div>
            </div>
            <!-- end row -->


              <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Tedarikçi Telefonu </label>
                <div class="form-group col-sm-10">
                    <input name="mobile_no" class="form-control" type="text"    >
                </div>
            </div>
            <!-- end row -->


  <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Tedarikçi Email </label>
                <div class="form-group col-sm-10">
                    <input name="email" class="form-control" type="email"  >
                </div>
            </div>
            <!-- end row -->


  <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Tedarikçi Adres </label>
                <div class="form-group col-sm-10">
                    <input name="address" class="form-control" type="text"  >
                </div>
            </div>
            <!-- end row -->
 
 


        
<input type="submit" class="btn btn-info waves-effect waves-light" value="Ekle">
            </form>
             
           
           
        </div>
    </div>
</div> <!-- end col -->
</div>
 


</div>
</div>

<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                name: {
                    required : true,
                }, 
                 mobile_no: {
                    required : true,
                },
                 email: {
                    required : true,
                },
                 address: {
                    required : true,
                },
            },
            messages :{
                name: {
                    required : 'Lütfen İsim Giriniz',
                },
                mobile_no: {
                    required : 'Lütfen Telefon Giriniz',
                },
                email: {
                    required : 'Lütfen Email Giriniz',
                },
                address: {
                    required : 'Lütfen Adres Giriniz',
                },
            },
            errorElement : 'span', 
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });
    
</script>


 
@endsection 
