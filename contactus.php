<?php $page = "contactus";
include "header.php" ?>
<div class="container contentBlock p-3 p-md-5">
    <div class="row">
        <div class="col-md-6 pt-lg-5">
            <div class="sectiontitle-element">
                <h2>Get In Touch</h2>
                <p>At <b>Westling Industrie El Ab</b>, we strive to serve our clients in the best way possible. If you have any concerns/queries or would like to conduct business with us, please feel free to contact us. You may do so by filling in your details in the form provided
                    <span class="rht"> on the right hand side. </span>
                    <span class="lft"> below. </span>
                </p>
                <br>
                <h6 class="big-font"><b>India</b></h6>
                <p> Enter Address Needed</p>
            </div>
            <div class="row mt-5">
                <div class="col-12 col-md-6 col-sm-6">
                    <div class="contactInfo">
                        <div class="infoImg"><img src="images/emailIcon.svg" alt="Email Us"></div>
                        <div class="infoContent">
                            <h6>Email Us</h6>
                            <p><a href="mailto:hello@EmailName.com" class="simple-underline">hello@EmailName.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-sm-6">
                    <div class="contactInfo">
                        <div class="infoImg"> <img src="images/callUs.svg" alt="Call Us"></div>
                        <div class="infoContent">
                            <h6>Call us</h6>
                            <p><a href="tel:+91-996-358-2997" class="simple-underline">+91-996-358-2997</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 p-3 py-md-5">
            <form id="contact-form" class="cfDesign" action="contact.php" method="post">
                <div id="errMsg"></div>
                <div id="sucss"></div>
                <div class="basic-form--border--round--row">
                    <div class="field col-lg-12 col-md-6 col-sm-6">
                        <label for="name">Your Name <sup>*</sup></label>
                        <input id="name" name="name" type="text" placeholder="Please Enter Full Name" class="form-field">
                    </div>
                    <div class="field col-lg-12 col-md-6 col-sm-6">
                        <label for="mail">Email Address <sup>*</sup></label>
                        <input id="mail" name="mail" type="email" placeholder="Please Enter Email" class="form-field" data-error="false">
                    </div>
                    <div class="field col-lg-12 col-md-6 col-sm-12">
                        <label for="message">Message <sup>*</sup></label>
                        <textarea id="message" name="message" placeholder="Please Enter Message" class="form-field"></textarea>
                    </div>
                    <div class="field col-12">
                        <input id="submit" name="submit" type="submit" class="btn--big--round--primary" value="Send Message">
                    </div>
                </div>
            </form>

        </div>

    </div>
</div>
<?php include "footer.php" ?>

<script>
    const form = document.querySelector('#contact-form');
const nameInput = document.querySelector('#name');
const emailInput = document.querySelector('#mail');
const messageInput = document.querySelector('#message');

form.addEventListener('submit', (event) => {
  event.preventDefault();

  // Validate name
  if (nameInput.value.trim() === '') {
    nameInput.classList.add('error');
  } else {
    nameInput.classList.remove('error');
  }

  // Validate email
  if (emailInput.value.trim() === '' || !isValidEmail(emailInput.value.trim())) {
    emailInput.classList.add('error');
  } else {
    emailInput.classList.remove('error');
  }

  // Validate message
  if (messageInput.value.trim() === '') {
    messageInput.classList.add('error');
  } else {
    messageInput.classList.remove('error');
  }

  // Check if all fields are valid
  const errorInputs = form.querySelectorAll('.error');
  if (errorInputs.length === 0) {
    // Submit the form
    form.submit();
  }
});

function isValidEmail(email) {
  // Regular expression for validating email address
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}

</script>