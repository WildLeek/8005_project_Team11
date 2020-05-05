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

    <div class="container">
        <div class="tab">
            <button class="tablinks" onclick="openTab(event, 'accountingFinance')" id="defaultOpen"> Accounting and finance </button>
            <button class="tablinks" onclick="openTab(event, 'payroll')"> People and payroll </button>
            <button class="tablinks" onclick="openTab(event, 'banking')"> Payments and banking </button>
            <button class="tablinks" onclick="openTab(event, 'other')"> Other </button>
        </div>

        <div id="accountingFinance" class="tabcontent">
            <div class="flex-container">
                <ul class="flex-item">
                    <li id="list-header-SB-acc" class="inactive">Small business</li>
                    <li class="list-link-SB-acc"><a href="#">Acounting</a></li>
                    <li class="list-link-SB-acc"><a href="#">Sage 50cloud Accounts</a></li>
                </ul>
                <ul class="flex-item">
                    <li id="list-header-MB-acc" class="inactive">Medium business</li>
                    <li class="list-link-MB-acc"><a href="#">Sage Intacct</a></li>
                    <li class="list-link-MB-acc"><a href="#">Sage 200cloud</a></li>
                    <li class="list-link-MB-acc"><a href="#">Sage X3</a></li>
                </ul>
            </div>
        </div>

        <div id="payroll" class="tabcontent">
        </div>

        <div id="banking" class="tabcontent">
            <p>Product</p>
        </div>

        <div id="other" class="tabcontent">
            <p>Other products and general complaints.</p>
        </div>

    </div>

</body>

</html>