<?php include 'inc/hader.php'; ?>
<?php include 'inc/saidber.php'; ?> 





 <div class="grid_10">
            <div class="box round first grid">
                <h2><?php echo $language["View_Category"]; ?></h2>
                <div class="block"> 

                     <?php 
                if (isset($_GET['delid'])) {
                  $did = $_GET['delid'];
                  $query = "DELETE FROM  category WHERE cat_id='$did'";
                  $query2 = "DELETE FROM  sub_catagory WHERE parent_cat='$did'";
                   $db-> delete($query);
                   $db-> delete($query2);
                }
               
           ?> 





                    <table class="data display datatable" id="example">
                    <thead>
                        <tr class="odd gradeX">
                            <td width="10%">SN</td>
                            <td width="25%"><?php echo $language["Category_in_english"]; ?></td>
                            <td width="25%"><?php echo $language["Category_in_German"]; ?></td>
                            <td width="30%"><?php echo $language["Category_Icon"]; ?></td>
                            <th width="10%"><?php echo $language["Delete"]; ?></th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 

                        $query = "select * from category order by id desc";
                        $contact = $db->select($query);
                        if ($contact) {
                            $i=0;
                        while ($result= $contact -> fetch_assoc()) {
                            $i++;


                    ?>

                        <tr class="even gradeC">
                            <td><?php echo $i;  ?></td>
                            <td><?php echo $result['en_title']; ?></td>
                            <td><?php echo $result['de_title']; ?></td>
                            <td><img style="max-width: 150px; max-height: 150px;" src="../uploads/<?php echo $result['icon']; ?>"></td>
                            <td><a class="btn btn-red CoustRead02 " onclick="return confirm('<?php echo $language["Are_you_sure_to_DELETE"]; ?>!');" 

                         href="?delid=<?php echo $result['cat_id']; ?>  "><?php echo $language["Delete"]; ?></a></td>
                            
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