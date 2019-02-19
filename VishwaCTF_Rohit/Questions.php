<?php 
        include('trial.php');
        
        /*$i = rand(1,10);
        echo $i;
        $simple1 = print_data($i);
        $answer1 = print_ans($i);
        $i = rand(1,10);*/
        $simple = array();
        $answer = array();
        for($x=0;$x<10;$x++)
        {
            $i = rand(1,2);
            echo " ".$i;
            $simple[$x] = print_data($i);
            $answer[$x] = print_ans($i);
        }
        $score = 0;
        //echo simple;
?>
<html>
    <head>
    <title>LOGIN</title>
        <link href="quesss.css" rel="stylesheet" type="text/css">
        
        <!--<body onkeydown="return (event.keyCode != 116)">-->
        <body background = "7.jpg" style="background-attachment: fixed">
            
            <!--<img src="5.gif" alt="backgound" class="bg"/>-->
            <!--<div class="content"><h1 ><font color="Red">Welcome</font></h1></div>-->
            <div class="ex2wel"><center>Welcome to</center></div>
            <div class="ex2ctf"><center>VishwaCTF</center></div>
            <br><br>
            
             <center><div class="ex2wel" id ='sc'>Score :  0</div></center>
            
            <br><br>
            <div class="ex1" id = "para1">       
                <button class="button" style="vertical-align:middle" onclick = "myFunction('q1',1)"><span><div id="q1b">Question 1</div></span></button>
                <div class="ques" id ="q1">
                    <div id="sqshow_q1">Q1<br><br></div>
                    <center>Enter Flag :  - 
                        <input id="text1" type="textbox" size = "60" class="tb1" placeholder="Your Flag goes here"><br><br>
                    <button type="button" class="submitbut" onclick = "ans1('text1','q1b','q1')">Submit</button>
                        <button type="button" class="submitbut" onclick = "h1()">Hint</button>
                    </center>
                </div>
                <br><br>
            </div>
            
            <div class="ex1" id = "para2">       
                <button class="button" style="vertical-align:middle" onclick = "myFunction('q2')"><span><div id="q2b">Question 2</div></span></button>
                <div class="ques" id ="q2">
                    <div id="sqshow_q2">Q2<br><br></div>
                    <center>Enter Flag :  - 
                        <input id ="text2" type="textbox" size = "60" class="tb1" placeholder="Your Flag goes here"><br><br>
                    <button type="button" class="submitbut" onclick = "ans2('text2','q2b','q2')">Submit</button>
                    <button type="button" class="submitbut" onclick = "h2()">Hint</button></center>
                </div>
                <br><br>
            </div>
            
            <div class="ex1" id = "para2">       
                <button class="button" style="vertical-align:middle" onclick = "myFunction('q3')"><span><div id="q3b">Question 3</div></span></button>
                <div class="ques" id ="q3">
                    <div id="sqshow_q3">Q2<br><br></div>
                    <center>Enter Flag :  - 
                        <input id="text3" type="textbox" size = "60" class="tb1" placeholder="Your Flag goes here"><br><br>
                    <button type="button" class="submitbut" onclick = "ans3('text3','q3b','q3')">Submit</button><button type="button" class="submitbut" onclick = "h3()">Hint</button></center>
                </div>
                <br><br>
            </div>
            
            <div class="ex1" id = "para2">       
                <button class="button" style="vertical-align:middle" onclick = "myFunction('q4')"><span><div id="q4b">Question 4</div></span></button>
                <div class="ques" id ="q4">
                    <div id="sqshow_q4">Q2<br><br></div>
                    <center>Enter Flag :  - 
                        <input id="text4" type="textbox" size = "60" class="tb1" placeholder="Your Flag goes here"><br><br>
                    <button type="button" class="submitbut" onclick = "ans4('text4','q4b','q4')">Submit</button>
                    <button type="button" class="submitbut" onclick = "h4()">Hint</button></center>
                </div>
                <br><br>
            </div>
            
            <div class="ex1" id = "para2">       
                <button class="button" style="vertical-align:middle" onclick = "myFunction('q5')"><span><div id="q5b">Question 5</div></span></button>
                <div class="ques" id ="q5">
                    <div id="sqshow_q5">Q2<br><br></div>
                    <center>Enter Flag :  - 
                        <input id="text5"  type="textbox" size = "60" class="tb1" placeholder="Your Flag goes here"><br><br>
                    <button type="button" class="submitbut" onclick = "ans5('text5','q5b','q5')">Submit</button>
                    <button type="button" class="submitbut" onclick = "h5()">Hint</button></center>
                </div>
                <br><br>
            </div>
            
            <div class="ex1" id = "para2">       
                <button class="button" style="vertical-align:middle" onclick = "myFunction('q6')"><span><div id="q6b">Question 6</div></span></button>
                <div class="ques" id ="q6">
                    <div id="sqshow_q6">Q2<br><br></div>
                    <center>Enter Flag :  - 
                        <input id="text6"  type="textbox" size = "60" class="tb1" placeholder="Your Flag goes here"><br><br>
                    <button type="button" class="submitbut" onclick = "ans6('text6','q6b','q6')">Submit</button>
                    <button type="button" class="submitbut" onclick = "h6()">Hint</button></center>
                </div>
                <br><br>
            </div>
           
            <div class="ex1" id = "para2">       
                <button class="button" style="vertical-align:middle" onclick = "myFunction('q7')"><span><div id="q7b">Question 7</div></span></button>
                <div class="ques" id ="q7">
                    <div id="sqshow_q7">Q2<br><br></div>
                    <center>Enter Flag :  - 
                        <input id="text7" type="textbox" size = "60" class="tb1" placeholder="Your Flag goes here"><br><br>
                    <button type="button" class="submitbut" onclick = "ans7('text7','q7b','q7')">Submit</button>
                    <button type="button" class="submitbut" onclick = "h7()">Hint</button></center>
                </div>
                <br><br>
            </div>
            
            <div class="ex1" id = "para2">       
                <button class="button" style="vertical-align:middle" onclick = "myFunction('q8')"><span><div id="q8b">Question 8</div></span></button>
                <div class="ques" id ="q8">
                    <div id="sqshow_q8">Q2<br><br></div>
                    <center>Enter Flag :  - 
                        <input id="text8" type="textbox" size = "60" class="tb1" placeholder="Your Flag goes here"><br><br>
                    <button type="button" class="submitbut" onclick = "ans8('text8','q8b','q8')">Submit</button>
                    <button type="button" class="submitbut" onclick = "h8()">Hint</button></center>
                </div>
                <br><br>
            </div>
            
            <div class="ex1" id = "para2">       
                <button class="button" style="vertical-align:middle" onclick = "myFunction('q9')"><span><div id="q9b">Question 9</div></span></button>
                <div class="ques" id ="q9">
                    <div id="sqshow_q9">Q2<br><br></div>
                    <center>Enter Flag :  - 
                        <input id="text9" type="textbox" size = "60" class="tb1" placeholder="Your Flag goes here"><br><br>
                    <button type="button" class="submitbut" onclick = "ans9('text9','q9b','q9')">Submit</button>
                    <button type="button" class="submitbut" onclick = "h9()">Hint</button></center>
                </div>
                <br><br>
            </div>
            
            <div class="ex1" id = "para2">       
                <button class="button" style="vertical-align:middle" onclick = "myFunction('q10')"><span><div id="q10b">Question 10</div></span></button>
                <div class="ques" id ="q10">
                    <div id="sqshow_q10">Q2<br><br></div>
                    <center>Enter Flag :  - 
                        <input id="text10" type="textbox" size = "60" class="tb1" placeholder="Your Flag goes here"><br><br>
                    <button type="button" class="submitbut" onclick = "ans10('text10','q10b','q10')">Submit</button>
                    <button type="button" class="submitbut" onclick = "h10()">Hint</button></center>
                </div>
                <br><br>
            </div>
            
            
            
            <script>
                // var myarr={"R","o","h","i","t"};
                //var y = Math.floor(Math.random()*30)
                var scor = 0;
                
                
                //var arr_hint = new array(0,0,0,0,0,0,0,0,0,0);
                var hh1=0,hh2=0,hh3=0,hh4=0,hh5=0,hh6=0,hh7=0,hh8=0,hh9=0,hh10=0;
                window.onload = function() 
                {
                    $index = 0;
                    
                    var x1 =document.getElementById('sqshow_q1');
                    var complex = <?php echo json_encode($simple[0]); ?>;
                    x1.innerHTML = complex;
                    
                    var x1 =document.getElementById('sqshow_q2');
                    var complex = <?php echo json_encode($simple[1]); ?>;
                    x1.innerHTML = complex;
                    
                    var x1 =document.getElementById('sqshow_q3');
                    var complex = <?php echo json_encode($simple[2]); ?>;
                    x1.innerHTML = complex;
                    
                    var x1 =document.getElementById('sqshow_q4');
                    var complex = <?php echo json_encode($simple[3]); ?>;
                    x1.innerHTML = complex;
                    
                    var x1 =document.getElementById('sqshow_q5');
                    var complex = <?php echo json_encode($simple[4]); ?>;
                    x1.innerHTML = complex;
                    
                    var x1 =document.getElementById('sqshow_q6');
                    var complex = <?php echo json_encode($simple[5]); ?>;
                    x1.innerHTML = complex;
                    
                    var x1 =document.getElementById('sqshow_q7');
                    var complex = <?php echo json_encode($simple[6]); ?>;
                    x1.innerHTML = complex;
                    
                    var x1 =document.getElementById('sqshow_q8');
                    var complex = <?php echo json_encode($simple[8]); ?>;
                    x1.innerHTML = complex;
                    
                    var x1 =document.getElementById('sqshow_q9');
                    var complex = <?php echo json_encode($simple[8]); ?>;
                    x1.innerHTML = complex;
                    
                    var x1 =document.getElementById('sqshow_q10');
                    var complex = <?php echo json_encode($simple[9]); ?>;
                    x1.innerHTML = complex;
                };
                
                
                window.onbeforeunload = function() 
                {
                    return "If you click confirm, You will be kicked out!!!. Are you sure?????";
                }
                
                function myFunction(obj) 
                {
                    var x = document.getElementById(obj);
                    if (x.style.display === "none") 
                    {
                        x.style.display = "block";
                        x.innerHTML = (y);
                    } 
                    else 
                    {
                        x.style.display = "none";
                    }
                }
                
                function ans1(obj,obj1,obj2)
                {
                    var complex = <?php echo json_encode($answer[0]); ?>;
                    x2 = document.getElementById(obj).value;
                    var x3 = document.getElementById(obj1);
                    var x4 = document.getElementById(obj2);
                    if(x2 == complex)
                        {
                            alert("Congratulations! Correct Answer");
                            x3.innerHTML= " Question 1 (Solved)";
                            x4.style.display="none";
                            x4.style.visibility="hidden";
                            <?php $score = $score + 50 ?>
                            var x5 = <?php echo json_encode($score); ?>;
                            var x6 = document.getElementById('sc');
                            scor = scor + 50;
                            x6.innerHTML = "Score :  " + scor;
                            <?php // session()->put("score",scor);?>           
                        }
                    else
                        alert("Oo Oh! Incorrect Flag");
                }
                
                function ans2(obj,obj1,obj2)
                {
                    var complex = <?php echo json_encode($answer[1]); ?>;
                    x2 = document.getElementById(obj).value;
                    var x3 = document.getElementById(obj1);
                    var x4 = document.getElementById(obj2);
                    if(x2 == complex)
                        {
                            alert("Congratulations! Correct Answer");
                            x3.innerHTML= " Question 2 (Solved)";
                            x4.style.display="none";
                            x4.style.visibility="hidden";
                            <?php $score = $score + 50 ?>
                            var x5 = <?php echo json_encode($score); ?>;
                            var x6 = document.getElementById('sc');
                            scor = scor + 50;
                            x6.innerHTML = "Score :  " + scor;
                        }
                    else
                        alert("Oo Oh! Incorrect Flag");
                }
                
                function ans3(obj,obj1,obj2)
                {
                    var complex = <?php echo json_encode($answer[2]); ?>;
                    x2 = document.getElementById(obj).value;
                    var x3 = document.getElementById(obj1);
                    var x4 = document.getElementById(obj2);
                    if(x2 == complex)
                        {
                            alert("Congratulations! Correct Answer");
                            x3.innerHTML= " Question 3 (Solved)";
                            x4.style.display="none";
                            x4.style.visibility="hidden";
                            <?php $score = $score + 50 ?>
                            var x5 = <?php echo json_encode($score); ?>;
                            var x6 = document.getElementById('sc');
                            scor = scor + 50;
                            x6.innerHTML = "Score :  " + scor;;
                        }
                    else
                        alert("Oo Oh! Incorrect Flag");
                }
                
                function ans4(obj,obj1,obj2)
                {
                    var complex = <?php echo json_encode($answer[3]); ?>;
                    x2 = document.getElementById(obj).value;
                    var x3 = document.getElementById(obj1);
                    var x4 = document.getElementById(obj2);
                    if(x2 == complex)
                        {
                            alert("Congratulations! Correct Answer");
                            x3.innerHTML= " Question 4 (Solved)";
                            x4.style.display="none";
                            x4.style.visibility="hidden";
                            <?php $score = $score + 50 ?>
                            var x5 = <?php echo json_encode($score); ?>;
                            var x6 = document.getElementById('sc');
                            scor = scor + 50;
                            x6.innerHTML = "Score :  " + scor;
                        }
                    else
                        alert("Oo Oh! Incorrect Flag");
                }
                
                function ans5(obj,obj1,obj2)
                {
                    var complex = <?php echo json_encode($answer[4]); ?>;
                    x2 = document.getElementById(obj).value;
                    var x3 = document.getElementById(obj1);
                    var x4 = document.getElementById(obj2);
                    if(x2 == complex)
                        {
                            alert("Congratulations! Correct Answer");
                            x3.innerHTML= " Question 5 (Solved)";
                            x4.style.display="none";
                            x4.style.visibility="hidden";
                            <?php $score = $score + 50 ?>
                            var x5 = <?php echo json_encode($score); ?>;
                            var x6 = document.getElementById('sc');
                            scor = scor + 50;
                            x6.innerHTML = "Score :  " + scor;
                        }
                    else
                        alert("Oo Oh! Incorrect Flag");
                }
                
                function ans6(obj,obj1,obj2)
                {
                    var complex = <?php echo json_encode($answer[5]); ?>;
                    x2 = document.getElementById(obj).value;
                    var x3 = document.getElementById(obj1);
                    var x4 = document.getElementById(obj2);
                    if(x2 == complex)
                        {
                            alert("Congratulations! Correct Answer");
                            x3.innerHTML= " Question 6 (Solved)";
                            x4.style.display="none";
                            x4.style.visibility="hidden";
                            <?php $score = $score + 50 ?>
                            var x5 = <?php echo json_encode($score); ?>;
                            var x6 = document.getElementById('sc');
                            scor = scor + 50;
                            x6.innerHTML = "Score :  " + scor;
                        }
                    else
                        alert("Oo Oh! Incorrect Flag");
                }
                
                function ans7(obj,obj1,obj2)
                {
                    var complex = <?php echo json_encode($answer[6]); ?>;
                    x2 = document.getElementById(obj).value;
                    var x3 = document.getElementById(obj1);
                    var x4 = document.getElementById(obj2);
                    if(x2 == complex)
                        {
                            alert("Congratulations! Correct Answer");
                            x3.innerHTML= " Question 7 (Solved)";
                            x4.style.display="none";
                            x4.style.visibility="hidden";
                            <?php $score = $score + 50 ?>
                            var x5 = <?php echo json_encode($score); ?>;
                            var x6 = document.getElementById('sc');
                            scor = scor + 50;
                            x6.innerHTML = "Score :  " + scor;
                        }
                    else
                        alert("Oo Oh! Incorrect Flag");
                }
                
                function ans8(obj,obj1,obj2)
                {
                    var complex = <?php echo json_encode($answer[7]); ?>;
                    x2 = document.getElementById(obj).value;
                    var x3 = document.getElementById(obj1);
                    var x4 = document.getElementById(obj2);
                    if(x2 == complex)
                        {
                            alert("Congratulations! Correct Answer");
                            x3.innerHTML= " Question 8 (Solved)";
                            x4.style.display="none";
                            x4.style.visibility="hidden";
                            <?php $score = $score + 50 ?>
                            var x5 = <?php echo json_encode($score); ?>;
                            var x6 = document.getElementById('sc');
                            scor = scor + 50;
                            x6.innerHTML = "Score :  " + scor;
                        }
                    else
                        alert("Oo Oh! Incorrect Flag");
                }
                
                function ans9(obj,obj1,obj2)
                {
                    var complex = <?php echo json_encode($answer[8]); ?>;
                    x2 = document.getElementById(obj).value;
                    var x3 = document.getElementById(obj1);
                    var x4 = document.getElementById(obj2);
                    if(x2 == complex)
                        {
                            alert("Congratulations! Correct Answer");
                            x3.innerHTML= " Question 9 (Solved)";
                            x4.style.display="none";
                            x4.style.visibility="hidden";
                            <?php $score = $score + 50 ?>
                            var x5 = <?php echo json_encode($score); ?>;
                            var x6 = document.getElementById('sc');
                            scor = scor + 50;
                            x6.innerHTML = "Score :  " + scor;
                        }
                    else
                        alert("Oo Oh! Incorrect Flag");
                }
                
                function ans10(obj,obj1,obj2)
                {
                    var complex = <?php echo json_encode($answer[9]); ?>;
                    x2 = document.getElementById(obj).value;
                    var x3 = document.getElementById(obj1);
                    var x4 = document.getElementById(obj2);
                    if(x2 == complex)
                        {
                            alert("Congratulations! Correct Answer");
                            x3.innerHTML= " Question 10 (Solved)";
                            x4.style.display="none";
                            x4.style.visibility="hidden";
                            <?php $score = $score + 50 ?>
                            var x5 = <?php echo json_encode($score); ?>;
                            var x6 = document.getElementById('sc');
                            scor = scor + 50;
                            x6.innerHTML = "Score :  " + scor;
                        }
                    else
                        alert("Oo Oh! Incorrect Flag");
                }
                
                function h1()
                {
                    alert("Question for Hint 1...");
                    if(hh1==0)
                        {
                            scor = scor - 5;
                            hh1 =1;
                        }
                    var x6 = document.getElementById('sc');
                    x6.innerHTML = "Score :  " + scor;
                }
                
                function h2()
                {
                    alert("Question for Hint 2...");
                    if(hh2==0)
                        {
                            scor = scor - 5;
                            hh2 =1;
                        }
                    var x6 = document.getElementById('sc');
                    x6.innerHTML = "Score :  " + scor;
                }
                
                function h3()
                {
                    alert("Question for Hint 3...");
                    if(hh3==0)
                        {
                            scor = scor - 5;
                            hh3 =1;
                        }
                    var x6 = document.getElementById('sc');
                    x6.innerHTML = "Score :  " + scor;
                }
                
                function h4()
                {
                    alert("Question for Hint 4...");
                    if(hh4==0)
                        {
                            scor = scor - 5;
                            hh4 =1;
                        }
                    var x6 = document.getElementById('sc');
                    x6.innerHTML = "Score :  " + scor;
                }
                
                function h5()
                {
                    alert("Question for Hint 5...");
                    if(hh5==0)
                        {
                            scor = scor - 5;
                            hh5 =1;
                        }
                    var x6 = document.getElementById('sc');
                    x6.innerHTML = "Score :  " + scor;
                }
                
                function h6()
                {
                    alert("Question for Hint 6...");
                    if(hh6==0)
                        {
                            scor = scor - 5;
                            hh6 =1;
                        }
                    var x6 = document.getElementById('sc');
                    x6.innerHTML = "Score :  " + scor;
                }
                
                function h7()
                {
                    alert("Question for Hint 7...");
                    if(hh7==0)
                        {
                            scor = scor - 5;
                            hh7 =1;
                        }
                    var x6 = document.getElementById('sc');
                    x6.innerHTML = "Score :  " + scor;
                }
                
                function h8()
                {
                    alert("Question for Hint 8...");
                    if(hh8==0)
                        {
                            scor = scor - 5;
                            hh8 =1;
                        }
                    var x6 = document.getElementById('sc');
                    x6.innerHTML = "Score :  " + scor;
                }
                
                function h9()
                {
                    alert("Question for Hint 9...");
                    if(hh9==0)
                        {
                            scor = scor - 5;
                            hh9 =1;
                        }
                    var x6 = document.getElementById('sc');
                    x6.innerHTML = "Score :  " + scor;
                }
                
                function h10()
                {
                    alert("Question for Hint 10...");
                    if(hh10==0)
                        {
                            scor = scor - 5;
                            hh10 =1;
                        }
                    var x6 = document.getElementById('sc');
                    x6.innerHTML = "Score :  " + scor;
                }
                
            </script>
        </body>
    </head>