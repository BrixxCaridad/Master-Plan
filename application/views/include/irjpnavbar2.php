
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/ficmain.css">
<div class="ficsidebar">

  <br>
  <br>

  <div class="container">

      <div class="col-md-2">
          <center>
            <img class="img-responsive img-circle" src="<?php echo base_url()?>assets/img/panpan.jpg" alt="May Garcia" style="border-radius: 50% width= 50% height=50%">
          </center>

          <center>
            <p style="color: white"><?php echo $this->session->userdata['account_name']?></p>
            <p style="color: white"><?php echo $this->session->userdata['access_level']?></p>
            <p style="color: white"><?php echo $this->session->userdata['college']?></p>
          </center>
      </div>

  </div>

  
  <a href="<?php echo base_url();?>fic">Dashboard</a>
  <!-- <a href="<?php echo base_url();?>ficdepinfo">Deployments</a> -->
  <!-- <a href="<?php echo base_url();?>ficemailcon">Student Requirements</a> -->
  <a href="<?php echo base_url();?>ficgpscon">Company Lists</a>
  <a href="<?php echo base_url();?>ficaccountcon">Account Settings</a>
  <a href="<?php echo base_url();?>login/logout">Logout</a>



</div>

<script>
$(document).on("click", ".openModal", function () {
     var myId = $(this).data('id');
     var sname = $(this).data('surname');
     var fname = $(this).data('firstname');
    var middle = $(this).data('middle');
    var cnum = $(this).data('cnum');
    var tnum = $(this).data('tnum');
     $(".modal-body #view-id-num").val( myId );
     $(".modal-body #view-s-name").val( sname );
     $(".modal-body #view-f-name").val( fname );
     $(".modal-body #view-m-name").val( middle );
     $(".modal-body #view-cp-num").val( cnum );
     $(".modal-body #view-telephone").val( tnum );
});


document.getElementById("newStudentSubmit").addEventListener("click", function(event){
  event.preventDefault()
});

$(document).ready(function(){
   $("#newStudentSubmit").click(function(event){
    event.preventDefault();

    $.ajax({
   type: "POST",
   url: "<?php echo base_url();?>fic/check_user",
   data: "name="+$("#id_num").val(),
   success: function(msg){
          if(msg!="true")
          {
              alert(msg);
          }
          else{
             $("#StudentAdd").submit();
             }
     }

    });


  });
   });
</script>
