<!doctype html>

<html>
    <head>
        <meta charset="utf-8">
        <title><?= $title ?></title>
    </head>
    
    <body>
        <h1><?= $title ?></h1>
        <p>User logged in as <?= $username ?> using <?= $password ?></p>
        <h3>Temperature</h3>
        <p>Fahrenheit: <?= $temp ?> degrees</p>
        <p>Celsius: <?= $temp - 32 * (5.0/9.0) ?> degrees</p>
        <h3>Color</h3>
        <p>I like <?= $color ?></p>
        <h3>Circle</h3>
        <p>Circumference <?= $radius * 2 * 3.141592653589793238462643383279502884197169399327510 ?></p>
        <h3>Bookmarks</h3>
        <p>My first bookmark is <?= $bookmarks[0] ?></p>
        <ul>
            <?php foreach (($bookmarks?:[]) as $bookmark): ?>
                <li><a href="<?= $bookmark ?>"> <?= str_replace('http://', '', $bookmark); ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3>Addresses</h3>
        <p><?= $addresses['primary'] ?></p>
        <p><?= $addresses['secondary'] ?></p>
        <?php foreach (($addresses?:[]) as $key=>$value): ?>
            <p><?= $key ?> - <?= $value ?></p>
        <?php endforeach; ?>
    </body>
</html> 