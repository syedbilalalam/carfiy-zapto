<?php
    include_once $_SERVER['DOCUMENT_ROOT'].'/sub_root_cf.php';
    include MAIN_ROOT.'/libraries/uhead.php';
?>
<!-- Mobile navigation -->
<link rel="stylesheet" href="./static/global_files/docs/mobile-navigation.css">
<!-- Page layout -->
<link rel="stylesheet" href="./static/global_files/docs/layout.css">
<!-- Pricing css -->
<link rel="stylesheet" href="./static/global_files/docs/pricing.css">
<!-- Local Css file -->
<link rel="stylesheet" href="./static/m/get-report/docs/styles.css">
<!-- Vin number tutorial -->
<link rel="stylesheet" href="./static/global_files/docs/vin-number.css">
<title>Carfiy | Know your vehicle better</title>
<?php
    include MAIN_ROOT.'/libraries/lhead.php';
?>
<body>
   
    <header>
    <?php
        include MAIN_ROOT.'/pages/mobile/commons/header.php';
    ?>
    </header>
    <main>
        <section id="mNavBar" class="mobileNavBar">
            <button id="closeNavBar" class="btn navButton close">Close <span class="material-symbols-outlined"> &#xe316; </span></button>    
            <button class="btn navButton">My orders</button>
            <button class="btn navButton">Why to choose us</button>
            <button class="btn navButton">About us</button>
            <button class="btn navButton">Pricing</button>
            <button class="btn navButton">Get report</button>
            <button class="btn navButton">Log in</button>
        </section>
        <section id="vinTutorial" class="popUpBox" data-name="vin-tutorial">
            <div class="cardHolder">
                <span class="material-symbols-outlined closeIco closePopUp">&#xe5cd;</span>
                <div class="mainCard">
                    <section class="sectionD sectionBlockSystem">
                        <div class="sectionHeading">
                            <h3>Where I will find the VIN number of my car ?</h3>
                            <p class="infoText">Every car and truck manufactured after 1980 comes with a unique Vehicle Identification Number (VIN) assigned by the manufacturer. Much like a fingerprint, this VIN is exclusive to each vehicle, allowing us to provide essential, vehicle-specific details in the Carfiy vehicle history report.</p>
                            <p class="infoText">Need to locate your VIN? You can find it in these places:</p>
                            <ul>
                                <li class="infoText">On the driver's side dashboard near the windshield</li>
                                <li class="infoText">Inside the driver's side door near the latch</li>
                                <li class="infoText">On the owner's insurance card</p>
                                </li>
                            </ul>
                        </div>
                        <div class="imgContainer">
                            <img class="tutorialA" src="./static/global_files/media/tutorial-a.png" alt="Broken image">
                            <img class="tutorialB" src="./static/global_files/media/tutorial-b.png" alt="Broken image">
                        </div>
                    </section>
                </div>
            </div>
        </section>
        
        <section id="pricingTutorial" class="popUpBox" data-name="pricing-tutorial">
            <div class="cardHolder">
                <span class="material-symbols-outlined closeIco closePopUp">&#xe5cd;</span>
                <div class="mainCard">
                <div class="headingArea">
                    <h2 class="pageHeading">We guarantee the best prices on reliable vehicle history reports,</h2>
                    <h1 class="pageHeading">Explore our pricing options</h1>
                </div>
                <section class="sectionG sectionBlockSystem">
                    <!-- <div class="sectionHeading">
                        <h3>Explore our pricing options</h3>
                    </div> -->
                    <div class="offers">
                        <div class="plan">
                            <div class="planHead">
                                <p class="heading">Basic</p>
                                <p class="headingType">Standard report</p>
                            </div>
                            <div class="priceInformation">
                                <p class="standardCurrency">$34.99 USD</p>
                                <p class="nthReports">/ Report</p>
                                <div class="userlessInfo">
                                    <p>In our currency ≈ 10,000 PKR</p>
                                    <p>No hidden charges</p>
                                </div>
                            </div>
                            <div class="planFeatures">
                                <div class="planFeature">
                                    <span class="material-symbols-outlined">&#xe86c;</span>
                                    <p>Vehicle Overview</p>
                                </div>
                                <hr>
                                <div class="planFeature">
                                    <span class="material-symbols-outlined">&#xe86c;</span>
                                    <p>Vehicle Specifications</p>
                                </div>
                                <hr>
                                <div class="planFeature">
                                    <span class="material-symbols-outlined">&#xe86c;</span>
                                    <p>Sales Listing</p>
                                </div>
                                <hr>
                                <div class="planFeature">
                                    <span class="material-symbols-outlined">&#xe86c;</span>
                                    <p>Accident Record</p>
                                </div>
                                <hr>
                                <div class="planFeature">
                                    <span class="material-symbols-outlined">&#xe86c;</span>
                                    <p>Active/Expire Warranty</p>
                                </div>
                                <hr>
                                <div class="planFeature">
                                    <span class="material-symbols-outlined notValid">&#xe5cd;</span>
                                    <p>HQ Car Image</p>
                                </div>
                                <hr>
                                <div class="planFeature">
                                    <span class="material-symbols-outlined notValid">&#xe5cd;</span>
                                    <p>Theft Record</p>
                                </div>
                                <hr>
                                <div class="planFeature">
                                    <span class="material-symbols-outlined notValid">&#xe5cd;</span>
                                    <p>Title Record</p>
                                </div>
                                <hr>
                                <div class="planFeature">
                                    <span class="material-symbols-outlined notValid">&#xe5cd;</span>
                                    <p>Impounds</p>
                                </div>
                                <hr>
                                <div class="planFeature">
                                    <span class="material-symbols-outlined notValid">&#xe5cd;</span>
                                    <p>Exports</p>
                                </div>
                                <hr>
                                <div class="planFeature">
                                    <span class="material-symbols-outlined notValid">&#xe5cd;</span>
                                    <p>Open Recalls</p>
                                </div>
                                <hr>
                                <div class="planFeature">
                                    <span class="material-symbols-outlined notValid">&#xe5cd;</span>
                                    <p>Installed Options and Packages</p>
                                </div>
                                <hr>

                            </div>
                        </div>
                        <div class="plan">
                            <div class="planHead silver">
                                <p class="heading">Silver</p>
                                <p class="headingType">Extended report</p>
                            </div>
                            <div class="priceInformation">
                                <p class="standardCurrency">$34.99 USD</p>
                                <p class="nthReports">/ Report</p>
                                <div class="userlessInfo">
                                    <p>In our currency ≈ 10,000 PKR</p>
                                    <p>No hidden charges</p>
                                </div>
                            </div>
                            <div class="planFeatures">
                                <div class="planFeature">
                                    <span class="material-symbols-outlined">&#xe86c;</span>
                                    <p>Vehicle Overview</p>
                                </div>
                                <hr>
                                <div class="planFeature">
                                    <span class="material-symbols-outlined">&#xe86c;</span>
                                    <p>Vehicle Specifications</p>
                                </div>
                                <hr>
                                <div class="planFeature">
                                    <span class="material-symbols-outlined">&#xe86c;</span>
                                    <p>Sales Listing</p>
                                </div>
                                <hr>
                                <div class="planFeature">
                                    <span class="material-symbols-outlined">&#xe86c;</span>
                                    <p>Accident Record</p>
                                </div>
                                <hr>
                                <div class="planFeature">
                                    <span class="material-symbols-outlined">&#xe86c;</span>
                                    <p>Active/Expire Warranty</p>
                                </div>
                                <hr>
                                <div class="planFeature">
                                    <span class="material-symbols-outlined">&#xe5ca;</span>
                                    <p>HQ Car Image</p>
                                </div>
                                <hr>
                                <div class="planFeature">
                                    <span class="material-symbols-outlined">&#xe5ca;</span>
                                    <p>Theft Record</p>
                                </div>
                                <hr>
                                <div class="planFeature">
                                    <span class="material-symbols-outlined">&#xe5ca;</span>
                                    <p>Title Record</p>
                                </div>
                                <hr>
                                <div class="planFeature">
                                    <span class="material-symbols-outlined">&#xe5ca;</span>
                                    <p>Impounds</p>
                                </div>
                                <hr>
                                <div class="planFeature">
                                    <span class="material-symbols-outlined">&#xe5ca;</span>
                                    <p>Exports</p>
                                </div>
                                <hr>
                                <div class="planFeature">
                                    <span class="material-symbols-outlined">&#xe5ca;</span>
                                    <p>Open Recalls</p>
                                </div>
                                <hr>
                                <div class="planFeature">
                                    <span class="material-symbols-outlined">&#xe5ca;</span>
                                    <p>Installed Options and Packages</p>
                                </div>
                                <hr>

                            </div>
                        </div>
                        <div class="plan">
                            <div class="planHead gold">
                                <p class="heading">Gold</p>
                                <p class="headingType">1 + 4 Reports any time with extra parameters of information.</p>
                            </div>
                            <div class="priceInformation">
                                <p class="standardCurrency">$34.99 USD</p>
                                <p class="nthReports">/ 5 Report</p>
                                <div class="userlessInfo">
                                    <p>In our currency ≈ 10,000 PKR</p>
                                    <p>No hidden charges</p>
                                </div>
                            </div>
                            <div class="planFeatures">
                                <div class="planFeature">
                                    <span class="material-symbols-outlined">&#xe86c;</span>
                                    <p>5 Vehicle Reports</p>
                                </div>
                                <hr>
                                <div class="planFeature">
                                    <span class="material-symbols-outlined">&#xe86c;</span>
                                    <p>DMV Title History</p>
                                </div>
                                <hr>
                                <div class="planFeature">
                                    <span class="material-symbols-outlined">&#xe86c;</span>
                                    <p>Safety Recall History</p>
                                </div>
                                <hr>
                                <div class="planFeature">
                                    <span class="material-symbols-outlined">&#xe86c;</span>
                                    <p>Online Listing History</p>
                                </div>
                                <hr>
                                <div class="planFeature">
                                    <span class="material-symbols-outlined">&#xe86c;</span>
                                    <p>Junk & Salvage Information</p>
                                </div>
                                <hr>
                                <div class="planFeature">
                                    <span class="material-symbols-outlined">&#xe86c;</span>
                                    <p>Vehicle Overview</p>
                                </div>
                                <hr>
                                <div class="planFeature">
                                    <span class="material-symbols-outlined">&#xe86c;</span>
                                    <p>Vehicle Specifications</p>
                                </div>
                                <hr>
                                <div class="planFeature">
                                    <span class="material-symbols-outlined">&#xe86c;</span>
                                    <p>Sales Listing</p>
                                </div>
                                <hr>
                                <div class="planFeature">
                                    <span class="material-symbols-outlined">&#xe86c;</span>
                                    <p>Accident Record</p>
                                </div>
                                <hr>
                                <div class="planFeature">
                                    <span class="material-symbols-outlined">&#xe86c;</span>
                                    <p>Active/Expire Warranty</p>
                                </div>
                                <hr>
                                <div class="planFeature">
                                    <span class="material-symbols-outlined">&#xe5ca;</span>
                                    <p>HQ Car Image</p>
                                </div>
                                <hr>
                                <div class="planFeature">
                                    <span class="material-symbols-outlined">&#xe5ca;</span>
                                    <p>Theft Record</p>
                                </div>
                                <hr>
                                <div class="planFeature">
                                    <span class="material-symbols-outlined">&#xe5ca;</span>
                                    <p>Title Record</p>
                                </div>
                                <hr>
                                <div class="planFeature">
                                    <span class="material-symbols-outlined">&#xe5ca;</span>
                                    <p>Impounds</p>
                                </div>
                                <hr>
                                <div class="planFeature">
                                    <span class="material-symbols-outlined">&#xe5ca;</span>
                                    <p>Exports</p>
                                </div>
                                <hr>
                                <div class="planFeature">
                                    <span class="material-symbols-outlined">&#xe5ca;</span>
                                    <p>Open Recalls</p>
                                </div>
                                <hr>
                                <div class="planFeature">
                                    <span class="material-symbols-outlined">&#xe5ca;</span>
                                    <p>Installed Options and Packages</p>
                                </div>
                                <hr>

                            </div>
                        </div>
                    </div>
                </section>
                </div>
            </div>
        </section>
        <div class="deviceFrameLimitations">
            <div class="container">
                <div class="headingArea">
                    <h2 class="pageHeading">We're glad you're here! We hope for the best and look forward to uncovering a vehicle's history together,</h2>
                    <h1 class="pageHeading">Lets order a report</h1>
                </div>
                <form class="mainForm">
                    <div class="inpHolder">
                        <div class="inputGroup">
                            <label for="vin" class="infoText withIcon">
                                <span>VIN number</span>
                                <span id="vinTutorialCaller" class="material-symbols-outlined ico">&#xe88e;</span>
                            </label>
                            <input required id="vin" class="inp" type="text" placeholder="Enter your 17-digits vin number here..." maxlength="17">
                        </div>
                        <div class="inputGroup">
                            <label for="email" class="infoText">Email</label>
                            <input required id="email" class="inp" type="email" placeholder="Enter your email here e.g jhon@example.com" readonly value="helloword">
                            <button class="btn editEmail withIcon" type="button">
                                <span class="material-symbols-outlined ico">&#xe3c9;</span>
                                <span>Edit email</span>
                            </button>
                        </div>
                        <div class="inputGroup">
                            <label for="vin" class="infoText withIcon">
                                <span>Your selected plan</span>
                                <span id="pricingTutorialCaller" class="material-symbols-outlined ico">&#xe88e;</span>
                            </label>
                            <select required class="inp">
                                <option value="">Not selected yet !</option>
                                <option value="Basic">Basic</option>
                                <option value="silver">Silver</option>
                                <option value="gold">Gold</option>
                            </select>
                        </div>
                        <div class="inputGroup">
                            <label for="phone" class="infoText">Phone No.</label>
                            <input required id="phone" class="inp" type="number" placeholder="Enter your phone number">
                        </div>
                        <div class="amountRequired">
                            <p class="infoText">Amount to be paid: <span class="makeBold">$34 USD</span> ≈ 10,000PKR</p>
                        </div>
                    </div>

                    <div class="buttonGroup">
                        <div class="buttonRow">
                            <button class="btn takeWidth" type="submit">Get Report</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <footer>
    <?php
        include MAIN_ROOT.'/pages/mobile/commons/footer.php';
    ?>
    </footer>


    <!-- Layout js file -->
    <script src="./static/global_files/docs/layout.js" type="text/javascript"></script>
    <!-- Local js file -->
    <script src="./static/m/get-report/docs/scripts.js" type="text/javascript"></script>
</body>

</html>