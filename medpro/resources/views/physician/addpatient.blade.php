@extends('layouts.vertical-menu.master')
@section('css')
<style>
.btn-lg{
    min-width:16.75rem!important;
}
</style>
@endsection
@section('page-header')
                        <!-- PAGE-HEADER -->
                            <div>
                                <h1 class="dashboard page-title">Patient Management</h1>
                                <!-- <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard 01</li>
                                </ol> -->
                            </div>

                         
                        <!-- PAGE-HEADER END -->
@endsection
@section('content')

             <div class="container">
                          
                            <div class="col-md-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Add Patient</h3>
                                        
                                   <div class="ml-auto pageheader-btn">
                                           <!--  <a href="{{ url('add_patient') }}" class="btn btn-primary btn-icon text-white mr-2">
                                                <span>
                                                    <i class="fe fe-plus"></i>
                                                </span> Add 
                                            </a>
                                            -->
                                    </div>


                                    </div>
                                    <div class="card-body">
                                       <form class="login100-form validate-form" enctype="multipart/form-data"  id="pat_signup" method="post">
                                            @csrf
                                                                                                       
                                             <div class="text-center" id="message">
                                               
                                             </div>

                                             <div class="form-group">
                                                <label class="form-label"></label>
                                                <input type="hidden" class="form-control" name="physician_id" id="physician_id" value="">
                                                
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label"></label>
                                                <input type="text" class="form-control" name="psnt_first_name" id="psnt_first_name"placeholder="*First Name">
                                                
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="form-label"></label>
                                                <input type="text" class="form-control" name="psnt_last_name" id="psnt_last_name"placeholder="*Last Name">
                                                
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label"></label>
                                                <input type="email" class="form-control" name="psnt_email" id="psnt_email" placeholder="*Email">
                                                
                                            </div>
                                             <div class="form-group">
                                                        <label class="form-label"></label>
                                                <input class="form-control" type="password" name="psnt_password" id="psnt_password" placeholder="*Password" autocomplete="off">
                                                
                                              </div>
                                                <div class="form-group">
                                                            <label class="form-label"></label>
                                                <input class="form-control" type="password" name="psnt_confpassword" id="psnt_confpassword" placeholder="*Confirm Password" autocomplete="off">
                                                </div>

                                                <!--  <div class="form-group">
                                                            <label class="form-label"></label>
                                                <input class="form-control" type="text" name="psnt_insrnce_num" id="psnt_insrnce_num" placeholder="*Patient Insurance" autocomplete="off">
                                                </div> -->

                                                 <div class="form-group">
                                                            <label class="form-label"></label>
                                                <input class="form-control" name="psnt_lat"  type="hidden" value="43.3444" id="psnt_lat" placeholder="*Latitude" autocomplete="off">
                                                </div>
                                                 <div class="form-group">
                                                            <label class="form-label"></label>
                                                <input class="form-control" name="psnt_long" type="hidden" value="43.3444" id="psnt_long" placeholder="*Longitude" autocomplete="off">
                                                </div>
                                                
                                                <div class="form-group">
                                                            <label class="form-label"></label>
                                                <textarea class="form-control" name="psnt_address" id="psnt_address" placeholder="*Patient Address" autocomplete="off"></textarea>
                                                </div>
                                                 <div class="row col-md-12 col-lg-12">
                                                <div class="form-group col-lg-6 col-md-6">
                                                    <label class="form-label"></label>
                                                <input class="form-control" type="text" name="psnt_insrnce_num" id="psnt_insrnce_num" placeholder="*Patient Insurance" autocomplete="off">
                                                </div>

                                                 <div class="form-group col-lg-6 col-md-6">
                                                    <!-- <div class="custom-file"> -->
                                                        <label class="custom-file-label">Upload file</label>
                                                        <input type="file"  class="custom-file-input" name="file" id="ins_doc" placeholder="*Upload Insurance Image">
                                                          
                                                    <!-- </div> -->
                                                </div>
                                                </div>
                                                <div class="form-group">
                                                 <a href="{{ url('patient_management') }}"  class="btn btn-danger btn-lg" data-dismiss="modal">
                                                 Cancel
                                                </a>    
                                           <!--  <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button> -->
                                              <input type="submit" class="btn btn-primary btn-lg" name="submit" value="Submit">
                                             </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- TABLE WRAPPER -->
                                </div>
                                <!-- SECTION WRAPPER -->
                            </div>
                      
                        <!-- ROW-1 CLOSED -->   
		   
	
