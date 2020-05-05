<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <title> Sage - admin panel</title>
    <!--JQuery script, sourced by Google-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!--tablesorter (FORK) by Rob (Mottie) Garrison-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.3/js/jquery.tablesorter.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.3/js/jquery.tablesorter.widgets.min.js"></script>
    <link rel="stylesheet" type="text/css" href="StyleSheets/common.css" />
    <link rel="stylesheet" type="text/css" href="StyleSheets/adminPanel.css" />
    <script type="text/javascript" src="Scripts/adminPanel.js"></script>
</head>

<body>

    <?php 
include 'header.php'
    ?>

    <div class="container">
        <div class="flex-window">
            <div class="tabs">
                <button class="tablinks" onclick="openTab(event, 'feedback')" id="defaultOpen">See all feedback</button>
                <button class="tablinks" onclick="openTab(event, 'hiddenQueue')">Show hidden queue</button>
                <button class="tablinks" onclick="openTab(event, 'admin')">Administration</button>
            </div>

            <div id="feedback" class="tabcontent">
                <h3>Feedback</h3>

                <table id="all-feedback" class="table tablesorter">
                    <thead>
                        <tr>
                            <th id="header-product" class="filter-select" data-placeholder="Select a product">Product</th>
                            <th id="header-feedback">Feedback</th>
                            <th id="header-user">User</th>
                            <th id="header-rating" data-placeholder="Select range">Rating</th>
                            <th id="header-date">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="product">Product 1</td>
                            <td class="feedback">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus odio lacus, viverra vel sagittis vel, bibendum nec odio. Donec at maximus augue, et malesuada neque. Sed convallis pulvinar nulla. Nullam mollis non dui sed pulvinar. Pellentesque id ullamcorper nulla. Phasellus blandit congue finibus. Duis ultrices laoreet congue
                            </td>
                            <td>User 1</td>
                            <td class="rating">1</td>
                            <td class="date">01/01/01</td>
                        </tr>
                        <tr>
                            <td class="product">Product 1</td>
                            <td class="feedback">Feedback 2 </td>
                            <td>User 2</td>
                            <td class="rating">2 </td>
                            <td class="date">01/01/02</td>
                        </tr>
                        <tr>
                            <td class="product">Product 2</td>
                            <td class="feedback">Feedback 3 </td>
                            <td>User 3</td>
                            <td class="rating">3 </td>
                            <td class="date">01/01/03</td>
                        </tr>
                    </tbody>

                    <!--This is the php code to create the feedback table-->
                    <?php
                        include ("connection.php");
                        $result = $conn->query("SELECT * FROM feedbacks");
                        echo "<tbody>";
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                                echo "<td class='product'".$row['']."</th>";
                                echo "<td class='feedback'>".$row["feedback"]."</th>";
                                echo "<td class='rating'>".$row["rank"]."</th>";
                                echo "<th class='date'>".$row['']."</th>";
                            echo "</tr>";
                        }
                        echo "</tbody>";
                        $conn->close();
                        //Uncomented by Sami. 5 may 2020
                    ?>

                </table>
            </div>

            <div id="hiddenQueue" class="tabcontent">
                <h3>Hidden Queue</h3>
                <p>ToAdd: PHP code for the hidden queue</p>
            </div>

            <div id="admin" class="tabcontent">
                <h3>Admin controls</h3>
                <p>ToAdd links for document generation and user control</p>
                <button class="greenbtn" onclick="popUp('delete')">Delete User</button>
            </div>
        </div>
    </div>
</body>

</html>