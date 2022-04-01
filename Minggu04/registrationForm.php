<!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>
    </head>
    <body>
        <h2>Registration</h2>
        <form action="forRegistrationForm.php" method="POST">
            <label for="fname">First Name</label>
            <input type="text" name="fname"><br>
            <label for="lname">Last Name</label>
            <input type="text" name="lname"><br>
            <label for="email">E-Mail</label>
            <input type="email" name="email"><br>
            <label for="mtype">Member Type</label>
            <p><input type="checkbox" name="mtype" value="Petani" checked>Petani</p>
            <p><input type="checkbox" name="mtype" value="Pedagang">Pedagang</p>
            <p><input type="checkbox" name="mtype" value="Tengkulak">Tengkulak</p>
            <label for="leducation">Last Education</label><br>
            <select name="leducation">
                <option value="SMP">SMP</option>
                <option value="SMA">SMA</option>
                <option value="Diploma">Diploma</option>
                <option value="Sarjana">Sarjana</option>
                <option value="Magister">Magister</option>
                <option value="Doctor">Doctor</option>
            </select><br><br>
            <label for="gender">Gender</label><br>
            <p><input type="radio" name="gender" value="Male">Male</p>
            <p><input type="radio" name="gender" value="Female">Female</p>
            <label for="comment">Your Comments</label><br>
            <textarea name="comment" id="" cols="30" rows="10"></textarea><br>
            <input type="submit">
        </form>
    </body>
</html>