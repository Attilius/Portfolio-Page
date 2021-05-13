
<?php include "../pages/head.php"; ?>


<div id="portfolio-content">
    <?php
    require_once '../classes/card.php';

    $works = array();
    array_push($works, new Card('/pics/Tribute-Page.jpg','Tribute page', 'https://codepen.io/attilius/pen/GRZgYgY'));
    array_push($works, new Card('/pics/Survey-Form.jpg','Survey form', 'https://codepen.io/attilius/pen/BaKyEYV'));
    array_push($works, new Card('/pics/Technical-Documentation-Page.jpg','Technical documentation page', 'https://codepen.io/attilius/pen/wvGeNJY'));
    array_push($works, new Card('/pics/Product-Landing-Page.jpg','Product landing page', 'https://codepen.io/attilius/pen/QWNgaLq'));
    array_push($works, new Card('/pics/Personal-portfolio-webpage.jpg','Personal portfolio webpage', 'https://codepen.io/attilius/pen/WNwdOKW'));
    

    foreach ($works as $item) {
        echo $item->createCard();
    }
    ?>
</div>

<?php include "../pages/foot.php"; ?>
