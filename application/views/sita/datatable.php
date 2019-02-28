<?php $this->load->view('include/navbar2'); ?>

<title>SITA | Companies</title>
 <head>
  <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
</head> 
<div class="content">
  
      
      <center><h2 style="color: black"><img src="assets/img/TUPlogo.png" alt="TUP Logo" style="height:45px; width: 45px">Technological University of the Philippines - Manila</h2></center>
      
      <center><p style="color: black; font-size: 28px"><b>SITA: SIT ASSISTANT</b></p></h1></center>
      <hr style="background-color: #800000">

<body>
  <table class="comptable">
    <thead>
      <tr><th>Companies</th></tr>
    </thead>
    <tbody>
      <tr><td>SitePoint</td></tr>
      <tr><td>Learnable</td></tr>
      <tr><td>Flippa</td></tr>
      <tr><td>Baytech BPO Corporation</td></tr>
      <tr><td>KabSlash IT</td></tr>
      <tr><td>Captivate Solutions</td></tr>
      <tr><td>Grey Sloan Memorial Hospital</td></tr>
      <tr><td>Seattle Grace Hospital</td></tr>
      <tr><td>Seattle Grace Mercy West Hospital</td></tr>
      <tr><td>Mercy West Hospital</td></tr>
      <tr><td>Denny Duquette Memorial Clinic</td></tr>
      <tr><td>Python Corp</td></tr>
      <tr><td>Perl Reborn</td></tr>
      <tr><td>PHPCORP</td></tr>
      <tr><td>C the Solution Co.</td></tr>
      <tr><td>C the #er Solution Co.</td></tr>
      <tr><td>C++ Brothers</td></tr>
    </tbody>
  </table>

  
  <script>
  $(function(){
    $(".comptable").dataTable();
  })
  </script>
</body>
</div>