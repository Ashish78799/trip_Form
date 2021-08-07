<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to travel Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <img src="bg1.jpg" alt=" Background image" >
    <div class="container">
        <h2>Welcome to Delhi trip </h2>
        <p> Enter your detail and submit this form to confirm your participation in the trip</p>
        <form action="Indexform.php" method="post">
        <div> <label for="name">Name:</label> <input type="text" name="name" id="name" placeholder="Enter your name"> </div> 
        <div> <label for="age">Age:</label> <input type="text" name="age" id="age" placeholder="Enter your age"></div> 
        <div> <label for="gender">Gender:</label> <input type="text" name="gender" id="gender" placeholder="Enter your gender"></div> 
        <div> <label for="email">Email:</label> <input type="email" name="email" id="email" placeholder="Enter your email"></div> 
        <div> <label for="phone">Phone:</label> <input type="phone" name="phone" id="phone" placeholder="Enter your mobile number"></div> 
        <label for="desc">Other Information:</label> <textarea name="desc" id="desc" cols="30" rows="5" placeholder="Enter other information here"></textarea>
           <button class="btn">Submit</button>
             
             
         </form>
    </div>

    <!--INSERT INTO `trip` (`serial`, `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('1', 'Ashish singh', '25', 'male', 'a787996@gmail.com', '8827358854', 'thank you', CURRENT_TIMESTAMP);-->
    <script src="script.js"></script>

    
</body>
</html>