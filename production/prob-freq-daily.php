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
	            </div>
	            <br>
	            <br>
	            <br>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Transaction Detail Daily (Januari) <small>Hauler - LAT</small></h2>
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
                          <th>Type</th>
                          <th>Unit Number</th>
                          <th>Date</th>
                          <th>Empty Speed</th>
                          <th>Loaded Speed</th>
                          <th>Payload</th>
                          <th>Distance</th>
                          <th>HM</th>
                          <th>Fuel Consmp</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>777D</td>
                          <td>770001</td>
                          <td>02-Januari-2018</td>
                          <td class="text-center"><span class="badge bg-red blink">40</span></td>
                          <td class="text-center"><span class="badge bg-green">19</span></td>
                          <td class="text-center"><span class="badge bg-green">2000</span></td>
                          <td class="text-center"><span class="badge bg-orange">30.1</span></td>
                          <td class="text-center"><span class="badge bg-orange">45123</span></td>
                          <td class="text-center"><span class="badge bg-orange">2300</span></td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>777D</td>
                          <td>770002</td>
                          <td>02-Januari-2018</td>
                          <td class="text-center"><span class="badge bg-green">20</span></td>
                          <td class="text-center"><span class="badge bg-green">19</span></td>
                          <td class="text-center"><span class="badge bg-green">1160</span></td>
                          <td class="text-center"><span class="badge bg-green">25</span></td>
                          <td class="text-center"><span class="badge bg-green">500</span></td>
                          <td class="text-center"><span class="badge bg-green">1500</span></td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>777D</td>
                          <td>770003</td>
                          <td>02-Januari-2018</td>
                          <td class="text-center"><span class="badge bg-orange">25</span></td>
                          <td class="text-center"><span class="badge bg-orange">22</span></td>
                          <td class="text-center"><span class="badge bg-orange">2130</span></td>
                          <td class="text-center"><span class="badge bg-green">25</span></td>
                          <td class="text-center"><span class="badge bg-green">500</span></td>
                          <td class="text-center"><span class="badge bg-green">1200</span></td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>777D</td>
                          <td>770004</td>
                          <td>02-Januari-2018</td>
                          <td class="text-center"><span class="badge bg-orange">25</span></td>
                          <td class="text-center"><span class="badge bg-green">18</span></td>
                          <td class="text-center"><span class="badge bg-orange">2130</span></td>
                          <td class="text-center"><span class="badge bg-red blink">40</span></td>
                          <td class="text-center"><span class="badge bg-red blink">50000</span></td>
                          <td class="text-center"><span class="badge bg-orange">2500</span></td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td>777D</td>
                          <td>770005</td>
                          <td>02-Januari-2018</td>
                          <td class="text-center"><span class="badge bg-green">20</span></td>
                          <td class="text-center"><span class="badge bg-green">17</span></td>
                          <td class="text-center"><span class="badge bg-orange">2010</span></td>
                          <td class="text-center"><span class="badge bg-orange">32.8</span></td>
                          <td class="text-center"><span class="badge bg-green">500</span></td>
                          <td class="text-center"><span class="badge bg-red blink">3400</span></td>
                        </tr>
                        <tr>
                          <td>6</td>
                          <td>777D</td>
                          <td>770006</td>
                          <td>02-Januari-2018</td>
                          <td class="text-center"><span class="badge bg-orange">25</span></td>
                          <td class="text-center"><span class="badge bg-orange">22</span></td>
                          <td class="text-center"><span class="badge bg-orange">2130</span></td>
                          <td class="text-center"><span class="badge bg-green">25</span></td>
                          <td class="text-center"><span class="badge bg-green">500</span></td>
                          <td class="text-center"><span class="badge bg-green">1200</span></td>
                        </tr>
                        <tr>
                          <td>7</td>
                          <td>777D</td>
                          <td>770001</td>
                          <td>03-Januari-2018</td>
                          <td class="text-center"><span class="badge bg-red blink">40</span></td>
                          <td class="text-center"><span class="badge bg-green">19</span></td>
                          <td class="text-center"><span class="badge bg-green">2000</span></td>
                          <td class="text-center"><span class="badge bg-orange">30.1</span></td>
                          <td class="text-center"><span class="badge bg-orange">45123</span></td>
                          <td class="text-center"><span class="badge bg-orange">2300</span></td>
                        </tr>
                        <tr>
                          <td>8</td>
                          <td>777D</td>
                          <td>770002</td>
                          <td>03-Januari-2018</td>
                          <td class="text-center"><span class="badge bg-green">20</span></td>
                          <td class="text-center"><span class="badge bg-green">19</span></td>
                          <td class="text-center"><span class="badge bg-green">1160</span></td>
                          <td class="text-center"><span class="badge bg-green">25</span></td>
                          <td class="text-center"><span class="badge bg-green">500</span></td>
                          <td class="text-center"><span class="badge bg-green">1500</span></td>
                        </tr>
                        <tr>
                          <td>9</td>
                          <td>777D</td>
                          <td>770003</td>
                          <td>03-Januari-2018</td>
                          <td class="text-center"><span class="badge bg-orange">25</span></td>
                          <td class="text-center"><span class="badge bg-orange">22</span></td>
                          <td class="text-center"><span class="badge bg-orange">2130</span></td>
                          <td class="text-center"><span class="badge bg-green">25</span></td>
                          <td class="text-center"><span class="badge bg-green">500</span></td>
                          <td class="text-center"><span class="badge bg-green">1200</span></td>
                        </tr>
                        <tr>
                          <td>10</td>
                          <td>777D</td>
                          <td>770005</td>
                          <td>03-Januari-2018</td>
                          <td class="text-center"><span class="badge bg-green">20</span></td>
                          <td class="text-center"><span class="badge bg-green">17</span></td>
                          <td class="text-center"><span class="badge bg-orange">2010</span></td>
                          <td class="text-center"><span class="badge bg-orange">32.8</span></td>
                          <td class="text-center"><span class="badge bg-green">500</span></td>
                          <td class="text-center"><span class="badge bg-orange">3400</span></td>
                        </tr>
                        <tr>
                          <td>11</td>
                          <td>777D</td>
                          <td>770001</td>
                          <td>04-Januari-2018</td>
                          <td class="text-center"><span class="badge bg-red blink">40</span></td>
                          <td class="text-center"><span class="badge bg-green">19</span></td>
                          <td class="text-center"><span class="badge bg-green">2000</span></td>
                          <td class="text-center"><span class="badge bg-orange">30.1</span></td>
                          <td class="text-center"><span class="badge bg-orange">45123</span></td>
                          <td class="text-center"><span class="badge bg-orange">2300</span></td>
                        </tr>
                        <tr>
                          <td>12</td>
                          <td>777D</td>
                          <td>770002</td>
                          <td>04-Januari-2018</td>
                          <td class="text-center"><span class="badge bg-green">20</span></td>
                          <td class="text-center"><span class="badge bg-green">19</span></td>
                          <td class="text-center"><span class="badge bg-green">1160</span></td>
                          <td class="text-center"><span class="badge bg-green">25</span></td>
                          <td class="text-center"><span class="badge bg-green">500</span></td>
                          <td class="text-center"><span class="badge bg-green">1500</span></td>
                        </tr>
                        <tr>
                          <td>13</td>
                          <td>777D</td>
                          <td>770003</td>
                          <td>04-Januari-2018</td>
                          <td class="text-center"><span class="badge bg-orange">25</span></td>
                          <td class="text-center"><span class="badge bg-orange">22</span></td>
                          <td class="text-center"><span class="badge bg-orange">2130</span></td>
                          <td class="text-center"><span class="badge bg-green">25</span></td>
                          <td class="text-center"><span class="badge bg-green">500</span></td>
                          <td class="text-center"><span class="badge bg-green">1200</span></td>
                        </tr>
                        <tr>
                          <td>14</td>
                          <td>777D</td>
                          <td>770004</td>
                          <td>04-Januari-2018</td>
                          <td class="text-center"><span class="badge bg-orange">25</span></td>
                          <td class="text-center"><span class="badge bg-green">18</span></td>
                          <td class="text-center"><span class="badge bg-orange">2130</span></td>
                          <td class="text-center"><span class="badge bg-red blink">40</span></td>
                          <td class="text-center"><span class="badge bg-red blink">50000</span></td>
                          <td class="text-center"><span class="badge bg-orange">2500</span></td>
                        </tr>
                        <tr>
                          <td>15</td>
                          <td>777D</td>
                          <td>770005</td>
                          <td>04-Januari-2018</td>
                          <td class="text-center"><span class="badge bg-green">20</span></td>
                          <td class="text-center"><span class="badge bg-green">17</span></td>
                          <td class="text-center"><span class="badge bg-orange">2010</span></td>
                          <td class="text-center"><span class="badge bg-orange">32.8</span></td>
                          <td class="text-center"><span class="badge bg-green">500</span></td>
                          <td class="text-center"><span class="badge bg-red blink">3400</span></td>
                        </tr>
                        <tr>
                          <td>16</td>
                          <td>777D</td>
                          <td>770006</td>
                          <td>04-Januari-2018</td>
                          <td class="text-center"><span class="badge bg-orange">25</span></td>
                          <td class="text-center"><span class="badge bg-orange">22</span></td>
                          <td class="text-center"><span class="badge bg-orange">2130</span></td>
                          <td class="text-center"><span class="badge bg-green">25</span></td>
                          <td class="text-center"><span class="badge bg-green">500</span></td>
                          <td class="text-center"><span class="badge bg-green">1200</span></td>
                        </tr>
                        <tr>
                          <td>17</td>
                          <td>777D</td>
                          <td>770001</td>
                          <td>05-Januari-2018</td>
                          <td class="text-center"><span class="badge bg-red blink">40</span></td>
                          <td class="text-center"><span class="badge bg-green">19</span></td>
                          <td class="text-center"><span class="badge bg-green">2000</span></td>
                          <td class="text-center"><span class="badge bg-orange">30.1</span></td>
                          <td class="text-center"><span class="badge bg-orange">45123</span></td>
                          <td class="text-center"><span class="badge bg-orange">2300</span></td>
                        </tr>
                        <tr>
                          <td>18</td>
                          <td>777D</td>
                          <td>770002</td>
                          <td>05-Januari-2018</td>
                          <td class="text-center"><span class="badge bg-green">20</span></td>
                          <td class="text-center"><span class="badge bg-green">19</span></td>
                          <td class="text-center"><span class="badge bg-green">1160</span></td>
                          <td class="text-center"><span class="badge bg-green">25</span></td>
                          <td class="text-center"><span class="badge bg-green">500</span></td>
                          <td class="text-center"><span class="badge bg-green">1500</span></td>
                        </tr>
                        <tr>
                          <td>19</td>
                          <td>777D</td>
                          <td>770003</td>
                          <td>05-Januari-2018</td>
                          <td class="text-center"><span class="badge bg-orange">25</span></td>
                          <td class="text-center"><span class="badge bg-orange">22</span></td>
                          <td class="text-center"><span class="badge bg-orange">2130</span></td>
                          <td class="text-center"><span class="badge bg-green">25</span></td>
                          <td class="text-center"><span class="badge bg-green">500</span></td>
                          <td class="text-center"><span class="badge bg-green">1200</span></td>
                        </tr>
                        <tr>
                          <td>20</td>
                          <td>777D</td>
                          <td>770005</td>
                          <td>05-Januari-2018</td>
                          <td class="text-center"><span class="badge bg-green">20</span></td>
                          <td class="text-center"><span class="badge bg-green">17</span></td>
                          <td class="text-center"><span class="badge bg-orange">2010</span></td>
                          <td class="text-center"><span class="badge bg-orange">32.8</span></td>
                          <td class="text-center"><span class="badge bg-green">500</span></td>
                          <td class="text-center"><span class="badge bg-orange">3400</span></td>
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
