<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION["user"])) {
    $user = $_SESSION["user"];
}
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Metadata containing information regarding website -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Website for kids to learn how to develop websites">
    <meta name="keywords" content="Web Development, Code for Kids, Web Dev for Kids">
    <meta name="author" content="CS113 Group 2 - Eilidh Boyd">
    <title>Admin Dashboard</title>

    <!-- Link to CSS file and library to access menu icon -->
    <link href="stylesheet.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <!--Once other pages have been completed, add remaining links here in order-->
    <nav class = "navbar">
        <!-- Icon for mobile navigation -->
        <a href="javascript:void(0);" id="mobileNavIcon">
            <i class="fa-solid fa-bars"></i>
        </a>
        <!-- Desktop navigation bar-->
        <nav class="desktopNavigation">
            <ul class ="navItems">
                <li><a href="index.php">Home</a></li>
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
                <li><a href="progressPage.php">Progress</a></li>
                <li><a href="admin.php">Admin</a></li>
            </ul>
        </nav>
        <?php if (isset($user)): ?>
            <li class="right">Welcome, <?php echo $user; ?></li>
        <?php else: ?>
            <li class="right"><a href="login.html">LogIn</a></li>
        <?php endif; ?>
    </nav>

    <!-- Mobile navigation bar -->
    <nav id = "mobileNavigation">
        <ul class ="navItems">
            <li><a href="index.php">Home</a></li>
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
            <li><a href="progressPage.php">Progress</a></li>
            <li><a href="admin.html">Admin</a></li>
        </ul>
    </nav>

        <main>
            <h1 class="level-header">Admin Dashboard</h1>
            <section id="admin-dashboard">
                <div id="post-manager">

                    <h2>Current posts </h2>
                    <div class="scroll-data">
                    <table>
                        <?php
                            include "./php/connect.php";

                            $sql = "SELECT * FROM `adminpostmanager`;";
                            $result = $connection->query($sql);

                            echo "<table class='admin-tables'><tr class='table-header'><th>POST_NO</th><th>POST_NAME</th><th>CREATED_BY</th><th>CREATED_TS</th></tr>";

                            if($result->num_rows > 0){
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr><td>" . $row["POST_NO"] . "</td>" . "<td>" . $row["POST_NAME"] . "</td>" . "<td>" . $row["CREATED_BY"] . "</td>" . "<td>" . $row["POST_CREATED_TS"] . "</tr></td>";
                                }
                            }
                            else {
                                echo "0 results.";
                            }
                                $connection->close();
                            ?>
                    </table>
                    </div>

                    <div style="text-align: center">
                        <!-- Buttons for either creating or managing a post -->
                        <button class="post-buttons" onclick="openCreateForm()">New Post</button>
                        <button class="post-buttons" onclick="openEditForm()">Edit Post</button>
                        <button class="post-buttons" onclick="openDeleteForm()">Delete Post</button>
                    </div>

                    <!-- Form for creating a post -->
                    <!-- The inputted information will be inserted into posts table-->
                    <div class="popup-form" id="createPostForm">
                        <form action="php/insertPost.php" method="get" class="popup-form-container" >
                            <h1 style="margin: 0">Create a Post</h1>
                            <label><b>Post Name: </b></label>
                            <input type="text" class="input-box" placeholder="Enter a name for post..." name="post" required />
                            <br>

                            <label><b>Creator: </b></label>
                            <input type="text" class="input-box" placeholder="Enter name of post creator..." name="user" />
                            <br>

                            <input type="submit"  class="submit-btn" value="Create Post" onclick="createPost()">
                        </form>
                    </div>

                    <!-- Form for creating a post -->
                    <!-- The inputted information will either change or delete information in the posts table-->
                    <div class="popup-form" id="manageEditForm">
                        <form class="popup-form-container" action="php/updatePost.php" method="get">
                            <h1 style="margin: 0">Edit Post</h1>
                            <label><b>Select a post: </b></label>
                                <?php
                                include './php/connect.php';

                                    $sql="SELECT `POST_NO`, `POST_NAME` FROM `adminpostmanager`";
                                    $result = $connection->query($sql);

                                    echo "<select name = 'postRows'>";
                                    while($row = $result->fetch_assoc()){
                                        echo "<option value='". $row['POST_NO']."'>".$row['POST_NAME'].'</option>';
                                    }
                                    echo "</select>";
                                    $connection->close();
                                ?>
                            <br>

                            <div id="edit-attribute">
                            <label><b>What would you like to edit? </b></label>
                            <select id="table-values" onchange="checkValue()" required>
                                <option>--SELECT VALUE--</option>
                                <option value="postName">Post name</option>
                                <option value ="user">User</option>
                            </select>
                            </div>
                            <br>

                            <div id="edit-username" hidden>
                                <label><b>Enter new username: </b></label>
                                <input type="text" class="required"  placeholder="Enter name of post creator" name="newUser">
                            </div>
                            <br>

                            <div id="edit-post" hidden>
                                <label><b>Enter new post name: </b></label>
                                <input type="text" placeholder="Enter name of post" name="newPost">
                            </div>
                            <br>

                            <button type="submit" class="submit-btn" onclick="performAction()">Edit post</button>
                        </form>
                    </div>

                    <div class="popup-form" id="manageDeleteForm">
                        <form class="popup-form-container" action="php/deletePost.php" method="get">
                            <h1 style="margin: 0">Delete Post</h1>
                            <label><b>Select a post to delete: </b></label>
                            <?php

                            include './php/connect.php';

                            $sql="SELECT `POST_NO`, `POST_NAME` FROM `adminpostmanager`";
                            $result = $connection->query($sql);

                            echo "<select name = 'postRows'>";
                            while($row = $result->fetch_assoc()){
                                echo "<option value='". $row['POST_NO']."'>".$row['POST_NAME'].'</option>';
                            }
                            echo "</select>";

                            $connection->close();
                            ?>
                            <button type="submit" class="submit-btn" onclick="performAction()">Delete post</button>
                        </form>
                    </div>

                </div>


                <!-- Table for filtering pupils and the levels they've completed or not completed -->
                <div id="class-overview">
                    <h2>Class overview</h2>

                    <div class="scroll-data">
                        <table>
                            <?php
                            include "./php/connect.php";

                            $sql = "SELECT * FROM `usercompletiontable`";
                            $result = $connection->query($sql);

                            echo "<table class='admin-tables'><tr class='table-header'><th>FIRST NAME</th><th>LAST NAME</th><th>EMAIL ADDRESS</th><th>LEVEL 1 COMPLETE?</th><th>LEVEL 2 COMPLETE?</th><th>LEVEL 3 COMPLETE?</th><th>LEVEL 4 COMPLETE?</th><th>LEVEL 5 COMPLETE?</th></tr>";

                            if($result->num_rows > 0){
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr><td>" . $row["FIRST_NAME"] . "</td>" . "<td>" . $row["LAST_NAME"] . "<td>" . $row["EMAIL"] ."</td>" . "<td>" . $row["LEVEL_1_COMPLETE"] . "</td>" . "<td>" . $row["LEVEL_2_COMPLETE"] . "</td>" . "<td>" . $row["LEVEL_3_COMPLETE"] . "</td>" . "</td>" . "<td>" . $row["LEVEL_4_COMPLETE"] . "</td>" . "<td>" . $row["LEVEL_5_COMPLETE"] . "</td>"."</tr></td>";
                                }
                            }

                            $connection->close();
                            ?>
                        </table>
                    </div>
                </div>
            </section>
        </main>

        <!-- Footer with contact information and link to feedback page -->
        <footer id="footer">
            <p >Contact us: <br>
                Email Address: <a href="mailto:Code.For.Kids@strath.uk">Code.For.Kids@strath.uk</a><br>
                Phone number: 01236 879010 </p>
            <p><a style="color: white" href="news.html">News</a></p>
            <p id="feedback-link">Give us <a href="feedback.html">feedback here!</a></p>
        </footer>

        <script src="script.js"></script>

    </body>
</html>