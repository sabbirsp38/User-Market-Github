<?php include 'inc/hader.php'; ?>
<?php include 'inc/saidber.php'; ?> 





 <div class="grid_10">
            <div class="box round first grid">
                <h2>User List</h2>
                <div class="block"> 

                     <?php 
                if (isset($_GET['delid'])) {
                  $did = $_GET['delid'];
                  $query = "DELETE FROM  users WHERE id='$did'";
                   $db-> delete($query);
                }
               
           ?> 





                    <table class="data display datatable" id="example">
                    <thead>
                        <tr class="odd gradeX">
                            <td width="10%">SN</td>
                            <td width="15%">User Name</td>
                            <td width="20%">Email</td>
                            <td width="15%">City</td>
                            <td width="15%">Country</td>
                            <td width="15%">Zip Code</td>
                            <th width="10%">Delete</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 

                        $query = "select * from users order by id desc";
                        $contact = $db->select($query);
                        if ($contact) {
                            $i=0;
                        while ($result= $contact -> fetch_assoc()) {
                            $i++;


                    ?>

                        <tr class="even gradeC">
                            <td><?php echo $i;  ?></td>
                            <td><?php echo $result['name']; ?></td>
                            <td><?php echo $result['email']; ?></td>
                            <td><?php echo $result['city']; ?></td>
                            <td><?php echo $result['county']; ?></td>
                            <td><?php echo $result['zip_code']; ?></td>
                            <td><a class="btn btn-red CoustRead02 " onclick="return confirm('Are you sure to DELETE!');" 

                         href="?delid=<?php echo $result['id']; ?>  ">Delete</a></td>
                            
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