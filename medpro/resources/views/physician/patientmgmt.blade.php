@extends('layouts.vertical-menu.master')
@section('css')
<link href="{{ URL::asset('assets/plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet">
<style>
.form-label{
    text-align:left!important;
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
		    <div class="row">
                          
                            <div class="col-md-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">View Patient</h3>
                                        
                                   <div class="ml-auto pageheader-btn">
                                            <a href="{{ url('add_patient') }}" class="btn btn-primary btn-icon text-white mr-2">
                                                <span>
                                                    <i class="fe fe-plus"></i>
                                                </span> Add 
                                            </a>
                                           
                                    </div>


                                    </div>
                                    <div class="card-body">
                                         <div class="text-center" id="message">
                                               
                                             </div>
                                        <div class="table-responsive">
                                            <table id="myTable"  class="table table-striped table-bordered text-nowrap w-100">
                                                <thead>
                                                    <tr>
                                                        <th class="wd-15p">S.No</th>
                                                        <th class="wd-15p">First name</th>
                                                        <th class="wd-15p">Last name</th>
                                                        <th class="wd-20p">Email</th>
                                                        <th class="wd-15p">Insurance Number</th>
                                                        <th class="wd-10p">Action</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                  <!-- MODAL -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Patient Profile</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                    <label class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="fullname" value="">
                                    </div>
                                     <div class="form-group">
                                    <label  class="form-label">Email</label>
                                    <input type="email" class="form-control" id="femail" value="">
                                    </div>
                                     <div class="form-group">
                                    <label  class="form-label">Insurance Number</label>
                                    <input type="text" class="form-control" id="ins_no" value="">
                                    </div>
                                     <div class="form-group">
                                    <label  class="form-label">Insurance Image</label>
                                    <img src="" alt="insurace_image" id='ins_img'>
                                    <!-- <input type="email" class="form-control" id="femail" value=""> -->
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                   <!--  <button type="button" class="btn btn-primary">Save changes</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- MODAL CLOSED -->
                                
                                                    
                                                   
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- TABLE WRAPPER -->
                                </div>
                                <!-- SECTION WRAPPER -->
                            </div>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>
 $(document).ready( function () {
     var api_url="http://3.220.132.29:3000/api/";
   
      var user_details=localStorage.getItem('user_det');
    var details =JSON.parse(user_details);
    var physician_id=details._id;
        // var _token =document.querySelector('[name="_token"]').value;
     var formData = {
        physician_id:physician_id,
    };
    console.log(physician_id)
    console.log(formData)
  $.ajax({
      type: "POST",
      url: api_url+"patientList",
      dataType:"json",
      data: {
        physician_id:physician_id,
    },
      // contentType:false,
      // cache:false,
      // processData:false,
    }).done(function (res) {


        var names = [];
         names[0] = prompt("New member name?");
        localStorage.setItem("patientList", JSON.stringify(names));
        var storedNames = JSON.parse(localStorage.getItem("patientList"));

        for(var i = 0; i < res.data.length; i++) {
	    if(res.data[i].prs_quantity > 0) {
		document.write(res.data[i].prs_med_name + ", " + res.data[i].prs_quantity + " " + res.data[i].prs_information + " ")
	}
}


        localStorage.setItem('patientList',res.data);

         res.data.map((e,i) => {
            i++;
              $("#myTable").append('<tr><td>'+i+'</td><td>'+e.psnt_first_name+'</td><td>'+e.psnt_last_name+'</td><td>'+e.psnt_email+'</td><td> '+e.psnt_insrnce_num+'</td><td><button  id="'+e._id+'" onclick="editdata(this)" class="btn btn-info in-btn text-white" data-toggle="modal" data-target="#exampleModal">View</button><button id="'+e._id+'" onclick="deletedata(this)" class="btn btn-danger in-btn text-white">Delete</button></td></tr>');         
    });
       
});









    });


   




</script>
<script type="text/javascript">
     function deletedata($this){
      var api_url="http://3.220.132.29:3000/api/";
  var id=$this.id;
   $.ajax({
      url: api_url+"patientDelete",
      type: "post",
      headers: { 
        'Access-Control-Allow-Origin': '*' ,
        'Access-Control-Allow-Methods': 'GET, POST, PATCH, PUT, DELETE, OPTIONS',
        'Access-Control-Allow-Headers': 'Origin',
  },
       crossDomain: true,
        dataType: 'json', 
      data:{
        Patient_id:id,
      },
    
      // contentType: "application/json; charset=utf-8",
     // data: JSON.stringify(data),
    }).done(function (res) {

        if(res.status == true){
          $('#message').html(res.msg).addClass('alert alert-success');
          
        }else{
           $('#message').html(res.msg).addClass('alert alert-danger');
        }
    });
}





   function editdata($this){
    var api_url="http://3.220.132.29:3000/api/";
    var id=$this.id;
    $.ajax({
      url: api_url+"patientProfileView",
      type: "post",
      dataType: 'json', 
      data:{
        Patient_id:id,
      },
    
      // contentType: "application/json; charset=utf-8",
     // data: JSON.stringify(data),
    }).done(function (res) {
       
      
          // console.log(res)
              $("#fullname").val(res.data.psnt_first_name+' '+res.data.psnt_last_name) ;   
            $('#femail').val(res.data.psnt_email);
            $('#ins_no').val(res.data.psnt_insrnce_num);
            $('#ins_img').attr('src',res.data.psnt_insrnce_img);
    });
    
   }


    </script>

   

@endsection




