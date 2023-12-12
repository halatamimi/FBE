<?php
session_start();

include('user.php');
include('site.php');
include('cards.php');

$site= Site::getSite();
$user = User::getUser();

if($site === null){
    $site = new Site("Hello,", "files/Mohammad_Al-Zaro_CV.pdf", "images/me.png", "I AM A WEB DEVELOPER AND SOFTWARE ENGINEER WITH A STRONG WORK ETHIC AND A PASSION FOR INNOVATION. I HAVE THE SKILLS AND EXPERIENCE TO CONTRIBUTE TO A VARIETY OF PROJECTS IN A PROFESSIONAL ENVIRONMENT.");
    $site->add();
}

$card = new Card();
$projects = $card->getCardByType(CardTypes::PROJECT);
$skills = $card->getCardByType(CardTypes::DEV);
$softSkills = $card->getCardByType(CardTypes::SOFT);
$educations = $card->getCardByType(CardTypes::EDUCATION);
$experiences = $card->getCardByType(CardTypes::EXPERIENCE);
$services = $card->getCardByType(CardTypes::SERVICE);


$fullName = explode(" ", $user->name);
$firstName = $fullName[0];
$lastName = $fullName[1];


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['full_name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $conn = Connect::connectTo();

    $stmt = $conn->prepare("INSERT into contact (name, email, subject, message) values (:name, :email, :subject, :message)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email); 
    $stmt->bindParam(':subject', $subject);
    $stmt->bindParam(':message', $message);

    $stmt->execute();
    $stmt->closeCursor();

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="Portfolio.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@500&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  </head>
<body>

    <div id="home-sec">
        <div class="layer">
          <div class="navbar">
            <div class="container">
              <div class="logo nav-item">
                <a href="Portfolio.html"> <?php echo $firstName;?> <span style="color: white;"><?php echo $lastName ?></span></a>
              </div>
              <div class="openMenu"><i class="fa-solid fa-bars"></i></div>
            
              <ul class="mainMenu">
                <li class="active"><a href="#home-sec">Home</a></li>
                  <li><a href="#about">About</a></li>
                  <li><a href="#our-services">Services</a></li>
                  <li><a href="#portfolio">Portfolio</a></li>
                  <li><a href="#testimonials">Testimonial</a></li>
                  <li><a href="#contact">Contact</a></li>

                  <div class="closeMenu"><i class="fa-regular fa-circle-xmark"></i></div>
              </ul>

             
              <!-- <div class="nav-list nav-item">
                <i class="fa-solid fa-bars nav-menu"></i>
                <ul>
                  <li class="active"><a href="#home-sec">Home</a></li>
                  <li><a href="#about">About</a></li>
                  <li><a href="#our-services">Services</a></li>
                  <li><a href="#portfolio">Portfolio</a></li>
                  <li><a href="#testimonials">Testimonial</a></li>
                  <li><a href="#contact">Contact</a></li>
                </ul>
              </div> -->

              
              <div class="clear"></div>
            </div>
          </div>

          <div class="hero-content">
            <span class="hero-subtitle"><?php echo $site->welcomeText;?></span>
            <h1><?php echo $user->name;?></h1>
            <p>
            <?php echo $user->pos?> || 
              <span class="hero-subcontent">Security Specialist &nbsp;</span>
            </p>
          </div>
        </div>
      </div>


      <div id="about" class="padding">
        <div class="container">
          <div class="about-img about-item">
            <div class="about-layer">
              <div class="overlay-inner-layer">
                <img src="<?php echo $site->imageLink;?>" alt="About Alex Smith Image" />
                <div class="social-overlay">
                  <div class="social-layer">
                  <a class="social" href="<?php echo $site->facebookLink;?>" target="_blank">
                  <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a class="social" href="<?php echo $site->twitterLink;?>" target="_blank">
                  <i class="fa-brands fa-twitter"></i>
                </a>
                <a class="social" href="<?php echo $site->linkedinLink;?>" target="_blank">
                  <i class="fa-brands fa-linkedin"></i>
                </a>
                <a class="social" href="<?php echo $site->githubLink;?>" target="_blank">
                  <i class="fa-brands fa-github"></i>
                </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="about-content about-item">
            <h2><?php echo $site->welcomeText;?></h2>
            <p class="about-desc">
            <?php echo $site->aboutText;?>
            </p>
  
            <div class="about-subcontent">
              <table>
                <tr>
                  <td>
                    <p><span>Name:</span> <?php echo $user->name;?></p>
                  </td>
                  <td>
                    <p><span>Job Title:</span> <?php echo $user->pos;?></p>
                  </td>
                </tr>
  
                <tr>
                  <td>
                    <p><span>Age:</span> <?php echo $user->age; ?> Year</p>
                  </td>
                  <td>
                    <p><span>Location:</span> <?php echo $user->location; ?></p>
                  </td>
                </tr>
  
                <tr>
                  <td>
                    <p><span>Freelance:</span> <?php echo $user->experience == true ? "Available" : "Unavailable"; ?></p>
                  </td>
                  <td>
                    <p>
                      <span>E-mail:</span>
                      <a class="email-link" href="mailto:example@gmail.com"
                        ><?php echo $user->email;?></a
                      >
                    </p>
                  </td>
                </tr>
              </table>
              <div class="about-btn">
                <a class="btn" href="<?php echo $site->cvLink?>" download="CV.pdf" target="_blank">Download CV &nbsp;<i class="fa-solid fa-download"></i>
                </a>
                <a class="btn" href="<?php echo $site->linkedinLink;?>"
                  >Hire Me &nbsp;<i class="fa-solid fa-paper-plane"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="clear"></div>
        </div>
      </div>


      <div id="our-services" class="padding">
        <div class="container">
          <div class="section">
            <h2>My Services</h2>
          </div>
            <?php
            foreach($services as $services){
              echo '
              <div class="service-item">
              <div class="services-overlay">
                <div class="service-icon">
                  <i class="'.$services->icon.'"></i>
                </div>
                <h3>'.$services->title.'</h3>
                <p>
                '.$services->description.'
                </p>
              </div>
            </div>
              ';
            }
          
            ?>


          <div class="clear"></div>
        </div>
      </div>


      <div id="portfolio">
        <div class="padding portfolio-sec1">
          <div class="container">
            <div class="section">
              <h2>My Portfolio</h2>
            </div>
            <div class="portfolio-links">
              <a class="portfolio-active" href="#">All</a>
              <a href="#">Graphic</a>
              <a href="#">Web Design</a>
              <a href="#">Branding</a>
            </div>
              <div class="container-project">

              <?php
              foreach($projects as $project){
                echo '
                <div class="card-project">
                  <figure><img src="'.$project->imageLink.'" alt="" /></figure>
          
                  <div class="description-project">
                    <h6>'.$project->title.'</h6>
                    <p style="overflow-y: auto;">
                    '.$project->description.'
                    </p>
                    <div class="links">
                      <div class="live-preview">
                        <a href="'.$project->demoLink.'"> Live Demo</a>
                      </div>
                      <div class="github">
                        <a href="'.$project->githubLink.'"> Github</a>
                      </div>
                    </div>
                  </div>
                </div>';
              }

              ?>

              </div>

              <br><br><br>
            <!-- <div class="portfolio-item">
              <div class="portfolio-layer">
                <a href="#">
                  <img src="images/P1.PNG" alt="Portfolio project">
                  <div class="portfolio-overlay">
                    <div class="portfolio-overlay-content">
                      <i class="fa-regular fa-file-image"></i>
                    </div>
                  </div>
                </a>
              </div>
              <div class="header-action-aria">
                <a href="https://github.com/halatamimi/myproject/tree/main/Login%20page" class="btn" target="_blank">Github</a>
                <a href="C:/Users/HP/Desktop/Training%20Projects/Login%20page/login.html" class="btn" target="_blank">Live Demo</a>
            </div>
            </div>
  
            <div class="portfolio-item">
              <div class="portfolio-layer">
                <a href="#">
                  <img src="images/P2.PNG" alt="Portfolio project">
                  <div class="portfolio-overlay">
                    <div class="portfolio-overlay-content">
                      <i class="fa-regular fa-file-image"></i>
                    </div>
                  </div>
                </a>
              </div>
              <div class="header-action-aria">
                <a href="https://github.com/halatamimi/myproject/tree/main/5/Hotel%20website" class="btn" target="_blank">Github</a>
                <a href="C:/Users/HP/Desktop/Training%20Projects/5/Hotel%20website/Hotel.html" class="btn" target="_blank">Live Demo</a>
            </div>
            </div>
  
            <div class="portfolio-item">
              <div class="portfolio-layer">
                <a href="#">
                  <img src="images/P3.PNG" alt="Portfolio project">
                  <div class="portfolio-overlay">
                    <div class="portfolio-overlay-content">
                      <i class="fa-regular fa-file-image"></i>
                    </div>
                  </div>
                </a>
              </div>
              <div class="header-action-aria">
                <a href="https://github.com/halatamimi/myproject/tree/main/Calc%20Website" class="btn" target="_blank">Github</a>
                <a href="C:/Users/HP/Desktop/Training%20Projects/Calc%20Website/Calculator.html" class="btn" target="_blank">Live Demo</a>
            </div>
            </div>
  
            <div class="portfolio-item">
              <div class="portfolio-layer">
                <a href="#">
                  <img src="images/P4.PNG" alt="Portfolio project">
  
                  <div class="portfolio-overlay">
                    <div class="portfolio-overlay-content">
                      <i class="fa-regular fa-file-image"></i>
                    </div>
                  </div>
                </a>
              </div>
              <div class="header-action-aria">
                <a href="https://github.com/halatamimi/myproject/tree/main/Restaurant%20Website" class="btn" target="_blank">Github</a>
                <a href="C:/Users/HP/Desktop/Training%20Projects/Restaurant%20Website/food.html" class="btn" target="_blank">Live Demo</a>
            </div>
            </div>
  
  
            <div class="clear"></div>
          </div>
        </div> -->

        <div class="padding portfolio-sec2">
            <div class="container">
              <div class="portfolio-numbers">
                <div class="portfolio-numbers-layer">
                  <i class="fa-sharp fa-solid fa-people-group"></i>
                  <h3>7</h3>
                  <span>Team members </span>
                </div>
              </div>
              <div class="portfolio-numbers">
                <div class="portfolio-numbers-layer">
                  <i class="fa-regular fa-file"></i>
                  <h3>17</h3>
                  <span>Complete Projects </span>
                </div>
              </div>
              <div class="portfolio-numbers">
                <div class="portfolio-numbers-layer">
                  <i class="fa-solid fa-cloud-arrow-down"></i>
                  <h3>88</h3>
                  <span>Files Downloaded </span>
                </div>
              </div>
              <div class="portfolio-numbers">
                <div class="portfolio-numbers-layer">
                  <i class="fa-solid fa-mug-saucer"></i>
                  <h3>54</h3>
                  <span>Lines Of Code </span>
                </div>
              </div>
              <div class="clear"></div>
            </div>
          </div>
          <!-- 1. our potfolio section Two end -->
        </div>


        <div id="testimonials" class="padding">
            <div class="container">
              <div>
                <div class="section">
                  <h2>Client's Feedback</h2>
                </div>
                <div class="feedback-card">
                  <div class="feedback-img feedback-item">
                    <div class="testimonial-layer">
                      <img src="images/feedback.jpg" alt="client's feedback" />
                    </div>
                  </div>
                  <div class="feedback-content feedback-item">
                    <div class="testimonial-layer">
                      <h3>Alex Ander</h3>
                      <a href="#">
                        <i class="fa-solid fa-location-dot"></i>
                        United
                      </a>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Exercitationem ducimus ex magni sunt, architecto vel dolore,
                        laudantium dignissimos debitis optio! Exercitationem
                        adipisicing elit.
                      </p>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-regular fa-star"></i>
                    </div>
                  </div>
                </div>
                <div class="feedback-slider-icon">
                  <span class="active-icon"></span>
                  <span class="disabled-icon"></span>
                </div>
              </div>
            </div>
          </div>

          
  
          <div id="contact" class="padding">
            <div class="container">
              <div class="section">
                <h2>Contact me</h2>
              </div>
              <div class="contact-form">
                <form method="post" action="index.php">
                  <div class="form-input full-name">
                    <div class="input-layer">
                      <input
                        type="text"
                        required
                        placeholder="Name"
                        name="full_name"
                      />
                    </div>
                  </div>
                  <div class="form-input email">
                    <div class="input-layer">
                      <input type="email" required placeholder="Email" name="email" />
                    </div>
                  </div>
                  <div class="form-input">
                    <div class="input-layer">
                      <input
                        type="text"
                        required
                        placeholder="Subject"
                        name="subject"
                      />
                    </div>
                  </div>
                  <div class="form-input">
                    <div class="input-layer">
                      <textarea
                        name="message"
                        cols="30"
                        rows="10"
                        placeholder="Message For Me"
                      ></textarea>
                    </div>
                  </div>
                  <div class="form-submit">
                    <div class="input-layer">
                      <button class="btn" type="submit">Send Message</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <div id="footer">
            <div class="container">
              <div class="footer-social-icons">
                <a class="social" href="<?php echo $site->facebookLink;?> target="_blank">
                  <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a class="social" href="<?php echo $site->twitterLink;?>" target="_blank">
                  <i class="fa-brands fa-twitter"></i>
                </a>
                <a class="social" href="<?php echo $site->linkedinLink;?>" target="_blank">
                  <i class="fa-brands fa-linkedin"></i>
                </a>
                <a class="social" href="<?php echo $site->githubLink;?>" target="_blank">
                  <i class="fa-brands fa-github"></i>
                </a>
              </div>
              <p>
                Copy Right 2023 © By <a class="copyrights" href="#"><?php echo $user->name;?></a> All
                Rights Reserved
              </p>
            </div>
          </div>
      

          <?php
        

        if(isset($_SESSION['user'])){    
        ?>

    
    <div class="theme-options">
            <div class="theme-option">
                <div class="theme-option-title">
                    <h5>Font Type</h5>
                </div>
                <div class="theme-option-content">
                    <select name="font-type" id="font-type">
                        <option value="Fredoka">Fredoka</option>
                        <option value="Roboto">Roboto</option>
                    </select>
                </div>
            </div>

            <div class="theme-option">
                <div class="theme-option-title">
                    <h5>Font Color</h5>
                </div>
                <div class="theme-option-content">
                    <input type="color" name="font-color" id="font-color">
                </div>
            </div>

            <div class="theme-option">
                <div class="theme-option-title">
                    <h5>Background</h5>
                </div>
                <div class="theme-option-content">
                    <input type="color" name="background-color" id="background-color">
                </div>
            </div>

            <div class="theme-option">
                <div class="theme-option-title">
                    <h5>Primary</h5>
                </div>
                <div class="theme-option-content">
                    <input type="color" name="primary-color" id="primary-color">
                </div>
            </div>

            <div class="theme-option">
                <div class="theme-option-title">
                    <h5>Secondary</h5>
                </div>
                <div class="theme-option-content">
                    <input type="color" name="secondary-color" id="secondary-color">
                </div>
            </div>
        </div>
     </div>
    
    
     <script src="ajax.js"></script>
    <?php } else{
        ?>

        <script>
            window.onload = function() {
                $.ajax({
                    type: 'GET',
                    url: 'themeHandling.php', 
                    contentType: 'application/json',
                    success: function(response) {
                        response = JSON.parse(response);
                        document.body.style.fontFamily = response['fontType'];
                        document.body.style.color = response['fontColor'];
                        document.body.style.backgroundColor = response['backgroundColor'];
                        document.documentElement.style.setProperty('--mainColor', response['primaryColor']);
                        document.documentElement.style.setProperty('--bodyColor', response['secondaryColor']);
                    },
                    error: function(error) {
                        console.error(error);
                    }
                });
            }
        </script>


<?php } ?>
    
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</body>
</html>