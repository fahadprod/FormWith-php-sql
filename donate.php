<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Donate</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="css/linearicons.css">=
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <!-- Start Header Area -->
			<header class="default-header" style="position: fixed;">
                    <div class="container">
                        <div class="header-wrap">
                            <div class="header-top d-flex justify-content-between align-items-center">
                                <div class="logo">
                                    <a href="#home"><img src="img/logo.png" alt=""></a>
                                </div>
                                <div class="main-menubar d-flex align-items-center">
                                    <nav class="hide">
                                        <a href="index.html">Home</a>
                                        <a href="#project">Projects</a>
                                        <a href="#about">About</a>
                                        <a href="#donate">Donate</a>
                                    </nav>
                                    <div class="menu-bar"><span class="lnr lnr-menu"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- End Header Area -->

                <section class="donate-area relative section-gap" id="donate">
                        <div class="overlay overlay-bg"></div>
                        <div class="container">
                            <div class="row d-flex justify-content-end">
                                <div class="col-lg-12 col-sm-12 pb-80 header-text">
                                    <h1>Donate For Poor </h1>
                                </div>
                            </div>
                                <div class="col-lg-12 contact-right">
                                    <form class="booking-form" id="myForm" action="connect.php" method="post">
                                             <div class="row">
                                                    <div class="col-lg-12 d-flex flex-column">
                                                            <input name="fname" placeholder="Enter Your Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Your Name'" class="form-control mt-20" required="" type="text">
                                                        </div>
                                                        <div class="col-lg-12 d-flex flex-column">
                                                               <input name="address" placeholder="Enter Your Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Your Address'" class="form-control mt-20" required="" type="text">
                                                           </div>
                                                        <div class="col-lg-6 d-flex flex-column">
                                                           <input name="phone" placeholder="Enter Your Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Your Phone Number'" class="form-control mt-20" required="" type="text" required>
                                                       </div>
                                                       <div class="col-lg-6 d-flex flex-column">
                                                           <input name="email" placeholder="Enter Email Address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email Address'" class="form-control mt-20" required="" type="email">
                                                       </div>
                                                 <div class="col-lg-12 d-flex flex-column mt-20">
                                                 <div id="toppings"> 
                                                    <label>Food : <input  type="checkbox" name="type[]"  value="food" /> </label>
                                                   &nbsp;&nbsp;&nbsp;&nbsp; <label>Education : <input  type="checkbox" name="type[]" value="education" /> </label>
                                                   &nbsp;&nbsp;&nbsp;&nbsp;<label>Zaqat : <input type="checkbox" name="type[]"  value="zaqat" /></label>
                                                   &nbsp;&nbsp;&nbsp;&nbsp;<label>Sadaqa(Animal) : <input type="checkbox"  name="type[]"  value="sadaqa" /> </label>
                                                   &nbsp;&nbsp;&nbsp;&nbsp;<label>Qurbani : <input type="checkbox" name="type[]"   value="qurbani" /></label>
                                               </div>

                                                 </div>
                                               
        
                                                <div class="col-lg-12 d-flex justify-content-end send-btn">
                                                    <input type="submit" name="submit" class="submit-btn primary-btn mt-20 text-uppercase ">
                                                </div>
        
                                                <div class="alert-msg"></div>
                                            </div>
                                      </form>
                                      <p class="payment-method">
                                          We Accept :   <img src="img/payment.png" alt="">
                                      </p>
                                </div>
                            </div>
                        </div>
                    </section>

        <script src="js/vendor/jquery-2.2.4.min.js"></script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script> -->
        <script src="js/vendor/bootstrap.min.js"></script>
        <!-- <script src="js/jquery.ajaxchimp.min.js"></script> -->
        <script src="js/jquery.nice-select.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <!-- <script src="js/parallax.min.js"></script> -->
        <!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
        <!-- <script src="js/jquery.magnific-popup.min.js"></script> -->
        <script src="js/main.js"></script>
        <!-- <script>
// call onload or in script segment below form
function attachCheckboxHandlers() {
    // get reference to element containing toppings checkboxes
    var el = document.getElementById('toppings');

    // get reference to input elements in toppings container element
    var tops = el.getElementsByTagName('input');
    
    // assign updateTotal function to onclick property of each checkbox
    for (var i=0, len=tops.length; i<len; i++) {
        if ( tops[i].type === 'checkbox' ) {
            tops[i].onclick = updateTotal;
        }
    }
}
    
// called onclick of toppings checkboxes
function updateTotal(e) {
    // 'this' is reference to checkbox clicked on
    var form = this.form;
    
    // get current value in total text box, using parseFloat since it is a string
    var val = parseFloat( form.elements['total'].value );
    
    // if check box is checked, add its value to val, otherwise subtract it
    if ( this.checked ) {
        val += parseFloat(this.value);
    } else {
        val -= parseFloat(this.value);
    }
    
    // format val with correct number of decimal places
    // and use it to update value of total text box
    form.elements['total'].value = formatDecimal(val);
}
    
// format val to n number of decimal places
// modified version of Danny Goodman's (JS Bible)
function formatDecimal(val, n) {
    n = n || 2;
    var str = "" + Math.round ( parseFloat(val) * Math.pow(10, n) );
    while (str.length <= n) {
        str = "0" + str;
    }
    var pt = str.length - n;
    return str.slice(0,pt) + "." + str.slice(pt);
}

// in script segment below form
attachCheckboxHandlers();
</script> -->
</body>
</html>