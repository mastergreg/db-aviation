<?php
    include "../header.php"
?>

<h2>Insert an Aircraft Fleet</h2>

<form action="/~db/db-aviation/models/insertAircraftFleet.php" method="post">

    <table id="playlist" class ="input form">
    <tr class="odd"><td>Registration Number:</td><td> <input type="int" name="Registration_Number" /></td></tr>
    <tr class="even"><td>Air Carrier:</td><td> <input type="text" name="Air_Carrier" /></td></tr>
    <tr class="odd"><td>Construction Date:</td><td> <input type="int" name="Construction_Date" /></td></tr>
    <tr class="even"><td>Model Code:</td><td> <input type="int" name="Model_Code" /></td></tr>
    </table>

    <input type='submit' value='Submit' title='Προσθήκη'/>                                                   

</form>

<form action='/~db/db-aviation/views/listAircraftFleet.php' method='post'> 
   <input type='submit' value='Cancel' title='Άκυρο'/>                                                   
</form>

<?php
    include "../footer.php"
?>
