<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form action="consume.php" method="post">
    <p>
        <label for="first_name">First Name:</label>
        <input type="text"
               required id="first_name"
               name="first_name"
               class="textfield"
               required pattern="[A-Za-z]+"
                />
    </p>

    <p>
        <label for="last_name">Last Name:</label>
        <input type="text"
               required id="last_name"
               name="last_name"
               class="textfield"
               required pattern="[A-Za-z]+"
                />
    </p>

    <!--Long regex matches phone numbers, sourced from Google:
    https://developers.google.com/web/fundamentals/input/form/provide-real-time-validation?hl=en-->
    <p>
        <label for="phone_number">Phone Number:</label>
        <input type="tel"
               required id="phone_number"
               name="phone_number"
               placeholder="1-111-111-1111"
               class="textfield"
               required
               pattern="^(?:(?:\+?1\s*(?:[.-]\s*)?)?(?:\(\s*([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9])\s*\)|([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9]))\s*(?:[.-]\s*)?)?([2-9]1[02-9]|[2-9][02-9]1|[2-9][02-9]{2})\s*(?:[.-]\s*)?([0-9]{4})(?:\s*(?:#|x\.?|ext\.?|extension)\s*(\d+))?$"
                />
    </p>

    <!--Must be over 13 to sign up for internet services, oldest person ever is 122.-->
    <p>
        <label for="age">Age:</label>
        <input type="number"
               required id="age"
               name="age"
               class="textfield"
               min="13" max="122" step="1"
                />
    </p>

    <p><input type="submit" value="Submit Form" class="button"/></p>
</form>
</body>
</html>