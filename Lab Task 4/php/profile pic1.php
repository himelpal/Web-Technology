<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROFILE PICTURE.</title>
    <h1 style="color: green;"><b>Himel Foundation.</b></h1>
    <p style = "text-align:right">
    Logged in As.
        <a href = "Bob.php">Bob |</a>
        <a href = "home.php">Log Out</a>
        </p>
        <hr/>
</head>
<body>
     <table>
     <tr>
      <th></th>
      <th colspan = "2"> </th>
      </tr>
      <tr>
      <td>
        <div  style = "width:500px">
            <ul>
                <p style="font-size: 20px;"><b> ACCOOUNT</b></p>
                <hr/>
                <li><a href="Dashboard.php">Dashboard<a></li>
                <li><a href="Bob.php">View Profie</li>
                <li><a href="editpro.php">Edit Profile</li>
                <li><a href="profile pic1.php">Change Profile Picture</li>
                <li><a href="Changepass2.php">Change Password</li>
                <li><a href="home.php">Log Out</a></li>
            </ul>
        </div>
        </td>
        
        <td><div style = "width:500px">
        <fieldset style = "height:200px">
        <form>
        <?php
        require 'profile pic.php'
        ?>
        </fieldset>
        </div>
        </td>
        </tr>

    </table>
    </body>
    <hr/>
<footer>
    <p style = "text-align:center";>Copyright: Himel Paul&copy;2020 </p>
</footer>
</html>