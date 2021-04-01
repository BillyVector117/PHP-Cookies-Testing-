<?php
// Search/find a cookie named as "font-size", '$_COOKIE' var is set (in index.php) IT IS FALSE WHEN THE COOKIE IS EXPIRED
if (isset($_COOKIE['font-size'])) {
    $font_cookie = htmlspecialchars($_COOKIE['font-size']);  // Extract and clean cookie 'font-size' value (30px)
    $iscookie = true;
} else {
    // Else, set a default font
    $font_cookie = '15px';
    $iscookie = false;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text</title>
    <!-- Edit the font-size in CSS with the extracted cookie in index.php-->
    <style>
        /* Modify 'p' tag */
        p {
            /* "font-size cookie is used right here */
            font-size: <?php echo $font_cookie ?>;
        }
    </style>
</head>

<body>
        <h1><?php echo ($iscookie) ? 'COOKIE IS TRUE' : 'COOKIE IS FALSE!'; ?></h1>
    <p> Billy Rodriguez M., consectetur adipisicing elit. Eveniet, nobis enim facere aut corporis iste, necessitatibus fugit rem ratione iure similique odio et ipsa exercitationem natus! Minima, animi voluptas! Sed.
        Numquam cumque deleniti tenetur necessitatibus vero impedit inventore nisi, aliquam, voluptatum fuga ullam eos. Ullam dignissimos enim tempora velit aliquam quam. Eligendi eveniet, quas laborum assumenda perferendis eius soluta vero!
        Odio adipisci illum, praesentium dolores, id, quos molestias sint facilis dignissimos dolore deleniti ut veritatis hic voluptatum delectus consequuntur rem aspernatur aperiam. Error, aliquam illo in eos asperiores non dicta.
        Modi corrupti, tempore minima numquam odio voluptatum debitis qui sapiente consequuntur in magni, doloribus vel repudiandae rem quis cumque officia alias laudantium consequatur error. Dolores obcaecati repellendus cumque veritatis voluptatem!
        Quisquam vitae ipsam, earum modi corrupti aspernatur dolorem adipisci eveniet sed doloremque, porro omnis quia! Iure, rem repellat. Voluptate qui enim voluptatum itaque veniam repudiandae impedit quae consequatur repellat vel!
        Eius asperiores possimus consequuntur rerum, velit sequi impedit eum laborum quisquam ad beatae voluptatem harum nulla architecto ipsum! Beatae ab animi pariatur quae ipsam recusandae delectus consectetur obcaecati vel sunt.
        Ea repellat tempora, excepturi, delectus ad corporis, et assumenda reprehenderit laudantium aliquam nihil? Error officia, maiores accusamus saepe accusantium sapiente. Maiores amet eligendi inventore rem quos, dolores libero modi sapiente!
        Nostrum saepe rerum earum tempore. Recusandae dolorum dolore aliquid excepturi ducimus distinctio ipsam ex error praesentium? Voluptatum illo non quis doloribus molestias obcaecati accusantium mollitia libero placeat eum, quod voluptas!
        Vero, voluptatibus. Quaerat, maxime dignissimos! Hic nulla, veniam fuga quasi, reiciendis nobis officiis aut error dignissimos nihil pariatur deserunt dolor dolore ipsa laboriosam assumenda minus reprehenderit ipsam neque quas maiores!
        Corrupti tenetur dicta reprehenderit odio vitae repellendus ducimus consequatur et nemo fuga commodi architecto voluptatem praesentium quia distinctio cupiditate laudantium perferendis sed eaque, dignissimos delectus? Quasi, illo labore! Sit, eaque!
        Repellat numquam tenetur nihil molestias quod illo itaque odit eveniet, voluptates eius culpa ducimus velit ipsa voluptatum pariatur doloribus neque voluptas nam rem aspernatur iusto! Vitae error expedita est nam.
        Debitis recusandae quis commodi quod at, quae exercitationem corrupti! Architecto dolores fuga iste alias corrupti. Fugiat, similique et? Dicta quam, ipsa exercitationem ad quasi tempore id veniam obcaecati iste esse!
        Labore quae ipsam harum impedit illo distinctio animi inventore sit laborum dolorem quibusdam sapiente dolorum ut incidunt aut veritatis assumenda, praesentium officia tenetur, libero necessitatibus iste excepturi laudantium. Sunt, facere?
        Reiciendis rem nesciunt adipisci illo voluptatem minima sed velit ea blanditiis, asperiores tempora ut? Impedit nulla officia reiciendis quas nesciunt esse, facilis quaerat nisi aut consequuntur labore adipisci quibusdam vero.
        Sint, illo temporibus. Neque aut corrupti nisi, rem voluptas possimus! Laboriosam mollitia odit eum nihil similique sapiente omnis sit rerum neque eligendi vitae quod repudiandae possimus distinctio laudantium, Thanks FalconMasters!</p>
</body>

</html>