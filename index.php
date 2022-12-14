<!DOCTYPE html>
<html lang="en">
  <head>
    <title>
      Duke Memorial | Welcome to our hospital, we are known for providing
      top-notch healthcare services, in delta state Warri
    </title>
    <link rel="icon" type="image/x-icon" href="assets/logo/flavicon.ico.jpg" />
    <meta name="description" content="" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <script src="http://code.jquery.com/jquery-3.1.1.js"></script>
    <script src="js/multi-animated-counter.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

    <script>
      //Search Container

      //Ajax codes
      function showSearchBox(str) {
        if (str.length == 0) {
          document.getElementById("showSearchResult").innerHTML = " ";
          document
            .getElementById("searchWrapper")
            .classList.remove("show-searchResultWrapper");
          return;
        }

        var ajaxCall = new XMLHttpRequest();
        ajaxCall.onreadystatechange = function () {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("showSearchResult").innerHTML =
              this.responseText;
            document
              .getElementById("searchWrapper")
              .classList.add("show-searchResultWrapper");
          }
        };
        ajaxCall.open("GET", "searchResult.php?q=" + str, true);
        ajaxCall.send();
      }
    </script>
  </head>
  <body>
    <!-----------------------HERO-HEADER SECTION--------------------------->
    <div id="header_hero_container">
      <header id="main_header">
        <!--First Navbar-->
        <div id="first_navbar" class="navbar-top bg-white">
          <div class="container flex">
            <p class="text-primary">
              3909 Witmer Rd, Niagara Falls, NY 14305, United States
            </p>
            <div>
              <a href="#/" class="text-primary inline-block">+1-202-555-0146</a>
              <ul class="inline-block topnavbar">
                <li class="dropdown">
                  <button
                    class="bg-next-primary-color iwantToButton"
                    id="iWantToBTN"
                  >
                    I WANT TO <i class="fa fa-fw fa-chevron-down"></i>
                  </button>
                  <ul
                    class="dropdown-content bg-next-primary-color iwantToDropdownMenu"
                    id="iWantToDropdown"
                  >
                    <li>
                      <a
                        href="patient-and-visitors/patient-care/book-appointment.php"
                        >Book Appointment</a
                      >
                    </li>
                    <li><a href="refer-a-patient.html">Refer a Patient</a></li>
                    <li>
                      <a
                        href="patient-and-visitors/patient-care/pay-a-bill.php"
                        >Pay a Bill</a
                      >
                    </li>
                    <li>
                      <a
                        href="patient-and-visitors/patient-care/your-hospital-visit.php"
                        >Visit Duke Hospital</a
                      >
                    </li>
                    <li>
                      <a
                        href="patient-and-visitors/patient-care/patient-rights.php"
                        >Known my right as a Patient</a
                      >
                    </li>
                    <li>
                      <a
                        href="patient-and-visitors/patient-care/patient-stories.php"
                        >Known Patient Stories</a
                      >
                    </li>
                    <li>
                      <a href="about-us/services.php"
                        >Know About Duke Services</a
                      >
                    </li>
                    <li>
                      <a href="map-and-direction.php">Get Driving Direction</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!--Second Navbar-->
        <div id="second_navbar" class="navbar-bottom">
          <div class="flex align-start flex-row">
            <div class="column-20 bg-white" id="whiteBackground">
              <a href="index.php" id="header_logo">
                <img src="assets/logo/blue-logo-duke.jpg" alt="duke logo" />
              </a>
            </div>
            <div class="column-80 bg-primary-color" id="greenBackground">
              <nav>
                <div class="hamburger-menu" id="navToggle">
                  <div class="span bar1"></div>
                  <div class="span bar2"></div>
                  <div class="span bar3"></div>
                </div>
                <a
                  href="javascript:void(0)"
                  class="fa fa-search"
                  id="SearchBTN"
                ></a>

                <ul id="menu_bar" class="menuBar">
                  <div class="sidebar-with-logo hide-lg-screen">
                    <a href="index.php" class="mobile-navbar-logo">
                      <img
                        src="assets/logo/duke-logo-white.png"
                        alt="duke logo"
                      />
                    </a>
                  </div>

                  <span class="close-btn hide-lg-screen" id="closeSidebar"
                    >&times;</span
                  >

                  <li class="dropdown" id="dropDown">
                    <a
                      href="#/"
                      class="dropdown-btn js_dropdown"
                      id="dropDownBTN"
                      >About Us
                    </a>
                    <div
                      class="dropdown-content bg-next-primary-color"
                      id="drop_Content"
                    >
                      <div class="flex align-start">
                        <div class="image-container col-40 about-us">
                          <h3 class="text-primary">About Us</h3>
                          <img
                            src="assets/bg-image/Male_Hospital_Visitor_1200x628-facebook.jpg"
                            alt="vistor"
                          />
                        </div>
                        <div class="col-60">
                          <ul>
                            <li>
                              <a href="about-us/about-us.php">About Us</a>
                            </li>
                            <li>
                              <a href="about-us/meet-out-team.php"
                                >Meet Our Team</a
                              >
                            </li>
                            <li><a href="about-us/history.php">History</a></li>
                            <li>
                              <a href="about-us/services.php">Services</a>
                            </li>
                            <li>
                              <a href="about-us/why-choose-us.php"
                                >Why Choose Us</a
                              >
                            </li>
                            <li>
                              <a href="about-us/mission-vision-values.php"
                                >Mission, Vision & Values</a
                              >
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="dropdown" id="dropDown">
                    <a
                      href="#/"
                      class="dropdown-btn js_dropdown"
                      id="dropDownBTN"
                      >Patient & Visitors
                    </a>
                    <div
                      class="dropdown-content bg-next-primary-color major-dropdown"
                      id="drop_Content"
                    >
                      <div class="flex align-start">
                        <div class="image-container col-30">
                          <h3 class="text-primary">Patient & Visitors</h3>
                          <img
                            src="assets/bg-image/Male_Hospital_Visitor_1200x628-facebook.jpg"
                            alt="vistor"
                          />
                        </div>
                        <div class="flex align-start col-70">
                          <div class="patient-care col-33">
                            <h5 class="text-primary">Patient Care</h5>
                            <div class="flex align-start col-75">
                              <ul class="column-50 remove-pd-bottom">
                                <li>
                                  <a
                                    href="patient-and-visitors/patient-care/book-appointment.php"
                                    >Book Appointment</a
                                  >
                                </li>
                                <li>
                                  <a
                                    href="patient-and-visitors/patient-care/your-hospital-visit.php"
                                    >Your Hospital Visit</a
                                  >
                                </li>
                                <li>
                                  <a
                                    href="patient-and-visitors/patient-care/what-to-expect.php"
                                    >What to Expect</a
                                  >
                                </li>
                                <li>
                                  <a
                                    href="patient-and-visitors/patient-care/pay-a-bill.php"
                                    >Pay a Bill</a
                                  >
                                </li>
                              </ul>
                              <ul class="column-50 remove-mg-top">
                                <li>
                                  <a
                                    href="patient-and-visitors/patient-care/patient-rights.php"
                                    >Patient Rights</a
                                  >
                                </li>
                                <li>
                                  <a
                                    href="patient-and-visitors/patient-care/patient-stories.php"
                                    >Patient Stories</a
                                  >
                                </li>
                                <li>
                                  <a
                                    href="patient-and-visitors/patient-care/frequently-asked-question.php"
                                    >FAQ</a
                                  >
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="visitors col-33">
                            <h5 class="text-primary">Visitors</h5>
                            <ul>
                              <li>
                                <a
                                  href="patient-and-visitors/visitors/visitors-policy.php"
                                  >Visitors Policy</a
                                >
                              </li>
                              <li>
                                <a
                                  href="patient-and-visitors/visitors/visitors-information.php"
                                  >Visitors Information</a
                                >
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>

                  <li class="listed">
                    <a href="refer-a-patient.php">Refer a Patient</a>
                  </li>
                  <li class="listed">
                    <a href="map-and-direction.php">Map & Direction</a>
                  </li>
                  <li class="listed">
                    <a href="#/" id="contactUs">Contact Us</a>
                  </li>

                  <div class="get-our-app hide-lg-screen" id="getApp">
                    <h3 class="text-white">
                      Download Duke's Apps for Android and iOS Devices
                    </h3>
                    <p>
                      Simplify your access to medical care with Duke's Memorial
                      app. Easily pay your bill, manage your care and contact
                      Care???virtually anytime, anywhere.
                    </p>
                    <div class="appstore-icon">
                      <img
                        src="assets/logo/google-applestore.jpg"
                        alt="google and apple store icon"
                      />
                    </div>
                  </div>
                </ul>
              </nav>
            </div>
          </div>
        </div>
        <!--Search Container-->
        <div id="sectionContainer" class="sectionbar bg-primary-color">
          <div class="container">
            <form action="action_page.php" method="post">
              <input
                type="text"
                placeholder="I'm Looking for..."
                onkeyup="showSearchBox(this.value)"
                id="searchQuery"
              />

              <div class="searchResultWrapper" id="searchWrapper">
                <div
                  id="showSearchResult"
                  class="search_result_container"
                ></div>
              </div>
            </form>
          </div>
        </div>
      </header>
      <!-------------CONTACT US ------------------>

      <div id="contactForm" class="contact_us">
        <span class="close-btn" id="closeContactSidebar">&times;</span>
        <div class="content">
          <h3 class="text-white">Contact Us</h3>
          <div class="contact-details">
            <h3 class="text-green small-font">Get in touch with us!</h3>
            <div class="contact_information">
              <div class="box">
                <i class="fa fa-fw fa-phone"></i>
                <h5 class="text-white text-center">Phone</h5>
                <div>
                  <p>+1 716-298-1822</p>
                  <p>+1 716-298-1822</p>
                </div>
              </div>
              <div class="box">
                <i class="fas fa-fw fa-map"></i>
                <h5 class="text-white text-center">Address</h5>
                <div>
                  <p>3909 Witmer Rd, Niagara Falls, NY 14305, United States</p>
                </div>
              </div>
              <div class="box">
                <i class="fa fa-fw fa-envelope"></i>
                <h5 class="text-white text-center">Email</h5>
                <div>
                  <p>admin@dukemem.com</p>
                  <p>contact@dukemem.com</p>
                </div>
              </div>
            </div>
          </div>
          <div class="form-container">
            <h3 class="text-green small-font">Online enquiry form</h3>
            <p class="text-white max-width">
              You have any question ? Please fill the contact form below and we
              will get back to you shortly. Thank you.
            </p>
            <form action="action_page.php" method="post">
              <div>
                <label for="full_name">Full Name:</label>
                <input type="text" name="fullName" id="full_name" />
              </div>
              <div>
                <label for="email">Email:</label>
                <input type="text" name="eMail" id="email" />
              </div>
              <div>
                <label for="Subject">Subject:</label>
                <input type="text" name="Subject" id="Subject" />
              </div>
              <textarea
                name="message"
                id="message"
                placeholder="Your message..."
                cols="10"
                rows="5"
              ></textarea>
              <button class="bg-green btn" type="submit">
                Submit <i class="fa fa-angle-double-right"></i>
              </button>
            </form>
          </div>
        </div>
      </div>
      <!-------------CONTACT US ENDS ------------------>
      <!-------------HERO IMAGE------------------->
      <section id="hero_image">
        <div class="faded-overlay"></div>
        <img
          src="assets/hero-image/mobile.jpg"
          alt="duke hospital hero image"
          id="heroImage"
        />
        <div class="hero-text">
          <div class="container">
            <div class="hero-text-wrapper left">
              <h3 class="small-font-size">Let's help you</h3>
              <h2 class="bold-text-heading-h2">stay healthy</h2>
              <p>
                Your best healthcare begins at Duke Memorial Hospital, where we
                take our patient???s health condition as a
                <span class="primary-text"> Number 1</span> priority.
              </p>
              <a
                href="patient-and-visitors/patient-care/book-appointment.php"
                class="border-left-green"
                >Schedule Appointment
                <i class="fa fa-fw fa-angle-double-right text-green"></i
              ></a>
            </div>
          </div>
        </div>
      </section>
    </div>

    <!--------------------------------MAIN SECTION STARTS -------------------------------------->
    <main>
      <section id="intro" class="bg-next-primary-color">
        <div class="container">
          <div class="flex align-start">
            <div class="col-50">
              <div>
                <h3 class="text-primary">Welcome to Duke's Hospital</h3>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque
                  aliquid inventore, saepe iure placeat officiis debitis cum
                  pariatur accusantium veritatis, necessitatibus, facere
                  voluptate modi sit nisi quidem sapiente cupiditate incidunt.
                  Ducimus, praesentium. Non, ut possimus? Omnis porro quidem
                  quae, perspiciatis corporis consequatur id dicta esse maiores
                  nisi beatae est! Nisi! praesentium.
                </p>
              </div>
              <a href="#/" class="btn bg-green text-white border-left-green"
                >Read More <i class="fa fa-fw fa-angle-double-right"></i>
              </a>
            </div>
            <div class="col-50">
              <div class="picture-content-wrapper">
                <img
                  src="assets/other-photos/reception2.jpg"
                  alt="reception3"
                />
                <div class="button-cotainer flex-row">
                  <div>
                    <a
                      href="patient-and-visitors/patient-care/pay-a-bill.php"
                      class="bg-primary-color"
                    >
                      <span class="text-white">PAY A BILL</span>
                    </a>
                    <a
                      href="patient-and-visitors/patient-care/book-appointment.php"
                      class="bg-lighter-grey"
                    >
                      <span class="text-primary">BOOK APPOINTMENT</span>
                    </a>
                  </div>
                  <div>
                    <a
                      href="map-and-direction.php"
                      class="bg-next-primary-color"
                    >
                      <span class="text-primary">MAP & DIRECTION</span>
                    </a>
                    <a
                      href="patient-and-visitors/patient-care/patient-rights.php"
                      class="bg-white"
                    >
                      <span class="text-primary">PATIENT RIGHTS</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="adverts" class="bg-white" style="padding-bottom: 0">
        <div class="container">
          <div class="flex">
            <div class="col-40">
              <img
                src="assets/bg-image/header-homepage-cropped.png"
                alt="Doctor smiling"
              />
            </div>
            <div class="col-60">
              <div class="wrapper">
                <div>
                  <h3 class="text-primary">Your Health, Our Priority</h3>
                  <h5 class="max-width">
                    We Provide the Best Healthcare for You and Your Family
                  </h5>
                </div>
                <div class="max-width flex">
                  <div class="number-box">
                    <h2 class="text-primary" id="counters_3">
                      <span
                        class="counter"
                        data-targetnum="321"
                        data-easing="linear"
                        data-speed="5000"
                      ></span>
                    </h2>
                    <p class="text-primary">Successful Surgery</p>
                  </div>
                  <div class="number-box">
                    <h2 class="text-primary" id="counters_2">
                      <span
                        class="counter"
                        data-targetnum="20"
                        data-easing="linear"
                        data-speed="5000"
                      ></span>
                    </h2>
                    <p class="text-primary">Consultants</p>
                  </div>
                  <div class="number-box">
                    <h2 class="text-primary" id="counters_3">
                      <span
                        class="counter"
                        data-targetnum="100"
                        data-easing="linear"
                        data-speed="5000"
                      ></span
                      ><span>%</span>
                    </h2>
                    <p class="text-primary">Satisfied Patients</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="clinicDays" class="bg-hospital-image">
        <div class="container">
          <div class="transparent-absolute-bg">
            <div class="time-table-wrapper">
              <h3 class="text-white small-width-heading text-right">
                Our Clinic Days
              </h3>
              <table>
                <tr data-aos="fade-up" data-aos-duration="3100">
                  <th>Ante-Natal</th>
                  <td>Tuesday 9:00am - 5:00pm</td>
                </tr>
                <tr data-aos="fade-up" data-aos-duration="3000">
                  <th>Echocardiography</th>
                  <td>Wednesday 9:00am - 2:00pm</td>
                </tr>
                <tr data-aos="fade-up" data-aos-duration="2800">
                  <th>Gynaecology</th>
                  <td>Monday 9:00am - 5:00pm</td>
                </tr>
                <tr data-aos="fade-up" data-aos-duration="2500">
                  <th>Immunization</th>
                  <td>Monday 9:00am - 5:00pm</td>
                </tr>
                <tr data-aos="fade-up" data-aos-duration="2200">
                  <th>Ultrasound</th>
                  <td>Monday 9:00am - 5:00pm</td>
                </tr>
              </table>
              <a href="#/" class="btn border-green"
                >Learn More
                <i class="fa fa-fw fa-angle-double-right text-green"></i
              ></a>
            </div>
          </div>
        </div>
      </section>
      <section id="patientResources" class="bg-next-primary-color">
        <div class="container">
          <h3 class="text-primary text-center">Patient Resources</h3>

          <div class="resources-wrapper flex-wrap">
            <div class="width-30 flex-column">
              <a href="#/"><i class="fa fa-fw fa-phone"></i> </a>
              <p class="fixed-width text-primary">Request a Callback</p>
            </div>
            <div class="width-30 flex-column">
              <a href="map-and-direction.php"
                ><i class="fa fa-fw fa-street-view"></i>
              </a>
              <p class="fixed-width text-primary">Map and Direction</p>
            </div>
            <div class="width-30 flex-column">
              <a href="patient-and-visitors/patient-care/book-appointment.php"
                ><i class="fa fa-fw fa-user-md"></i>
              </a>
              <p class="fixed-width text-primary">Request Appointment</p>
            </div>
            <div class="width-25 flex-column">
              <a href="patient-and-visitors/visitors/visitors-information.php"
                ><i class="fa fa-fw fa-car"></i>
              </a>
              <p class="fixed-width text-primary">Patient Visitation</p>
            </div>
            <div class="width-25 flex-column">
              <a href="patient-and-visitors/patient-care/patient-rights.php"
                ><i class="fa fa-fw fa-gavel"></i>
              </a>
              <p class="fixed-width text-primary">Patient's Rights</p>
            </div>
            <div class="width-25 flex-column">
              <a href="#/"><i class="fa fa-fw fa-usd"></i> </a>
              <p class="fixed-width text-primary">Billing & Pricing</p>
            </div>
            <div class="width-25 flex-column">
              <a href="#/"><i class="fa fa-fw fa-file"></i> </a>
              <p class="fixed-width text-primary">Medical Records</p>
            </div>
          </div>
        </div>
      </section>
      <section
        id="patientTestimonies"
        class="bg-primary-color relative-container"
        style="padding: 0"
      >
        <div class="container" style="padding: 0">
          <div class="flex">
            <div class="col-60">
              <img
                src="assets/bg-image/woman-smilling.jpg"
                alt="woman-smilling"
              />
            </div>
            <div class="col-40">
              <h3 class="text-white">Our Patients Testimonies</h3>
              <p class="text-green max-width">
                Our pateint???s are satisfied with our services and this is just a
                clip of what some of them have to say.
              </p>

              <div class="relative-container-right">
                <div class="absolute-wrapper">
                  <div class="content flex-row">
                    <div class="testifier white-bg">
                      <div class="flex">
                        <img
                          src="assets/testifiers/pexels-mikhail-nilov-8937551.jpg"
                          alt="testifier1"
                          class="circle"
                        />
                        <div class="content">
                          <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Numquam deserunt adipisci impedit?
                          </p>
                          <h5 class="text-primary">Amos K. Crockett</h5>
                        </div>
                      </div>
                    </div>
                    <div class="testifier primary-bg">
                      <div class="flex">
                        <img
                          src="assets/testifiers/pexels-christina-morillo-1181690.jpg"
                          alt="testifier2"
                          class="circle"
                        />
                        <div class="content">
                          <p class="text-white">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Numquam deserunt adipisci impedit?
                          </p>
                          <h5 class="text-green">Lawrence S. Akbar</h5>
                        </div>
                      </div>
                    </div>
                    <div class="testifier primary-bg">
                      <div class="flex">
                        <img
                          src="assets/testifiers/pexels-joelson-melo-50855.jpg"
                          alt="testifier3"
                          class="circle"
                        />
                        <div class="content">
                          <p class="text-white">
                            Lorem ipsum dolor sit, amet consectetur adipisicing
                            elit. Iure dignissimos praesentium tenetur?
                          </p>
                          <h5 class="text-green">Joelson Melo</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                  <a href="#/" class="text-white more-testifiers"
                    >More Testifiers
                    <i class="fa fa-angle-double-right text-green"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!--------------------------------MAIN SECTION ENDS ---------------------------------------->

    <!--BACK TO THE TOP BTN -->

    <div class="container" style="padding: 0">
      <div class="back-top-btn-wrapper" id="btnWrapper">
        <button
          class="scrollTopBtn flex-column"
          id="myTopBTN"
          onclick="topFunction()"
        >
          <i class="fa fa-long-arrow-up"></i>
        </button>
      </div>
    </div>

    <footer>
      <section class="bg-next-primary-color">
        <div class="container">
          <div class="specific-width">
            <div class="flex align-start">
              <h3 class="text-primary fixed-heading-width">
                Schedule An Appointment
              </h3>
              <div>
                <h5 class="text-primary">+1 716-298-1822</h5>
                <a
                  href="mailto:appointment@dukememorial.com"
                  class="text-primary"
                  >appointment@dukememorial.com</a
                >
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="bg-primary-color">
        <div class="container">
          <div class="top-footer">
            <div class="flex align-start">
              <div class="col-30">
                <h5 class="text-white">About Duke</h5>
                <ul>
                  <li><a href="about-us/history.php">History</a></li>
                  <li>
                    <a href="about-us/mission-vision-values.php"
                      >Mission, Vision, Values</a
                    >
                  </li>
                  <li>
                    <a href="about-us/meet-out-team.php">Meet the Team</a>
                  </li>
                  <li><a href="map-and-direction.php">Map & Direction</a></li>
                </ul>
              </div>
              <div class="col-40">
                <h5 class="text-white explore">Explore</h5>
                <div class="flex align-start">
                  <ul>
                    <li><a href="#/">Contact</a></li>
                    <li>
                      <a
                        href="patient-and-visitors/patient-care/your-hospital-visit.php"
                        >Your Visit</a
                      >
                    </li>
                    <li>
                      <a
                        href="patient-and-visitors/patient-care/pay-a-bill.php"
                        >Pay a Bill</a
                      >
                    </li>
                    <li>
                      <a
                        href="patient-and-visitors/patient-care/book-appointment.php"
                        >Request Appointment</a
                      >
                    </li>
                  </ul>
                  <ul>
                    <li><a href="refer-a-patient.html">Refer a Patient</a></li>
                    <li>
                      <a
                        href="patient-and-visitors/patient-care/patient-rights.php"
                        >Patient Rights</a
                      >
                    </li>
                    <li>
                      <a
                        href="patient-and-visitors/patient-care/patient-stories.php"
                        >Patient Stories</a
                      >
                    </li>
                    <li>
                      <a href="about-us/why-choose-us.php">Why Choose Us</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-30">
                <div class="right-bottom-box-shadow">
                  <a href="index.php" id="logo">
                    <img
                      src="assets/logo/duke-logo-blue.jpeg"
                      alt="duke-logo-blue"
                    />
                  </a>
                  <h5 class="text-white">+1 716-298-1822</h5>
                  <a href="mailto:admin@dukememorial.com" class="text-green"
                    >admin@dukememorial.com</a
                  >
                  <address class="fixed-width text-white">
                    3909 Witmer Rd, Niagara Falls, NY 14305, United States
                  </address>
                </div>
                <div class="social-icon-wrapper">
                  <ul>
                    <li>
                      <a href="#/"><i class="fa-brands fa-facebook-f"></i></a>
                    </li>
                    <li>
                      <a href="#/"><i class="fa-brands fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#/"><i class="fa-brands fa-instagram"></i></a>
                    </li>
                    <li>
                      <a href="#/"><i class="fa-brands fa-linkedin-in"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="bottom-footer">
            <div class="flex align-start">
              <div class="col-50">
                <small class="text-white"
                  >&copy; <?php echo date("Y") ?> Duke Memorial Hospital. All Rights
                  Reserved</small
                >
              </div>
              <div class="col-50">
                <ul>
                  <li><a href="#/">Privacy Policy</a></li>
                  <li><a href="#/">Terms of Use</a></li>
                  <li><a href="#/">Sitemap</a></li>
                  <li>
                     <a href="http://www.blackpopex.com/" target="_blank"
                      >Designed & Built by
                      <span class="text-green">Blackpopex</span></a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
    </footer>
    <script src="js/main.js"></script>
    <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="js/clearinputfield.js"></script>

    <script>
      // must be an array, could have only one element
      let visibilityIds = [
        "#counters_1",
        "#counters_2",
        "#counters_3",
        "#counters_4",
      ];
      // default counter class
      let counterClass = ".counter";
      // default animation speed
      let defaultSpeed = 6000;
    </script>
  </body>
</html>
