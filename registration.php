<!DOCTYPE html>
<html>
    
    <head>
        <title> Registration</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/css/registration.css">
    </head>

    <body>

        <div class="Containeer">

            <div class ="row">

                <div class = "col-md-3">
                </div>

                <div class="col-md-6">
                    <div class ="box">

                        <div class = "header">

                            <h2> Sign up</h2>
            
                        </div>
            
                        <form action = registarion.php method= "POST"> <!-- makeinput field for get info-->
            
                            <div>
                                <label class ="usename">Username</label>    
                                <input id="in_username" type= "text" name ="username" style="width: 23vw ; height: 2vw ;">
            
                            </div>
            
                            <div>
                                <label class ="email">Email</label>   
                                <input id="email"type= "text" name ="email" style="width: 23vw ; height: 2vw ;">
            
                            </div>
            
                            <div>
                                <label class ="password">Password</label>   
                                <input id="password" type= "password" name ="password" style="width: 23vw ; height: 2vw ;">
            
                            </div>
            
                            <div>
                                <label class ="password_2">Confirm Password </label>   
                                <input id="password_2" type= "password" name ="password_2" style="width: 23vw ; height: 2vw ;" >
            

                            </div>
                            
                            <div class = "submit">
                                <button type="submit" class ="button" style="vertical-align: bottom; "><span>Sign up</span></button>
                            </div>
                             
                        </form>
                    </div>
                </div>
                    
        </div>

    </body>
</html>