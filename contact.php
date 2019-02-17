<?php include'head.php'?>
<?php include'header.php'?>
<div class="space"></div>
<div class="space"></div>
<body>

    <div class="container4">
<div class="container2">
    
    <h2>GIVE US A SHOUT</h2>
    <p style="font-style: italic; color:grey;">bellafare has offices in new york city and charleston, sc and will cater to destination events throughout the country and beyond.</p>
    
    <div class="space"></div>
    
    <!--contact form-->
    
    <!--container left-->
    <h4>PLEASE COMPLETE THE FORM BELOW</h4>
    
    <div class="space"></div>
    
    <form action="connection.php" method="post">
    <label>Name *</label>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="f_name" required>
        <small class="form-text text-muted">First Name</small>
    </div>
    <div class="col">
      <input type="text" class="form-control" name="l_name" required>
        <small class="form-text text-muted">Last Name</small>
    </div>
  </div>
  <div class="form-group">
    <label>Email Address *</label>
    <input type="email" class="form-control" name="email" required>
  </div>
  <div class="form-group">
    <label>Phone</label>
    <input type="text" class="form-control" name="phone">
  </div>
  <div class="form-group">
    <label>Wedding Date</label>
    <input type="date" class="form-control" name="date">
  </div>
  <div class="form-group">
    <label>Wedding Budget</label>
    <input type="number" class="form-control" placeholder="$" name="budget">
  </div>
  <div class="form-group">
    <label>Number of Guest</label>
    <input type="number" class="form-control" name="guest">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Tell us a little about your wedding *</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="info" required></textarea>
  </div>
        <div class="form-group">
    <label for="exampleFormControlTextarea1">How did you hear about Bellafare? *</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="exist" required></textarea>
  </div>
  <button type="submit" class="button" style="float:left;">Submit</button>
</form>
    
    </div>
    
    <!--container right-->
    <div class="container3">
        <div class="container">
        <div class="row">
      <div class="col-sm">
        <p>Bellafare SC<br> (843) 352-9692 
            <br>
        </p>
          <p>For event inquiries:<br>
              <a href="mailto:events@bellafare.com" class="ex1">events@bellafare.com</a>
              <br>
          </p>
      </div>

      <div class="col-sm">
        <p>Bellafare NY<br> (212) 216-9106 
            <br>
        </p>
          <p>For event inquiries:<br>
              <a href="mailto:info@bellafare.com" class="ex1">info@bellafare.com</a>
              <br>
          </p>
      </div>
    </div>
        </div>
        
        <img src="lib/contact.jpg" style="width:87%; height:880px;">
        
    </div>
    </div>
    <div style="margin-top:87%;"></div>
    <div class="container">
        <div class="line"></div>
        <div class="space"></div>
    
        <!--mid footer-->
    <?php include'mid-footer.php'?>
        
        <!--footer-->
    <div class="space"> </div>
    <div class="container1">
    <div class="space"> </div>
    <?php include 'footer.php';?>
    </div>
    </div>
</body>