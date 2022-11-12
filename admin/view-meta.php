<?php include 'inc/hader.php'; ?>
<?php include 'inc/saidber.php'; ?> 





 <div class="grid_10">
            <div class="box round first grid">
                <h2><?php echo $language["View_SEO_Information"]; ?></h2>
                <div class="block"> 

                     <?php 
                if (isset($_GET['delid'])) {
                  $did = $_GET['delid'];
                  $query = "DELETE FROM  seo WHERE id='$did'";
                   $db-> delete($query);
                }
               
           ?> 





                    <table class="data display datatable" id="example">
                    <thead>
                        <tr class="odd gradeX">
                            <td width="5%">SN</td>
                            <td width="15%"><?php echo $language["Meta_Title_in_english"]; ?></td>
                            <td width="15%"><?php echo $language["Meta_Title_in_German"]; ?></td>
                            <td width="15%"><?php echo $language["Meta_Description_in_english"]; ?></td>
                            <td width="15%"><?php echo $language["Meta_Description_in_German"]; ?></td>
                            <td width="15%"><?php echo $language["Meta_Keword_in_english"]; ?></td>
                            <td width="15%"><?php echo $language["Meta_Keword_in_German"]; ?></td>
                            <th width="5%"><?php echo $language["Delete"]; ?></th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 

                        $query = "select * from seo order by id desc";
                        $contact = $db->select($query);
                        if ($contact) {
                            $i=0;
                        while ($result= $contact -> fetch_assoc()) {
                            $i++;


                    ?>

                        <tr class="even gradeC">
                            <td><?php echo $i;  ?></td>
                            <td><?php echo $result['en_meta_titile']; ?></td>
                            <td><?php echo $result['de_meta_titile']; ?></td>
                            <td><?php echo $result['en_meta_dec']; ?></td>
                            <td><?php echo $result['de_meta_dec']; ?></td>
                            <td><?php echo $result['en_meta_keword']; ?></td>
                            <td><?php echo $result['de_meta_keword']; ?></td>
                            <td><a class="btn btn-red CoustRead02 " onclick="return confirm('<?php echo $language["Are_you_sure_to_DELETE"]; ?>!');" 

                         href="?delid=<?php echo $result['id']; ?>  "><?php echo $language["Delete"]; ?></a></td>
                            
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