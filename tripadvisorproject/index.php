<!DOCTYPE html>
<html lang="en">
<head >
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trip Advisor</title>
    <link rel="stylesheet" href="style.css">
    <script type="module" src="app.js"></script>
    
</head>
  <body>
    <div class="head" id="head">
      <img src="LOGO.png" alt="">
    <h1><i>Trip</i><b>Advisor</b></h1>
    <div class="signin">
      <button type="#" id="signup">Sign in</button>
    </div>
    <div class="popup">
      <div class="close">&times</div>       
        <!-- <div class="foam-elements"> -->
          
<!-- The JS SDK Login Button -->

<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button>

<div id="status">
</div>

<!-- Load the JS SDK asynchronously -->
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>
        <!-- </div> -->
    </div>
    <header>
      <nav>
        <ul>
        <li><a href="#">Home</a></li>
       <li><a href="#">Hotels</a></li>
        <li><a href="#">Restaurants</a></li>
        <a href="#">Vacation Rentals</a>
        <li><a href="#" id="maps" id="maps">Google Map</a></li>
        <li><a href="#">About</a></li>
      </ul>
      </nav>
    </header>
  </div>
 

  <!--Google map-->



<!--main-->
    <main >
      <section class="hero">
        <h2>Find your next adventure</h2>
        <form>
          <input type="text" placeholder="Search for a destination" id="input" >
          <button type="submit" onclick="myFun()">Search</button>
        </form>
      </section>

      <script>
        function myFun(){
        let place = document.getElementById("input").value
        sessionStorage.clear()
        sessionStorage.setItem("place",place)
        window.open("mapss.html")
}
      </script>


      <h2>Where to go, right now</h2>
      <h4>Spot your top of traveler's must-go on a list</h4>
<div class="hotels-title">
  <p>HOTELS</p>
