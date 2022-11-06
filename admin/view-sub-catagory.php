<?php include 'inc/hader.php'; ?>
<?php include 'inc/saidber.php'; ?> 





 <div class="grid_10">
            <div class="box round first grid">
                <h2>User List</h2>
                <div class="block"> 

                     <?php 
                if (isset($_GET['delid'])) {
                  $did = $_GET['delid'];
                  $query = "DELETE FROM  sub_catagory WHERE id='$did'";
                   $db-> delete($query);
                }
               
           ?> 





                    <table class="data display datatable" id="example">
                    <thead>
                        <tr class="odd gradeX">
                            <td width="10%">SN</td>
                            <td width="25%">Name in english</td>
                            <td width="25%">Name in Garman</td>
                            <td width="30%">Parent category</td>
                            <th width="10%">Delete</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 

                        $query = "select * from sub_catagory order by id desc";
                        $contact = $db->select($query);
                        if ($contact) {
                            $i=0;
                        while ($result= $contact -> fetch_assoc()) {
                            $i++;


                    ?>

                        <tr class="even gradeC">
                            <td><?php echo $i;  ?></td>
                            <td><?php echo $result['en_name']; ?></td>
                            <td><?php echo $result['de_name']; ?></td>
                            <td>


<?php 
                        
                         $gat_cat= $result['parent_cat']; 
                          $query2 = "select * from category where cat_id = $gat_cat";
                        $contact2 = $db->select($query2);
                        if ($contact2) {
                            $i=0;
                        while ($result2= $contact2 -> fetch_assoc()) {
                            $i++;


                    ?>


                        <?php echo $result2[$lang.'_title']; ?>






                          <?php }} ?>

                            </td>
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