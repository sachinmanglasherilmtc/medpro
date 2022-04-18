@extends('layouts.vertical-menu.master')
@section('css')
<style>
    .btn-lg {
        min-width: 16.75rem !important;
    }

    .form-label {
        text-align: left !important;
    }
    .infodesign{
        border: 1.5px solid grey;
        border-radius: 10px;
    }
</style>
@endsection
@section('page-header')
<!-- PAGE-HEADER -->
<div>
    <h1 class="dashboard page-title">Prescription Management</h1>
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
                <h3 class="card-title">Add Prescription</h3>

                <div class="ml-auto pageheader-btn">
                    <!-- <a href="{{ url('add_patient') }}" class="btn btn-primary btn-icon text-white mr-2">
                                                <span>
                                                    <i class="fe fe-plus"></i>
                                                </span> Add 
                                            </a> -->

                </div>


            </div>
            <div class="card-body">
                <form class="login100-form validate-form" enctype="multipart/form-data" id="pat_signup" method="post">
                    @csrf

                    <div class="form-group">
                           <select class="form-control col-10" id="patient_name" name="name">
                             <option value="" selected>Full Name</option>
                             <option value="John" >John</option>
                             <option value="ron">ron</option>
                             <option value="johnny">johnny</option>
                           </select>
                    </div>
                      <!-- input div start -->
                    <div id="inputFormRow" class="inputFormRow">
                        <div class="row">
                            <div class="col">
                               <input type="text" name="medicine_name[]" class="form-control m-input " placeholder="Medicine Name" autocomplete="off">
                            </div>
                            <div class="col">
                                 <input type="text" name="quantity[]" class="form-control m-input col-8" placeholder="Quantity" autocomplete="off">
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col">
                               <textarea class="form-control col-10 " id="exampleFormControlTextarea1" rows="3" name="info[]" placeholder="Enter Information"></textarea>
                            </div>
                        </div>

                    </div><br>
                     <!-- input div End-->

                    <!-- dynamic field inside div -->
                    <div id="newRow"></div>
                   <!-- dynamic field inside div -->


                    <!-- add -->
                    <div id="addinfo" class="border">
                     <h5 class="text-center">Medicine Details</h5>
                    </div>
                    <!-- add -->

                    <!-- box start -->
                    <!-- <div class="infodesign">
                        <div class="design">
                            <div class="row">
                                <div class="col">
                                    <h4>Medicine Name</h4>
                                </div>
                                <div class="col">
                                    <h4>Qty</h4>
                                </div>
                            </div>
                            <div class="row">
                                <h4 class="text-center">Describtion</h4>
                            </div>
                        </div>
                    </div> -->

                    <!-- box End-->


            <!-- <div class="box border " id="box"></div> -->

                    <button id="addRow" type="button" class="btn btn-info mb-3 mt-3 ">+ Add More Medicine Details</button>

                    <div class="form-group">
                       <a href="{{ url('prescription_management') }}" class="btn btn-danger btn-lg" data-dismiss="modal">
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
    var patients=localStorage.getItem('patientList');

     for(var i = 0; i < patients.length; i++) {
	     if(patients[i].prs_quantity > 0) {
		    document.write(patients[i].prs_med_name + ", " + patients[i].prs_quantity + " " + patients[i].prs_information + " ")
	}
}



</script>
<script>
    $('#pat_signup').on('submit',function(e){
        e.preventDefault();
        var formdata=new FormData(this);
        var formdata={
                "patient_id": "6253b8ba2052d6f2129d6dc6",
                "physician_id": "6253b8552052d6f2129d6dc3",
                    "prs_details": [
                        {
                        "prs_med_name": "aaa",
                        "prs_quantity": 4,
                        "prs_information": "take one daily"
                        }, 
                        {
                        "prs_med_name": "bbb",
                        "prs_quantity": 5,
                        "prs_information": "take one daily"
                        },  {
                        "prs_med_name": "ccc",
                        "prs_quantity": 6,
                        "prs_information": "take one daily"
                        }
                    ]
            }
            console.log(formdata);

    })

    $(function(){
  $('#patient_name').on('change',function(){
    console.log($('#patient_name option:selected').data('id'));
  });
})
        

// function printObj(e) {
//    e.preventDefault();
// //   var obj = {
// //     name: $('input[name=name]').val(),
// //     Medicine: $('input[name=medicine_name]').val(),
// //     qty: $('input[name=quantity]').val(),
// //     information: $('textarea[name=info]').val(),
// //   }
//   console.log(obj);

