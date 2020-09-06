/*

  @author Matthew Edwards
  @Last modified 23/04/20

*/

// this will smooth scroll to the top
// Anon. (2017) jQuery .scrollTop(); + animation Available from: https://stackoverflow.com
// /questions/16475198/jquery-scrolltop-animation [Accessed 02 April 2020]
function smoothScrollTop() {
    var myBody = $("html, body");
    myBody.stop().animate({
        scrollTop: 0
    }, 600, 'swing', function() {});
}

// this will get the the size of the font
function getSize() {
    // this will get the size of the label font size
    var fontSize = $("label").css("font-size");
    // this will convert the string of fontsize to a integer
    var fontSizePar = parseInt(fontSize, 10);
    // this will gain access to the font size and parse the value to an int
    $("#font-size").text(fontSizePar);
}
// this will return the name of user to the animation if they return to the page.
function returnName() {
    // this will get the forename key from the local storage, if the the forename exists
    var sayHello = localStorage.getItem('forename')
    if(sayHello == null){
      // if the local storage is empty
      return "";
  }
  else {
      //if the user returns
      return ( " again " + sayHello);
  }

}
// this will print out the name on the animation, if the user comes back to the web form
document.getElementById("name").innerHTML = returnName();

// this will clear all the text on the form
function clearAll() {
    document.getElementById("CV_form").reset();
    //this will hide any error messages
    $('#titleError').hide();
    $('#forenameError').hide();
    $('#surnameError').hide();
    $('#emailError').hide();
    $('#companyError').hide();
    $('#commentError').hide();
}

// this is for the animation effect of the boxes
// Sajnóg, M. (2018) AOS Available from: https://michalsnik.github.io/aos/ [Accessed 01 April 2020]
$(document).ready(function() {
    AOS.init({
        duration: 3000,
    });
}); // end of ready
//this will be the functionality of the banner
$(document).ready(function() {
    //Thomas, G. (2020) Cookie-Consent-Banner Available from: https://github.com/Godsont/Cookie-Consent-Banner [Accessed 03 April 2020]
    // once the accept button is clicked
    $("#storageBtn").on("click", function() {
        // hide the banner if the user clicked the button
        $("#storage_container").hide();
        // this will get the storageBannerDisplayed key to value of true
        localStorage.setItem("storageBannerDisplayed", "true");
    });
    // this is to make sure the banner does not appear once the user loads the webpage
    setTimeout(() => {
        // this will show the banner once the timer has passed
        if (!localStorage.getItem("storageBannerDisplayed")) {
            $("#storage_container").show();
        }

    }, 3000);
}); // end of the ready

$(document).ready(function() {
    // this button changes the background to black
    $("#blackBackgd").click(function() {
        $("#container2").css("background-color", "#000000FF")
        // this will change the labels and the header of the form text to white
        $("label").css("color", "#FFFFFFFF")
        $("h2").css("color", "#FFFFFFFF")
    });
    // this will change the background colour back its original colour
    $("#sandBackgd").click(function() {
        $("#container2").css("background-color", "#CDB599FF");
        // this will change the labels and the header of the form text to black
        $("label").css("color", "#000000FF")
        $("h2").css("color", "#000000FF")
    });
}); // end of ready



// this is going to style the button hover effect
$(document).ready(function() {
    // this will make the request cv light blue colour once you hover over the button
    $("input[type=submit]").hover(function() {
        $(this).css("background-color", "#9CC3D5FF");
    }, function() {
      // once the user stops hovering over the button, it will return its original white colour
        $(this).css("background-color", "#FFFFFFFF");
    });
}); // end of ready


