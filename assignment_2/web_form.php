<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<!-- Author:  Matthew Edwards -->
<!-- Created: 20/03/20  -->
<!-- Description: My web form  -->
<!-- Version: 4.0  -->
<!-- Latest Changes: 05/03/21  -->
<!-- Modified:  05/03/21  -->
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta charset="utf-8">
      <meta name="description" content="Matthew's web form">
      <meta name="author" content="Matthew Edwards">
      <link rel="stylesheet" href="css/web_form.css" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Noto+Serif&display=swap" rel="stylesheet" type="text/css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Sajnóg, M. (2018) AOS Available from: https://michalsnik.github.io/aos/ [Accessed 01 April 2020]-->
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      <title>Contact about CV</title>
   </head>
   <body>
      <!--This container were the welcome screen and sliding animation will be here -->
      <div id="container1">
         <header>
         <div id="nav_style">
            <h1 id="header_style">Welcome</h1>
         </div>
         <!--This is the home picture link to take you back to the image map-->
         <div id="home_link">
            <a href="image_map.html">
            <img  style="border: 0" alt="This is to home" src="images\home.png" width="50" height="50">
            </a>
         </div>
         <!--This is the animations for the text at the top-->
         <!-- Sajnóg, M. (2018) AOS Available from: https://michalsnik.github.io/aos/ [Accessed 01 April 2020]-->
         <div class="animation_banner" data-aos="fade-right">Hello<div id="name" style="display: inline;"></div>, welcome to request my CV homepage</div>
         <br>
         <div class="animation_banner" data-aos="fade-left">Please fill in the information below, you must fill out a comment.</div>
      </div>
      <!--This container will be were the form action will happen-->
      <main>

         <div id="container2">
           <br>
           <br>
            <!--here will need to be were the text size and background colour controls will need to be-->
            <input type="button" id="blackBackgd" value='Dark' title="Change the background colour to black">
            <input type="button" id="sandBackgd" value='Original' title="Change the background colour to original ">
            <div id="button_container">
               <!--These are the up and down font size buttons-->
               <button id="up" title="Go up one size for text">A</button>
               <button id="down" title="Go down one size for text">a</button>
            </div>
            <div id="form_style">
               <!--This is the title input -->
               <h2>Please fill out this form to request my CV</h2>
               <!--This will link to the process_CV_requests php file to add to the table of cv requests-->
               <form id="CV_form" action="process_CV_requests.php" method="post">
                  <label for="my_title" >Title: </label><br/>
                  <input type="text" id="my_title" name="title" title="Please fill out your title." placeholder="Enter your Title"  maxlength="12" required><br/>
                  <!--This will show a error message if the input has not matched the regex pattern  -->
                  <div id="titleError" style="display:none; color: red;">Please enter a valid title</div>
                  <!--This is the forename input -->
                  <label for="my_forename">Forename:</label><br/>
                  <input type="text" id="my_forename" name="forename" title="Please fill out your forename." placeholder="Enter your Forename"  maxlength="40" required><br/>
                  <!--This will show a error message if the input has not matched the regex pattern  -->
                  <div id="forenameError" style="display:none; color: red;">Please enter a valid forename</div>
                  <!--This is the surname input -->
                  <label for="my_surname">Surname:</label><br/>
                  <input type="text" id="my_surname" name="surname" title="Please fill out your surname." placeholder="Enter Your Surname"  maxlength="40" required><br/>
                  <!--This will show a error message if the input has not matched the regex pattern  -->
                  <div id="surnameError" style="display:none; color: red;">Please enter a valid surname</div>
                  <!--This is the email input -->
                  <label for="my_email">Email:</label><br/>
                  <input type="email" id="my_email" name="emailid" title="Please fill out your email." placeholder="Enter Your Email"  maxlength="50" required><br/>
                  <!--This will show a error message if the input has not matched the regex pattern  -->
                  <div id="emailError" style="display:none; color: red;">Please enter a valid email</div>
                  <!--This is the company input -->
                  <label for="my_company">Company Name:</label><br/>
                  <input type="text" id="my_company" name="company" title="Please fill out your company name." placeholder="Which do company you work for?"  maxlength="50" required>
                  <!--This will show a error message if the input is less than 2 characters  -->
                  <div id="companyError" style="display:none; color: red;">Please enter a valid company name</div>
                  <br/>
                  <label for="user_comment">Comments:</label><br/>
                  <!--This is the comments textarea -->
                  <textarea id="user_comment" name="usercomment" rows="6" cols="50" title="Please fill out a comment." placeholder="Please enter a comment, to see why you want my CV" required ></textarea>
                  <!--This will show a error message if the input is less than 5 characters  -->
                  <div id="commentError" style="display:none; color: red;">Please enter a valid comment</div>
                  <br>
                  <br>
                  <!--This is the radio buttons for the cv choice-->
                  <label>Short CV<input type="radio" id="cvchoice_1" class="radio_style" name="chosencv" value="short" checked/></label><br>
                  <br>
                  <label>Long CV<input type="radio" id="cvchoice_2" class="radio_style" name="chosencv" value="long"/></label><br>
                  <br>
                  <!--This is the submit button which will process the request-->
                  <input type="submit" name="request_CV" value="Request CV">
                  <!--This will clear all the information in the fields-->
                  <input type="button" onclick="clearAll()" value="Clear" title="Clear all of the form">
               </form>
               <br>
               <!--This will open the view_CV_requested page to see the companies requests-->
               <input id="requestPage" type="button" onclick='window.location = "view_CV_requested.php"' value="Go to requested CV's" title="Go to the requested CV page">
               <br>
               <br>
               <!--This will go back to the top of the page when clicked-->
               <input id="scrollPage" type="button" onclick="smoothScrollTop()" value="Go to top" title="Go to the top of the page" >
            </div>
            <!--This will be the local storage banner that will appear at the bottom of the page-->
            <div id="storage_container">
               <p id="stor_par">
                  We use local storage in this website, please accept to
                  confirm the use of your data stored in your browser and that your form entries will be stored in a database.
                  Your data will only be used for statistical purposes.
               </p>
               <!--This is the button the user will click to accept use of local storage -->
               <button id="storageBtn" title="Click this so your agree your data is stored on your browser ">
               I Accept
               </button>
            </div>
         </div>
      </main>
      <script src="https://code.jquery.com/jquery-3.4.1.js"   integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="   crossorigin="anonymous"></script>
      <!-- Sajnóg, M. (2018) AOS Available from: https://michalsnik.github.io/aos/ [Accessed 01 April 2020]-->
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script src="scripts/web_form.js"></script>
   </body>
</html>
