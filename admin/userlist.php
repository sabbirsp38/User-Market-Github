﻿<?php include 'inc/hader.php'; ?>
<?php include 'inc/saidber.php'; ?> 
        <div class="grid_10">
            <div class="box round first grid">
                <h2><?php echo $language["User_List"]; ?></h2>
                <div class="block"> 

                     <?php 
                if (isset($_GET['delid'])) {
                  $did = $_GET['delid'];
                  $query = "DELETE FROM  admin WHERE id='$did'";
                   $db-> delete($query);
                }
               
           ?> 





                    <table class="data display datatable" id="example">
                    <thead>
                        <tr class="odd gradeX">
                            <td>SN</td>
                            <td><?php echo $language["User_Name"]; ?></td>
                            <td><?php echo $language["Password"]; ?></td>
                            <th><?php echo $language["Delete"]; ?></th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 

                        $query = "select * from admin order by id desc";
                        $contact = $db->select($query);
                        if ($contact) {
                            $i=0;
                        while ($result= $contact -> fetch_assoc()) {
                            $i++;


                    ?>

                        <tr class="even gradeC">
                            <td><?php echo $i;  ?></td>
                            <td><?php echo $result['username']; ?></td>
                            <td><?php echo $result['password']; ?></td>
                            <td> <a onclick="return confirm('<?php echo $language["Are_you_sure_to_DELETE"]; ?>!');" 

                         href="?delid=<?php echo $result['id']; ?> ?>  "><?php echo $language["Delete"]; ?></a></td>
                            
                        </tr>
                        <?php  }} ?>
                        
                    </tbody>
                </table>
               </div>
            </div>
        </div>
        <div class="clear">
        </div>
    
<?php include 'inc/foter.php'; ?>  

<script type="text/javascript">

        $(document).ready(function () {
            setupLeftMenu();

            $('.datatable').dataTable();
            setSidebarHeight();


        });
    </script>
