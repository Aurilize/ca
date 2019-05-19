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
                    <h2>Pareto Problems - LAT</h2>
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

                    <div id="echart_pie_hauler" style="height:350px;"></div>

                  </div>
                </div>
              </div>
              
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Site Pareto Problems<small>LAT</small></h2>
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
                    <table id="datatable-buttons" class="table table-striped table-bordered" width="100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Problem</th>
                          <th>Quantity Fuel</th>
                          <th>Prosentase</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</t>
                          <td>Cost Fuel Hauler Loss/Gain PTY</td>
                          <td>3,389,578.18</td>
                          <td class="text-center"><span class="badge bg-red blink">79.8%</span></td>
                          <td class="text-center"><button type="button" class="btn btn-round btn-info btn-xs" onclick="window.location.href = '../production/site-detail';"><b>View</b></button></td>
                        </tr>
                          
                        <tr>
                          <td>2</t>
                          <td>Cost Fuel Hauler CT Loss/Gain PTY</td>
                          <td>364,699.72</td>
                          <td class="text-center"><span class="badge bg-green">8.6%</span></td>
                          <td class="text-center"><button type="button" class="btn btn-round btn-info btn-xs" onclick="window.location.href = '../production/site-detail';"><b>View</b></button></td>
                        </tr>
                        <tr>
                          <td>3</t>
                          <td>Cost Fuel Hauler Loss/Gain HM Delay Blast Reposition</td>
                          <td>358,090.36</td>
                          <td class="text-center"><span class="badge bg-green">8.4%</span></td>
                          <td class="text-center"><button type="button" class="btn btn-round btn-info btn-xs" onclick="window.location.href = '../production/site-detail';"><b>View</b></button></td>
                        </tr>
                        <tr>
                          <td>4</t>
                          <td>Cost Fuel Hauler Loss/Gain HM Delay Blast Evacuation</td>
                          <td>136,621.04</td>
                          <td class="text-center"><span class="badge bg-green">3.2%</span></td>
                          <td class="text-center"><button type="button" class="btn btn-round btn-info btn-xs" onclick="window.location.href = '../production/site-detail';"><b>View</b></button></td>
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
