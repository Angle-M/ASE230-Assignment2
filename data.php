<!-- /* Create a file named data.php that contains-
 - the array with information from individuals in your group
 - the date of birth for each individual */ -->
<?php
  $group=[
    [
      'name'=>'Angel Munoz',
      'Year'=>'Sophmore',
      'Symbol'=> str_repeat(' &#9734',2),
      'Dprofession'=>'Software Devolper or Full-Stack Deveolper',
      'Dcompany'=>'Anywhere that allows me to travel and work remotely',
      'DOB' =>'2002-10-10',
      'Email'=>'aim1310@icloud.com',
      'Sintro'=>'My name is Angel Munoz, I\'m a sophomore at NKU. I am a CIT and ASE double Major. I\'m the middle child of 5 and my hobbies are watching anime (Currently watching One Piece) Playing video games and reading.  ',
      'Squote'=>'You can\'t see the whole picture until you look at it from the outside - Trafalgar Law',
      'TSkilla'=>'Communication',
      'TSkillb'=>'Information Technology',
      'TSkillc'=>'Education',
      'Snuma'=>'84',
      'Snumb'=>'90',
      'Snumc'=>'75',
      'Ffact'=> 'I am going to Paramore see this fall',
      'picture'=>'images/munoza2.png',
    ],
    [
      'name'=>'Amaya Bryant',
      'Year'=>'Sophomore',
      'Symbol'=> str_repeat(' &#9734',2),
      'Dprofession'=>'Software Engineer',
      'Dcompany'=>'Google or Microsoft',
      'DOB' =>"2003-04-15",
      'Email'=>'bryanta21@nku.edu',
      'Sintro'=>'My name is Amaya Bryant and I am a Sophomore at NKU. I am majoring in ASE, with a minor in Computer Science. I am the oldest of 3 and I do not have many hobbies other than playing video games and talking to friends.',
      'Squote'=>'Oh the thinks you can think. - Dr. Seuss',
      'TSkilla'=>'Being bored',
      'TSkillb'=>'Programming',
      'TSkillc'=>'Sleeping',
      'Snuma'=>'85',
      'Snumb'=>'35',
      'Snumc'=>'90',
      'Ffact'=> 'I recently started getting into collecting Nintendo products.',
      'picture'=>'images/amaya1.jpg',
    ],
    [
      'name'=>'Quay Robinson',
      'Year'=>'Junior',
      'Symbol'=>str_repeat(' &#9734',3),
      'Dprofession'=>'Forensic Analyst',
      'Dcompany'=>'FBI',
      'DOB' =>'',
      'Email'=>'robinsonq4@nku.edu',
      'Sintro'=>'My name is Quay, and I am a Junior here at NKU. I play on the varsity Esports team, and am apart of 2 other campus organizations.',
      'Squote'=>'A sword wields no strength unless the hand that holds it has courage. - Legend of Zelda: Twilight Princess',
      'TSkilla'=>'Daydreaming',
      'TSkillb'=>'Math',
      'TSkillc'=>'Listening',
      'Snuma'=>'91',
      'Snumb'=>'86',
      'Snumc'=>'87',
      'Ffact'=> 'I do not like chocolate ice cream.',
      'picture'=>'images/Quay.jpeg',
    ],
    [
      'name'=>'Tami Farber',
      'Year'=>'Senior',
      'Symbol'=>str_repeat(' &#9734',4),
      'Dprofession'=>'Hydrologist',
      'Dcompany'=>'NOAA',
      'DOB' =>"1971-06-14",
      'Email'=>'farbert1@nku.edu',
      'Sintro'=>'My name is Tami, and I am in my second senior year at NKU. I have been a Data Science major since 2017, but in seeking a path to use data science in the scientific community I have also studied biology, chemistry, and physics. My Data Science degree now has an Ecology application.',
      'Squote'=>'I don\'t know anything with certainty, but seeing the stars makes me dream. <br> -- Vincent Van Gogh',
      'TSkilla'=>'Academic Study',
      'TSkillb'=>'Programming',
      'TSkillc'=>'Scientific Research',
      'Snuma'=>'85',
      'Snumb'=>'75',
      'Snumc'=>'70',
      'Ffact'=> 'I spent the summer stalking birds and writing down what they did.',
      'picture'=>'images/TamiFarber.jpg',
    ],
  ];


  $group_json = json_encode($group);

  $file_hndlr = fopen('data.json', 'w');
  fputs($file_hndlr, $group_json);
  fclose($file_hndlr);
?>
