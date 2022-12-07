@extends('user.user')
@section('main')
<!-- <img src="{{asset('image/coxbazar.jpg')}}"  alt="image" width="500" height="500"> -->
<!-- Carousel Start -->
<div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{asset('image/minamati7.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 600px;">
                            <h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
                            <h1 class="display-3 text-white mb-md-4">Let's Discover The World Together</h1>
                            <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a> -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{asset('image/minamat5.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 600px;">
                            <h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
                            <h1 class="display-3 text-white mb-md-4">Discover Amazing Places With Us</h1>
                            <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a> -->
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="w-100" src="{{asset('image/minamati6.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 600px;">
                            <h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
                            <h1 class="display-3 text-white mb-md-4">Enjoy Your Valueable Time With Your Fmily</h1>
                            <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->

<!-- <!DOCTYPE html>
<html>
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 5px;
}
</style>

<!-- Navbar (sit on top) -->
<!-- <div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="#home" class="w3-bar-item w3-button">Gourmet au Catering</a> -->
    <!-- Right-sided navbar links. Hide them on small screens -->
    <!-- <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button">About</a>
      <a href="#menu" class="w3-bar-item w3-button">Menu</a>
      <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    </div>
  </div>
</div> -->

<!-- Header -->
<!-- <header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
  <img class="w3-image" src="/w3images/hamburger.jpg" alt="Hamburger Catering" width="1600" height="800">
  <div class="w3-display-bottomleft w3-padding-large w3-opacity">
    <h1 class="w3-xxlarge">Le Catering</h1>
  </div>
</header> -->
<br>
<br>
<section id="main-content">
                   

                
                   <div class="row justify-content-center">
                       <div class="col-lg-10">
                       <div class="card">
                                                   <div class="card-title">
                                                      <div class="d-flex justify-content-between">
                                                      <h4 style="text-align: center;"></h4>
                                                                                            
                   <!--                                                                    
                                                      <a href="http://127.0.0.1:8000/dashboard/users/create" class="btn btn-primary"> <i class="ti-plus"></i></a> -->
                                                      </div>
                                                       
                                                   </div>
                                                   <div class="card-body">
                                                       <div class="table-responsive">
                                                           <table class="table table-striped">
                                                               <thead>
                                                                 
                     <!-- About Section -->
<tr>
                                                    

<!-- Page content -->
<div class="w3-content" style="max-width:1550px">

  <!-- About Section -->
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <!-- <img src="/w3images/tablesetting2.jpg" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750"> -->
    </div>

    

    <div class="w3-col m6 w3-padding-large">
      <h1 style="text-align: center;" >About this activity</h1><br>
      <h4><b>Mainamati</b></h4>
      <p class="w3-large">Book this full-day tour of Sonargaon and Mainamati to get to know the Banglar Tajmahal, The Folk Art Museum, Salban Vihara, Rupban Mura, Itakhola Mura, Mainamati Mound and Mainamati Museum.  We are committed to making your trip enjoyable and exciting and to the highest quality of our service. So why are you late?<span class="w3-tag w3-light-grey">Will you going Sundarbans ?</span>Contact with Us.</p>
      <h4 style="text-align: left;" >Contact</h4>
      <p class="w3-large w3-text-grey w3-hide-medium"><address><b> Contact - </b> 01853039335 <br>  <b> Email - </b> tour&travel@gmail.com <br> <b> Website - </b> www.tour&travel.com  <br> <b> Address - </b> Punashi Villa, Flat-4/A, Level-4, House-150, Block-E, Road-10, Banani, Dhaka-1213, Bangladesh<address> </p>
    </div>
  </div>
   <hr>
</tr>
  <tr>
  <!-- Menu Section -->
  <div class="w3-row w3-padding-64" id="menu">
    <div class="w3-col l6 w3-padding-large">
      <h1 style="text-align: center;">Details</h1>
      <h4>Timing</h4>
      <p class="w3-text-grey">9:00 AM - 6:00 PM</p>
      <h4>Duration </h4>
      <p class="w3-text-grey">9 hours</p>
      <h4>Travel Period:</h4>
      <p class="w3-text-grey">10 Oct 2022 to 15 Mar, 2023</p>
      <h4>Package Amount:</h4>
      <p class="w3-text-grey"><b>1.Standard Package Cost BDT:</b>  2,500 /= Per Person <br>

<b>2.Premium Package Cost BDT</b> : 5,000 /= Per Person <br>

<b>3.Luxurious Package Cost BDT:</b>  7,500 /= Per Person <br>

<b>4.Platinum Package Cost BDT:</b>  10,000 /= Per Person <br>

(Full Reserve Ship Only for Our Group)</p>
<hr>
</tr>  
<tr>
<h1 style="text-align: center;">Description</h1>

      
<p class="w3-text-grey">You will be picked up from your hotel in Dhaka at 8:00 am and transferred to your first stop Taj Mahal Bangladesh is a scaled copy of the original Taj Mahal -a Mughal mausoleum located in Agra, India. Proceed for Sonargaon which was a historic administrative, commercial and maritime center in Bengal.Situated in the center of the Ganges delta, it was the seat of the medieval Muslim rulers and governors of eastern Bengal. Sonargaon was described by numerous historic travelers, including Ibn Battuta, Ma Huan, Niccolo de Conti and Ralph Fitch as a thriving center of trade and commerce.It served as the capital of Sultan Fakhruddin Mubarak Shah, Isa Khan and the Baro-Bhuyan Confederacy. Next, you’ll head to some other historic buildings such as The Folk Art Museum (Wednesday & Thursday closed), Panam Nagar, Goaldi Mosque.After lunch at Sonargaon local restaurant continue for archaeological sites Mainamati.
</p>
      <p class="w3-text-grey">
        <h4>The Caravan is facilitated with:</h4>
        1.Washroom <br>
        2.Kitchen <br>
        3.Library <br>
        4.CC Camera Surveillance <br>
        5.Skilled Guide <br>
        6.Experienced Chef
      </p>
      <hr>
</tr> 
<tr>
    <h1 style="text-align: center;">Destinations</h1>
      <h4>Hopping Places:</h4>
        1.Dhaka to Khulna 280Km (8-hour Drive Approx.) Enjoy Banglar Tajmahal, a scaled copy of the original Taj Mahal <br>
        2.Explore the historical The Folk Art Museum Sonargaon <br>
        3.Discover historical Panam Nagar and Goaldi Mosque <br>
        4.Visit Salban Vihara, Rupban Mura, Itakhola Mura, Mainamati Mound and Mainamati Museum <br>
        <hr>
</tr> 
<tr>
<h1 style="text-align: center;">Food Menu</h1>
      <p class="w3-text-grey"><b>1.Welcome Snacks:</b>  Sandwich, Coconut Water, Apple, Mineral Water. <br>

  <b>2.Lunch Platter:</b>  Chicken Fried Rice, Cashew Nut Salad, Vegetable, Masala Chicken, Cold Drinks, Mineral Water. <br>

<b>3.Evening Snacks:</b>  Fried Chicken, Bun, French Fry, Sauce, Green Tea, Mineral Water</p>
<hr>
</tr> 
      <h1 style="text-align: center;">Travel Tips</h1>
      <p class="w3-text-grey"> 
1.Carry drinking water. Stay hydrated, travel healthy. <br>
2.It is advised to carry a set of fresh clothes for the beach. <br>
3.Always be respectful of the rules and guidelines of the tourist spots. <br>
4.Please do not litter. Use a polybag as a portable trash bin.</p>    
    </div>
    
    <!-- <div class="w3-col l6 w3-padding-large">
      <img src="/w3images/tablesetting.jpg" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">
    </div> -->
  </div>

  <hr>

  

  </form>
</div>
 <!-- Contact Section -->  
<!-- <style> 
input[type=text] {
  width: 30%;
  /* padding: 5px 1px; */
  margin: 8px 0;
  box-sizing: border-box;
}
</style> -->
<tr>
<style> 
input[type=text] {
  width: 35%;
  padding: 4px 1px;
  margin: 5px 1; 
  box-sizing: border-box;
}
</style>
  <div class="w3-container w3-padding-64" id="contact">
    <h1  style="text-align: center;" >Review</h1><br>

    <form>
  <label for="fname">Name :</label>
  <input type="text" id="fname" name="name"  placeholder="Your name.."> <br> <br>
  <label for="lname">Contact:</label>
  <input type="text" id="lname" name="contact" placeholder="Your contact.."> 
</form> <br>
<br>
<textarea  style="textarea-align: center;" rows="10" cols="100" name="comment" form="usrform" placeholder="Enter text here...">
</textarea>

<p>if you have any comments then write here.....</p> 
<!-- <input type="submit" value="Submit"> -->
<a href="" class="btn btn-primary btn-xl" style="color:black;"><b>Submit</b></a>
<!-- <a href=""  input type="submit" value="Submit">Submit</a> -->
<!-- <input style="background-color:#45a049;" style="color:white;" type="submit">  -->
</tr>
</tbody>
</table>
    <!-- <p>We offer full-service catering for any event, large or small. We understand your needs and we will cater the food to satisfy the biggerst criteria of them all, both look and taste. Do not hesitate to contact us.</p>
    <p class="w3-text-blue-grey w3-large"><b>Catering Service, 42nd Living St, 43043 New York, NY</b></p>
    <p>You can also contact us by phone 00553123-2323 or email catering@catering.com, or you can send us a message here:</p>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16" type="number" placeholder="How many people" required name="People"></p>
      <p><input class="w3-input w3-padding-16" type="datetime-local" placeholder="Date and time" required name="date" value="2020-11-16T20:00"></p>
      <p><input class="w3-input w3-padding-16" type="longtext" placeholder="Message \ Special requirements" required name="Message"></p>
      <p><button class="w3-button w3-light-grey w3-section" type="submit">SEND MESSAGE</button></p>
    </form> -->
  </div>
  
<!-- End page content -->
                            

              </div>
            </div>
          </div> 
       </div>
    </div>         

</section>
            </div>
        </div>
    </div>

@endsection   

<!-- Footer -->
<!-- <footer class="w3-center w3-light-grey w3-padding-32">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>

</body>
</html> -->
