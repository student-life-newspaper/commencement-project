<!DOCTYPE html>
<html>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">

<title>Commencement Project | Student Life</title>
<link rel="shortcut icon" href="https://www.studlife.com/favicon.ico?v=2" />

<meta name="COPYRIGHT" content="&copy; 2020 Student Life" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="Student Life Staff | Student Life">
<!-- <meta name="og:image" content="./img/47223856_10156941208138656_7315202665212805120_n.png"> -->
<meta name="og:type" content="article">

<!-- <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-3210731-1', 'auto');
  ga('send', 'pageview');
</script> -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script
  src="https://code.jquery.com/jquery-3.5.0.min.js"
  integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="
  crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Noto+Serif" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<script type="text/javascript" src="main.js"></script>
</head>
<body>
  <div class="jump-top-container" id="jump-top">
    Back to Top
  </div>

  <div class="focus-nav">
    <div class="navbar-header tempnav-stud">
      <a class="navbar-brand topnav" href="https://www.studlife.com/"><img class="img-size2" src="img/logo-studentlife-white.svg"></a>
    </div>
    <div class="tempnav-title">
      <h1>Commencement 2020</h1>
    </div>
  </div>
  <div class="top-container container-fluid">
    <div class="background-img-overlay" id="header-img-overlay"></div>
    <nav class="navbar navbar-custom navbar-fixed-top topnav logo-overlay" role="navigation">
      <div class="container topnav">
        <div class="navbar-header">
          <a class="navbar-brand topnav" href="https://www.studlife.com/"><img class="img-size" src="img/logo-studentlife-white.svg"></a> <!-- overlay -->
        </div>
      </div>
    </nav>
    <div class="row" id="header-container">
      <div class="col"></div>
      <div class="col-lg-8 message-container">
        <div class="intro-message">
          <h1>Commencement Project</h1>
        </div>
      </div>
      <div class="col"></div>
    </div>
  </div>
  <div class="outer-stories-container">
    <div class="stories-container container">
      <div class="row" id="row00"><div class="col"></div>
      <div class="col-md-8">
        <h1>Commencement 2020</h1>
        <p>Friday, May 15 would have been Commencement day for the Class of 2020. Although we can’t celebrate together on Brookings Quad, we wanted to give seniors a chance to reflect on their time at Washington University. So we asked the class of 2020: </p>
        <p>What’s one thing you learned during your time at Wash. U. that you didn’t expect to learn? </p>
        <p>Here’s what they told us:</p>
        <iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/7bCC4TwIjto" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <br>
        <p>Click below to see more from them.</p>
      </div>
      <div class="col"></div></div>

        <?php
        class Person
        {
        	public $name, $image_name, $video_link, $number, $hometown, $studied, $extracurriculars;

        	function __construct($name, $image_name, $video_link=null, $number, $hometown, $studied, $extracurriculars) {
        		$this->name = $name;
        		$this->image_name = $image_name;
            $this->video_link = $video_link;
            $this->number = $number;
            $this->hometown = $hometown;
            $this->studied = $studied;
            $this->extracurriculars = $extracurriculars;
        	}
        }

        $people = array(
          new Person("Amina Janjua","Amina Janjua.PNG","https://www.youtube-nocookie.com/embed/AJjIuLSOQaU","01","St. Louis, Missouri","Biology and Religious Studies","Muslim Student Association, Synapse, math tutor, cell biology research, Bear Leader, Admissions interviewer"),
          new Person("Madison Lee","Madison Lee.jpg","https://www.youtube-nocookie.com/embed/Fn13BrkXcRs","02","Old Tappan, New Jersey","Psychological & Brain Studies and Film & Media Studies","Thyrsus, Performing Arts Department productions, Alpha Omicron Pi, Thai Student Association, Asian Multicultural Council"),
          new Person("Eric Judson","Eric Judson.jpeg","https://www.youtube-nocookie.com/embed/Np5YZvN1zmw","03","West Windsor, New Jersey","Psychological & Brain Sciences","Green Action, All Student Theatre, Thyrsus, Cast N’ Crew"),
          new Person("Lizzie Franclemont","Lizzie Franclemont.jpeg","https://www.youtube-nocookie.com/embed/GwowR8xdPIQ","04","Zion, Illinois","American Culture Studies and Religious Studies","Reflections, Student Union Senate and Diversity Affairs Council, tour guide, WUSlam, Uncle Joe’s, resident advisor, Gephardt Institute"),
          new Person("Anu Balasubramanian","Anu Balasubramanian.jpeg","https://www.youtube-nocookie.com/embed/QiK1j-qwNOA","05","Westford, Massachusetts","Biology, Anthropology and Women, Gender & Sexuality Studies","Frontiers, resident advisor, optical radiology research, Sur Taal Laya a capella"),
          new Person("Lexi Jackson","Lexi Jackson.jpeg","https://www.youtube-nocookie.com/embed/V_fi8rmV3DQ","06","Nixa, Missouri","Business Strategy and Management, Political Science and Spanish","WUSA, First Year Center, Bear Studios, Diversity and Inclusion Summit, Delta Sigma Pi, Arch Consulting"),
          new Person("Dugan Marieb","Dugan Marieb.jpg","https://www.youtube-nocookie.com/embed/kww_LQKZXXQ","07","Portland, Oregon","Environmental Policy and Finance","Student Sustainability Board, Net Impact, Student Environmental Council, Fossil Free WashU, Climbing Team, KWUR"),
          new Person("Ben Goodfriend","Ben Goodfriend.jpeg","https://www.youtube-nocookie.com/embed/jWKVigZkhrs","08","Bethesda, Maryland","Interdisciplinary Project in the Humanities and Film & Media Studies","TEDxWUSTL, Prison Education Project, Sigma Chi"),
          new Person("Nick Matteucci","Nick Matteucci.jpeg","https://www.youtube-nocookie.com/embed/n5kM0A12Iwc","09","St. Louis, Missouri","Chemical Engineering","Cross Country, Track and Field, Bear Cubs, energy storage research"),
          new Person("Taylor Emerson","Taylor Emerson.jpeg","https://www.youtube-nocookie.com/embed/BvYZA3S3acg","10","Los Angeles, California","Psychological & Brain Sciences","WUSA, Performing Arts Department, student theatre and First Year Orientation productions, Delta Gamma, intramural soccer, tour guide, Mx WashU, MGT100 TA"),
          new Person("DeVaughn Rucker","DeVaughn Rucker.jpeg","https://www.youtube-nocookie.com/embed/0Eim7SnftCw","11","Florissant, Missouri","Mechanical Engineering","Men’s Basketball, National Society of Black Engineers"),
        );

        foreach($people as $person):
         ?>

        <div class="row" id="<?php echo "row" . $person->number ?>"><div class="col"></div>
          <div class="col-md-8 person-card" id="<?php echo "person-" . $person->number . "-card" ?>" data-number="<?php echo $person->number ?>">
            <div class="person-container">
              <div class="headshot-container">
                <img class="headshot" src="img/headshots/<?php echo $person->image_name ?>" alt="<?php echo $person->name ?>">
              </div>
              <div class="person-name">
                <h2><?php echo $person->name ?></h2>
              </div>
            </div>
            <div class="selection-marker"><div class="triangle-selected"></div><div class="underline-selected"></div></div>
          </div>
        <div class="col"></div></div>
        <div class="row"><div class="col"></div>
          <div class="col-8 story" id="<?php echo "person-" . $person->number . "-details" ?>" data-number="<?php echo $person->number ?>">
            <iframe width="100%" height="315" src="<?php echo $person->video_link ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <h3><?php echo $person->name ?></h3>
            <p><?php echo "Hometown: " . $person->hometown ?></p>
            <p><?php echo "Studied: " . $person->studied ?></p>
            <p><?php echo "Extracurriculars: " . $person->extracurriculars ?></p>
          </div>
        <div class="col"></div></div>

        <?php endforeach; ?>

    </div>
  </div>
  <footer>
    <div class="container">
      <div class="row" style="margin-bottom:20px">
        <div class="col-md-8">
          <p class="text-muted small">Edited by Jaden Satenstein</p>
          <p class="text-muted small">Designed by Jaden&nbsp;Satenstein &amp; Nathan&nbsp;Springman</p>
          <p class="text-muted small">Graphics by Christine Watridge</p>
          <p class="text-muted small">Photo by Grace Bruton</p>
          <p class="text-muted small">Music from Bensound.com</p>
          <p class="copyright text-muted small">&copy; Student Life 2020</p>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>
