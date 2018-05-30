
<table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i>live gas sensor data </h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th>Sno.</th>
                                  <th class="hidden-phone">gas1</th>
                                  <th class="hidden-phone">gas2</th>
                                  <th class="hidden-phone">gas3</th>
                                      <th class="hidden-phone">time</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php
                              require_once 'config.php';
                              
                              $ret=mysqli_query($DB,"select * from test ORDER BY sno DESC limit 20");
							  $cnt=1;
							  while($row=mysqli_fetch_array($ret))
							  {?>
                              <tr>
                              <td><?php echo $cnt;?></td>
                              <td><?php echo $row['a'];?></td>
                              <td><?php echo $row['b'];?></td>
                              <td><?php echo $row['c'];?></td>
                              <td><?php echo $row['timestamp'];?></td>
                              </tr>
                              <?php $cnt=$cnt+1; }?>
                              </tbody>
                          </table>