@endsection
@section('js')
<script src="{{ URL::asset('assets/plugins/chart/Chart.bundle.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/chart/utils.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/echarts/echarts.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/apexcharts/apexcharts.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/peitychart/jquery.peity.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/peitychart/peitychart.init.js') }}"></script>
<script src="{{ URL::asset('assets/js/index1.js') }}"></script>
<script>
    var base_path="http://3.220.132.29/medpro/"
    var api_url="http://3.220.132.29:3000/api/";
 $('#pat_signup').on('submit',function (event) {
    event.preventDefault();
  
  //   $("#pat_signup").validate({
  //   // $('.eye1 i').css({'display':'none'});       
  //   errorClass: "error fail-alert",
  //   validClass: "valid success-alert",

  //   rules: {
  //     psnt_first_name: {
  //       required: true,
  //       lettersonly: true,
  //       // minlength: 3
  //     },
  //      psnt_last_name: {
  //       required: true,
  //       lettersonly: true,
  //       // minlength: 3
  //     },
  //     psnt_email: {
  //        required: true,
  //       email: true
  //     },
  //     psnt_insrnce_num:{
  //       required:true,
  //       minlength:8
  //     },
  //     psnt_address:{
  //      required:true,
  //     },
  //    file:{
  //     required:true,
  //    },
  //    psnt_password: {
  //     required:true,
  //     minlength:8
  //    },
  //     psnt_confpassword: {
  //       required: true,
  //       minlength: 8,
  //       equalTo: "#psnt_password",
  //     }
  //   },
  //   messages : {
  //     psnt_first_name: {
  //        required: "First Name field is Required",
  //        lettersonly:"Only Alphabetical Characters are allowed",
  //       // minlength: "First Name should be at least 3 characters"
  //     },
  //     psnt_last_name: {
  //         required: "Last Name field is Required",
  //          lettersonly:"Only Alphabetical Characters are allowed",
  //       // minlength: "Last Name should be at least 3 characters"
  //     },
  //     psnt_email: {
  //       required: "Email field is Required",
  //       email: "The email should be in the format: abc@domain.tld"
  //     },

  //    psnt_insrnce_num:{
  //       required:"License Number field is Required",
  //       minlength: "Licence Number should be at least 8 characters"
  //     },
  //     psnt_address:{
  //      required:'Address Field is Required',
  //     },
  //     file:{
  //       required:"License doc is Required",
  //    },
  //     psnt_password: {
  //     required:"Password field is Required",
  //     minlength:"Password should be of atleast 8 characters"
  //    },
  //    psnt_confpassword: {
  //       required: "Confirm Password field is Required",
  //       minlength: "Password and Confirm password should be same"
       
  //     },


https://maps.googleapis.com/maps/api/geocode/json?address='New Palasisa,Indore'&key='AIzaSyAOK58ALCIivy-NRIRcCtRbUbEC22H0MTI'
  //   }
  // });
 

    var API_KEY='AIzaSyAOK58ALCIivy-NRIRcCtRbUbEC22H0MTI';
      var address =$('#psnt_address').val();

    //  function getCoordinates(address){
    //  fetch("https://maps.googleapis.com/maps/api/geocode/json?address="+address+'&key='+API_KEY)
    // .then(response => response.json())
    // .then(data => {
    //   const latitude = data.results.geometry.location.lat;
    //   const longitude = data.results.geometry.location.lng;
    //   console.log({latitude, longitude})
    //   })
    // }
    /*formvalidation for signup form*/
    var _token =document.querySelector('[name="_token"]').value;

    var first_name = $('#psnt_first_name').val();
    var last_name = $('#psnt_last_name').val();
    var email = $('#psnt_email').val();
     var insurance_no =$('#psnt_insrnce_num').val();
    var ins_doc =$('#ins_doc')[0].files[0];
    var psnt_lat=$('#psnt_lat').val();
    var psnt_long=$('#psnt_long').val(); 
    var password = $('#psnt_password').val();
    var confpassword =$('#psnt_confpassword').val();
    var user_details=localStorage.getItem('user_det');
    var details =JSON.parse(user_details);
    var physician_id=  details._id;
    $('#physician_id').val(physician_id);
    console.log(physician_id);
    // var address1{}=getCoordinates(address);
   
    if(first_name!="" && last_name !=="" && email!="" && insurance_no!="" && ins_doc!="" && address!="" && password!="" ){

        var formData = {
            physician_id:physician_id,
            psnt_first_name:first_name,
            psnt_last_name:last_name,
            psnt_email:email,
            psnt_password:password,
            psnt_insrnce_num:insurance_no,
            psnt_address: address,
            psnt_lat: psnt_lat,
            psnt_long:psnt_long,
            file:ins_doc,
        }


        console.log(formData);
    $.ajax({
      type: "POST",
      url: api_url+"addPatient",
      data: new FormData(this),
      contentType:false,
      cache:false,
      processData:false,
    }).done(function (res) {
     //    alert('done');
  
      // console.log(res);
      // return false;
        if(res.status == true){
          $('#message').html(res.message).addClass('alert alert-success');
          window.location.href =base_path +"patient_management";
        }else{
           $('#message').html(res.message).addClass('alert alert-danger');
        }
    });
   }else{
     $('#message').html('<p style="color:red;">'+'All the fields are mandatory'+'</p>');
   }

  });


</script>


@endsection




