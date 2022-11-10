<?php include 'inc/hader3.php'; ?>
<?php include 'inc/saidber.php'; ?> 





       <div class="grid_10">
        
            <div class="box round first grid">
                <h2>Add Contact Info</h2>
                <div class="block">               
                 <form action="DB-add-snept.php" method="post" enctype="multipart/form-data">
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>Add Code(Please Start and End With Script Tag) </label>
                            </td>
                            <td>
                                
                                
                                <input type="text" placeholder="snipet code" class="medium" name="snipet_code" />
                            </td>
                        </tr>
                        
                       
                        
                     
                        <tr>
                            
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>



<?php include 'inc/foter.php'; ?>  

<script type="text/javascript">

        $(document).ready(function () {
            setupLeftMenu();

            $('.datatable').dataTable();
            setSidebarHeight();


        });
    </script>