<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form id="form1">
           
            <h1>CodeAplha Survey </h1>
            <input type="text" placeholder="Name" required>
            <input type="email" placeholder="Email" required>
            <input type="text" placeholder="Phone" required>
            <input type="text" placeholder="Gender" required>

            <div class="btn-box">
                <button type="button" id="Next1">Next</button>
            </div>
        </form>


        <form id="form2">
            <h1>About us</h1>
            <input type="text" placeholder="Country" required>
            <input type="text" placeholder="Pincode" required>
            <input type="text" placeholder="Address" required>
            <input type="text" placeholder="Religion" required>
            <input type="text" placeholder="Caste" required>
         

            <div class="btn-box">
                <button type="button" id="Back1">Back</button>
                <button type="button"  id="Next2">Next</button>
            </div>
        </form>


        <form id="form3">
            <h1>Feedbacks</h1>
            <input type="text" placeholder="Feedback" required >
            <input type="text" placeholder="Give the ratings 1 to 10"  required>
            <input type="text" placeholder="From where you heared about us" >
            
            <div class="btn-box">
                <button type="button" id="Back2">Back</button>
                <button type="submit">Submit</button>
            </div>
        </form>
        <div class="step-row">
            <div id="progress"> </div>
            <div class="step-col"><small>Step 1</small></div>
            <div class="step-col"><small>Step 2</small></div>
            <div class="step-col"><small>Step 3</small></div>

        </div>
    </div>


    <script>

        var Form1=document.getElementById("form1");
        var Form2=document.getElementById("form2");
        var Form3=document.getElementById("form3");

        var Next1= document.getElementById("Next1");
        var Next2= document.getElementById("Next2");
        var Back1= document.getElementById("Back1");
        var Back2= document.getElementById("Back2");
        var progress= document.getElementById("progress");

        Next1.onclick=function(){
            Form1.style.left="-450px";
            Form2.style.left="40px";
            progress.style.width="250px";

        }
        Back1.onclick=function(){
            Form1.style.left="40px";
            Form2.style.left="450px";
            progress.style.width="130px";

        }
        Next2.onclick=function(){
            Form2.style.left="-450px";
            Form3.style.left="40px";
            progress.style.width="380px";

        }
        Back2.onclick=function(){
           
            Form2.style.left="40px"; 
            Form3.style.left="450px";
            
            progress.style.width="250px";

        }
    </script>

    

    
</body>
</html>