<?php
    include "../header.php"
?>

<h2>Insert an Aircraft Model</h2>


<form action="/~db/db-aviation/models/insertAircraftModel.php" method="post">

    <table class="input form">
    <tr><td>Model_Code:</td><td> <input type="int" name="Model_Code" /></td></tr>
    <tr><td>Model_Name:</td><td> <input type="text" name="Model_Name" /></td></tr>
    <tr><td>Capacity:</td><td> <input type="int" name="Capacity" /></td></tr>
    <tr><td>Weight:</td><td> <input type="int" name="Weight" /></td></tr>
    <tr><td>Manufacturer:</td><td> <input type="text" name="Manufacturer" /></td></tr>
    </table>
    
    <input type="submit" /></td>

</form>

<form action='/~db/db-aviation/views/listAircraftModel.php' method='post'> 
<input type='submit' value='Cancel' title='Άκυρο'/>                                                   
</form>


<?php
    include "../footer.php"
?>