</div>
<!-- ------------------------Hotels------------------ -->
          <div class="sites">
            <div class="country-sites">
              <div class="site-headers">
              <p><a href="https://www.tripadvisor.com/Tourism-g659488-Riviera_Maya_Yucatan_Peninsula-Vacations.html">Riviera Maya</a></p>
            </div>

            <div class="country-sites1">
              <div class="site-headers">
                <p><a href="https://www.tripadvisor.com/Hotel_Review-g294207-d4091780-Reviews-Villa_Rosa_Kempinski_Nairobi-Nairobi.html">Kempinski Nairobi</a></p>
            </div>

            <div class="country-sites2">
                <div class="site-headers">
                  <p><a href="https://www.tripadvisor.com/Hotel_Review-g1066854-d13312508-Reviews-Mitsui_Garden_Hotel_Gotanda-Shinagawa_Tokyo_Tokyo_Prefecture_Kanto.html">Tokyo</a></p>
            </div>

            <div class="country-sites3">
                  <div class="site-headers">
                    <p><a href="https://www.tripadvisor.com/Hotels-g255060-Sydney_New_South_Wales-Hotels.html">Sydeny</a></p>
            </div>

                  <div class="country-sites4">
                    <div class="site-headers">
                      <p><a href="https://www.tripadvisor.com/Hotel_Review-g295424-d582976-Reviews-Kempinski_Hotel_Mall_Of_The_Emirates-Dubai_Emirate_of_Dubai.html">Kempinski Dubai</a></p>
                    </div>

                    <div class="country-sites5">
                      <div class="site-headers">
                        <p><a href="https://www.tripadvisor.com/Hotel_Review-g673482-d15843970-Reviews-Kamel_Park_Hotel-Kisii_Nyanza_Province.html">Kamel Park, Kisii</a></p>
                      </div>

                      <div class="country-sites6">
                        <div class="site-headers">
                          <p><a href="https://www.tripadvisor.com/Hotel_Review-g294207-d305108-Reviews-Safari_Park_Hotel_Casino-Nairobi.html">Safari Park Hotel</a></p>
                        </div>

                        <div class="country-sites7">
                          <div class="site-headers">
                            <p><a href="https://www.tripadvisor.com/Hotels-g294210-Mombasa_Coast_Province-Hotels.html">Mombasa Hotels</a></p>
                          </div>
                          
          </div>
          
      </div>
      
      <div class="hotels-title254">
        <p>RESTAURANTS</p>
      </div>

      <div class="restaurant-container">
        <div class="restaurant-sites">
          <div class="site-headers">
            <p><a href="https://fogogaucho.co.ke/">Fogo Gaucho, Kilimani</a> </p>
          </div>
        </div>

        <div class="restaurant-sites1">
          <div class="site-headers">
            <p><a href="https://boho.co.ke/">Boho Eatery </a> </p>
          </div>
        </div>

        <div class="restaurant-sites2">
          <div class="site-headers">
            <p><a href="https://www.kempinski.com/en/hotel-villa-rosa">Villa Rosa</a></p>
          </div>
        </div>

        <div class="restaurant-sites3">
          <div class="site-headers">
            <p><a href="https://www.tripadvisor.com/Restaurant_Review-g2289005-d17752798-Reviews-Hill_Gate_Restaurant-Mananthavady_Wayanad_District_Kerala.html">Hills Gate</a></p>
          </div>
        </div>

        <div class="restaurant-sites4">
          <div class="site-headers">
            <p><a href="https://www.tripadvisor.com/Restaurant_Review-g294207-d10769392-Reviews-Kilimanjaro_jamia-Nairobi.html">Kilimanjaro Jamia Restaurant</a></p>
          </div>
        </div>

        <div class="restaurant-sites5">
          <div class="site-headers">
            <p><a href="https://javahouseafrica.com/">Java House</a></p>
          </div>
        </div>

        <div class="restaurant-sites6">
          <div class="site-headers">
            <p><a href="https://www.cafedeli.co.ke/">Cafe Deli Restaurant</a></p>
          </div>
        </div>

        <div class="restaurant-sites7">
          <div class="site-headers">
            <p><a href="https://www.sonicdrivein.com/">Sonic Restaurant</a> </p>
          </div>
        </div>
      </div>
      <section class="popular-hotle-sites">
        <h2>Popular Hotel Sites</h2>
        <ul>
          <li><a href="#">Paris, France</a></li>
          <li><a href="#">New York City, USA</a></li>
          <li><a href="#">Sydney, Australia</a></li>
          <li><a href="#">Tokyo, Japan</a></li>
        </ul>
      </section>
    </main>
    <footer>
      <p> Designed by Eternal Blues</p>
      <p>&copy; 2023 TripAdvisor. All rights reserved.</p>
    </footer>
    <script src="app.js"></script>


    <script>

      function statusChangeCallback(response) {  // Called with the results from FB.getLoginStatus().
        console.log('statusChangeCallback');
        console.log(response);                   // The current login status of the person.
        if (response.status === 'connected') {   // Logged into your webpage and Facebook.
          testAPI();  
        } else {                                 // Not logged into your webpage or we are unable to tell.
          document.getElementById('status').innerHTML = 'Please log ' +
            'into this webpage.';
        }
      }
    
    
      function checkLoginState() {               // Called when a person is finished with the Login Button.
        FB.getLoginStatus(function(response) {   // See the onlogin handler
          statusChangeCallback(response);
        });
      }
    
    
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '951667442668679',
          cookie     : true,                     // Enable cookies to allow the server to access the session.
          xfbml      : true,                     // Parse social plugins on this webpage.
          version    : 'v16.0'           // Use this Graph API version for this call.
        });
    
    
        FB.getLoginStatus(function(response) {   // Called after the JS SDK has been initialized.
          statusChangeCallback(response);        // Returns the login status.
        });
      };
     
      function testAPI() {                      // Testing Graph API after login.  See statusChangeCallback() for when this call is made.
        console.log('Welcome!  Fetching your information.... ');
        FB.api('/me', function(response) {
          console.log('Successful login for: ' + response.name);
          document.getElementById('status').innerHTML =
            'Thanks for logging in, ' + response.name + '!';
        });
      }
    
    </script>
  </body>
</html>
