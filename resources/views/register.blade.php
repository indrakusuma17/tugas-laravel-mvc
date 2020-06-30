<!DOCTYPE html>
<html>
    <head>
        <title>Form Sign Up</title>
    </head>
    <body>
        <h1>Buat Account Baru</h1>
        <h3>Sign Up Form</h3>
        <p>First name:</p>
        <form action="/welcome" method="post">
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
        <input type="text" name="firstname"> <br/>
        <p>Last name:</p>
        <input type="text" name="lastname"> <br/>
        <p>Gender:</p>
            <input type="radio"> Male <br>
            <input type="radio"> Female <br>
            <input type="radio"> Other
            <p>Nationality:</p>
            <select name='Nationality'>
                <option value='Indonesian'>Indonesian</option>
                <option value='Singaporean'>Singaporean</option>
                <option value='Malaysian'>Malaysian</option>
                <option value='American'>American</option>
              </select>
            <p>Language Spoken:</p>
            <input type="checkbox"> Bahasa Indonesia <br>
            <input type="checkbox"> English <br>
            <input type="checkbox"> Other
            <p>Bio:</p>
            <textarea cols="30" rows="10"></textarea>
            <br>
		<input type="submit" value="Sign Up">
	</form>
    </body>
</html>