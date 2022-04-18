		<!-- FAVICON -->
		<link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('assets/images/brand/favicon.ico')}}" />

		<!-- TITLE -->
		<title>MedPro</title>

        <script type="text/javascript">


        function preventBack() {
            window.history.forward(); 
        }
          
        setTimeout("preventBack()", 0);
          
        window.onunload = function () { null };

        </script>
        <script>
        		 var base_path = "<?php echo url('/') ?>"; 
if (localStorage.getItem('user_det') === "") { window.location.href=base_path+'/login'; }
        </script>
		<!-- BOOTSTRAP CSS -->
		<link href="{{URL::asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />

		<!-- STYLE CSS -->
		<link href="{{URL::asset('assets/css/style.css')}}" rel="stylesheet"/>
		<link href="{{URL::asset('assets/css/medprocustom.css')}}" rel="stylesheet"/>
		<link href="{{URL::asset('assets/css/skin-modes.css')}}" rel="stylesheet"/>
		<link href="{{URL::asset('assets/css/dark-style.css')}}" rel="stylesheet"/>

		<!--C3 CHARTS CSS -->
		<link href="{{URL::asset('assets/plugins/charts-c3/c3-chart.css')}}" rel="stylesheet"/>

		<!-- P-scroll bar css-->
		<link href="{{URL::asset('assets/plugins/p-scroll/perfect-scrollbar.css')}}" rel="stylesheet" />

		<!--- FONT-ICONS CSS -->
		<link href="{{URL::asset('assets/plugins/icons/icons.css')}}" rel="stylesheet"/>

        @yield('css')

        <!-- SIDE-MENU CSS -->
        <link href="{{URL::asset('assets/css/sidemenu.css')}}" rel="stylesheet"/>

		<!-- SIDEBAR CSS -->
		<link href="{{URL::asset('assets/plugins/sidebar/sidebar.css')}}" rel="stylesheet"/>

		<!-- COLOR SKIN CSS -->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="{{URL::asset('assets/colors/color1.css')}}" />
    

        
  <script>
  	function logout(){
  	 var base_path = "<?php echo url('/') ?>"; 
  	 if (localStorage.getItem('user_det') === "") { window.location.href=base_path+'/login'; }
  	}
     setTimeout("logout()", 0);
      
      //  let user_dat =localStorage.getItem('user_det');
      //   var user1       =JSON.parse(user_dat);
      //  //console.log(user1._id);
        
      //  //console.log(user_dat.length)
      //  if (user1._id!==null) {

      //  }else{
        	// window.location.href=base_path+'/login' ;
      //  	//return false;
      //  }
</script>