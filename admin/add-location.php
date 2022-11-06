<?php include 'inc/hader.php'; ?>
<?php include 'inc/saidber.php'; ?> 





       <div class="grid_10">
        
            <div class="box round first grid">
                <h2>Add Location</h2>
                <div class="block">               
                 <form action="DB-add-location.php" method="post" enctype="multipart/form-data">
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>City in english</label>
                            </td>
                            <td>
                                <input type="text" placeholder="City in english..." class="medium" name="en_city" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>City in Garman</label>
                            </td>
                            <td>
                                <input type="text" placeholder="City in Garman..." class="medium" name="de_city" />
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <label>Country in english</label>
                            </td>
                            <td>
                                <input type="text" placeholder="Country in english..." class="medium" name="en_country" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Country in Garman</label>
                            </td>
                            <td>
                                <input type="text" placeholder="Country in Garman..." class="medium" name="de_country" />
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <label>Zip Code in english</label>
                            </td>
                            <td>
                                <input type="text" placeholder="Zip Code in english..." class="medium" name="en_zip_code" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Zip Code in Garman</label>
                            </td>
                            <td>
                                <input type="text" placeholder="Zip Code in Garman..." class="medium" name="de_zip_code" />
                            </td>
                        </tr>
                        
                     
                        <tr>
                            <td></td>
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