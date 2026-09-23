<?php
$books = [
    [
        "title" => "Малкият принц",
        "author" => "Антоан дьо Сент-Екзюпери",
        "genre" => "Приказка",
        "price" => "12.99 лв.",
        "image" => "images/book1.jpg",
        "description" => "Класическа история за приятелството, любовта и важните неща в живота."
    ],
    [
        "title" => "Под игото",
        "author" => "Иван Вазов",
        "genre" => "Роман",
        "price" => "15.50 лв.",
        "image" => "images/book2.jpg",
        "description" => "Един от най-известните български романи."
    ],
    [
        "title" => "Хари Потър и философският камък",
        "author" => "Дж. К. Роулинг",
        "genre" => "Фентъзи",
        "price" => "18.90 лв.",
        "image" => "images/book3.jpg",
        "description" => "Началото на приключенията на Хари Потър в училището за магия."
    ],
    [
        "title" => "1984",
        "author" => "Джордж Оруел",
        "genre" => "Антиутопия",
        "price" => "16.99 лв.",
        "image" => "images/book4.jpg",
        "description" => "Роман за общество, в което свободата и личното пространство са ограничени."
    ]
];
?>

<!DOCTYPE html>
<html lang="bg">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Книжарница „Литера“</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

<header>
    <div class="logo">
        📚 Книжарница „Литера“
    </div>

    <nav>
        <a href="#home">Начало</a>
        <a href="#books">Книги</a>
        <a href="#about">За проекта</a>
    </nav>
</header>


<section id="home" class="hero">

    <div class="hero-content">
        <h1>Добре дошли в нашата книжарница!</h1>

        <p>
            Открийте интересни книги и намерете
            следващото си любимо заглавие.
        </p>

        <a href="#books" class="hero-button">
            Разгледай книгите
        </a>
    </div>

</section>


<section id="books" class="books-section">

    <h2>Нашите книги</h2>

    <p class="section-text">
        Разгледайте нашата колекция от интересни заглавия.
    </p>

    <div class="books">

        <?php foreach ($books as $book): ?>

            <div class="book">

                <div class="book-image">
                    <img
                        src="<?php echo $book['image']; ?>"
                        alt="<?php echo $book['title']; ?>"
                    >
                </div>

                <div class="book-content">

                    <h3>
                        <?php echo $book['title']; ?>
                    </h3>

                    <p>
                        <strong>Автор:</strong>
                        <?php echo $book['author']; ?>
                    </p>

                    <p>
                        <strong>Жанр:</strong>
                        <?php echo $book['genre']; ?>
                    </p>

                    <p class="description">
                        <?php echo $book['description']; ?>
                    </p>

                    <div class="book-bottom">

                        <span class="price">
                            <?php echo $book['price']; ?>
                        </span>

                        <button>
                            Добави
                        </button>

                    </div>

                </div>

            </div>

        <?php endforeach; ?>

    </div>

</section>

<footer>

    <p>
        © 2026 Книжарница „Литера“
    </p>

</footer>

</body>
</html>