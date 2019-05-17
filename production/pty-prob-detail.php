<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include 'files/css/css.php' ?>
  </head>

  
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
      	<?php include 'files/sidemenu.php'; ?>
      	<?php include 'files/header.php'; ?>

       

        <!-- top navigation -->
        
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          
          <!-- /top tiles -->          
          <br />
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="row">
                <div class="col-md-12 col-sm-8 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Monthly Transaction Frequency</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div id="mainb" style="height:350px;"></div>

                  </div>
                </div>
              </div>	
	            </div>
	           
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Transaction Detail Monthly<small>Hauler - LAT</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <!-- <p class="text-muted font-13 m-b-30">
                      The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p> -->
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Type</th>
                          <th>Frequency</th>
                          <th>Duration (Hours)</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</t>
                          <td>January</td>
                          <td class="text-center"><span class="badge bg-red blink">120</span></td>
                         <td class="text-center"><span class="badge bg-red blink">120</span></td>
                          <td class="text-center"><button type="button" class="btn btn-round btn-info btn-xs" onclick="window.location.href = '../production/type-prob-freq-monthly';"><b>View</b></button></td>
                        </tr>
                        <tr>
                          <td>2</t>
                          <td>Februari</td>
                          <td class="text-center"><span class="badge bg-green">34</span></td>
                          <td class="text-center"><span class="badge bg-green">7</span></td>
                          <td class="text-center"><button type="button" class="btn btn-round btn-info btn-xs" onclick="window.location.href = '../production/type-prob-freq-monthly';"><b>View</b></button></td>
                        </tr>
                        <tr>
                          <td>3</t>
                          <td>March</td>
                          <td class="text-center"><span class="badge bg-red blink">150</span></td>
                          <td class="text-center"><span class="badge bg-red blink">128</span></td>
                          <td class="text-center"><button type="button" class="btn btn-round btn-info btn-xs" onclick="window.location.href = '../production/type-prob-freq-monthly';"><b>View</b></button></td>
                        </tr>
                        <tr>
                          <td>4</t>
                          <td>April</td>
                          <td class="text-center"><span class="badge bg-orange">78</span></td>
                          <td class="text-center"><span class="badge bg-orange">59</span></td>
                          <td class="text-center"><button type="button" class="btn btn-round btn-info btn-xs" onclick="window.location.href = '../production/type-prob-freq-monthly';"><b>View</b></button></td>
                        </tr>
                        <tr>
                          <td>5</t>
                          <td>May</td>
                          <td class="text-center"><span class="badge bg-green">20</span></td>
                          <td class="text-center"><span class="badge bg-green">34</span></td>
                          <td class="text-center"><button type="button" class="btn btn-round btn-info btn-xs" onclick="window.location.href = '../production/type-prob-freq-monthly';"><b>View</b></button></td>
                        </tr>
                        <td>6</t>
                          <td>June</td>
                          <td class="text-center"><span class="badge bg-red blink">180</span></td>
                          <td class="text-center"><span class="badge bg-red blink">189</span></td>
                          <td class="text-center"><button type="button" class="btn btn-round btn-info btn-xs" onclick="window.location.href = '../production/type-prob-freq-monthly';"><b>View</b></button></td>
                        </tr>
                        <tr>
                          <td>7</t>
                          <td>July</td>
                          <td class="text-center"><span class="badge bg-green">20</span></td>
                          <td class="text-center"><span class="badge bg-green">5</span></td>
                          <td class="text-center"><button type="button" class="btn btn-round btn-info btn-xs" onclick="window.location.href = '../production/type-prob-freq-monthly';"><b>View</b></button></td>
                        </tr>
                        <tr>
                          <td>8</t>
                          <td>August</td>
                          <td class="text-center"><span class="badge bg-red blink">260</span></td>
                          <td class="text-center"><span class="badge bg-red blink">340</span></td>
                          <td class="text-center"><button type="button" class="btn btn-round btn-info btn-xs" onclick="window.location.href = '../production/type-prob-freq-monthly';"><b>View</b></button></td>
                        </tr>
                        <tr>
                          <td>9</t>
                          <td>September</td>
                          <td class="text-center"><span class="badge bg-orange">90</span></td>
                          <td class="text-center"><span class="badge bg-orange">84</span></td>
                          <td class="text-center"><button type="button" class="btn btn-round btn-info btn-xs" onclick="window.location.href = '../production/type-prob-freq-monthly';"><b>View</b></button></td>
                        </tr>
                        <tr>
                          <td>10</t>
                          <td>October</td>
                          <td class="text-center"><span class="badge bg-green">10</span></td>
                          <td class="text-center"><span class="badge bg-green">10</span></td>
                          <td class="text-center"><button type="button" class="btn btn-round btn-info btn-xs" onclick="window.location.href = '../production/type-prob-freq-monthly';"><b>View</b></button></td>
                        </tr>
                        <td>11</t>
                          <td>November</td>
                          <td class="text-center"><span class="badge bg-red blink">250</span></td>
                          <td class="text-center"><span class="badge bg-green">40</span></td>
                          <td class="text-center"><button type="button" class="btn btn-round btn-info btn-xs" onclick="window.location.href = '../production/type-prob-freq-monthly';"><b>View</b></button></td>
                        </tr>
                        <tr>
                          <td>12</t>
                          <td>December</td>
                          <td class="text-center"><span class="badge bg-green">40</span></td>
                          <td class="text-center"><button type="button" class="btn btn-round btn-info btn-xs" onclick="window.location.href = '../production/type-prob-freq-monthly';"><b>View</b></button></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
              <div class="row">


                <!-- Start to do list -->
                
                <!-- End to do list -->
                
                <!-- start of weather widget -->
                
                <!-- end of weather widget -->
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <?php include 'files/footer.php' ?>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <?php include 'files/js/js.php' ?>
	
  </body>
</html>
