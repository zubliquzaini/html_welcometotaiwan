<!DOCTYPE html>
<html>
    <head> 
        <title>
            Course Registration System
        </title>
        <style>
            * {
                box-sizing: border-box;
            }

            body {

                background-color: #4169e1;
                font-family: Arial, Helvetica, sans-serif;
            }

            header {

                background-color: #4169e1;
                padding: 30px;
                text-align: center;
                font-size: 35px;
                color: white;
            }

            nav {

                float: left;
                width: 30%;
                height: 450px;
                background: pink;
                padding: 20px;
            }

            nav ul {

                list-style-type: none;
                margin: 0;
                padding: 0;
                background-color: pink;
            }

            li a {

                display: block;
                color: #000;
                padding: 8px 16px;
                text-decoration: none;
            }

            li a:hover {

                background-color: powderblue;
                color: white;
            }

            article {

                float: left;
                padding: 20px;
                width: 70%;
                background-color: #DB7093;
                height: 450px;
                text-align: center;
            }

            section::after {

                content: "";
                display: table;
                clear: both;
            }

            footer {

                background-color: #1E90FF;
                padding: 10px;
                text-align: center;
                color: white;
            }

            @media(max-width: 600px) {
                nav, article {
                    width: 100%;
                    height: auto;
                }
            } 

            img {
                width: 100%;
                height: 350px;
            }
            /* Maybe kena buang */
            body { 
                background-color: powderblue; 
            }
            div { 
                background-color: pink; padding: 10px; border-style: solid;
            }
            ul  { 
                color: tomato; 
            }
            ol  { 
                color: green; 
            }
            table, th, td {
            width: 45%;
            margin-left: auto;
            margin-right: auto;
            border-collapse: collapse;
            /* border: 1px solid black; */
            }

            table#t01 tr:nth-child(even) {

                background-color: tomato;
            }
            table#t01 tr:nth-child(odd) {

                background-color: lightgreen;
            }
            table#t01 th {
                background-color: powderblue;
                color: black;
            }
        </style>
    </head>
    <body>
        <header>
            <h2>Welcome to FSKM Jasin</h2>
        </header>
        <section>
            <nav>
                <ul>
                    <li><a href="homepage.php">Homepage</a></li>
                    <li><a href="registerNewStudentForm.php">Register New Student</a></li>
                    <li><a href="displayStudent.php">Display Students</a></li>
                    <li><a href="registerNewCourseForm.php">Register New Course</a></li>
                    <li><a href="displayCourse.php">Display Course</a></li>
                </ul>
            </nav>
            <article>
            <h2 style="text-align: center;">Course Registration Form</h2><br>
                <form action="insertCourseAction.php" id="form" method="POST">
                    <table>
                        <tr>
                            <td>Course Name:</td> 
                            <td><input type="text" name="coursename" maxlength="50" placeholder="Faculty of Computer Scince" required></td>
                        </tr>
                        <tr>
                            <td>Course date:</td>
                            <td><input type="date" name="coursedate" required></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">
                                <input type="submit" value="Submit">
                                <input type="reset" value="Reset">
                            </td>
                        </tr>
                    </table>
                </form>
            </article>
        </section>
        <footer>
            <p>Prescribed by zubquzaini</p>
        </footer>
    </body>
</html>