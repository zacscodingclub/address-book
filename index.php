<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Address Book | Welcome</title>

    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/style.css" />

    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
    <div class="row">
    <div class="large-6 columns">
      <h1>Ajax Address Book</h1>
    </div>
    <div class="large-6 columns">
      <a class="add-btn button right small" data-reveal-id="myModal">Add Contact</a>
      <div id="myModal" name="addModal" class="reveal-modal" data-reveal>
        <h2>Add Contact</h2>
        <form id="addContact" action="#" method="post">
          <div class="row">
          <div class="large-6 columns">
            <label>First Name
            <input name="first_name" type="text" placeholder="Enter First Name" />
            </label>
          </div>
           <div class="large-6 columns">
            <label>Last Name
            <input name="last_name" type="text" placeholder="Enter Last Name" />
            </label>
          </div>
          </div>
          <div class="row">
          <div class="large-4 columns">
            <label>Email
            <input name="email" type="email" placeholder="Enter Email Address" />
            </label>
          </div>
          <div class="large-4 columns">
            <label>Phone Number
            <input name="phone" type="text" placeholder="Enter Phone Number" />
            </label>
          </div>
          <div class="large-4 columns">
            <label>Contact Group
              <select name="contact_group" >
                <option value="Family">Family</option>
                <option value="Friends">Friends</option>
                <option value="Business">Business</option>
              </select>
            </label>
          </div>
          </div>
          <div class="row">
          <div class="large-6 columns">
            <label>Address 1
            <input name="address1" type="text" placeholder="Enter Address 1" />
            </label>
          </div>
           <div class="large-6 columns">
            <label>Address 2
            <input name="address2" type="text" placeholder="Enter Address 2" />
            </label>
          </div>
          </div>
          <div class="row">
          <div class="large-4 columns">
            <label>City
            <input name="city" type="text" placeholder="Enter City Name" />
            </label>
          </div>
          <div class="large-4 columns">
            <label>State
            <select name="state" >
              <option value="AL">Alabama</option>
              <option value="AK">Alaska</option>
              <option value="AZ">Arizona</option>
              <option value="AR">Arkansas</option>
              <option value="CA">California</option>
              <option value="CO">Colorado</option>
              <option value="CT">Connecticut</option>
              <option value="DE">Delaware</option>
              <option value="FL">Florida</option>
              <option value="GA">Georgia</option>
              <option value="HI">Hawaii</option>
              <option value="ID">Idaho</option>
              <option value="IL">Illinois</option>
              <option value="IN">Indiana</option>
              <option value="IA">Iowa</option>
              <option value="KS">Kansas</option>
              <option value="KY">Kentucky</option>
              <option value="LA">Louisiana</option>
              <option value="ME">Maine</option>
              <option value="MD">Maryland</option>
              <option value="MA">Massachusetts</option>
              <option value="MI">Michigan</option>
              <option value="MN">Minnesota</option>
              <option value="MS">Mississippi</option>
              <option value="MO">Missouri</option>
              <option value="MT">Montana</option>
              <option value="NE">Nebraska</option>
              <option value="NV">Nevada</option>
              <option value="NH">New Hampshire</option>
              <option value="NJ">New Jersey</option>
              <option value="NM">New Mexico</option>
              <option value="NY">New York</option>
              <option value="NC">North Carolina</option>
              <option value="ND">North Dakota</option>
              <option value="OH">Ohio</option>
              <option value="OK">Oklahoma</option>
              <option value="OR">Oregon</option>
              <option value="PA">Pennsylvania</option>
              <option value="RI">Rhode Island</option>
              <option value="SC">South Carolina</option>
              <option value="SD">South Dakota</option>
              <option value="TN">Tennessee</option>
              <option value="TX">Texas</option>
              <option value="UT">Utah</option>
              <option value="VT">Vermont</option>
              <option value="VA">Virginia</option>
              <option value="WA">Washington</option>
              <option value="WV">West Virginia</option>
              <option value="WI">Wisconsin</option>
              <option value="WY">Wyoming</option>
            </select>
            </label>
          </div>
          <div class="large-4 columns">
            <label>Zipcode
            <input name="zipcode" type="text" placeholder="Enter Phone Number" />
            </label>
          </div>
          </div>
          <div class="row">
          <div class="large-12 columns">
            <label>Notes
            <textarea name="notes" placeholder="Enter Optional Notes"></textarea>
            </label>
          </div>
          </div>
          <input type="submit" class="add-btn button right small" value="Submit">
          <a class="close-reveal-modal">&#215;</a>
        </form>
      </div>
    </div>
  </div>
  <!-- Loading Image -->
  <div id="loaderImage">
    <img src="img/ajax-loader.gif">
  </div>

  <!-- Main Content -->
  <div id="pageContent"></div>
  
  <script src="js/vendor/jquery.js"></script>
  <script src="js/foundation.min.js"></script>
  <script src="js/script.js"></script>
  <script>
    $(document).foundation();
  </script>
  </body>
</html>
