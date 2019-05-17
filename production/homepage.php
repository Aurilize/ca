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
              	<div class="col-md-9 col-xs-12">
              	</div>
              	<div class="col-md-3 col-xs-12">
	              	<div class="form-group">
	              		<label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
	                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Periode</label>
	                    <div class="col-md-6 col-sm-3 col-xs-12">
		                    <select class="form-control">
		                        <!-- <option>Choose periode</option> -->
		                        <option>2018</option>
		                        <option>2019</option>
		                    </select>
	                    </div>
	                </div>
	            </div>
	            <br>
	            <br>
	            <br>
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Site Fuel Consumption</h2>
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

                      <div class="dashboard-widget-content">
                      	<div class="col-md-6 col-sm-12 col-xs-12" style="height:500px;">
                      		<img src="images/BUMA Map-768x769.png" height="450px" width="450px">
                      	</div>
                        <!-- <div id="asia-map-gdp" class="col-md-8 col-sm-12 col-xs-12" style="height:500px;"></div> -->
                        <div class="col-md-6">
                          <h2 class="line_30">Site Fuel Consumption & Production</h2>

                          <table class="countries_list">
                            <thead>
                            	<tr>
    								<th rowspan=2 class="text-center">No</th>
    								<th rowspan=2 class="text-center">Site</th>
									<th colspan=2 class="text-center" style="color: black">Fuel Consumption</th>
							        <th colspan=2 class="text-center" style="color: black">Production</th>
							        <th rowspan=2 class="text-center">Over AFCA (L)</th>
    							</tr>
                            	<tr>
	                                <th class="text-center">Budget (L)</td>
	                                <th class="text-center">Actual (L)</td>
	                                <th class="text-center">Budget (Bcm)</td>
	                                <th class="text-center">Actual (Bcm)</td>
	                            </tr>
	                        </thead>
	                        <tbody>
	                            <tr>
	                            	<td>1</td>
	                                <td><a href="../production/pareto"><span class="label label-danger blink"> ADR </span></a></td>
	                                <td class="fs15 fw700 text-center"> 3.800.000 </td>
	                                <td class="fs15 fw700 text-center"><span class="badge bg-red "> 4.500.000</span></td>
	                                <td class="fs15 fw700 text-center"> 1.800.000 </td>
	                                <td class="fs15 fw700 text-center"><span class="badge bg-red "> 1.200.000</span></td>
	                                <td class="fs15 fw700 text-center"><span class="badge bg-red "> 1.200.000</span></td>
	                            </tr>
	                            <tr>
	                            	<td>2</td>
	                                <td><a href="../production/pareto"><span class="label label-success"> KDC </span></a></td>
	                                <td class="fs15 fw700 text-center"> 3.900.000 </td>
	                                <td class="fs15 fw700 text-center"><span class="badge bg-green"> 3.000.000</span></td>
	                                <td class="fs15 fw700 text-center"> 1.500.000 </td>
	                                <td class="fs15 fw700 text-center"><span class="badge bg-green"> 1.610.000</span></td>
	                                <td class="fs15 fw700 text-center"><span class="badge bg-green"> - 900.000</span></td>
	                            </tr>
	                            <tr>
	                            	<td>3</td>
	                                <td><a href="../production/pareto"><span class="label label-danger blink"> LAT </span></a></td>
	                                <td class="fs15 fw700 text-center"> 1.000.000 </td>
	                                <td class="fs15 fw700 text-center"><span class="badge bg-red "> 2.000.000</span></td>
	                                <td class="fs15 fw700 text-center"> 1.500.000 </td>
	                                <td class="fs15 fw700 text-center"><span class="badge bg-red "> 1.000.000</span></td>
	                                <td class="fs15 fw700 text-center"><span class="badge bg-red "> 1.000.000</span></td>
	                            </tr>
	                            <tr>
	                            	<td>4</td>
	                                <td><a href="../production/pareto"><span class="label label-success"> BIN </span></a></td>
	                                <td class="fs15 fw700 text-center"> 3.000.000 </td>
	                                <td class="fs15 fw700 text-center"><span class="badge bg-green"> 3.000.000</span></td>
	                                <td class="fs15 fw700 text-center"> 1.500.000 </td>
	                                <td class="fs15 fw700 text-center"><span class="badge bg-green"> 1.630.000</span></td>
	                                <td class="fs15 fw700 text-center"><span class="badge bg-green"> 0</span></td>
	                            </tr>
	                              <tr>
	                              	<td>5</td>
	                                <td><a href="../production/pareto"><span class="label label-success"> SDJ </span></a></td>
	                                <td class="fs15 fw700 text-center"> 1.700.000 </td>
	                                <td class="fs15 fw700 text-center"><span class="badge bg-green"> 1.200.000</span></td>
	                                <td class="fs15 fw700 text-center"> 1.500.000 </td>
	                                <td class="fs15 fw700 text-center"><span class="badge bg-green"> 1.600.000</span></td>
	                                <td class="fs15 fw700 text-center"><span class="badge bg-green"> - 500.000</span></td>
	                            </tr>
	                            <tr>
	                            	<td>6</td>
	                                <td><a href="../production/pareto"><span class="label label-warning"> TAM </span></a></td>
	                                <td class="fs15 fw700 text-center"> 1.600.000 </td>
	                                <td class="fs15 fw700 text-center"><span class="badge bg-green"> 1.000.000</span></td>
	                                <td class="fs15 fw700 text-center"> 1.500.000 </td>
	                                <td class="fs15 fw700 text-center"><span class="badge bg-red"> 1.300.000</span></td>
	                               <td class="fs15 fw700 text-center"><span class="badge bg-green"> - 600.000</span></td>
	                            </tr>
	                            <tr>
	                            	<td>7</td>
	                                <td><a href="../production/pareto"><span class="label label-success"> AJE </span></a></td>
	                                <td class="fs15 fw700 text-center"> 1.800.000 </td>
	                                <td class="fs15 fw700 text-center"><span class="badge bg-green"> 1.000.000</span></td>
	                                <td class="fs15 fw700 text-center"> 1.400.000 </td>
	                                <td class="fs15 fw700 text-center"><span class="badge bg-green"> 1.600.000</span></td>
	                                <td class="fs15 fw700 text-center"><span class="badge bg-green"> - 800.000</span></td>
	                            </tr>
	                            <tr>
	                            	<td>8</td>
	                                <td><a href="../production/pareto"><span class="label label-success"> PAD </span></a></td>
	                                <td class="fs15 fw700 text-center"> 1.000.000 </td>
	                                <td class="fs15 fw700 text-center"><span class="badge bg-green"> 950.000</span></td>
	                                <td class="fs15 fw700 text-center"> 1.500.000 </td>
	                                <td class="fs15 fw700 text-center"><span class="badge bg-green"> 1.600.000 </span></td>
	                                <td class="fs15 fw700 text-center"><span class="badge bg-green"> - 50.000</span></td>
	                            </tr>
	                            <tr>
	                            	<td>9</td>
	                                <td><a href="../production/pareto"><span class="label label-success"> TBR </span></a></td>
	                                <td class="fs15 fw700 text-center"> 1.600.000 </td>
	                                <td class="fs15 fw700 text-center"><span class="badge bg-green"> 1.000.000</span></td>
	                                <td class="fs15 fw700 text-center"> 1.500.000 </td>
	                                <td class="fs15 fw700 text-center"><span class="badge bg-green"> 1.500.000 </span></td>
	                               <td class="fs15 fw700 text-center"><span class="badge bg-green"> 600.000</span></td>
	                            </tr>
	                            <tr>
	                            	<td>10</td>
	                                <td><a href="../production/pareto"><span class="label label-success"> IPR </span></a></td>
	                                <td class="fs15 fw700 text-center"> 1.800.000 </td>
	                                <td class="fs15 fw700 text-center"><span class="badge bg-green"> 1.000.000</span></td>
	                                <td class="fs15 fw700 text-center"> 1.500.000 </td>
	                                <td class="fs15 fw700 text-center"><span class="badge bg-green"> 1.600.000</span></td>
	                                <td class="fs15 fw700 text-center"><span class="badge bg-green"> 800.000</span></td>
	                            </tr>
	                            <tr>
	                            	<td>11</td>
	                                <td><a href="../production/pareto"><span class="label label-success"> IPR </span></a></td>
	                                <td class="fs15 fw700 text-center"> 1.000.000 </td>
	                                <td class="fs15 fw700 text-center"><span class="badge bg-green"> 1.000.000</span></td>
	                                <td class="fs15 fw700 text-center"> 1.500.000 </td>
	                                <td class="fs15 fw700 text-center"> <span class="badge bg-green">1.550.000 </span></td>
	                                <td class="fs15 fw700 text-center"><span class="badge bg-green"> 0</span></td>
	                            </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
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
