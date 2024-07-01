<!DOCTYPE html>
<html lang="en">
<style>
  .container1 {
  background-color: transparent; /* Initial background color */
  transition: background-color 0.3s ease; /* Smooth transition for background color */
  height: 30px;
}

.container1.scrolled {
  background-color: white; /* Background color when scrolled */
 
}
.container2 {
  background-color: transparent; /* Initial background color */
  transition: background-color 0.3s ease; /* Smooth transition for background color */
  height: 60px;
}

.container2.scrolled {
  background-color: #F7BA17; /* Background color when scrolled */
 
}
#hero2 {
  display: flex;
  align-items: center; /* Vertical center alignment */
  justify-content: flex-end; /* Align items to the right */
}

.hero-content {
  margin-right: 20px; /* Adjust this margin as needed */
}

.hero-content h1 {
  margin: 0; /* Remove default margin for <h1> */
}

img {
  max-width: 100%; /* Ensure the image doesn't exceed its container */
  height: auto; /* Maintain aspect ratio */
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Black shadow with 50% opacity */
  
}
.text-overlay {
  position: absolute; /* Positioning the overlay */
  top: 32%; /* Distance from the top of the containing element */
  left: 25%; /* Distance from the left of the containing element */
  transform: translateY(-50%); /* Centering vertically */
  padding: 10px; /* Padding around the text */
  font-size: 4vw; /* Font size responsive to viewport width */
  color: blue; /* Text color */
  font-family: Arial, sans-serif; /* Font family */
  font-style: normal; /* Font style */
  font-weight: bold; /* Font weight */
  
  /* Animation properties */
  animation-name: slideInFromLeft; /* Name of the animation */
  animation-duration: 1s; /* Duration of the animation */
  animation-timing-function: ease-out; /* Timing function of the animation */
}

@keyframes slideInFromLeft {
  0% {
    transform: translateX(-100%); /* Start off-screen left */
    opacity: 0; /* Hidden initially */
  }
  100% {
    transform: translateX(0); /* Move to original position */
    opacity: 1; /* Fully visible */
  }
}

/* Media query for responsiveness */

.list ul {
  list-style-type: none; /* Remove default list styles */
  margin: 0; /* Remove default margin */
  padding: 0; /* Remove default padding */
  display: flex; /* Flex container for list items */
}

.list ul li {
  margin-right: 20px; /* Margin between list items */
}

.list ul li:last-child {
  margin-right: 0; /* Remove margin for the last list item */
}

.list ul li a.button-link {
  color: blue; /* Text color */
  text-decoration: none; /* Remove underline */
  padding: 10px; /* Padding around the text */
  font-size: 13px; /* Font size of the button-link */
  font-family: Arial, sans-serif; /* Font family */
  font-weight: bold; /* Font weight */
  transition: color 0.3s ease; /* Smooth color transition */
}


.list ul li a.button-link:hover {
  color: #F7BA17; /* Change text color on hover */
}

.list ul li a.button-link:hover::after {
  width: 100%; /* Full width underline on hover */
}
.list1 {
    display: flex;
    justify-content: flex-end; /* Align items to the right */
    align-items: center; /* Vertical center alignment */
    height: 100%; /* Ensure it takes full height of parent container */
  }

  .list1 ul {
    list-style-type: none; /* Remove default list styles */
    margin: 0; /* Remove default margin */
    padding: 0; /* Remove default padding */
    display: flex; /* Flex container for list items */
  }

  .list1 ul li {
    margin-right: 20px; /* Margin between list items */
  }

  .list1 ul li:last-child {
    margin-right: 0; /* Remove margin for the last list item */
  }

  .list1 ul li a {
    text-decoration: none; /* Remove underline */
    color: #333; /* Text color */
    font-size: 20px; /* Font size of the links */
    font-family: Arial, sans-serif; /* Font family */
    font-weight: bold; /* Font weight */
    transition: color 0.3s ease; /* Smooth color transition */
    padding:15px;
  }

  .list1 ul li a:hover {
    color: #00f; /* Change text color on hover */
  }
  .container2 .brand h1 span {
  color: blue;
}
.wrapper {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #ffffff;
    padding: 30px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    z-index: 1000; /* Ensure the form is above other content */
}

.close-btn {
    position: absolute;
    top: 10px;
    right: 10px;
    background: none;
    border: none;
    cursor: pointer;
    font-size: 24px;
    color: #333;
}

.form-box {
    max-width: 400px;
    margin: 0 auto;
    text-align: center;
}

.input-box {
    position: relative;
    margin-top: 15px;
    margin-bottom: 20px;
}

.input-box input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    outline: none;
    font-size: 16px;
}

