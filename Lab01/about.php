<!DOCTYPE html>
<html>
<!--

First Website
and comment
in html
(comments can span multiple lines)

-->

<!-- This is the head -->
<!-- All styles and javascript go inside the head -->
    <head>
        
        <meta charset="utf-8" />
        <title> Matthew Connolly: Personal Website </title>
       <!-- <style>
            body{
                background-color: #000066 !important;
            } 
        </style> -->
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Libre+Barcode+128+Text" rel="stylesheet"/>
    </head>
<!-- closing head -->

    <!-- This is the body -->
    <!-- This is where we place the content of our website -->
    <body class="about" style="background-color:black; color:white">
        <header>
            <h1> Matthew Connolly </h1>
        </header>
        <nav>
            <hr width ="50%" />
            <a href="index.php" class="home">Home</a>
            <a href="about.php" class="about">About</a>
            <a href="contact.php" class="contact">Contact</a>
        </nav>
            <br /><br />
        <div id="content">
            <table>
                <tr id="table-header">
                    <td><strong>Programming Language</strong></td>
                    <td><strong>Years Experience</strong></td>
                </tr>
                <tr class="table-row">
                    <td>C++</td>
                    <td>2</td>
                </tr>
                <tr class="table-row">
                    <td>Python</td>
                    <td>2</td>
                </tr>
                <tr class="table-row">
                    <td>HTML/CSS</td>
                    <td>1</td>
                </tr>
            </table>
        </div>
        <ul>
            <li><span class="hobby"> Video Games</span>: I own five consoles and I like every genre of games but my favorite is Bloodborne</li>
            <li><span class="hobby"> Baseball</span>: My favorite baseball team is the St. Louis Cardinals</li>
            <li><span class="hobby"> Programming</span>: I spend at least 3 hours every day using and learning programming languages</li>
            </ul>
        <footer>
            <img src="img/CSUMB Logo.png" alt="Picture of CSUMB Logo" />
            <hr>
            CST336 Internet Programming. 2017&copy; Connolly <br/>
            <strong> Disclaimer:</strong> The information in this webpage is fictitous. <br />
            It is used for academic purposes only.
        </footer>
        <!-- closing footer -->
        
    </body>
    <!-- closing body -->

</html>