<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Website for kids to learn how to develop websites">
    <meta name="keywords" content="Web Development, Code for Kids, Web Dev for Kids">
    <meta name="author" content="CS113 Group 2 - Daniel Robertson">
    <title>Progress Page</title>

    <link href="stylesheet.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>


<body>
<!--Once other pages have been completed, add remaining links here in order-->
<nav class="navbar">
    <a href="javascript:void(0);" id="mobileNavIcon">
        <i class="fa-solid fa-bars"></i>
    </a>
    <nav class="desktopNavigation">
        <ul class="navItems">
            <li><a href="index.html">Home</a></li>
            <li>
                <div class="dropDown">
                    <button class="dropdownButton">Levels</button>
                    <div class="levels-content-dropdown">
                        <a href="beginner-intro.php">Beginner</a>
                        <a href="intermediate-intro.php">Intermediate</a>
                        <a href="hard-intro.php">Hard</a>
                    </div>
                </div>
            </li>
            <li><a href="progressPage.html">Progress</a></li>
            <li><a href="admin.php">Admin</a></li>
            <li><a href="login.html">Login</a></li>
        </ul>
    </nav>
    <h1 class="main-heading">Welcome [username]</h1>
</nav>
<nav id="mobileNavigation">
    <ul class="navItems">
        <li><a href="index.html">Home</a></li>
        <li>
            <div class="dropDown">
                <button class="dropdownButton">Levels</button>
                <div class="levels-content-dropdown">
                    <a href="beginner-intro.php">Beginner</a>
                    <a href="intermediate-intro.php">Intermediate</a>
                    <a href="hard-intro.php">Hard</a>
                </div>
            </div>
        </li>
        <li><a href="progressPage.html">Progress</a></li>
        <li><a href="admin.php">Admin</a></li>
        <li><a href="login.html">Login</a></li>
    </ul>
</nav>

<main>
    <h1 class="level-header">Progress Page</h1>

    <!-- Skeleton of the progress page  -->
    <?php

    include "php/connect.php";

    $firstName = "";
    $lastName = "";
    $email = "";
    $levels = array("No", "No", "No", "No", "No", "No", "No", "No", "No", "No");

    if (isset($_SESSION["user"])) {
        $user = $_SESSION["user"];
    } else {
        $user = "eilidoyd@gmail.com";
    }

    $sql = $connection->prepare("SELECT * FROM `usercompletiontable` WHERE UPPER(`usercompletiontable` . `EMAIL`)=?");
    $sql->bind_param('s', $user);
    $sql->execute();
    $sql->bind_result($firstName, $lastName, $email, $levels[0], $levels[1], $levels[2], $levels[3], $levels[4], $levels[5], $levels[6], $levels[7], $levels[8], $levels[9]);
    $sql->fetch();

    if ($firstName = "") {
        $completionPercent = 0;
    } else {
//     6.67% per level completed
        $i = 0;
        foreach ($levels as $value) {
            if ($value == "Yes") {
                $i = $i + 1;
            }
        }
        $completionPercent = $i * 6.67;
    }
    echo "<progress id='overviewBar' max='100' value={$completionPercent}></progress>";
    $connection->close();
    ?>
    </section>

    <div class="levelOverview">
        <form action="" method="post">
            <select id="stage" name="stage">
                <option value="Beginner"> Beginner</option>
                <option value="Intermediate">Intermediate</option>
            </select>
            <input type="submit" name="submit" value="Check Progress" formaction=""/>
        </form>
        <?php

        if (isset($_POST['submit'])) {
            if (!empty($_POST['stage'])) {
                include "php/connect.php";
                echo '<br>';
                $firstName = "";
                $lastName = "";
                $email = "";
                $beginner = array("No", "No", "No", "No", "No");
                $intermediate = array("No", "No", "No", "No", "No");

                echo "<p style='color: #f0f0f0'> {$_POST['stage']}</p>";
                if ($_POST['stage'] == 'Beginner') {
                    $stage = "Beginner";
                } else if ($_POST['stage'] == 'Intermediate') {
                    $stage = "Intermediate";
                } else {
                    $stage = "Beginner";
                }

                if (isset($_SESSION["user"])) {
                    $user = $_SESSION["user"];
                } else {
                    $user = "eilidoyd@gmail.com";
                }

                $sql = $connection->prepare("SELECT * FROM `usercompletiontable` WHERE UPPER(`usercompletiontable` . `EMAIL`)=?");
                $sql->bind_param('s', $user);
                $sql->execute();
                $sql->bind_result($firstName, $lastName, $email, $beginner[0], $beginner[1], $beginner[2], $beginner[3], $beginner[4], $intermediate[0], $intermediate[1], $intermediate[2], $intermediate[3], $intermediate[4]);
                $sql->fetch();

                if ($firstName = "") {
                    $completionPercent = 0;
                } else {
//     20% per level completed
                    $i = 0;
                    if ($stage == "Beginner") {
                        $stagesComplete = $beginner;
                    } elseif ($stage == "Intermediate") {
                        $stagesComplete = $intermediate;
                    }
                    foreach ($stagesComplete as $value) {
                        if ($value == "Yes") {
                            $i = $i + 1;
                        }
                    }
                    $completionPercent = $i * 20;
                    echo "<progress id='levelBar' max='100' value={$completionPercent}> </progress>";
                }
                $connection->close();

                echo "<table style='color: #f0f0f0'>
        <tr>
            <th> Stage 1</th>
            <th> Stage 2</th>
            <th> Stage 3</th>
            <th> Stage 4</th>
            <th> Stage 5</th>
        </tr>
        <tr>
            <td> {$stagesComplete[0]}</td>
            <td> {$stagesComplete[1]}</td>
            <td> {$stagesComplete[2]}</td>
            <td> {$stagesComplete[3]}</td>
            <td> {$stagesComplete[4]}</td>
        </tr>
    </table>";
            }
        }
        ?>
    </div>

</main>


<footer id="footer">
    <p>Contact us: <br>
        Email Address: <a href="mailto:Code.For.Kids@strath.uk">Code.For.Kids@strath.uk</a><br>
        Phone number: 01236 879010 </p>
    <p><a style="color: white" href="news.html">News</a></p>
    <p id="feedback-link">Give us <a href="feedback.html">feedback here!</a></p>
</footer>

<script src="script.js"></script>

</body>
</html>
