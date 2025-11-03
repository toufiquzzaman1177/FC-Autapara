<?php include "db_connect.php"; ?>

    <!--
   <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f8f9fa;
            color: #333;
        }
        header {
            background: #2c3e50;
            color: white;
            padding: 20px;
            text-align: center;
        }
        nav {
            background: #34495e;
            padding: 10px;
            text-align: center;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }
        nav a:hover {
            text-decoration: underline;
        }
        iframe {
            width: 100%;
            height: 80vh;
            border: none;
        }
        footer {
            background: #2c3e50;
            color: white;
            text-align: center;
            padding: 10px;
        }
    </style>
-->
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FC Autapara</title>
    <link rel="stylesheet" href="styles.css">
</head> 

<body>
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <img src="images/fclogo.png" alt="FC Logo" style= height:55px; width:40px;  border-radius:50;">
                   <h3>&nbsp;Friends Club Of Autapara </h3>
                </div>
                <input type="checkbox" id="nav-toggle" class="nav-toggle">
                <label for="nav-toggle" class="menu-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </label>
                <nav>
                    <ul>
                        <li><a href="home.php">Home</a></li>
                        <li><a href="registration.html">Registration</a></li>
                        <li><a href="login.html">Login</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
   

        <!--  <div class="dashboard-header" align="center">
                    <h2 class="dashboard-title">Ishwardi Cricket Association</h2> 
                </div>
        -->
                
    <div class="dashboard-nav" align="center">
        <h2 style= "color: rgba(10, 237, 97, 1)"><i>Iswardi Cricket Association</i></h2>
        <br>
        &nbsp&nbsp&nbsp <a href="dashboard.html" class="btn">Back Dashboard</a>&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp <a href="teams.php" target="contentFrame" class="btn">Teams</a> &nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp <a href="coach.php" target="contentFrame" class="btn">Coach</a> &nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp <a href="players.php" target="contentFrame" class="btn">Players</a> &nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp <a href="matches.php" target="contentFrame" class="btn">Matches & Scores</a> &nbsp&nbsp&nbsp
</div>

    <!-- Content load হবে এখানে 
    <iframe name="contentFrame"></iframe> 
-->
    <div class="container">

    <h2 align="center">Notice Board</h2><br>
        <div class="dashboard-cards">
                     <div class="card">
                       <img src="images/4thmatch.jpg" alt="Match Image" style="width:100%; height:300px; border-radius:10px;">
                        <h3>16th Match(Group-B)</h3>
                        <p><b>FC Autapara  VS Duronto Hazarpara</b></p>
                        <ul style="margin-left: 20px; margin-top: 10px;">
                            <li>সময়ঃ দুপুর ২:০০ ঘটিকা(০৩/১০/২০২৫)</li>
                            <li>স্থানঃ পাকশী আমতলা মাঠ,ঈশ্বরদী, পাবনা</li>
                            <li>ক্লাবের সকল সদস্যকে দুপুর ১ঃ৫০ মিনিট এর ভেতর মাঠে উপস্থিত থাকার জন্য জানানো যাচ্ছে।</li>
                            <li>সকালে আমাদের জন্য দোয়া করবেন 🤲</li>
                            
                        </ul>
                    </div>

                    <div class="card">
                        <img src="images/3rdmatch.jpg" alt="Match Image" style="width:100%; height:300px; border-radius:10px;">
                        <h3>13th Match(Group-B)</h3>
                        <p><b>FC Autapara  VS Biswas Motors</b></p>
                        <ul style="margin-left: 20px; margin-top: 10px;">
                            <li>সময়ঃ আগামীকাল সকাল ৯:০০ ঘটিকা (১২/০৯/২০২৫)</li>
                            <li>স্থানঃ পাকশী আমতলা মাঠ,ঈশ্বরদী,পাবনা</li>
                            <li>ক্লাবের সকল সদস্যকে আগামীকাল সকাল ৮:৩০ মিনিট এর ভেতর মাঠে উপস্থিত হওয়ার জন্য জানানো যাচ্ছে।</li>
                            <li>সকালে আমাদের জন্য দোয়া করবেন 🤲</li>
                        </ul>
                    </div>

                     <div class="card">
                        <img src="images/2ndmatch.jpg" alt="Match Image" style="width:100%; height:300px; border-radius:10px;">
                        <h3>10th Match(Group-B)</h3>
                        <p><b>FC Autapara VS Sindicate Ekadosh</b></p>
                        <ul style="margin-left: 20px; margin-top: 10px;">
                            <li>সময়ঃ আগামীকাল দুপুর ২:০০ ঘটিকা(০৫/০৯/২০২৫)</li>
                            <li>স্থানঃ পাকশী আমতলা মাঠ,ঈশ্বরদী,পাবনা</li>
                            <li>ক্লাবের সকল সদস্যকে আগামীকাল দুপুর ১ঃ৫০ মিনিট এর ভেতর মাঠে উপস্থিত হওয়ার জন্য জানানো যাচ্ছে।</li>
                            <li>সকালে আমাদের জন্য দোয়া করবেন 🤲</li>
                        </ul>
                    </div>

                     <div class="card">
                          <img src="images/1stmatch.jpg" alt="Match Image" style="width:100%; height:300px; border-radius:10px;">  
                        <h3>7th Match(Group-B)</h3>
                        <p><b>FC Autapara  VS Pacific Warriors </b></p>
                        <ul style="margin-left: 20px; margin-top: 10px;">
                            <li>সময়ঃ আগামীকাল সকাল ৯ঃ৩০ মিনিট(৩০/০৮/২০২৫)</li>
                            <li>স্থানঃ পাকশী আমতলা মাঠ,ঈশ্বরদী,পাবনা</li>
                            <li>ক্লাবের সকল সদস্যকে আগামীকাল সকাল ৮ঃ৪০ মিনিট এর ভেতর মাঠে উপস্থিত হওয়ার জন্য জানানো যাচ্ছে।</li>
                            <li>সকালে আমাদের জন্য দোয়া করবেন 🤲</li>
                        </ul>
                    </div>
                  
                </div>

            </div>

    <footer>
       <div class="container">
            <p>&copy; 2025 Friends Club Of Autapara. All rights reserved.</p>
            <p style="font-size: 10px; color: rgb(54, 188, 6)"><i>Design & Devoloped By: FC Autapara</i></p>
        </div>
    </footer>
    
</body>
</html>
