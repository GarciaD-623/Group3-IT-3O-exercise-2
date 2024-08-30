<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="logo.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEAM 3 PROFILE</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #060912;
            background-size: cover;
            text-align: center;
        }

        .container {
            padding: 20px;
        }

        h1 {
            text-align: center;
            font-size: 3.5em;
            color: #ffffff;
            margin-top: 20px;
        }
       .profile-container img {
           border-radius: 50%;

       }
        .team-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .team-member {

            background-color: #ffffff;
            padding: 20px;
            margin: 10px;
            border-radius: 10px;
            width: 300px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;

        }

            #role {
                color: #000000;
            }
           #p1 {
           color: #000000;
            }
           #p2 {
            color: #000000;
            }
          #p3 {
            color: #000000;
            }
          #p4 {
            color: #000000;
            }
          #p5 {
            color: #000000;
            }

            .team-member img {
                border-radius: 50%;
                width: 150px;
                height: 150px;
                object-fit: cover;
                margin-bottom: 15px;
            }

            .team-member h2 {
                font-size: 22px;
                margin: 10px 0;
            }

            .team-member p {
                font-size: 16px;
                color: #666;
            }

            .team-member a {
                text-decoration: none;
                color: #3498db;
                font-weight: bold;
                display: inline-block;
                margin-top: 10px;
            }


        footer {
            background-color: #1a1a1a;
            color: #ffffff;
            padding: 20px;
            margin-top: 30px;
            position: relative;
            bottom: 0;
            width: 100%;
            text-align: center;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.2);
        }

        footer h2 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        footer p {
            margin: 0;
            font-size: 14px;
        }

        footer a {
            color: #3498db;
            text-decoration: none;
            font-weight: bold;
        }

        footer a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>

    <div class="profile-container">
        <img src="logo.jpg" alt="Logo">
       <h1>MEET OUR TEAM</h1>
    </div>

    <div class="team-container">

        <!-- Team Leader 1 -->
        <div class="team-member">
            <img src="darryl-garcia.jpg" alt="Darryl Garcia">
            <h2>Darryl Garcia</h2>
            <p id="role">Team Leader</p>
            <p id="p1">He prioritize necessary task and does not waste time in doing unimportant things until that task is finished. </p>
    
            <!--this changes the paragraph when there's a mouse over it-->
            <script>
                document.getElementById('p1').addEventListener("mouseover", cText);
                document.getElementById('p1').addEventListener("mouseout", cText2);


                function cText() {
                    document.getElementById('p1').innerHTML = "He have knowledge in coding, but mostly on html and c++ only, good at time management and efficient at his work.";
                }
                function cText2() {
                    document.getElementById('p1').innerHTML = "He prioritize necessary task and does not waste time in doing unimportant things until that task is finished.";
                }
            </script>
            <a href="darryl-profile.html">View Profile</a>
        </div>

        <!-- Team Member 1 -->
        <div class="team-member">
            <img src="reymark-bismar.jpg" alt="Reymark Bismar">
            <h2>Reymark Bismar</h2>
            <p id="role">Member</p>
            <p id="p2">Reymark is eager to expand his knowledge and values teamwork, time management, and effective collaboration. He is committed to growth and making a meaningful impact.</p>
            <script>
                document.getElementById('p2').addEventListener("mouseover", cText);
                document.getElementById('p2').addEventListener("mouseout", cText2);


                function cText() {
                    document.getElementById('p2').innerHTML = "Reymark has some knowledge in coding languages like C++, HTML, and CSS. While he's still honing his skills, he is committed to improving his proficiency and eager to expand his knowledge.";
                }
                function cText2() {
                    document.getElementById('p2').innerHTML = "Reymark is eager to expand his knowledge and values teamwork, time management, and effective collaboration. He is committed to growth and making a meaningful impact.";
                }



            </script>
            <a href="reymark-profile.html">View Profile</a>
        </div>

        <!-- Team Member 2 -->
        <div class="team-member">
            <img src="eunicca-bolos.jpg" alt="Eunicca Bolos">
            <h2>Eunicca Bolos</h2>
            <p id="role">Member</p>
            <p id="p3">A firm believer in the power of positivity and motivation. love helping others find their spark and achieve their goals. </p>
            <script>
                document.getElementById('p3').addEventListener("mouseover", cText);
                document.getElementById('p3').addEventListener("mouseout", cText2);


                function cText() {
                    document.getElementById('p3').innerHTML = "She can multitask and  have time management, have best cooking skills";
                }
                function cText2() {
                    document.getElementById('p3').innerHTML = "A firm believer in the power of positivity and motivation. love helping others find their spark and achieve their goals.";
                }
            </script>
            <a href="eunicca-profile.html">View Profile</a>
        </div>

        <!-- Team Member 3 -->
        <div class="team-member">
            <img src="marlone-patino.jpg" alt="Marlone Patino">
            <h2>Marlone Patino</h2>
            <p id="role">Member</p>
            <p id="p4">He is cooperative doing the group work/tasks and have a consistency to perform well.</p>
            <script>
                document.getElementById('p4').addEventListener("mouseover", cText);
                document.getElementById('p4').addEventListener("mouseout", cText2);


                function cText() {
                    document.getElementById('p4').innerHTML = "my skills are good at time managing, decision making,  and teamwork.";
                }
                function cText2() {
                    document.getElementById('p4').innerHTML = "He is cooperative doing the group work/tasks and have a consistency to perform well";
                }
            </script>
            <a href="marlone-profile.html">View Profile</a>
        </div>

        <!-- Team Member 4 -->
        <div class="team-member">
            <img src="rhianne-rafols.jpg" alt="Rhianne Rafols">
            <h2>Rhianne Rafols</h2>
            <p id="role">Member</p>
            <p id="p5">I'm a hardworking, motivated person who doesn't give up from a task. I have a strong academic interest and consider myself to be an open and direct individual that aims for fairness in all I do. </p>
            <script>
                document.getElementById('p5').addEventListener("mouseover", cText);
                document.getElementById('p5').addEventListener("mouseout", cText2);


                function cText() {
                    document.getElementById('p5').innerHTML = "My skills are doing well interms of decision making and also multi tasking and I have ability to learn quickly and have determination to succeed.";
                }
                function cText2() {
                    document.getElementById('p5').innerHTML = "I'm a hardworking, motivated person who doesn't give up from a task. I have a strong academic interest and consider myself to be an open and direct individual that aims for fairness in all I do";
                }
            </script>
            <a href="rhianne-profile.html">View Profile</a>
        </div>

    </div>

    <footer>
        <h2>Contact Us</h2>
        <p>PAMANTASAN NG LUNGSOD NG MUNTINLUPA</p>
        <p>&copy; 2024 Team 3. Exercise No.2</p>
    </footer>

</body>
</html>
