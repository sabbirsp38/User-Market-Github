<?php include 'inc/hader.php'; ?>
<?php include 'inc/saidber.php'; ?> 





 <div class="grid_10">
            <div class="box round first grid">
                <h2>User List</h2>
                <div class="block"> 

                     <?php 
                if (isset($_GET['delid'])) {
                  $did = $_GET['delid'];
                  $query = "DELETE FROM  footer WHERE id='$did'";
                   $db-> delete($query);
                }
               
           ?> 





                    <table class="data display datatable" id="example">
                    <thead>
                        <tr class="odd gradeX">
                            <td width="5%">SN</td>
                            <td width="15%">City in english</td>
                            <td width="15%">City in Garman</td>
                            <td width="30%">Country in english</td>
                            <td width="30%">Country in Garman</td>
                           
                            <th width="5%">Delete</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 

                        $query = "select * from footer order by id desc";
                        $contact = $db->select($query);
                        if ($contact) {
                            $i=0;
                        while ($result= $contact -> fetch_assoc()) {
                            $i++;


                    ?>

                        <tr class="even gradeC">
                            <td><?php echo $i;  ?></td>
                            <td><?php echo $result['en_titile']; ?></td>
                            <td><?php echo $result['de_titile']; ?></td>
                            <td><?php echo $result['en_dec']; ?></td>
                            <td><?php echo $result['de_dec']; ?></td>
                            
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