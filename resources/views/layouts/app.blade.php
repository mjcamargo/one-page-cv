<!doctype html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Marcio Camargo</title>
            <link rel="stylesheet" href="{{ asset('css/app.css') }}">
            <script src="https://kit.fontawesome.com/5bdcd078de.js" crossorigin="anonymous"></script>
        </head>
        <body>
        <div class="sidenav">
        <a href="#home" class="fas fa-home" title="home"></a>
        <a href="#about" class="fas fa-address-card" title="My CV"></a>
        <a href="#projects" class="fas fa-file-code" title="Projects"></a>
        <a href="#contact" class="fas fa-envelope" title="Contact"></a>
    </div>

    <section id="home">
        <div id="content">
            <div class="profilePic">  
          

                <img src="{{ asset('storage/images/profile.png') }}" alt="My Profile picture"/>

            </div>
            <div class="left-home-text">  
                <h1> Hello, </h1>  
                <h1> I'm Marcio </h1>  
                <h1> Camargo</h1>  
            </div> 
        </div> 
    </section>
    <section id="about">
        <div id="content">
            <div class="heading">About</div>
            <h2>• Holder of a Degree in Computer Science (2015) and MSc in Cloud Computing from NCI, Dublin (2020).<br />
                • 3 years’ experience in retail in Ireland, combining full time studies with part-time work.<br />
                • Co-founder of an e-commerce business selling products using online marketplace platforms.<br />
                • An organised, results-oriented Customer Service Professional with an excellent track record of
                significantly increasing service quality, sales and customer base.<br />
                • Familiar with Java programming language, WordPress and Android application development.<br />
                • Good knowledge of CSS, HTML and Ruby on Rails.<br />
                • English (Fluent written & oral), Portuguese (Native).
            </h2><br /><br />
            <a class="btn" href="#education"> <i class="fas fa-arrow-alt-circle-down"></i></a>
        </div>      
    </section>
    <section id="education">
        <div id="content">
            <div class="heading">Education</div>
            <h2>Bsc in Computer Science</h2>
            <h1>Federal University of Lavras, Brazil</h1>
            <h1>08/2008 – 12/2013 & 02/2015 – 07/2015</h1><br />
            <h2>Msc in Cloud Computing (Software Development Stream)</h2>
            <h1>National College of Ireland</h1>
            <h1>01/2019 – 06/2020</h1><br /><br />
            <a class="btn" href="#career"> <i class="fas fa-arrow-alt-circle-down"></i></a>
        </div>      
    </section>
    <section id="career">
        <div id="content">
            <div class="heading">Career History</div>
            <h1><i class="fas fa-suitcase"></i> Spar – Dame Street, Dublin</h1> 
            <h3>Sales Assistant - Part-time</h3>    
            <h4>09/2017 – 08/2020</h4>
            <p>• Identifying and assessing customers’ needs to achieve satisfaction and targets.</br>
            • Following communication procedures, guidelines, and policies.</br>
            • Ensuring the extra mile was taken in order to engage customers.</br>
            • Managed junior staff, responsible for all aspects of customer service and behind the counter
            activities as well as opening and closing tills.</br>
            • Handling customer complaints and managing problems with autonomy and focus on finding the
            solution.</br>
            • Handled customer complaints, provided appropriate solutions and alternatives, ensuring
            customer satisfaction.</br>
            • Provided outstanding customer service to over 25 customers on an hourly basis.</br>
            • Improved operational efficiency by giving new ideas.</p>
            <a class="btn" href="#career-developer"> <i class="fas fa-arrow-alt-circle-down"></i></a>
        </div>      
    </section>
    <section id="career-developer">
        <div id="content">
            <h1><i class="fas fa-suitcase"></i> Comp Júnior - Junior Enterprise, Brazil</h1> 
            <h3>Developer (Part-time)</h3>    
            <h4>09/2011 – 02/2014</h4>
            <p> • Worked in a student enterprise providing IT consultancy and services for university and city community.</br>
                • Front-end development of WEB solutions using HTML, CSS and WordPress.</br>
                • Responsible for answering customers’ telephone enquiries.</p> </br>

                <h1><i class="fas fa-suitcase"></i> Mercado Livre e-commerce, Brazil</h1> 
            <h3>Online Seller (Self-employed/Part-time)</h3>    
            <h4>02/2011 – 07/2017</h4>
            <p> 
                • Executed sales on popular Brazilian auction website and Facebook group.</br>
                • Over 4,000 participants on Facebook page created to announce the products imported from
                United States.</br>
                • Performed all packaging and shipping duties.</br>
                • Kept excellent records of all transactions using spreadsheets.</br>
                • Over 150 packages sent to Brazil from United States.</br>
                • Improved customer’s experience based on customers’ feedback on Mercado Livre and the Facebook group.
            </p>
            <a class="btn" href="#projects"> <i class="fas fa-arrow-alt-circle-down"></i></a>
        </div>      
    </section>
    <section id="projects">
        <div id="content">
            <div class="heading">Projects</div>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/KoXkKk2BA30" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p>Online shops accessibility: An evaluative analysis of Software as a Service E-Commerce Platforms (2020)
                Developed a web application which checks accessibility of online shops against the international standard. The application lists the errors and warnings found for each page and allows up to three different pages be compared. The application provides results in the form of charts and tables of the issues found. This helps businesses and developers to identify barriers for people with disabilities accessing their online shops.
                • Technologies used: Ruby on Rails, AWS Cloud9, HTML, CSS, Tenon.io and Bootstrap.
                </p>
                <i class="fab fa-github"></i>


            <a class="btn" href="#project2"> <i class="fas fa-arrow-alt-circle-down"></i></a>
        </div>  
    </section>
    <section id="project2">
        <div id="content">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Oy6RthVQ1bs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p>
                Irish Storage - a Ruby on Rails Application (2019) 
                Developed a web application and deployed it on cloud (Heroku) to connect tourists and shops around of Dublin to store luggage, thus helping shops with available space to create an extra income source. The application uses Google Maps and Google Places to retrieve location and business information such as reviews and opening hours. 
                •	Technologies used: Ruby on Rails, AWS Cloud9, Heroku Cloud platform, HTML, CSS and Bootstrap. 
                
                </p>
                <i class="fab fa-github"></i>


            <a class="btn" href="#project3"> <i class="fas fa-arrow-alt-circle-down"></i></a>
        </div>  
    </section>
    <section id="project3">
        <div id="content">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/vM7N6U9ga_E" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p>
                Emarket – Grocery Shopping (2015)
                Developed an Android application allowing customers to shop online with a grocery store. The application permits 
                online payment and allows the user to check the delivery status of the order.
                • Technologies used: Phone Gap, HTML, CSS, jQuery Mobile and JavaScript.
                </p>


            <a class="btn" href="#contact"> <i class="fas fa-arrow-alt-circle-down"></i></a>
        </div>  
    </section>
    <section id="contact">
        <div id="content">
            <div class="heading">Get in Touch</div>
            <form method="post" action="subscriberform.php">
                <div class="row">
                  <div class="col-25">
                    <label for="fname">First Name</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="name" name="name" placeholder="Your name..">
                  </div>
                </div>
                <div class="row">
                    <div class="col-25">
                      <label for="email">Email</label>
                    </div>
                    <div class="col-75">
                      <input type="email" id="email" name="email" placeholder="Your email..">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                      <label for="phone">Phone number</label>
                    </div>
                    <div class="col-75">
                      <input type="text" id="phone" name="phone" placeholder="Your phone number..">
                    </div>
                </div>
                <div class="row">
                  <div class="col-25">
                    <label for="subject">Subject</label>
                  </div>
                  <div class="col-75">
                    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                  </div>
                </div>
                <div class="row">
                  <input type="submit" value="Submit">
                </div>
                </form>
        </div>
    </section>
        </body>
    </html>