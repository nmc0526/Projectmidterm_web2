<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Page</title>
    <link rel="stylesheet" type="text/css" href="insert.php">
</head>
<body>
    
    <form id="myForm">
    <h1>Registration Form</h1>
    <div>
            <label for="username">Username:</label>
            <br>
            <input type="text" name="username" id="username" placeholder="Username">
        </div>
        <div>
            <label for="first_name">First Name:</label>
            <br>
            <input type="text" name="first_name" id="first_name" placeholder="First Name">
        </div>

        <div>
            <label for="middle_name">Middle Name:</label>
            <br>
            <input type="text" name="middle_name" id="middle_name" placeholder="Middle Name">
        </div>

        <div>
            <label for="last_name">Last Name:</label>
            <br>
            <input type="text" name="last_name" id="last_name" placeholder="Last Name">
        </div>

        <div>
            <label>Gender:</label>
            <div class="gender-radio">
                <input type="radio" id="male" name="gender" value="male" required>
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="female" required>
                <label for="female">Female</label>
            </div>
        </div>



        <div>
            <label for="birthdate">Birth Date:</label>
            <br>
            <input type="date" name="birthdate" id="birthdate" placeholder="Birth Date">
        </div>

        <div>
            <label for="age">Age:</label>
            <br>
            <input type="text" name="age" id="age" placeholder="Age">
        </div>
        
        <label for="email_address">Email Address:</label>
        <br>
        <input type="text" name="email_address" id="email_address" placeholder="Email Address">
    </div>

    <div>
        <label for="password">Password:</label>
        <br>
        <input type="password" name="password" id="password" placeholder="Password" pattern= "(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" required>
    </div>

    <div>
       <button>Submit</button>
    </div>
</form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(e) {
                e.preventDefault();

                const formData = {
                    "username": $("#username").val(),
                    "firstname": $("#first_name").val(),
                    "middle_ame": $("#middle_name").val(),
                    "lastname": $("#last_name").val(),
                    "gender": $("input[name='gender']:checked").val(),
                    "birthdate": $("#birthdate").val(),
                    "age": $("#age").val(),
                    "email_address": $("#emailaddress").val(),
                    "password": $("#password").val()
                };

                
                $.ajax({
                    type: 'POST',
                    url: 'insert.php',
                    data: formData,
                    success: function(response) {
                        console.log(response);
                    },
                    error: function(error) {
                        console.error("Error!", error);
                    }
                });
            });
        });
    </script>

<script>
    
    function calculateAge() {
       
        var birthdate = document.getElementById("birthdate").value;
        
      
        var today = new Date();
        var birthDate = new Date(birthdate);
        var age = today.getFullYear() - birthDate.getFullYear();
        var monthDiff = today.getMonth() - birthDate.getMonth();
        if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
            age--;
        }
        
    
        document.getElementById("age").value = age;
    }

    
    document.getElementById("birthdate").addEventListener("change", calculateAge);
</script>

       
    
</body>
</html>