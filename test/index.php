<!DOCTYPE html>
 <html lang="en">

    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Salary</title>
    </head>

    <body>

     <?php

        $philhealth = 354.85;
        $pag_ibig = 100;
        $sss = 581.30;

     ?>

     <form method = "post">
        <table border = "0">
            <div>
                <input type = "text" name = "salary" value = "", placeholder = "Enter salary" />
            </div>
            <div>
                <input type = "submit" name = "submit" value = "submit" />
            </div>
     </form>

     <?php
        if(isset($_POST['submit']))
        {
            $gross = $_POST['salary'];

            $deduc = $gross - $philhealth - $pag_ibig - $sss;
            $tax = 0.0318 * $deduc; 
 
            $net = $deduc - $tax;
        
            echo "<br>";
            echo "Net :" . number_format($net, 2, '.', '.');
            echo "<br>";
            echo "<br>";

            echo "Philhealth :" . $philhealth . "<br>". "Pag-Ibig :". $pag_ibig . "<br>". "SSS :". $sss . "<br>". "Tax:" . number_format($tax, 2, '.', '.');
            
        }

     ?>

    <div class="">
        <p>Name:
		 <input type="text" name="name" value="" placeholder="Enter Name" autocomplete="off" required />
        </p>
    </div>


    <div class="">
        <p>Employee Number:
		 <input type="text" name="employee" value="" placeholder="Enter Employee Number" autocomplete="off" required />
        </p>
    </div>

    <div class="">
        <p>Address:
		 <input type="text" name="address" value="" placeholder="Enter Address" autocomplete="off" required />
        </p>
	</div>

    <div>
    
    Birthday</br>
    Month:
        <select $month>

            <?php 
                    for($m=1; $m<=12; $m++)
                    {
                        echo "<option value=".$m.">".$m."</option>";
                    }
            ?> 
     
                    <option $month> </option>   
        </select> 
    Day:
        <select name="day">

            <?php

                for($d=1; $d<=31; $d++)
                {
                    echo "<option value=".$d.">".$d."</option>";
                }
            ?> 

                     <option name="day"> </option>
                      
        </select>
    Year:
        <select name="year">

            <?php 
                    for($y=1972; $y<=2022; $y++)
                    {
                        echo "<option value=".$y.">".$y."</option>";
                    }
            ?> 
     
                    <option name="year"> </option>   
        </select>
</div>

<div class="">
        <p>Birth Place:
		 <input type="text" name="birthplace" value="" placeholder="Enter Birth Place" autocomplete="off" required />
        </p>
	</div>

<div class="">
        <p>Contact Number:
		 <input type="text" name="contact" value="" placeholder="Enter Contact Number" autocomplete="off" required />
        </p>
	</div>

<div class="">
        <p>Email Address:
		 <input type="text" name="email" value="" placeholder="Enter Email Address" autocomplete="off" required />
        </p>
	</div>

   
    
    </body>
 </html>