<?php include "../pages/head.php"; ?>

<div class="about-content">

        <img class="me_" src="/pics/Me_.JPG" alt="It's me">
    <div class="about">
        <h1 class="name">Attila Fanczi</h1>
        <h3 class="profession">Web Developer</h3>
        <p class="about-text">I have been programming for a year and a half, with web development being my main profile.
            I like to learn about different technologies and languages, so that I can solve the given task in different ways,
            thus expanding my experience.</p>
        <h3 class="profession">Skills</h3>
        <div class="experience">
            <?php
            require_once '../classes/circle.php';

            $skills = array();

            array_push($skills, new Circle('/pics/html5.jpg', 'HTML5', '1'));
            array_push($skills, new Circle('/pics/css3.png', 'CSS3', '2'));
            array_push($skills, new Circle('/pics/js.jpg', 'Js', '3'));
            array_push($skills, new Circle('/pics/bootstrap.png', 'Bootstrap', '4'));
            array_push($skills, new Circle('/pics/php.png', 'PHP', '5'));

            foreach ($skills as $item) {
                echo $item->createCircle();
            }
            ?>
        </div>
    </div>
</div>

<?php include "../pages/foot.php"; ?>