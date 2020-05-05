<!DOCTYPE html>

<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8" />
    <title>Sage Feedback - Main Page</title>
    <link rel="stylesheet" type="text/css" href="StyleSheets/landingPage.css" />
    <link rel="stylesheet" type="text/css" href="StyleSheets/common.css" />
    <script type="text/javascript" src="Scripts/landingPage.js"></script>
</head>

<body>
    <?php 
include 'header.php'
    ?>
    
    <!--Photo by Scott Graham on Unsplash-->
    <div class="picture-text">
        <img class="landing-photo" src="Logos/computer-desk.jpg" />
        <p>Please log in or register to view or submit feedback. <br /> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut nulla ullamcorper turpis convallis suscipit.</p>
    </div>
    <div class="container">

        <div class="tab">
            <button class="tablinks" onclick="openTab(event, 'accountingFinance')" id="defaultOpen"> Accounting and finance </button>
            <button class="tablinks" onclick="openTab(event, 'payroll')"> People and payroll </button>
            <button class="tablinks" onclick="openTab(event, 'other')"> Other </button>
        </div>

        <div id="accountingFinance" class="tabcontent">
            <div class="flex-container">
                <ul class="flex-item">
                    <li id="list-header-SB-acc" class="inactive">Small business</li>
                    <li class="list-link-SB-acc"><a href="https://www.sage.com/en-gb/sage-business-cloud/accounting/">Acounting</a></li>
                    <li class="list-link-SB-acc"><a href="https://www.sage.com/en-gb/products/sage-50cloud/">Sage 50cloud Accounts</a></li>
                </ul>
                <ul class="flex-item">
                    <li id="list-header-MB-acc" class="inactive">Medium business</li>
                    <li class="list-link-MB-acc"><a href="https://www.sage.com/en-gb/sage-business-cloud/intacct/">Sage Intacct</a></li>
                    <li class="list-link-MB-acc"><a href="https://www.sage.com/en-gb/products/sage-200cloud/">Sage 200cloud</a></li>
                    <li class="list-link-MB-acc"><a href="https://www.sage.com/en-gb/sage-business-cloud/sage-x3/">Sage X3</a></li>
                </ul>
            </div>
        </div>

        <div id="payroll" class="tabcontent">
            <div class="flex-container">
                <ul class="flex-item">
                    <li id="list-header-SB-payroll" class="inactive">Small business</li>
                    <li class="list-link-SB-payroll"><a href="https://www.sage.com/en-gb/sage-business-cloud/payroll/">Sage Business Cloud Payroll</a></li>
                    <li class="list-link-SB-payroll"><a href="https://www.sage.com/en-gb/products/sage-50-payroll/">Sage 50cloud Payroll</a></li>
                </ul>
                <ul class="flex-item">
                    <li id="list-header-MB-payroll" class="inactive">Medium business</li>
                    <li class="list-link-MB-payroll"><a href="https://www.sage.com/en-gb/sage-business-cloud/people/">Sage People</a></li>
                </ul>
            </div>
        </div>
        <div id="other" class="tabcontent">
                <p class="green-title">Other Products</p>
            <ul>
                <li><a href="https://www.sage.com/en-gb/sage-business-cloud/payments-and-banking/">Payments and Banking</a></li>
                <li><a href="https://www.sage.com/en-gb/products/sage-50-hr/">Sage 50 HR</a></li>
                <li><a href="https://www.sage.com/en-gb/products/sage-50-hr/">Sage 50 P11D</a></li>
            </ul>
        </div>

    </div>

</body>

</html>