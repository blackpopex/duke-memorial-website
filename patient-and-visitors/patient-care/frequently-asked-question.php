<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Duke Memorial | Frequently Asked Question</title>
    <link
      rel="icon"
      type="image/x-icon"
      href="../../assets/logo/flavicon.ico.jpg"
    />
    <meta name="description" content="" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="../../css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <script src="http://code.jquery.com/jquery-3.1.1.js"></script>
    <script src="js/multi-animated-counter.js"></script>
    <script src="https://kit.fontawesome.com/12d9de5a0c.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <script
      src="https://kit.fontawesome.com/f1874d02aa.js"
      crossorigin="anonymous"
    ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.0-beta.3/iconify-icon.min.js"></script>
    <script>
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
                    class="dropdown-content iwantToDropdownMenu bg-next-primary-color"
                    id="iWantToDropdown"
                  >
                      <li>
                      <a
                        href="../../patient-and-visitors/patient-care/book-appointment.php"
                        >Book Appointment</a
                      >
                    </li>
                    <li>
                      <a href="../../refer-a-patient.php">Refer a Patient</a>
                    </li>
                    <li>
                      <a
                        href="../../patient-and-visitors/patient-care/pay-a-bill.php"
                        >Pay a Bill</a
                      >
                    </li>
                    <li>
                      <a
                        href="../../patient-and-visitors/patient-care/your-hospital-visit.php"
                        >Visit Duke Hospital</a
                      >
                    </li>
                    <li>
                      <a
                        href="../../patient-and-visitors/patient-care/patient-rights.php"
                        >Known my right as a Patient</a
                      >
                    </li>
                    <li>
                      <a
                        href="../../patient-and-visitors/patient-care/patient-stories.php"
                        >Known Patient Stories</a
                      >
                    </li>
                    <li>
                      <a href="../../about-us/services.php"
                        >Know About Duke Services</a
                      >
                    </li>
                    <li>
                      <a href="../../map-and-direction.php"
                        >Get Driving Direction</a
                      >
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
            <div
              class="column-20 bg-white container-left-ten%"
              id="whiteBackground"
            >
              <a href="../../index.php" id="header_logo">
                <img
                  src="../../assets/logo/blue-logo-duke.jpg"
                  alt="duke logo"
                />
              </a>
            </div>
            <div
              class="column-80 bg-primary-color container-right-ten%"
              id="greenBackground"
            >
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
                    <a href="../../index.php" class="mobile-navbar-logo">
                      <img
                        src="../../assets/logo/duke-logo-white.png"
                        alt="duke logo"
                      />
                    </a>
                  </div>

                  <span class="close-btn hide-lg-screen" id="closeSidebar"
                    >&times;</span
                  >

                  <li class="dropdown" id="dropDown">
                    <a href="#/" class="dropdown-btn js_dropdown">About Us </a>
                    <div
                      class="dropdown-content bg-next-primary-color"
                      id="drop_Content"
                    >
                      <div class="flex align-start">
                        <div class="image-container col-40 about-us">
                          <h3 class="text-primary">About Us</h3>
                          <img
                            src="../../assets/bg-image/Male_Hospital_Visitor_1200x628-facebook.jpg"
                            alt="vistor"
                          />
                        </div>
                        <div class="col-60">
                          <ul>
                            <li>
                              <a href="../../about-us/about-us.php"
                                >About Us</a
                              >
                            </li>
                            <li>
                              <a href="../../about-us/meet-out-team.php"
                                >Meet Our Team</a
                              >
                            </li>
                            <li>
                              <a href="../../about-us/history.php">History</a>
                            </li>
                            <li>
                              <a href="../../about-us/services.php"
                                >Services</a
                              >
                            </li>
                            <li>
                              <a href="../../about-us/why-choose-us.php"
                                >Why Choose Us</a
                              >
                            </li>
                            <li>
                              <a
                                href="../../about-us/mission-vision-values.php"
                                >Mission, Vision & Values</a
                              >
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="dropdown" id="dropDown">
                    <a href="#/" class="dropdown-btn js_dropdown"
                      >Patient & Visitors
                    </a>
                    <div
                      class="dropdown-content bg-next-primary-color"
                      id="drop_Content"
                    >
                      <div class="flex align-start">
                        <div class="image-container column-30">
                          <h3 class="text-primary">Patient & Visitors</h3>
                          <img
                            src="../../assets/bg-image/Male_Hospital_Visitor_1200x628-facebook.jpg"
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
                                    href="../../patient-and-visitors/patient-care/book-appointment.php"
                                    >Book Appointment</a
                                  >
                                </li>
                                <li>
                                  <a
                                    href="../../patient-and-visitors/patient-care/your-hospital-visit.php"
                                    >Your Hospital Visit</a
                                  >
                                </li>
                                <li>
                                  <a
                                    href="../../patient-and-visitors/patient-care/what-to-expect.php"
                                    >What to Expect</a
                                  >
                                </li>
                                <li>
                                  <a
                                    href="../../patient-and-visitors/patient-care/pay-a-bill.php"
                                    >Pay a Bill</a
                                  >
                                </li>
                              </ul>
                              <ul class="col-50 remove-mg-top">
                                <li>
                                  <a
                                    href="../../patient-and-visitors/patient-care/patient-rights.php"
                                    >Patient Rights</a
                                  >
                                </li>
                                <li>
                                  <a
                                    href="../../patient-and-visitors/patient-care/patient-stories.php"
                                    >Patient Stories</a
                                  >
                                </li>
                                <li>
                                  <a
                                    href="../../patient-and-visitors/patient-care/frequently-asked-question.php"
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
                                  href="../../patient-and-visitors/visitors/visitors-policy.php"
                                  >Visitors Policy</a
                                >
                              </li>
                              <li>
                                <a
                                  href="../../patient-and-visitors/visitors/visitors-information.php"
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
                    <a href="../../refer-a-patient.php">Refer a Patient</a>
                  </li>
                  <li class="listed">
                    <a href="../../map-and-direction.php">Map & Direction</a>
                  </li>
                  <li class="listed">
                    <a href="#/" id="contactUs">Contact us</a>
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
                        src="../../assets/logo/google-applestore.jpg"
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
      <!-------------FREQUENTLY ASKED QUESTION ------------------->
      <section
        id="Frequently_Asked_Question"
        class="section-bg-image photo4"
        style="margin-top: 0"
      >
        <div class="container">
          <h1 class="text-primary">Frequently Asked Question</h1>

          <p class="text-primary">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit,
            nemo?
          </p>
        </div>
      </section>
    </div>

    <!--------------------------------MAIN SECTION STARTS -------------------------------------->
    <main>
      <section id="fAQ">
        <div class="container">
          <div class="flex align-start flex-reverse">
            <!--column left-->
            <div class="column-left col-30">
              <aside>
                <div class="bg-white">
                  <div class="first-sidebar-container">
                    <h5 class="text-primary">Patient Care</h5>
                    <ul class="margin-bottom">
                     <li>
                        <a href="../patient-care/book-appointment.php"
                          >Book Appointment</a
                        >
                      </li>
                      <li>
                        <a href="../patient-care/your-hospital-visit.php"
                          >Your Hospital Visit</a
                        >
                      </li>
                      <li>
                        <a
                          href="../patient-care/what-to-expect.php"
                          class="text-active"
                          >What to Expect</a
                        >
                      </li>
                      <li>
                        <a href="../patient-care/pay-a-bill.php">Pay a Bill</a>
                      </li>
                      <li>
                        <a href="../patient-care/patient-stories.php"
                          >Patient Stories</a
                        >
                      </li>
                      <li>
                        <a href="../patient-care/frequently-asked-question.php"
                          >Frequently Asked Question</a
                        >
                      </li>
                    </ul>

                    <h5 class="text-primary">Visitors</h5>
                    <ul class="margin-bottom">
                      <li>
                        <a href="../visitors/visitors-policy.php"
                          >Visitor Policy</a
                        >
                      </li>
                      <li>
                        <a href="../visitors/visitors-information.php"
                          >Visitor Information</a
                        >
                      </li>
                    </ul>
                  </div>

                  <div class="sidebar sub-container">
                    <ul>
                      <li class="box pay-a-bill bg-white">
                        <a
                          href="../../patient-and-visitors/patient-care/pay-a-bill.php"
                        >
                          <iconify-icon icon="logos:mastercard"></iconify-icon>
                          Pay a Bill</a
                        >
                      </li>
                      <li class="box request-appointment bg-white">
                        <a
                          href="../../patient-and-visitors/patient-care/book-appointment.php"
                        >
                          <iconify-icon
                            icon="icon-park-solid:appointment"
                          ></iconify-icon>
                          Reqeust Appointment</a
                        >
                      </li>
                      <li class="box faq bg-white">
                        <a
                          href="../../patient-and-visitors/patient-care/frequently-asked-question.php"
                        >
                          <iconify-icon icon="wpf:faq"></iconify-icon>
                          Frequently Asked Question</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
              </aside>
            </div>
            <!--column right-->
            <div class="column-right col-70">
              <div class="wrapper">
                <div>
                  <p class="text-black margin-bottom">
                    Read these frequently asked questions to learn more about
                    common questions asked about Duke???s Memorial Hospital. Lorem
                    ipsum dolor, sit amet consectetur adipisicing elit. Id autem
                    facere pariatur dolorum, doloribus esse, culpa velit
                    quaerat, facilis adipisci et ducimus ab aliquid praesentium?
                  </p>

                  <ul id="fAQ" class="accordion-container">
                    <li class="dropdown">
                      <h5 href="#/" class="dropdown-btn text-primary">
                        Does Duke Mememorial have a dermatologist ?
                      </h5>
                      <div class="dropdown-content">
                        <h6 class="text-primary">Answer: <span>yes</span></h6>
                      </div>
                    </li>
                    <li class="dropdown">
                      <h5 class="dropdown-btn text-primary">
                        How do I send my medical records to another clinic ?
                      </h5>
                      <div class="dropdown-content">
                        <h6 class="text-primary">
                          Answer:
                          <span>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Itaque, explicabo laudantium. Autem explicabo
                            illo corporis cupiditate iste totam dolores quis
                            temporibus nemo, molestiae officia eum aliquid
                            officiis sequi, adipisci quaerat consectetur eaque
                            soluta tempora optio dignissimos dolorum architecto.
                            Excepturi doloremque tempora incidunt iste cumque
                            est sint cupiditate ullam maiores at.
                          </span>
                        </h6>
                      </div>
                    </li>
                    <li class="dropdown">
                      <h5 class="dropdown-btn text-primary">
                        How do I request an appointment ?
                      </h5>
                      <div class="dropdown-content">
                        <h6 class="text-primary">
                          Answer:
                          <span>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Itaque, explicabo laudantium. Autem explicabo
                            illo corporis cupiditate iste totam dolores quis
                            temporibus nemo, molestiae officia eum aliquid
                            officiis sequi, adipisci quaerat consectetur eaque
                            soluta tempora optio dignissimos dolorum architecto.
                            Excepturi doloremque tempora incidunt iste cumque
                            est sint cupiditate ullam maiores at.
                          </span>
                        </h6>
                      </div>
                    </li>
                    <li class="dropdown">
                      <h5 href="#/" class="dropdown-btn text-primary">
                        How do I get to the clinic ?
                      </h5>
                      <div class="dropdown-content">
                        <h6 class="text-primary">
                          Answer:
                          <span>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Itaque, explicabo laudantium. Autem explicabo
                            illo corporis cupiditate iste totam dolores quis
                            temporibus nemo, molestiae officia eum aliquid
                            officiis sequi
                          </span>
                        </h6>
                      </div>
                    </li>
                    <li class="dropdown">
                      <h5 href="#/" class="dropdown-btn text-primary">
                        How do I make a payment ?
                      </h5>
                      <div class="dropdown-content">
                        <h6 class="text-primary">
                          Answer:
                          <span>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Itaque, explicabo laudantium. Autem explicabo
                            illo corporis cupiditate iste totam dolores quis
                          </span>
                        </h6>
                      </div>
                    </li>
                    <li class="dropdown">
                      <h5 href="#/" class="dropdown-btn text-primary">
                        What items should i bring with me if i am checking into
                        the hospital ?
                      </h5>
                      <div class="dropdown-content">
                        <h6 class="text-primary">
                          Answer:
                          <span>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Itaque, explicabo laudantium. Autem explicabo
                            illo corporis cupiditate iste totam dolores quis
                            temporibus nemo, molestiae officia eum aliquid
                            officiis sequi illo corporis cupiditate iste totam
                            dolores quis temporibus nemo, molestiae officia eum
                            aliquid officiis sequi
                          </span>
                        </h6>
                      </div>
                    </li>
                    <li class="dropdown">
                      <h5 href="#/" class="dropdown-btn text-primary">
                        I am being discharged. What do i do now ?
                      </h5>
                      <div class="dropdown-content">
                        <h6 class="text-primary">
                          Answer:
                          <span>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Itaque, explicabo laudantium. Autem explicabo
                            illo corporis cupiditate iste totam dolores quis
                            temporibus nemo, molestiae officia eum aliquid
                            officiis sequi
                          </span>
                        </h6>
                      </div>
                    </li>
                    <li class="dropdown">
                      <h5 href="#/" class="dropdown-btn text-primary">
                        I am looking for job experience; can i get that by
                        volunteering ?
                      </h5>
                      <div class="dropdown-content">
                        <h6 class="text-primary">
                          Answer:
                          <span> Yes </span>
                        </h6>
                      </div>
                    </li>
                    <li class="dropdown">
                      <h5 href="#/" class="dropdown-btn text-primary">
                        Will I need to sign a consent ?
                      </h5>
                      <div class="dropdown-content">
                        <h6 class="text-primary">
                          Answer:
                          <span> No </span>
                        </h6>
                      </div>
                    </li>
                  </ul>
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
                  <li><a href="../../about-us/history.php">History</a></li>
                  <li>
                    <a href="../../about-us/mission-vision-values.php"
                      >Mission, Vision, Values</a
                    >
                  </li>
                  <li>
                    <a href="../../about-us/meet-out-team.php"
                      >Meet the Team</a
                    >
                  </li>
                  <li>
                    <a href="../../map-and-direction.php">Map & Direction</a>
                  </li>
                </ul>
              </div>
              <div class="col-40">
                <h5 class="text-white explore">Explore</h5>
                <div class="flex align-start">
                  <ul>
                    <li><a href="#/">Contact</a></li>
                    <li>
                      <a
                        href="../../patient-and-visitors/patient-care/your-hospital-visit.php"
                        >Your Visit</a
                      >
                    </li>
                    <li>
                      <a
                        href="../../patient-and-visitors/patient-care/pay-a-bill.php"
                        >Pay a Bill</a
                      >
                    </li>
                    <li>
                      <a
                        href="../../patient-and-visitors/patient-care/book-appointment.php"
                        >Request Appointment</a
                      >
                    </li>
                  </ul>
                  <ul>
                    <li>
                      <a href="../../refer-a-patient.php">Refer a Patient</a>
                    </li>
                    <li>
                      <a
                        href="../../patient-and-visitors/patient-care/patient-rights.php"
                        >Patient Rights</a
                      >
                    </li>
                    <li>
                      <a
                        href="../../patient-and-visitors/patient-care/patient-stories.php"
                        >Patient Stories</a
                      >
                    </li>
                    <li>
                      <a href="../../about-us/why-choose-us.php"
                        >Why Choose Us</a
                      >
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-30">
                <div class="right-bottom-box-shadow">
                  <a href="index.php" id="logo">
                    <img
                      src="../../assets/logo/duke-logo-blue.jpeg"
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
    <script src="../../js/main.js"></script>
    <script src="../../js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="../../js/clearinputfield.js"></script>

  </body>
</html>
