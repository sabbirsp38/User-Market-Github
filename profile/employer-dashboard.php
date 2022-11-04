<?php include 'inc/hader.php';

$uni_id = $_SESSION['uni_id'];
$ii=0;

if (isset($_GET['$uni_id'])) {

             $uni_id= $_GET['$uni_id'];
          }
?>

    <!-- Breadcrumb -->
    <div class="alice-bg padding-top-70 padding-bottom-70">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="breadcrumb-area">
              <h1>User Dashboard</h1>
              
            </div>
          </div>
          <div class="col-md-6">
            <div class="breadcrumb-form">
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcrumb End -->

    <div class="alice-bg section-padding-bottom">
      <div class="container no-gliters">
        <div class="row no-gliters">
          <div class="col">
            <div class="dashboard-container">
              <div class="dashboard-content-wrapper">
                <div class="dashboard-section user-statistic-block">
                  <div class="user-statistic">
                    <i data-feather="command"></i>
                   <?php 
                   $get_drow='';
                       $sql = $con->query("SELECT id FROM adds WHERE uni_id='$uni_id'");
                       if (!empty($sql) && $sql->num_rows > 0)
                         $get_drow=$sql->num_rows;

                         for ($i=0; $i < $get_drow; $i++) { 
                           $data = $sql->fetch_array();
                           $ii++; }  ?>
                    <span>Total Job Posted</span>
                     <h3><?php echo $ii;?></h3>
                  </div>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<center><h3>Your Adds</h3></center>

              <div class="dashboard-content-wrapper container">
                <div class="manage-job-container">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Adds Title</th>
                        <th>Price</th>
                        <th>Contact Number</th>
                        <th>View Adds</th>
                        <th class="action">Edit Adds</th>
                        <th>Delete Adds</th>
                      </tr>
                    </thead>
                    <tbody>
                       <?php 
                              if (isset($_GET['delid'])) {
                                $did = $_GET['delid'];
                                $query = "DELETE FROM adds WHERE id='$did'";
                                 $db-> delete($query);
                              }
               
                          ?> 
                      <?php
                            $query = "select * from adds WHERE uni_id='$uni_id' order by id desc";
                            $post = $db->select($query);
                            if ($post) {
                              while ($result= $post -> fetch_assoc()) {
                        ?>
                      <tr class="job-items">
                        <td class="title">
                          <h5><a href="#"><?php echo $result['P_title']; ?></a></h5>
                          
                        </td>
                        <td class=""><?php echo $result['p_price']; ?></td>
                        <td class="status active"><?php echo $result['p_contact_number']; ?></td>
                        <td class="action">
                          <a class="btn btn-success" href="../single.php? $id=<?php echo $result['id']; ?>" title="Preview">Preview</a>
                          
                        </td>
                        <td class="application">
                          <a class="btn btn-warning" href="edit-adds.php? $id=<?php echo $result['id']; ?>"  title="Edit">Edit Adds</a>
                         

                        </td>
                        <td class="application"> 
                          <a class="btn btn-danger" href="?delid=<?php echo $result['id']; ?> ?>" >Delet Adds</a>
                        </td>
                      </tr>
                      </tr>
                       


  <?php }}?>


                    </tbody>
                  </table>
                 
                </div>
              </div>

<?php include 'inc/foter.php';?>