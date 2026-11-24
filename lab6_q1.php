<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <title>Lab 6 Q1</title> 
</head> 
<body> 

    <?php  
        $name = "Maisarah Qurratu'aini binti Faizal";
        $matricNo = "AI240294";
        $course = "Bachelor of Computer Science (Software Engineering)";
        $year = "Year 3";
        $address = "Lorong Anugerah, Kampung Parit Jelutong, Parit Raja, 86400 Batu Pahat, Johor. ";
    ?> 

    <h2>Student Information</h2>

    <table border="1" cellpadding="10"> 
        <tr> 
            <td>Name</td> 
            <td><?php echo "$name"; ?></td>  
        </tr> 
        <tr> 
            <td>Matric Number</td> 
            <td><?php echo "$matricNo"; ?></td>  
        </tr>
        <tr> 
            <td>Course</td> 
            <td><?php echo "$course"; ?></td>  
        </tr>
        <tr> 
            <td>Year of Study</td> 
            <td><?php echo "$year"; ?></td>  
        </tr>
        <tr> 
            <td>Address</td> 
            <td><?php echo "$address"; ?></td>  
        </tr>
    </table> 

</body> 
</html> 