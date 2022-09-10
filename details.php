<html lang="en">
<!-- https://www.bootdey.com/snippets/view/team-user-resume#html -->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous">
</head>
  <?php
    $group=[
    	[
        'name'=>'Angel Munoz',
      	'Year'=>'Sophmore',
        'Dprofession'=>'Software Devolper or Full-Stack Deveolper',
        'Dcompany'=>'Anywhere that allows me to travel and work remotely',
        'Email'=>'aim1310@icloud.com',
        'Sintro'=>'Place Holder',
        'TSkilla'=>'Communication',
        'TSkillb'=>'Information Technology',
        'TSkillc'=>'Education',
        'Snuma'=>'',
        'Snumb'=>'',
        'Snumc'=>'',
        'Ffact'=> 'I also watch Super Sentai (Japanese Power Rangers) and I am going to Paramore this fall',
        'picture'=>[''],
      ],
    	[
        'name'=>'Amaya Bryant',
      	'Year'=>'Sophomore',
        'Dprofession'=>'Software Engineer',
        'Dcompany'=>'Google or Microsoft',
        'Email'=>'bryanta21@nku.edu',
        'Sintro'=>'My name is Amaya Bryant and I am a Sophomore at NKU. I am majoring in ASE, with a minor in Computer Science. I am the oldest of 3 and I do not have many hobbies other than playing video games and talking to friends.',
        'TSkilla'=>'Being bored',
        'TSkillNum'=>35,
        'TSkillb'=>'Programming',
        'TSkillc'=>'Sleeping',
        'Snuma'=>'85',
        'Snumb'=>'35',
        'Snumc'=>'90',
        'Ffact'=> 'I recently started getting into collecting Nintendo products.',
        'picture'=>'',
    	],
    	[
        'name'=>'',
      	'Year'=>'',
        'Dprofession'=>'',
        'Dcompany'=>'',
        'Email'=>'',
        'Sintro'=>'',
        'TSkilla'=>'',
        'TSkillb'=>'',
        'TSkillc'=>'',
        'Snuma'=>'',
        'Snumb'=>'',
        'Snumc'=>'',
        'Ffact'=> '',
        'picture'=>[''],
    	],
			[
        'name'=>'',
      	'Year'=>'',
        'Dprofession'=>'',
        'Dcompany'=>'',
        'Email'=>'',
        'Sintro'=>'',
        'TSkilla'=>'',
        'TSkillb'=>'',
        'TSkillc'=>'',
        'Snuma'=>'',
        'Snumb'=>'',
        'Snumc'=>'',
        'Ffact'=> '',
        'picture'=>[''],
    	],
		];
	?>

<body>
  <link rel="stylesheet" href="assets/css/detail.css">
  <title>
    <?php
      echo "ASE 230 - ".$group[$_GET['id']]['name'];
    ?>
  </title>
  <div class="container text-center mb-5">
    <h1>
      <?php
         echo "ASE 230 - ".$group[$_GET['id']]['name'];
      ?>
    </h1>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-md-6">
        <div class="mb-2">
          <!--I was unable to find a way to add images to arrays and setup them up if someone can take a look as that-->
          <?php
            echo ' <img class="w-100" src="https://bootdey.com/img/Content/avatar/avatar7.png"alt="">';
          ?>
        </div>
        <div class="mb-2 d-flex">
          <h4 class="font-weight-normal">
            <?php
               echo $group[$_GET['id']]['name'];
            ?>
          </h4>
          <div class="social d-flex ml-auto">
            <p class="pr-2 font-weight-normal">
              <?php
                echo "Follow on:";
              ?>
            </p>
            <a href="#" class="text-muted mr-1">
              <?php
                echo '<i class="fab fa-facebook-f"></i>';
              ?>
            </a>
            <a href="#" class="text-muted mr-1">
              <?php
                echo '<i class="fab fa-twitter"></i>';
              ?>
            </a>
            <a href="#" class="text-muted mr-1">
              <?php
                echo '<i class="fab fa-instagram"></i>';
              ?>
            </a>
            <a href="#" class="text-muted">
              <?php
                echo '<i class="fab fa-linkedin"></i>'
              ?>
            </a>
          </div>
        </div>
        <div class="mb-2">
          <ul class="list-unstyled">
            <li class="media">
              <span class="w-25 text-black font-weight-normal">
                Dream profession:
              </span>
              <label class="media-body">
                <?php
                  echo $group[$_GET['id']]['Dprofession'];
                ?>
              </label>
            </li>
            <li class="media">
              <span class="w-25 text-black font-weight-normal">
                Dream company:
              </span>
              <label class="media-body">
                <?php
                  echo $group[$_GET['id']]['Dcompany'];
                ?>
              </label>
            </li>
            <li class="media">
              <span class="w-25 text-black font-weight-normal">
                Email:
              </span>
              <label class="media-body">
                <?php
                  echo $group[$_GET['id']]['Email'];
                ?>
              </label>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-7 col-md-6 pl-xl-3">
        <h5 class="font-weight-normal">
          Short intro:
        </h5>
        <p>
          <?php
           echo $group[$_GET['id']]['Sintro'];
          ?>
        </p>
        <div class="my-2 bg-light p-2">
          <p class="font-italic mb-0">
            <?php
              echo "The price is something not necessarily defined as financial. It could be time, effort, sacrifice,
                money or perhaps, something else.";
            ?>
          </p>
        </div>
        <div class="mb-2 mt-2 pt-1">
          <h5 class="font-weight-normal">
            <!--
          Unable to get the section below functioning if someone could take a look
          -->
            Top skills:
          </h5>
        </div>
        <div class="py-1">
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width:81%" aria-valuenow="81" aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar-title"> <? echo $group[$_GET['id']]['TSkilla'] ?>
              </div>
              <span class="progress-bar-number">
                <?php
                  echo "81%";
                ?>
              </span>
            </div>
          </div>
        </div>
        <div class="py-1">
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width:90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar-title"><? echo $group[$_GET['id']]['TSkillb'] ?>
              </div>
              <span class="progress-bar-number">
                <?php
                  echo "90%";
                ?>
              </span>
            </div>
          </div>
        </div>
        <div class="py-1">
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width:72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar-title"><? echo $group[$_GET['id']]['TSkillc'] ?>
              </div>
              <span class="progress-bar-number">
                <?php
                  echo "72%";
                ?>
              </span>
            </div>
          </div>
        </div>
        <!--Everything above this comment is not fully functioning-->
        <h5 class="font-weight-normal">
          Fun fact
        </h5>
        <p>
          <?php
             echo $group[$_GET['id']]['Ffact'];
          ?>
        </p>
      </div>
      <a href="index.php">
        <?php
          echo '<button>
          Main Page
          </button>';
        ?>
      </a>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>