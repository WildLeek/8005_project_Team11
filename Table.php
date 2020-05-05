<?php
print <<< htmlCode

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>User Feedback View</title>
    <!--JQuery script, sourced by Google-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!--tablesorter (FORK) by Rob (Mottie) Garrison-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.3/js/jquery.tablesorter.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.3/js/jquery.tablesorter.widgets.min.js"></script>
    <script src="Scripts/feedbackTable.js"></script>
    <link rel="stylesheet" type="text/css" href="StyleSheets/common.css" />
    <link rel="stylesheet" type="text/css" href="StyleSheets/feedbackView.css" />
</head>
htmlCode;

 ?>

  <?php 
echo "<body>";

    

$title="User Feedback View for :[".$_SESSION["name"]."]";
include 'dynamicHeader.php';
dynamicHeader ($title);
   
print "<div class=\"container\">
              <div class=\"scroll-table\">
                   <table id=\"all-feedback\" class=\"tablesorter\">
                     <thead>
                               <tr>
                       <th id=\"header-product\" class=\"filter-select\" data-placeholder=\"Select a product\">Product</th>
                       <th id=\"header-feedback\">Feedback</th>
                       <th id=\"header-user\">User</th>
                       <th id=\"header-rating\" data-placeholder=\"Select range\">Rating</th>
                       <th id=\"header-date\">Date</th>
                   </tr>
               </thead>
               <tbody>
                   <tr>
                       <td class=\"product\">Product 1</td>
                       <td class=\"feedback\">
                           <div class=\"long-text\">
                               Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus odio lacus, viverra vel sagittis vel, bibendum nec odio. Donec at maximus augue, et malesuada neque. Sed convallis pulvinar nulla. Nullam mollis non dui sed pulvinar. Pellentesque id ullamcorper nulla. Phasellus blandit congue finibus. Duis ultrices laoreet congue
                           </div>
                       </td>
                       <td>User 1</td>
                       <td class=\"rating\">
                           <div class=\"vote\">
                               <button class=\"upvote\" onclick=\"vote('up', this.parentElement)\">+1</button>
                               <p id=\"unique-rating1\" class=\"rating-value\">0</p>
                               <button class=\"downvote\" onclick=\"vote('down', this.parentElement)\">-1</button>
                           </div>
                       </td>
                       <td class=\"date\">01/01/01</td>
                   </tr>
                   <tr>
                       <td class=\"product\">Product 1</td>
                       <td class=\"feedback\"><div class=\"long-text\">Feedback 2</div></td>
                       <td>User 2</td>
                       <td class=\"rating\">2 </td>
                       <td class=\"date\">01/01/02</td>
                   </tr>
                   <tr>
                       <td class=\"product\">Product 2</td>
                       <td class=\"feedback\"><div class=\"long-text\">Feedback 3</div></td>
                       <td>User 3</td>
                       <td class=\"rating\">3 </td>
                       <td class=\"date\">01/01/03</td>
                   </tr>
                   <tr>
                       <td class=\"product\">Product 2</td>
                       <td class=\"feedback\">
                           <div class=\"long-text\">
                               <p>
                                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tincidunt posuere vehicula. Nullam mollis facilisis lorem, ut tincidunt metus posuere sed. Ut pretium porta tortor, ac accumsan sem finibus eu. Aenean in maximus sem, vel ultricies magna. Curabitur ex nulla, gravida sed porttitor id, pretium vel lectus. Aenean id erat tempor, gravida lorem sit amet, vulputate magna. Nunc vestibulum, odio sit amet dictum fringilla, massa sem vehicula elit, in blandit lorem justo a leo. Phasellus tincidunt dapibus urna at pretium. Mauris sollicitudin dui in ligula imperdiet, ac aliquet purus ornare. Vivamus sed enim rhoncus, auctor massa at, sodales diam. In aliquam nec ligula in posuere. In tincidunt tempor lacus vel fermentum. Etiam eget porttitor elit, ut bibendum velit. Praesent eget maximus odio. Fusce consequat dapibus accumsan. Suspendisse scelerisque elit volutpat, porttitor justo nec, consectetur turpis. Pellentesque lacinia purus eu rhoncus faucibus. Duis aliquet nisl quam, id commodo velit auctor eu. Pellentesque sit amet tortor consequat, rutrum massa eu, suscipit quam. Phasellus non aliquam lacus Ut tempor mi nec ex cursus facilisis. Pellentesque tincidunt tincidunt scelerisque. Praesent laoreet, odio vitae efficitur mattis, nulla ante rutrum dui, eleifend scelerisque nulla arcu a tellus. Nulla volutpat, diam a facilisis sollicitudin, neque ante maximus tortor, et mattis velit lorem ultricies libero. Duis fringilla eros nec ipsum luctus pellentesque. Suspendisse fringilla felis at ornare mollis. Ut rutrum mauris dapibus purus consectetur feugiat. Nunc mi ipsum, mollis faucibus condimentum in, accumsan sit amet nibh. Nullam commodo risus turpis, vel scelerisque tortor semper id. Proin ipsum dolor, ullamcorper vel enim nec, hendrerit luctus mauris. Duis semper urna ac scelerisque congue. Nam accumsan nunc sed urna mollis imperdiet. Quisque ut odio varius, tincidunt nisi et, lacinia quam. Proin molestie risus non odio blandit fermentum. Ut consectetur mauris quam, in rutrum neque venenatis ut. Etiam sit amet ligula a ipsum vehicula iaculis vel in tellus.
                                   Praesent condimentum augue eu tincidunt lobortis. Suspendisse pretium pur
                               </p>
                               <p class=\"read-more\"><a href=\"#\" class=\"button\">Read more</a></p>
                           </div>
                       </td>
                       <td>User 3</td>
                       <td class=\"rating\">3 </td>
                       <td class=\"date\">01/01/03</td>
                   </tr>
                   <tr>
                       <td class=\"product\">Product 2</td>
                       <td class=\"feedback\"><div class=\"long-text\">Feedback 3</div></td>
                       <td>User 3</td>
                       <td class=\"rating\">3 </td>
                       <td class=\"date\">01/01/03</td>
                   </tr>
                   <tr>
                       <td class=\"product\">Product 2</td>
                       <td class=\"feedback\">
                           <div class=\"long-text\">
                                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tincidunt posuere vehicula. Nullam mollis facilisis lorem, ut tincidunt metus posuere sed. Ut pretium porta tortor, ac accumsan sem finibus eu. Aenean in maximus sem, vel ultricies magna. Curabitur ex nulla, gravida sed porttitor id, pretium vel lectus. Aenean id erat tempor, gravida lorem sit amet, vulputate magna. Nunc vestibulum, odio sit amet dictum fringilla, massa sem vehicula elit, in blandit lorem justo a leo. Phasellus tincidunt dapibus urna at pretium. Mauris sollicitudin dui in ligula imperdiet, ac aliquet purus ornare. Vivamus sed enim rhoncus, auctor massa at, sodales diam. In aliquam nec ligula in posuere. In tincidunt tempor lacus vel fermentum. Etiam eget porttitor elit, ut bibendum velit. Praesent eget maximus odio. Fusce consequat dapibus accumsan. Suspendisse scelerisque elit volutpat, porttitor justo nec, consectetur turpis. Pellentesque lacinia purus eu rhoncus faucibus. Duis aliquet nisl quam, id commodo velit auctor eu. Pellentesque sit amet tortor consequat, rutrum massa eu, suscipit quam. Phasellus non aliquam lacus Ut tempor mi nec ex cursus facilisis. Pellentesque tincidunt tincidunt scelerisque. Praesent laoreet, odio vitae efficitur mattis, nulla ante rutrum dui, eleifend scelerisque nulla arcu a tellus. Nulla volutpat, diam a facilisis sollicitudin, neque ante maximus tortor, et mattis velit lorem ultricies libero. Duis fringilla eros nec ipsum luctus pellentesque. Suspendisse fringilla felis at ornare mollis. Ut rutrum mauris dapibus purus consectetur feugiat. Nunc mi ipsum, mollis faucibus condimentum in, accumsan sit amet nibh. Nullam commodo risus turpis, vel scelerisque tortor semper id. Proin ipsum dolor, ullamcorper vel enim nec, hendrerit luctus mauris. Duis semper urna ac scelerisque congue. Nam accumsan nunc sed urna mollis imperdiet. Quisque ut odio varius, tincidunt nisi et, lacinia quam. Proin molestie risus non odio blandit fermentum. Ut consectetur mauris quam, in rutrum neque venenatis ut. Etiam sit amet ligula a ipsum vehicula iaculis vel in tellus.
                                   Praesent condimentum augue eu tincidunt lobortis. Suspendisse pretium pur
                               <p class=\"read-more\"><a href=\"#\" class=\"button\">Read more</a></p>
                           </div>
                       </td>
                       <td>User 3</td>
                       <td class=\"rating\">3 </td>
                       <td class=\"date\">01/01/03</td>
                   </tr>
                   <tr>
                       <td class=\"product\">Product 2</td>
                       <td class=\"feedback\">
                           <div class=\"long-text\">
                                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tincidunt posuere vehicula. Nullam mollis facilisis lorem, ut tincidunt metus posuere sed. Ut pretium porta tortor, ac accumsan sem finibus eu. Aenean in maximus sem, vel ultricies magna. Curabitur ex nulla, gravida sed porttitor id, pretium vel lectus. Aenean id erat tempor, gravida lorem sit amet, vulputate magna. Nunc vestibulum, odio sit amet dictum fringilla, massa sem vehicula elit, in blandit lorem justo a leo. Phasellus tincidunt dapibus urna at pretium. Mauris sollicitudin dui in ligula imperdiet, ac aliquet purus ornare. Vivamus sed enim rhoncus, auctor massa at, sodales diam. In aliquam nec ligula in posuere. In tincidunt tempor lacus vel fermentum. Etiam eget porttitor elit, ut bibendum velit. Praesent eget maximus odio. Fusce consequat dapibus accumsan. Suspendisse scelerisque elit volutpat, porttitor justo nec, consectetur turpis. Pellentesque lacinia purus eu rhoncus faucibus. Duis aliquet nisl quam, id commodo velit auctor eu. Pellentesque sit amet tortor consequat, rutrum massa eu, suscipit quam. Phasellus non aliquam lacus Ut tempor mi nec ex cursus facilisis. Pellentesque tincidunt tincidunt scelerisque. Praesent laoreet, odio vitae efficitur mattis, nulla ante rutrum dui, eleifend scelerisque nulla arcu a tellus. Nulla volutpat, diam a facilisis sollicitudin, neque ante maximus tortor, et mattis velit lorem ultricies libero. Duis fringilla eros nec ipsum luctus pellentesque. Suspendisse fringilla felis at ornare mollis. Ut rutrum mauris dapibus purus consectetur feugiat. Nunc mi ipsum, mollis faucibus condimentum in, accumsan sit amet nibh. Nullam commodo risus turpis, vel scelerisque tortor semper id. Proin ipsum dolor, ullamcorper vel enim nec, hendrerit luctus mauris. Duis semper urna ac scelerisque congue. Nam accumsan nunc sed urna mollis imperdiet. Quisque ut odio varius, tincidunt nisi et, lacinia quam. Proin molestie risus non odio blandit fermentum. Ut consectetur mauris quam, in rutrum neque venenatis ut. Etiam sit amet ligula a ipsum vehicula iaculis vel in tellus.
                                   Praesent condimentum augue eu tincidunt lobortis. Suspendisse pretium pur
                               <p class=\"read-more\"><a href=\"#\" class=\"button\">Read more</a></p>
                           </div>
                       </td>
                       <td>User 3</td>
                       <td class=\"rating\">3 </td>
                       <td class=\"date\">01/01/03</td>
                   </tr>
                   <tr>
                       <td class=\"product\">Product 1</td>
                       <td class=\"feedback\">
                           <div class=\"long-text\">
                               Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus odio lacus, viverra vel sagittis vel, bibendum nec odio. Donec at maximus augue, et malesuada neque. Sed convallis pulvinar nulla. Nullam mollis non dui sed pulvinar. Pellentesque id ullamcorper nulla. Phasellus blandit congue finibus. Duis ultrices laoreet congue
                           </div>
                       </td>
                       <td>User 1</td>
                       <td class=\"rating\">1</td>
                       <td class=\"date\">01/01/01</td>
                   </tr>
               </tbody>
               <!--This is the php code to create the feedback table-->"; ?>
                <?php
                    include ("connection.php");
                    $result = $conn->query("SELECT * FROM feedbacks");
                    echo "<tbody>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                            echo "<td class='product'>".$row['']."</td>";
                            echo "<td class='feedback'><div class='long-text'>".$row["feedback"]."<p class='read-more'><a href='#' class='button'>Read more</a></p></div></td>";
                            echo "<td class='rating'><div class='vote'><button class='upvote' onclick='vote(\'up\', this.parentElement)'>+1</button><p class='rating-value'>".$row["rank"]."</p><button class='downvote' onclick='vote(\'down\', this.parentElement)'>-1</button></div></td>";
                            echo "<td class='date'>".$row['']."</td>";
                        echo "</tr>";
                    }
                    echo "</tbody>";
                    $conn->close();
               ?>
               
               <?php 
               print <<< htmlCode
            </table>
        </div>
         ?>
        <button class="greenbtn" onclick="popUp()">Add new feedback</button>
    </div>
</body> 
htmlCode; ?>
