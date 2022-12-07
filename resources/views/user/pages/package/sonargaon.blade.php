@extends('user.user')
@section('main')
<!-- <img src="{{asset('image/coxbazar.jpg')}}"  alt="image" width="500" height="500"> -->
<!-- Carousel Start -->
<div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{asset('image/sonargoan1.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 600px;">
                            <h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
                            <h1 class="display-3 text-white mb-md-4">Let's Discover The World Together</h1>
                            <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a> -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{asset('image/sonargoan2.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 600px;">
                            <h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
                            <h1 class="display-3 text-white mb-md-4">Discover Amazing Places With Us</h1>
                            <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a> -->
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="w-100" src="{{asset('image/sonargoan5.jpg')}}" alt="Image">
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
      <h1 style="text-align: center;" >About this activity</h1>
      <h3><b>Sonargaon</b></h3>
      <p class="w3-large">Enjoy a Dhaka day-tour to visit some of the most amazing destinations including Sonargaon (The old capital of Bengal), Folk Art Museum, Panam City (Panam Nagar) and cruises on the Meghna River. We are committed to making your trip enjoyable and exciting and to the highest quality of our service. So why are you late?<span class="w3-tag w3-light-grey">Will you going Sonargaon?</span>Contact with Us.</p>
      <h4 style="text-align: left;" >Contact</h4>
      <p class="w3-large w3-text-grey w3-hide-medium"><address><b> Contact - </b> 01853039335 <br>  <b> Email - </b> tour&travel@gmail.com <br> <b> Website - </b> www.tour&travel.com  <br> <b> Address - </b> Punashi Villa, Flat-4/A, Level-4, House-150, Block-E, Road-10, Banani, Dhaka-1213, Bangladesh<address> </p>
    </div>
  </div>
  
  <hr>
  <tr>
  <!-- Menu Section -->
  <div class="w3-row w3-padding-64" id="menu">
    <div class="w3-col l6 w3-padding-large">
      <h1 style="text-align: center;" >Details</h1>
      <h4>Timing:</h4>
      <p class="w3-text-grey">9:00 AM - 6:00 PM</p>
      <h4>Duration :</h4>
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
<h1 style="text-align: center;" >Description</h1>
     
      <p class="w3-text-grey">
Take a private full-day tour of Sonargaon to get to know the city’s incredible historic administrative, commercial and maritime center in Bengal. The popular 8-hour tour includes all transportation, the services of a personal driver and tour guide throughout the day.
      

Following a hotel pick-up, your first stop will be Banglar Tajmahal which is a scaled copy of the original Taj Mahal (a Mughal mausoleum located in Agra, India) located 10 miles east of the Bangladeshi capital, Dhaka in Sonargaon. Explore one of the most historic cities in Bangladesh namely Sonargaon, The Old Capital of Bengal. With its magnificent ancient buildings and monuments, it is only fitting that this wonderful capital would become home to a museum that captures and preserves the traditions and culture of the people of Bangladesh.

Next, head to The Folk Art Museum, or Folk Art and Crafts Museum is located on a picturesque fifty hectare piece of land that consists of breathtaking landscapes, peaceful artificial lakes and ponds, and of course the structures that make up the Folk Art Museum complex (Wednesday, Thursday & Government holiday is closed). Later on proceed to Panam City (Panam Nagar) to see the beautifully decorated buildings constructed around the end of 18th century and Goaldi Mosque that was built in 1519.

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
      <h1 style="text-align: center;" >Destinations</h1>
      <h4>Hopping Places:</h4>
       
       1.Enjoy Banglar Tajmahal <br>
       2.Explore The Old Capital of Bengal<br>
       3.Visit Folk Art and Crafts Museum <br>
       4.Experience The Panam City and Goaldi Mosque <br>
       5.Cruise on the Meghna River
       <hr>
      </tr>

      <tr>
      <h1 style="text-align: center;" >Food Menu</h1>
      <p class="w3-text-grey"><b>1.Welcome Snacks:</b>  Sandwich, Coconut Water, Apple, Mineral Water. <br>
 <b>2.Lunch Platter:</b>  Chicken Fried Rice, Cashew Nut Salad, Vegetable, Masala Chicken, Cold Drinks, Mineral Water. <br>
 <b>3.Evening Snacks:</b>  Fried Chicken, Bun, French Fry, Sauce, Green Tea, Mineral Water</p><br>
 <hr>
      </tr>
 <h1 style="text-align: center;" >Travel Tips</h1>
     
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
  
<!-- End page content -->
</div>

</tr>


</tbody>
                                            
                                        </table>
                                       

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
