<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up !</title>
</head>
<body>
<h1>Buat Account Baru !</h1>
<form action="/welcome" method="post">
    @csrf
            <label for="first">First Name</label><br>
            <input type="text" id="first" name="first"><br>
            <label for="last">Last Name</label><br>
            <input type="text" id="last" name="last">
            <p>Gender :</p>
            <input type="radio" name="gender">Male <br>
            <input type="radio" name="gender">Female <br>
            <input type="radio" name="gender">Other <br>
            <br>
            <label for="negara">Nationality:</label><br>
                <select id="negara">
                    <option value="indonesia">Indonesia</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Inggris">Inggris</option>
                    <option value="Jerman">Jerman</option>
                </select>
            <p>Language Spoken :</p>
                <input type="checkbox" name="bahasa" value=0>Bahasa Indonesia <br>
                <input type="checkbox" name="bahasa" value=0>English <br>
                <input type="checkbox" name="bahasa" value=0>Other <br><br><br>
            <label for="bio">Bio :</label><br>
            <textarea cols="70" rows="7" id="bio"></textarea><br>
            <input type="submit" value="registrasi">
</form>
</body>
</html>