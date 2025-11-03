<?php include "db_connect.php"; ?>

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
                        <li><a href="#home">Home</a></li>
                        <li><a href="registration.html">Registration</a></li>
                        <li><a href="login.html">Login</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <!-- Home Page -->
            <section id="home" class="page">
                <div class="hero">
                    <h1>Welcome to Friends Club Of Autapara</h1>
                    <p>Your premier destination for cricket, football, badminton and more!</p><br>
                     <a href="registration.html" class="btn" style="margin-top: 10px;">Join Now</a>
                </div>
            </section>
        </main>
        

          <div class="dashboard-cards">
                    <div class="card">
                        <h3>Upcoming Tournaments</h3>
                        <p>Check out our upcoming tournaments and events. Don't miss the chance to participate!</p>
                      <!--  <a href="#tournaments" class="btn" style="margin-top: 10px;">View Tournaments</a>  -->
                    </div>
                    
                    <div class="card">
                        <h3>Club Members</h3>
                        <p>Meet our talented players and become part of our growing community.</p>
                    <!--    <a href="#cplayers" class="btn" style="margin-top: 10px;">View Players</a>   -->
                    </div>
                    
                    <div class="card">
                        <h3>Trophies & Achievements</h3>
                        <p>Explore our club's achievements and the trophies we've won over the years.</p>
                       <!-- <a href="#trophies" class="btn" style="margin-top: 10px;">View Trophies</a>  -->
                    </div>
                </div>

                <hr><br>

    <div class="dashboard-cards">

     <div class="card">
                        <img src ="images/t-15jersy.jpg" alt="ICA" style="height:150px; width:250px; border-radius:10px;">
                        <h3>T-15 Tournament 2025</h3>
                        <p>FC Auatpara XI in Ishwardi Cricket Association T-15 Cricket Tournament.</p>
                    </div>

            <div class="card">
                        <img src ="images/eidul azah 2025.jpg" alt="Eid ul Azah" style="height:150px; width:250px; border-radius:10px;">
                        <h3>Eid-ul Azah 2025</h3>
                        <p>The club's junior XI in a friendly match on the occasion of the holy Eid-ul-Azha.</p>
                    </div>

                     <div class="card">
                        <img src ="images/eid2025.png" alt="Eid ul Fitor" style="height:150px; width:250px; border-radius:10px;">
                        <h3>Eid-ul Fitor 2025</h3>
                        <p>The club's junior and senior players in a friendly match on the occasion of the holy Eid-ul-Fitr.</p>
                    </div>

                     <div class="card">
                        <img src ="images/cricket.jpg" alt="ICA" style="height:150px; width:250px; border-radius:10px;">
                        <h3>T-20 Tournament 2023</h3>
                        <p>FC Auatpara XI in Ishwardi Cricket Association T-15 Cricket Tournament.</p>
                    </div>

                     <div class="card">
                        <img src ="images/football.png" alt="Natore" style="height:150px; width:250px; border-radius:10px;">
                        <h3>Football Final 2022</h3>
                        <p>Champion FC Autapara XI at Agran Football Field Boraigram,Natore</p>
                    </div>

                     <div class="card">
                        <img src ="images/full team.jpg" alt="Eidul Fitor" style="height:150px; width:250px; border-radius:10px;">
                        <h3>Eid-ul Azah 2023</h3>
                        <p>The club's junior and senior players in a friendly match on the occasion of the holy Eid-ul Azah.</p>
                    </div>

                     <div class="card">
                        <img src ="images/agran.jpg" alt="ICA" style="height:150px; width:250px; border-radius:10px;">
                        <h3>Semi Final</h3>
                        <p>Semi Final Match of Agran Football Field Boraigram,Natore </p>
                    </div>

                     <div class="card">
                        <img src ="images/girlsfinal.jpg" alt="ICA" style="height:150px; width:250px; border-radius:10px;">
                        <h3>Football Final</h3>
                        <p>Runner Up FC Autapara XI at Nurjahan Girls School, Ishwardi,Pabna</p>
                    </div>
            </div>

            <hr><br>

            <div class="dashboard-cards">
                    <div class="card">
                        <img src ="images/16dec22.jpg" alt="ICA" style="height:150px; width:250px; border-radius:10px;">
                        <h3>Badminton Tournament</h3>
                    </div>

                    <div class="card">
                        <img src ="images/2024eidazah.jpg" alt="ICA" style="height:150px; width:250px; border-radius:10px;">
                        <h3>Eid-ul Azah 2024</h3>
                    </div>

                    <div class="card">
                        <img src ="images/2024eidfitor.jpg" alt="ICA" style="height:150px; width:250px; border-radius:10px;">
                        <h3>Eid-ul Fitor 2024</h3>
                    </div>

                    <div class="card">
                        <img src ="images/batminton.jpg" alt="ICA" style="height:150px; width:250px; border-radius:10px;">
                        <h3>16 December 2021</h3>
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