</script>
<script>
    var base_path = "http://3.220.132.29/medpro/"
    var api_url = "http://3.220.132.29:3000/api/";
    $('#pat_signup').on('submit', function(event) {
        event.preventDefault();

          $("#pat_signup").validate({
          // $('.eye1 i').css({'display':'none'});       
          errorClass: "error fail-alert",
          validClass: "valid success-alert",

          rules: {
            psnt_first_name: {
              required: true,
              lettersonly: true,
              // minlength: 3
            },
             psnt_last_name: {
              required: true,
              lettersonly: true,
              // minlength: 3
            },
            psnt_email: {
               required: true,
              email: true
            },
            psnt_insrnce_num:{
              required:true,
              minlength:8
            },
            psnt_address:{
             required:true,
            },
           file:{
            required:true,
           },
           psnt_password: {
            required:true,
            minlength:8
           },
            psnt_confpassword: {
              required: true,
              minlength: 8,
              equalTo: "#psnt_password",
            }
          },
          messages : {
            psnt_first_name: {
               required: "First Name field is Required",
               lettersonly:"Only Alphabetical Characters are allowed",
              // minlength: "First Name should be at least 3 characters"
            },
            psnt_last_name: {
                required: "Last Name field is Required",
                 lettersonly:"Only Alphabetical Characters are allowed",
              // minlength: "Last Name should be at least 3 characters"
            },
            psnt_email: {
              required: "Email field is Required",
              email: "The email should be in the format: abc@domain.tld"
            },

           psnt_insrnce_num:{
              required:"License Number field is Required",
              minlength: "Licence Number should be at least 8 characters"
            },
            psnt_address:{
             required:'Address Field is Required',
            },
            file:{
              required:"License doc is Required",
           },
            psnt_password: {
            required:"Password field is Required",
            minlength:"Password should be of atleast 8 characters"
           },
           psnt_confpassword: {
              required: "Confirm Password field is Required",
              minlength: "Password and Confirm password should be same"

            },


        //https: //maps.googleapis.com/maps/api/geocode/json?address='New Palasisa,Indore'&key='AIzaSyAOK58ALCIivy-NRIRcCtRbUbEC22H0MTI'
          }
        });


        var API_KEY = 'AIzaSyAOK58ALCIivy-NRIRcCtRbUbEC22H0MTI';
        var address = $('#psnt_address').val();

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
        var _token = document.querySelector('[name="_token"]').value;

        var first_name = $('#psnt_first_name').val();
        var last_name = $('#psnt_last_name').val();
        var email = $('#psnt_email').val();
        var insurance_no = $('#psnt_insrnce_num').val();
        var ins_doc = $('#ins_doc')[0].files[0];
        var psnt_lat = $('#psnt_lat').val();
        var psnt_long = $('#psnt_long').val();
        var password = $('#psnt_password').val();
        var confpassword = $('#psnt_confpassword').val();
        var user_details = localStorage.getItem('user_det');
        var details = JSON.parse(user_details);
        var physician_id = details._id;
        $('#physician_id').val(physician_id);
        console.log(physician_id);
        // var address1{}=getCoordinates(address);

        if (first_name != "" && last_name !== "" && email != "" && insurance_no != "" && ins_doc != "" && address != "" && password != "") {

            var formData = {
                physician_id: physician_id,
                psnt_first_name: first_name,
                psnt_last_name: last_name,
                psnt_email: email,
                psnt_password: password,
                psnt_insrnce_num: insurance_no,
                psnt_address: address,
                psnt_lat: psnt_lat,
                psnt_long: psnt_long,
                file: ins_doc,
            }


            var formdata=new FormData(this);
            console.log(formdata);
            $.ajax({
                type: "POST",
                url: api_url + "addPatient",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
            }).done(function(res) {
                //    alert('done');

                 console.log(res);
                // return false;
                if (res.status == true) {
                    $('#message').html(res.message).addClass('alert alert-success');
                    window.location.href = base_path + "patient_management";
                } else {
                    $('#message').html(res.message).addClass('alert alert-danger');
                }
            });
        } else {
            $('#message').html('<p style="color:red;">' + 'All the fields are mandatory' + '</p>');
        }

    });
</script>

<script type="text/javascript">
    // add row
    var i =0;

    $("#addRow").click(function() {
    i++;
        var html = '';
        html += '<div class="inputFormRow mt-5">';
        html += '<h4 class="text-primary">Medicine details '+i+'</h4>';
        html += '<div class="input-group mb-3">';
        html += '<input type="text" name="medicine_name[]" class="form-control m-input col-6" placeholder="Medicine Name" autocomplete="off">';
        html += '<input type="text" class="form-control col-4 ml-3" name="quantity[]" placeholder="Quandity">';
        html += '<div class="input-group-append">';
        html += '<i class="ti-trash mt-3 ml-3" id="removeRow" style="color: #4ec1ec"></i>';
        html += '</div>';
        html += '</div>';
        html += '<div class="form-group inputFormRow"><textarea class="form-control col-10 " id="exampleFormControlTextarea1" rows="3" name="info[]" placeholder="Enter Information"></textarea><i class="ti-plus  mt-3 ml-3" id="submitrow" style="color: blue"></i></div>';

        $('#newRow').append(html);
    });

    // remove row
    $(document).on('click', '#removeRow', function () {
            $(this).closest('.inputFormRow').remove();
        });
</script>


<script>
    $(document).on('click', '#submitrow', function() {
        $("#addinfo").append($(".inputFormRow").html(this.value));

    });
</script>




@endsection