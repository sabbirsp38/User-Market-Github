<?php include 'inc/hader3.php'; ?>
<?php include 'inc/saidber.php'; ?> 





       <div class="grid_10">
        
            <div class="box round first grid">
                <h2>Add Contact Info</h2>
                <div class="block">               
                 <form action="DB-add-contat-info.php" method="post" enctype="multipart/form-data">
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>Address in english</label>
                            </td>
                            <td>
                                <input type="text" placeholder="Address in english" class="medium" name="en_location" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Address in Garman</label>
                            </td>
                            <td>
                                <input type="text" placeholder="Address in Garman" class="medium" name="de_location" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Mobile Number in english</label>
                            </td>
                            <td>
                                   <input type="text" placeholder="Mobile Number in english" class="medium" name="en_number" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Mobile Number in Garman</label>
                            </td>
                            <td>
                                   <input type="text" placeholder="Mobile Number in Garman" class="medium" name="de_number" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Email in english</label>
                            </td>
                            <td>
                                   <input type="text" placeholder="Email in english" class="medium" name="en_email" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Email in Garman</label>
                            </td>
                            <td>
                                   <input type="text" placeholder="Email in Garman" class="medium" name="de_email" />
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