// this is were the functionality of the size buttons will be
$(document).ready(function() {
    //get inital font size by calling this function
    getSize();
    // When the up button is click it will  go up a larger size
    $("#up").on("click", function() {
        // this will increase the font is size by 5 each time the A button is clicked
        $("label").css("font-size", "+=5");
        $("#font-size").text(fontSizePar = 10);

    });
    // When the down button is clicked it go down to a smaller size
    $("#down").on("click", function() {
        // this will decrease the font is size by 5 each time the a button is clicked
        $("label").css("font-size", "-=5");
        $("#font-size").text(fontSizePar = 10);

    });
    // this is going to be used for the changing colour of the textboxes once hover
  $(document).ready(function() {
        //setup the regex for the valiation matching for the textboxes
        var regex = /^[a-zA-Z]*$/;
        var regex2 = /^\w+([-+.'][^\s]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

        // Highlight paragraph elements
        // this is for the title textbox
        // this is for the user to hover over the textbox to change colour
        $("#my_title").hover(function() {
            $(this).addClass("highlight");
        }, function() {
          // this makes sure to stop showing the light blue colour once the user stops hovering
            $(this).removeClass("highlight");
        });
        // this is to focus on a textbox when you are typing
        $("#my_title").focus(function() {
            $(this).addClass("clickHighlight");
        });
        // once the user off clicks the textbox
        $("#my_title").blur(function() {
            $(this).removeClass("clickHighlight");

            //this will show or hide the validation message if it meet the conditon and length is greater than 1
            var titleValue = $("#my_title").val();
            if (regex.test(titleValue) == false || titleValue.length < 2) {
                $('#titleError').show();
            } else {
              // the message will be hidden once the input is correct
                $('#titleError').hide();
            } //end of if
        });

        // this is for the forename textbox
        // this is for the user to hover over the textbox to change colour
        $("#my_forename").hover(function() {
            $(this).addClass("highlight");
        }, function() {
            // this makes sure to stop showing the light blue colour once the user stops hovering
            $(this).removeClass("highlight");
        });
        // this is to focus on a textbox when you are typing
        $("#my_forename").focus(function() {
            $(this).addClass("clickHighlight");
        });
          // once the user off clicks the textbox
        $("#my_forename").blur(function() {
            $(this).removeClass("clickHighlight");
            //this will show or hide the message if it meet the conditon and length is greater than 1
            var forenameValue = $("#my_forename").val();
            if (regex.test(forenameValue) == false || forenameValue.length < 2) {
                $('#forenameError').show();
            } else {
              // the message will be hidden once the input is correct
                $('#forenameError').hide();
            }
        });
        // this is for the surname textboxes
        // this is for the user to hover over the textbox to change colour
        $("#my_surname").hover(function() {
            $(this).addClass("highlight");
        }, function() {
            // this makes sure to stop showing the light blue colour once the user stops hovering
            $(this).removeClass("highlight");
        });
        // this is to focus on a textbox when you are typing
        $("#my_surname").focus(function() {
            $(this).addClass("clickHighlight");
        });
          // once the user off clicks the textbox
        $("#my_surname").blur(function() {
            $(this).removeClass("clickHighlight");
            //this will show or hide the validation message if it meet the conditon and length is greater than 1
            var surnameValue = $("#my_surname").val();
            if (regex.test(surnameValue) == false || surnameValue.length < 2) {
                $('#surnameError').show();
            } else {
              // the message will be hidden once the input is correct
                $('#surnameError').hide();
            } //end of if
        });
        // this is for the email textboxes
        // this is for the user to hover over the textbox to change colour
        $("#my_email").hover(function() {
            $(this).addClass("highlight");
        }, function() {
            // this makes sure to stop showing the light blue colour once the user stops hovering
            $(this).removeClass("highlight");
        });
        // this is to focus on a textbox when you are typing
        $("#my_email").focus(function() {
            $(this).addClass("clickHighlight");
        });
          // once the user off clicks the textbox
        $("#my_email").blur(function() {
            $(this).removeClass("clickHighlight");

            //this will show or hide the message if it meet the conditon
            var emailValue = $("#my_email").val();
            if (regex2.test(emailValue) == false) {
                $('#emailError').show();
            } else {
              // the message will be hidden once the input is correct
                $('#emailError').hide();
            } //end of if
        });
        // this is for the company name textboxes
        // this is for the user to hover over the textbox to change colour
        $("#my_company").hover(function() {
            $(this).addClass("highlight");
        }, function() {
            // this makes sure to stop showing the light blue colour once the user stops hovering
            $(this).removeClass("highlight");
        });
        // this is to focus on a textbox when you are typing
        $("#my_company").focus(function() {
            $(this).addClass("clickHighlight");
        });
          // once the user off clicks the textbox
        $("#my_company").blur(function() {
            $(this).removeClass("clickHighlight");

            //this will show or hide the message if it meet the conditon and length is greater than 1
            var companyValue = $("#my_company").val();
            if (companyValue.length < 2) {
                $('#companyError').show();
            } else {
              // the message will be hidden once the input is correct
                $('#companyError').hide();
            } //end of if
        });

        // this is for the comments textarea
        // this is for the user to hover over the textbox to change colour
        $("#user_comment").hover(function() {
            $(this).addClass("highlight");
        }, function() {
            // this makes sure to stop showing the light blue colour once the user stops hovering
            $(this).removeClass("highlight");
        });
        // this is to focus on a textbox when you are typing
        $("#user_comment").focus(function() {
            $(this).addClass("clickHighlight");
        });
          // once the user off clicks the textbox
        $("#user_comment").blur(function() {
            $(this).removeClass("clickHighlight");
            //this will show or hide the message if it meet the conditon and length is greater than or equal to 5
            var commentValue = $("#user_comment").val();
            if (commentValue.length < 5) {
                $('#commentError').show();
            } else {
              // the message will be hidden once the input is correct
                $('#commentError').hide();
            } //end of if
        });

    }); // end of ready

}); // end of ready
// this will check if they have entered the correct information
$("form").submit(function(event) {
    //make sure to prevent the user from requesting cv, if they have not clicked the accept button
    if (!localStorage.getItem("storageBannerDisplayed")) {
        alert("Please click on the accept button, if you consent that your data will be stored locally and your form entries stored in a database.");
        event.preventDefault();
    }
    // this is for the characters pattern
    var regex = /^[a-zA-Z]*$/;
    // this is for the email pattern
    var regex2 = /^\w+([-+.'][^\s]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
    // this will validate the title
    var titleValue = $("#my_title").val();
    if (regex.test(titleValue) == false || titleValue.length < 2) {
        $('#titleError').show();
        event.preventDefault();
    }

    // this will validate the forename once submitted
    var forenameValue = $("#my_forename").val();
    if (regex.test(forenameValue) == false || forenameValue.length < 2) {
        $('#forenameError').show();
        event.preventDefault();

    }
    // this will validate the surname
    var surnameValue = $("#my_surname").val();
    if (regex.test(surnameValue) == false || surnameValue.length < 2) {
        $('#surnameError').show();
        event.preventDefault();

    }
    // this will validate the email
    var emailValue = $("#my_email").val();
    if (regex2.test(emailValue) == false) {
        $('#emailError').show();
        event.preventDefault();

    }
    // this will make sure there are at least 2 characters entered,
    //there is no need to check for correct character entry for company
    var companyValue = $("#my_company").val();
    if (companyValue.length < 2) {
        $('#companyError').show();
        event.preventDefault();

    }
    // this will make sure there are at least 2 characters entered
    var commentValue = $("#user_comment").val();
    if (commentValue.length < 5) {
        $('#commentError').show();
        event.preventDefault();
    }
}); //end of submit

// this is for local storage of the title field
$("form").submit(function(event) {

    // this stores the forename input field
    var forename_stor = $('#my_forename').val();
    if ($.trim(forename_stor) == '') {
        // this makes sure local storage is removed if the inputs are empty
        localStorage.removeItem('forename');
    } else {
      //this sets and stores the key title and value of the textbox
        localStorage.setItem('forename', forename_stor);

    }
    // this stores the surname input field
    var surname_stor = $('#my_surname').val();
    if ($.trim(surname_stor) == '') {
        // this makes sure local storage is removed if the inputs are empty
        localStorage.removeItem('surname');
    } else {
      //this sets and stores the key title and value of the textbox
        localStorage.setItem('surname', surname_stor);

    }

}); //end of submit
