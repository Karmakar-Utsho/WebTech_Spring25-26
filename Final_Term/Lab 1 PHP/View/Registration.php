<?php
include "../Controller/Registrationvalidation.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title> PHP Form Validation Example </title>
    </head>
    <body>
        <form method ="post" action="">
            <table>
                <tr>
                    <td><p style = 'color: red '> * Required Field </p></td><br>
                </tr>
                <tr>
                    <td><label for ="Name">Name: </label></td>
                    <td><input type ="text" id = "name" name = "name"> <?php echo $name ?></td>
                    <td><p style = 'color: red'>*</p></td>
                </tr>

                <tr>
                    <td><label for ="email">E-Mail: </label></td>
                    <td><input type = "text" id="email" name ="email"> <?php echo $email ?></td>
                    <td><p style = 'color: red'>*</p></td> 
                </tr>

                <tr>
                    <td><label for ="website">Website: </label></td>
                    <td><input type = "text" id = "website" name = "website"> <?php echo $website ?></td>
                </tr>

                <tr>
                    <td><label for="comment">Comment: </label>
                    <td><textarea id="comment" name = "comment" rows="5" cols = "40" ></textarea><?php echo $comment ?></td>
                </tr>

                <tr>
                    <td><label for = "gender">Gender: </label>
                    <td>
                        <input type = "radio" id ="GenderFemale" name="Gender" value ="Female">
                        <label for = "GenderFemale"> Female </label>
                        <input type = "radio" id ="GenderMale" name="Gender" value ="Male">
                        <label for = "GenderMale"> Male </label>
                        <input type = "radio" id ="GenderOther" name="Gender" value ="Other">
                        <label for = "GenderOther"> Other </label>
                        <td><p style = 'color: red'>*</p></td>
                        <td><?php echo $gender ?></td>
                    </td>
                </tr>

                <tr>
                    <td><input type="submit" id ="submit" name ="submit" value="Submit"></td>
                </tr>
    
            </table>
        </form>
    </body>
</html>