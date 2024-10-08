<!DOCTYPE html>
<?php
// Start session to display success/error messages
session_start();
?>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Colorlib Templates" />
    <meta name="author" content="Colorlib" />
    <meta name="keywords" content="Colorlib Templates" />

    <!-- Title Page-->
    <title>Portal Registration</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Icons font CSS-->
    <link
        href="vendor/mdi-font/css/material-design-iconic-font.min.css"
        rel="stylesheet"
        media="all" />
    <link
        href="vendor/font-awesome-4.7/css/font-awesome.min.css"
        rel="stylesheet"
        media="all" />
    <!-- Font special for pages-->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all" />
    <link
        href="vendor/datepicker/daterangepicker.css"
        rel="stylesheet"
        media="all" />

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all" />
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/base.css">
    <!-- <link rel="stylesheet" href="../css/"> -->
</head>

<body id="top">

    <!-- preloader -->
    <div id="preloader"style="display: none;">
        <div id="loader" class="dots-jump">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- header -->
    <header class="s-header">
        <div class="header-logo">
            <a class="site-logo" href="index.html">
                <img src="images/logo.svg" alt="Homepage">
            </a>
        </div>

        <nav class="header-nav-wrap">
            <ul class="header-nav">
                <li><a href="../index.html" title="Home">Home</a></li>
                <li><a href="../about.html" title="About">About</a></li>
                <li><a href="../events.html" title="Events">Events</a></li>
                <li class="current"><a href="contact.html" title="Contact us">Contact</a></li>
            </ul>
        </nav>

        <a class="header-menu-toggle" href="#0"><span>Menu</span></a>
    </header>

    <!-- page header -->
    <section class="page-header page-header--contact">
        <div class="gradient-overlay"></div>
        <div class="row page-header__content">
            <div class="column">
                <h1>AMBASSADOR PORTAL</h1>
            </div>
        </div>
    </section>

    <!-- form section -->
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Please fill out the form</h2>
                    <!-- Success and Error Messages -->
                    <!-- Success and Error Messages -->
                    <?php if (isset($_SESSION['success_message'])): ?>
                        <div class="message success">
                            <?php
                            echo $_SESSION['success_message'];
                            unset($_SESSION['success_message']);  // Clear the message after displaying it
                            ?>
                        </div>
                    <?php endif; ?>
                    <?php if (isset($_SESSION['error_message'])): ?>
                        <div class="message error">
                            <?php
                            echo $_SESSION['error_message'];
                            unset($_SESSION['error_message']);  // Clear the message after displaying it
                            ?>
                        </div>
                    <?php endif; ?>
                    <form method="POST" enctype="multipart/form-data" action="register.php">
                        <!-- Name Fields -->
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">First Name</label>
                                    <input class="input--style-4" type="text" name="first_name" id="first_name" required />
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Last Name</label>
                                    <input class="input--style-4" type="text" name="last_name" id="last_name" required />
                                </div>
                            </div>
                        </div>

                        <!-- Birthday and Gender Fields -->
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Birthday</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="birthday" id=" birthday" required />
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" checked="checked" name="gender" id="gender" required />
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="gender" id="gender" required />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Country and State Fields -->
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Country</label>
                                    <input class="input--style-4" type="text" name="country" required id=" country" />
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">State</label>
                                    <input class="input--style-4" type="text" name="state" id="state" required />
                                </div>
                            </div>
                        </div>

                        <!-- Email and Phone Fields -->
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email" required id="email" />
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Phone Number</label>
                                    <input class="input--style-4" type="text" name="phone" id="phone" required />
                                </div>
                            </div>
                        </div>

                        <!-- Resident address Fields -->
                        <div class="input-group">
                            <label class="label">Resident Area</label>
                            <input class="input--style-4" type="text" name="address" id="address" />
                        </div>

                        <!-- Marital Status and Occupation -->
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Marital status</label>
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="marital_status" id="marital_status" required>
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                            <option>Married</option>
                                            <option>Single</option>
                                            <option>Courting</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Occupation</label>
                                    <input class="input--style-4" type="text" name="occupation" id="occupation" required />
                                </div>
                            </div>
                        </div>

                        <!-- Denomination Field -->
                        <div class="input-group">
                            <label class="label">Denomination</label>
                            <input class="input--style-4" type="text" name="denomination" id="denomination" required />
                        </div>

                        <!-- Volunteer Field -->
                        <div class="input-group">
                            <label class="label">Volunteer</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="volunteer" id="volunteer" required>
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option>Writing article</option>
                                    <option>Gospel love outreach</option>
                                    <option>Administrative management team</option>
                                    <option>Media and logistics</option>
                                    <option>Welfare team</option>
                                    <option>Project management</option>
                                    <option>Participation in any special contest</option>
                                    <option>Position</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

                        <!-- Position Field -->
                        <div class="input-group">
                            <label class="label">Would you like to hold any Position in your district Area?</label>
                            <div class="p-t-10">
                                <label class="radio-container m-r-45">Yes
                                    <input type="radio" checked="checked" name="position" id="position" />
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">No
                                    <input type="radio" name="position" id="position" />
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>

                        <!-- Upload Passport Photo -->
                        <div class="input-group">
                            <label class="label">Upload Passport Photo</label>
                            <input class="input--style-4" type="file" required name="passport_photo" id="passport_photo" accept="image/*">
                        </div>

                        <!-- Submit Button -->
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" id="submitBtn" type="submit">Submit</button>
                        </div>
                        <div id="preloader2">
    <div class="fading-dots">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
                    </form>
                    <div id="error_message" style="color: red;"></div>
                    <div id="success_message" style="color: green;"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery AJAX Script -->
    <script>
document.querySelector('form').addEventListener('submit', function(e) {
    e.preventDefault();  // Prevent default form submission

    let formData = new FormData(this);

    // Hide the submit button and show the preloader
    document.getElementById('submitBtn').style.display = 'none';
    document.getElementById('preloader2').style.display = 'block';

    fetch('register.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        // Hide preloader after submission is complete
        document.getElementById('preloader2').style.display = 'none';

        // Check if the response has an error or is successful
        if (data.error) {
            alert(data.error_message);  // Display error message
            document.getElementById('submitBtn').style.display = 'block';  // Show submit button again if error
        } else {
            alert('Form submitted successfully!');  // Success message
            // Optionally, you can redirect or reset the form
            // window.location.href = "success_page.html"; // Redirect to success page
            document.querySelector('form').reset();  // Reset the form
            document.getElementById('submitBtn').style.display = 'block';  // Show the submit button again
        }
    })
    .catch(error => {
        console.error('Error:', error);
        document.getElementById('preloader2').style.display = 'none';
        document.getElementById('submitBtn').style.display = 'block';  // Show submit button again if error
        alert('There was an error submitting the form.');
    });
});

</script>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
    <script src="../js/main.js"></script>
</body>


<!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->