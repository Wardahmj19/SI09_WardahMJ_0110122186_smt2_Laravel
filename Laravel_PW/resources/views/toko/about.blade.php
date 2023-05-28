@extends('template/main')

@section('content')
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="/img/foto2.png" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750">
    </div>

    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center">About Ctrl+Zit</h1><br>
      <h5 class="w3-center">HEY THERE, WELCOME TO CTRL-Z IT!</h5>
      <br>
      <p class="w3-large">We create simple and effective skincare that work like pressing CTRL-Z. Strictly developing skincare with ingredients backed by research, we’ve formulated products to address skin imperfections without the use of harsh chemicals that strip away your natural skin barrier.</p>
    </div>
  </div>
  
  <hr>
  
  <div class="w3-row w3-padding-64" id="menu">
    <div class="w3-col l6 w3-padding-large">
      <h1 class="w3-center">Our Product</h1><br>
      <h4>BRIGHTEN UP! DON'T LET DARK SPOTS GET YOU DOWN</h4>
      <p class="w3-text-grey">Assortment of fresh baked fruit breads and muffins 5.50</p><br>
    
      <h4>MICROPIN TECHNOLOGY</h4>
      <p class="w3-text-grey">Natural cereal of honey toasted oats, raisins, almonds and dates 7.00</p><br> 
      
      <h4>EXZIT HYDROCOLLOID DUO</h4>
      <p class="w3-text-grey">With syrup, butter and lots of berries 8.50</p><br> 
    </div>
    
    <div class="w3-col l6 w3-padding-large">
      <img src="/img/foto3.jpg" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">
    </div>
  </div>
  
  <hr>
@endsection

@section('content2')
<div class="w3-container w3-padding-64" id="contact">
    <h1>Contact</h1><br>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16" type="number" placeholder="How many product" required name="Product"></p>
      <p><input class="w3-input w3-padding-16" type="datetime-local" placeholder="Date and time" required name="date" value="2023-05-28T13:00"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Message \ Special requirements" required name="Message"></p>
      <p><button class="w3-button w3-light-grey w3-section" type="submit">SEND MESSAGE</button></p>
    </form>
  </div>
@endsection