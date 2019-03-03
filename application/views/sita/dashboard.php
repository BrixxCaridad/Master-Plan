<section class="main-main-container">
	<div class="page-title">
        <h4 class="text-bold"><b><span class="fa fa-dashboard"></span> DASHBOARD<small></small></b></h4>
    </div>
    <div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="dashboard">
            		<h3 style="color: #800000">Welcome to your <?php echo $_SESSION['account_type']; ?> Dashboard, <?php echo $_SESSION['account_name']; ?>!</h3>
            		<p id="demo"></p>
        			<script>document.getElementById("demo").innerHTML = Date();</script>
      			</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<div class="dashtitle">
                  <h4><b><span class="fa fa-bullhorn"></span> ANNOUNCEMENTS!</b></h4>
			  </div>
			  <br/>
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
                  <ol class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1"></li>
                      <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ol>

  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                      <div class="item active">
                          <img src="assets/img/TUPfacade.jpg" alt="Los Angeles">
                              <div class="carousel-caption">
                                  <p class="dashhead">TUP-Manila undergoes renovation</p>
                                  <p class="dash">The Technological University of the Philippines-Manila is undergoing a major renovation.</p>
                              </div>
                      </div>

                      <div class="item">
                          <img src="assets/img/redbg2.jpg" alt="Chicago">
                              <div class="carousel-caption">
                                  <h1 class="dashhead">Pre-Deployment Seminar coming up!</h1>
                                  <p class="dash">The Pre-Deployment Seminar for interns will be held on June 5, 2019.</p>
                              </div>
                      </div>

                      <div class="item">
                          <img src="assets/img/bg-01.jpg" alt="New York">
                              <div class="carousel-caption">
                                  <h1 class="dashhead">TUP-Manila swoops down on "Big Apple"</h1>
                                  <p class="dash">TUP-Manila envisions bigger and better opportunities in New York City. </p>
                              </div>
                      </div>
                  </div>

  <!-- Left and right controls -->
                  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left"></span>
                      <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right"></span>
                      <span class="sr-only">Next</span>
                  </a>
			  </div>
		  
			</div>
			<div class="col-md-4">
              <div class="dashtitle">
                  <h4><span class="fa  fa-external-link"></span><b> Important Links</b></h4>
              </div>
              <div class="list-group list-group-flush list-group-implinks">
                  <a href="http://tup.edu.ph/" class="list-group-implinks list-group-item">TUP Website</a>
                  <a href="https://www.google.com/intl/fil/gmail/about/#" class="list-group-implinks list-group-item">Google Mail</a>
                  <a href="http://api.ched.ph/api/v1/download/4729" class="list-group-implinks list-group-item">CHED Memo Order No. 63 Series of 2017</a>
              </div>
		  	</div>
		</div>
	</div>
</section>
