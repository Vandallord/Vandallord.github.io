<!-- Header -->
<header class="header pull-left">

  <div class="avatar">
    <img src="../web/img/1.png" style="height: 25px; width: 25px;" alt="avatar">
  </div>
  <br>
  <nav class="main-nav">
    <ul class="navigation">
      <li><a href="#about">About Me</a></li>
      <li><a href="#projects">Projects</a></li>
      <li><a href="#news">News</a></li>
      <li><a href="#links">Links</a></li>
      <li><a href="#skills">Skills</a></li>
    </ul>
  </nav>

</header>

<!-- Main Content -->
<div class="main-content p1ull-right">

  <section id="about" class="about" >
            <h4><small>Info</small></h4>
            <hr>
            <h2>I Love Food</h2>
            <p>Hi, I am engaged in the development and development of Internet projects</p>
            <hr>
    </section>

  <section id="projects" class="about" >
                <h4><small>New browser Project</small></h4>
                <hr>
                <h2>I Love Food</h2>
                <p>Food is my passion.</p>
                <hr>
              </section>


  <section id="news" class="about" >
                  <h4><small>News</small></h4>
                  <hr>
                  <a class="twitter-timeline" data-width="300" data-height="900" href="https://twitter.com/augonstudio?ref_src=twsrc%5Etfw">Tweets by augonstudio</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                  <hr>
                  </section>

  <section id="links" class="about" >
                    <h4><small>Resources</small></h4>
                      <hr>
                      <p>android games</p>
                      <p>browser games</p>
                    <hr>
                  </section>

  <section id="skills" class="about" >
                      <h4><small>My skills</small></h4>
                        <hr>

                        <!-- Skills -->
// надо делать аджаксом
  <!--<script type="text/javascript" src="scripts\skills.js"></script>
<script type="text/javascript">

  function ButtonClick(number){
  var skills=JSON.parse(json_string);
  var ShowSkill;

    var asd = 0;

    if (number == 0) {
      ShowSkill = skills.gamedev;
    } else if (number == 1) {
      ShowSkill = skills.gamedev;
    } else if (number == 2) {
      ShowSkill = skills.gamedev;
    } else if (number == 3) {
      ShowSkill = skills.gamedev;
    }
  }
</script>-->
    <?php
      include "scripts/skills.php";

      $skills=json_decode($json_string);

    $asd = 0;

    if (showSkill == 0) {
      $ShowSkill = $skills->gamedev;
    }

    if (isset($_GET['submit0']))
    {
      $ShowSkill = $skills->gamedev;
    }
    else if (isset($_GET['submit1']))
    {
        $ShowSkill = $skills->web;
    }
    else if (isset($_GET['submit2']))
    {
        $ShowSkill = $skills->painting;
    }
    else if (isset($_GET['submit3']))
    {
        $ShowSkill = $skills->other;
    }
    ?>

                          <div class="jumbotron">
                                <h2>My skills!</h2>
                          </div>

                          <form class="btn-group btn-group-justified">
                          <div class="btn-group">
                            <input type="submit" onclick="ButtonClick(0)" name="submit0" class="btn btn-primary" value="Gamedev"/>
                          </div>
                          <div class="btn-group">
                            <input type="submit" onclick="ButtonClick(1)" name="submit1" class="btn btn-primary" value="Web development"/>
                          </div>
                          <div class="btn-group">
                            <input type="submit" onclick="ButtonClick(2)" name="submit2" class="btn btn-primary" value="Painting"/>
                          </div>
                          <div class="btn-group">
                            <input type="submit" onclick="ButtonClick(3)" name="submit3" class="btn btn-primary" value="Other"/>
                          </div>
                        </form>
                            <div class="skills">
                            				<div class="row">
                                      <!-- Skills show -->
                          <?php foreach ($ShowSkill as $skill): ?>
                          <div class="col-md-6 col-sm-6 col-xs-12 item">
                            <div class="skill-info clearfix">
                              <h3 class="pull-left"><?= $skill->name; ?></h3>
                              <span class="pull-right"><?= $skill->count . '%'; ?></span>
                            </div>
                            <div class="progress">
                              <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:<?= $skill->count . '%'; ?>">
                              </div>
                            </div>
                          </div>
                          <?php endforeach; ?>

<!--<script type="text/javascript">
// не работает
   ShowSkill.forEach(function(skill, i, arr) {
  alert( i + ": " + skill + " (массив:" + arr + ")" );
});
</script>-->
                            </div>
                          </div>
                        <!-- Конец скилов --->
                      <hr>
                    </section>
  </div>
