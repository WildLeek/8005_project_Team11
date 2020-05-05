

<?php

function dynamicHeader ($title){
	echo "<header>
        <a class=\"logo\" href=\"https://www.sage.com/en-gb/\"><img src=\"Logos/sage-logo.svg\" alt=\"Sage Logo\"></a>
        <p class=\"navbar-txt\">".$title."</p>
    </header>";
}

function basicHeader(){
print <<< HEADER
<header>
        <ul class="topnav">
            <li class="logo"><a href="https://www.sage.com/en-gb/"><img src="Logos/sage-logo.svg" alt="Sage Logo"></a></li>
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
}



?>