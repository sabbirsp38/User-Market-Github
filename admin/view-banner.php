<?php include 'inc/hader.php'; ?>
<?php include 'inc/saidber.php'; ?> 





 <div class="grid_10">
            <div class="box round first grid">
                <h2><?php echo $language["Banner_List"]; ?></h2>
                <div class="block"> 

                    




                    <table class="data display datatable" id="example">
                    <thead>
                        <tr class="odd gradeX">
                            <td width="5%">SN</td>
                            <td width="10%"><?php echo $language["Catagoty"]; ?></td>
                            <td width="10%"><?php echo $language["Catagoty"]; ?></td>
                            <td width="10%"><?php echo $language["English_Banner_Title"]; ?></td>
                            <td width="10%"><?php echo $language["German_Banner_Title"]; ?></td>
                            <td width="10%"><?php echo $language["English_Banner_Discription"]; ?></td>
                            <td width="10%"><?php echo $language["German_Banner_Discription"]; ?></td>
                            <td width="10%"><?php echo $language["English_Button_Text"]; ?></td>
                            <td width="10%"><?php echo $language["German_Button_Text"]; ?></td>
                            <td width="10%"><?php echo $language["Button_URL"]; ?></td>
                            <td width="10%"><?php echo $language["Banner_Image"]; ?></td>
                            <th width="5%"><?php echo $language["Delete"]; ?></th>
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
                            <td><?php echo $result['en_banner_title']; ?></td>
                            <td><?php echo $result['de_banner_title']; ?></td>
                            <td><?php echo $result['en_banner_dec']; ?></td>
                            <td><?php echo $result['de_banner_dec']; ?></td>
                            <td><?php echo $result['en_botton_text']; ?></td>
                            <td><?php echo $result['de_botton_text']; ?></td>
                            <td><?php echo $result['button_url']; ?></td>
                            
                            <td><img style="max-width: 150px; max-height: 150px;" src="../uploads/<?php echo $result['banner_img']; ?>"></td>


                            <td><a class="btn btn-red CoustRead02 " onclick="return confirm('<?php echo $language["Are_you_sure_to_DELETE"]; ?>!');" 

                         href="DB-removed-banner.php? $id=<?php echo $result['id']; ?>   "><?php echo $language["Delete"]; ?></a></td>
                            
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