.input-box label {
    position: absolute;
    top: 50%;
    left: 10px;
    transform: translateY(-50%);
    color: #999;
    pointer-events: none;
    transition: 0.5s;
}

.input-box input:focus ~ label,
.input-box input:valid ~ label {
    top: -10px;
    left: 10px;
    transform: translateY(0%);
    background-color: #ffffff;
    padding: 0 5px;
    color: #333;
    font-size: 12px;
}

.btn {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #0056b3;
}

.bx {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    right: 10px;
    color: #999;
}

/* CSS styles for service items */


.service-bottom1 {
  display: flex; /* Display items in a row */
  justify-content: space-around; /* Distribute items evenly along the row */
  flex-wrap: wrap; /* Wrap items to the next row if necessary */
  max-width: 1200px; /* Limit maximum width */
  padding-top:30px;
  margin: 0 auto; /* Center align horizontally */
}

.service-item1 {
  background-color: #70AFFA;
  text-align: center; /* Center align text */
  padding: 20px; /* Add padding around each item */
  width: calc(25% - 40px); /* Calculate width for each item (4 items per row) */
  margin-bottom: 40px; /* Add bottom margin */
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Add shadow for a card effect */
  border-radius: 8px; /* Rounded corners */
}

.icon img {
  width: 80px; /* Adjust icon size */
  height: 80px;
  object-fit: contain; /* Maintain aspect ratio */
  margin-bottom: 10px; /* Add space below the icon */
}

h2 {
  color: white; /* Title color */
  font-size: 1.8rem; /* Title font size */
  margin-bottom: 10px; /* Add space below the title */
}

p {
  color: white; /* Paragraph color */
  font-size: 1.4rem; /* Paragraph font size */
  line-height: 1.6; /* Line height for better readability */
}
@media (max-width: 768px) {
  .text-overlay {
    text-align: center;
    font-size: 6vw; /* Adjust font size for smaller screens */
    left: 5%; /* Adjust position from left for smaller screens */
  }
  .service-bottom1 {
    
  }

  .service-item1 {
    width: calc(50% - 40px); /* Two items per row */
  }
}
</style>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>My Website</title>
</head>

<body>
  <!-- Header -->
  <section id="header">
    <div class="container2">
      <div class="nav-bar">
        <div class="brand">
        <a href="#hero">
            <h1><span>S</span>chool <span>I</span>nn</h1>
          </a>
        </div>
        <div class="list1">
        
          <ul>
          <li><a href="#hero2" data-after="Home">Home</a></li>
          <li><a href="#product" data-after="Product">Product</a></li>
            <li><a href="#services" data-after="Service">Services</a></li>
            <li><a href="#projects" data-after="Projects">Projects</a></li>
            <li><a href="#about" data-after="About">About</a></li>
            <li><a href="#contact" data-after="Contact">Contact</a></li>
  
</ul>
        </div>
      </div>
      
    </div>
    <div class="container1">
      <div class="nav-bar">
      <div class="brand">
          
        </div>
        <div class="list">
       
          <ul>
          <li><a href="#about" data-after="About" class="button-link">Login</a></li>
          <li><a href="#" data-after="Contact" class="button-link">About</a></li>
          </ul>
        </div>
      </div>
      
    </div>
  </section>
  <script>
    // Select the container element
    const container1 = document.querySelector('.container1');
  const container2 = document.querySelector('.container2');

  // Function to handle scroll event
  function handleScroll() {
    // Check if the page has scrolled beyond a certain point for container1
    if (window.scrollY > 100) {
      container1.classList.add('scrolled'); // Add the 'scrolled' class
    } else {
      container1.classList.remove('scrolled'); // Remove the 'scrolled' class
    }

    // Check if the page has scrolled beyond a certain point for container2
    if (window.scrollY > 200) {
      container2.classList.add('scrolled'); // Add the 'scrolled' class
    } else {
      container2.classList.remove('scrolled'); // Remove the 'scrolled' class
    }
  }

  // Add scroll event listener to window
  window.addEventListener('scroll', handleScroll);


  document.addEventListener("DOMContentLoaded", function() {
    const buttonLink = document.querySelector('.button-link');
    const wrapper = document.querySelector('.wrapper');
    const closeBtn = wrapper.querySelector('.close-btn');

    // Add click event listener to the button link
    buttonLink.addEventListener('click', function(e) {
        e.preventDefault();
        wrapper.style.display = 'block';
    });

    // Add click event listener to the close button
    closeBtn.addEventListener('click', function() {
        wrapper.style.display = 'none';
    });

    // Optionally, you can add functionality to close the form if clicking outside of it
    wrapper.addEventListener('click', function(e) {
        if (e.target === wrapper) {
            wrapper.style.display = 'none';
        }
    });
});

  </script>