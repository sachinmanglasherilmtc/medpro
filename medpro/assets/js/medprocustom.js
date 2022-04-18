
$(document).ready(function(){

$('#logout').click(function(e){
      e.preventDefault();
    alert('you are logged out successfully');
    localStorage.clear();
     window.location.href="http://3.220.132.29/medpro/login";
  });

 
});
 