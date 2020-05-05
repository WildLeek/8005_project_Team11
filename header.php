<?php 


//header in all the pages 
print <<< HEADER
<header>
        <ul class="topnav">
            <li class="logo"><a href="landingPage.php"><img src="Logos/sage-logo.svg" alt="Sage Logo"></a></li>
            <li><a href="https://www.sage.com/en-gb/products/">Products</a></li>
            <li><a href="https://www.sage.com/en-gb/blog/">Blog</a></li>
            <li>
                <div class="dropdown">
                    <button class="menu-dropbtn right" onclick="showMenu()">Support</button>
                    <div class="dropdown-content" id="dropdownContent">
                        <a href="https://my.sage.co.uk/public/help.aspx#/customer/support">Knowledgebase</a>
                        <a href="https://www.sagecity.com/gb">Forums</a>
                        <a href="https://www.sage.com/en-gb/shop/traininglanding.aspx">Training</a>
                        <a href="https://www.sage.com/en-gb/support/">Support</a>
                    </div>
                </div>
            </li>
            <li class="right"><a href="signin_form.php">Sign In</a></li>
            <li class="right"><a href="Regesteration_form.php">Register</a></li>
        </ul>
    </header>

HEADER;

?>