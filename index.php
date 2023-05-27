<?php
session_start();
$period_cookie = 2592000; // 30 дней (2592000 секунд)
 
if($_GET){
    setcookie("utm_source",$_GET['utm_source'],time()+$period_cookie);
    setcookie("utm_medium",$_GET['utm_medium'],time()+$period_cookie);
    setcookie("utm_term",$_GET['utm_term'],time()+$period_cookie);
    setcookie("utm_content",$_GET['utm_content'],time()+$period_cookie);
    setcookie("utm_campaign",$_GET['utm_campaign'],time()+$period_cookie);
}
 
if(!isset($_SESSION['utms'])) {
    $_SESSION['utms'] = array();
    $_SESSION['utms']['utm_source'] = '';
    $_SESSION['utms']['utm_medium'] = '';
    $_SESSION['utms']['utm_term'] = '';
    $_SESSION['utms']['utm_content'] = '';
    $_SESSION['utms']['utm_campaign'] = '';
}
$_SESSION['utms']['utm_source'] = $_GET['utm_source'] ? $_GET['utm_source'] : $_COOKIE['utm_source'];
$_SESSION['utms']['utm_medium'] = $_GET['utm_medium'] ? $_GET['utm_medium'] : $_COOKIE['utm_medium'];
$_SESSION['utms']['utm_term'] = $_GET['utm_term'] ? $_GET['utm_term'] : $_COOKIE['utm_term'];
$_SESSION['utms']['utm_content'] = $_GET['utm_content'] ? $_GET['utm_content'] : $_COOKIE['utm_content'];
$_SESSION['utms']['utm_campaign'] = $_GET['utm_campaign'] ? $_GET['utm_campaign'] : $_COOKIE['utm_campaign'];

// $sale = 53; // Скидка на сайте
// $product_id = 1709; // ID продукта (из личного кабинета crm)
$product_name = 'Ремонт пластикових вікон'; // название продукта
// $currency = 'грн'; // валюта
?>


<!DOCTYPE html>
<html lang="uk">
<head>
<!-- ====================Поле для пикселя======================== -->




<!-- =====================Конец================================== -->
    <title>Ремонт вікон</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="keywords" content="Ремонт вікон, виготовлення вікон">
    <meta name="description" content="Якісний та професійний ремонт металопластикових вікон, від заміни ущільнювача, фурнітури до заміни склопакета. Регулювання.">
    <meta property="og:title" content="Ремонт вікон. Монтаж, утеплення, ремонт.">
    <meta property="og:description" content="Якісний та професійний ремонт металопластикових вікон, від заміни ущільнювача, фурнітури до заміни склопакета. Регулювання.">
    <link href="/" rel="canonical">

    <link rel="apple-touch-icon" sizes="180x180" href="img/icon/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/icon/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/icon/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/icon/favicon/site.webmanifest">
    <link rel="mask-icon" href="img/icon/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="wrapper">
    
        <header class="header lock-padding">
            <div class="container">
                <div class="header__inner">
                    <a href="/" class="header__logo">
                        <img src="img/logo.png" alt="img" class="header__img img">
                    </a>
                    <nav class="menu">
                        <ul class="menu__list">
                            <li class="menu__item">
                                <a href="#service" class="menu__link">Послуги</a>
                            </li>
                            <li class="menu__item">
                                <a href="#about" class="menu__link">Про нас</a>
                            </li>
                            <li class="menu__item">
                                <a href="#repair" class="menu__link">Ремонт</a>
                            </li>
                            <li class="menu__item">
                                <a href="#faq" class="menu__link">FAQ</a>
                            </li>
                            <li class="menu__item">
                                <a href="#contact" class="menu__link">Контакти</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="header__burger">
                        <span></span>
                    </div>
                </div>
            </div>
        </header>

    
        <main class="main">
            <section class="home">
                <div class="home__bg"></div>
                <div class="container">
                    <div class="home__inner">
                        <h1 class="home__title">Ремонт та виготовлення<br> <span>пластикових вікон</span></h1>
                        <p class="home__subtitle">Вікна зберігають тепло і комфорт у вашому будинку, а ми зберігаємо вікна!</p>
                        <a href="#popup-cons" class="home__btn btn popup-link"><span>Залишити запит</span></a>
                    </div>
                </div>
            </section>

            <section class="service" >
                <div class="container">
                    <h2 class="service__title title" id="service">Послуги</h2>
                    <div class="service__inner">
                        <div class="service__row">
                            <div class="service__item">
                                <div class="service__image">
                                    <img src="img/service/ser1.jpg" alt="img" class="service__img img" loading="lazy">
                                </div>
                                <h3 class="service__item--title">Заміна ущільнювачів</h3>
                                <p class="service__item--text">Зіпсувалася гума ущільнювача (гумовий ущільнювач) на вікнах, що тягне за собою протяг і продування особливо помітні в холодну пору року.</p>
                            </div>
                            <div class="service__item">
                                <div class="service__image">
                                    <img src="img/service/ser2.jpg" alt="img" class="service__img img" loading="lazy">
                                </div>
                                <h3 class="service__item--title">Заміна cклопакетів</h3>
                                <p class="service__item--text">Склопакети - один із найважливіших елементів сучасних вікон. <br>
                                    Компанія надає послуги з виготовлення склопакетів будь-якої конфігурації</p>
                            </div>
                            <div class="service__item">
                                <div class="service__image">
                                    <img src="img/service/ser3.jpg" alt="img" class="service__img img" loading="lazy">
                                </div>
                                <h3 class="service__item--title">Заміна фурнітури</h3>
                                <p class="service__item--text">Комфортна і затишна обстановка всередині приміщення залежить від наявності різних положень для стулки. Якщо Ви побоюєтеся злому, то фурнітура Вас захистить від цієї небезпеки.</p>
                            </div>
                            <div class="service__item">
                                <div class="service__image">
                                    <img src="img/service/ser4.jpg" alt="img" class="service__img img" loading="lazy">
                                </div>
                                <h3 class="service__item--title">Регулювання механізмів</h3>
                                <p class="service__item--text">Погано закривається металопластикове вікно або не закривається зовсім, вікно затирає об раму, стулка не забезпечує притиск, це ознаки того, що необхідне регулювання вікна!</p>
                            </div>
                            <div class="service__item">
                                <div class="service__image">
                                    <img src="img/service/ser5.jpg" alt="img" class="service__img img" loading="lazy">
                                </div>
                                <h3 class="service__item--title">Встановлення сіток</h3>
                                <p class="service__item--text">Москітна сітка — найбільш оптимальний спосіб боротьби із шкідливими комахами.</p>
                            </div>
                            <div class="service__item">
                                <div class="service__image">
                                    <img src="img/service/ser6.jpg" alt="img" class="service__img img" loading="lazy">
                                </div>
                                <h3 class="service__item--title">Жалюзі</h3>
                                <p class="service__item--text">Давно та успішно в ролі сонцезахисних систем для вікон та дверей використовуються жалюзі (горизонтальні, вертикальні), рулонні штори або штори-плісе.</p>
                            </div>
                            <div class="service__item">
                                <div class="service__image">
                                    <img src="img/service/ser7.jpg" alt="img" class="service__img img" loading="lazy">
                                </div>
                                <h3 class="service__item--title">Встановлення замків</h3>
                                <p class="service__item--text">За дітьми завжди потрібне око та око, і вікно — місце особливої уваги батьків. Щоб не сталося лиха, встановіть дитячі замки на пластикові вікна.</p>
                            </div>
                            <div class="service__item">
                                <div class="service__image">
                                    <img src="img/service/ser8.jpg" alt="img" class="service__img img" loading="lazy">
                                </div>
                                <h3 class="service__item--title">Регулювання механізмів</h3>
                                <p class="service__item--text">Щоб зменшити тепловтрати і захистити будівлю від протікання, застосовують герметизацію стиків.</p>
                            </div>
                        </div>
                        <div class="service__button">
                            <a href="#popup-cons" class="service__btn btn popup-link"><span>Залишити запит</span></a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="selection">
                <div class="container">
                    <h2 class="selection__title title">Наші переваги</h2>
                    <div class="selection__inner">
                        <div class="selection__item">
                            <span>1</span>
                            <div class="selection__image">
                                <img src="img/icon/clerk.png" alt="img" class="selection__img img">
                            </div>
                            <h3 class="selection__item--title">Досвіт роботи</h3>
                            <p class="selection__text text">Досвідчені майстри з великим стажем роботи та розумінням своєї справи</p>
                        </div>
                        <div class="selection__item">
                            <span>2</span>
                            <div class="selection__image">
                                <img src="img/icon/shield.png" alt="img" class="selection__img img">
                            </div>
                            <h3 class="selection__item--title">Гарантія</h3>
                            <p class="selection__text text">Даємо гарантію на проведену роботу та встановлену фурнітуру</p>
                        </div>
                        <div class="selection__item">
                            <span>3</span>
                            <div class="selection__image">
                                <img src="img/icon/window.png" alt="img" class="selection__img img">
                            </div>
                            <h3 class="selection__item--title">Комплектуючі</h3>
                            <p class="selection__text text">На нашому складі завжди є більшість комплектуючих.</p>
                        </div>
                        <div class="selection__item">
                            <span>4</span>
                            <div class="selection__image">
                                <img src="img/icon/men.png" alt="img" class="selection__img img">
                            </div>
                            <h3 class="selection__item--title">Індивідуальний підхід</h3>
                            <p class="selection__text text">До кожного клієнта у нас індивідуальний підхід</p>
                        </div>
                    </div>
                    <div class="selection__button">
                        <a href="#popup-cons" class="selection__btn btn popup-link"><span>Залишити запит</span></a>
                    </div>
                </div>
            </section>

            <section class="about" id="about">
                <div class="container">
                    <div class="about__inner">
                        <div class="about__item">
                            <h2 class="about__title title">Про <br> нашу <br> компанію</h2>
                            <p class="about__text text">Наша команда складається з висококваліфікованих фахівців, які мають багаторічний досвід роботи. Ми володіємо сучасним інструментом, що дозволяє нам ефективно та швидко виконувати роботи будь-якої складності по ремонту та виготовленню пластикових вікон.</p>
                        </div>
                        <div class="about__image">
                            <img src="img/about/a1.jpg" alt="img" class="about__img img">
                        </div>
                    </div>
                </div>
            </section>

            <section class="stages">
                <div class="container">
                    <h2 class="stages__title title">3 кроки - і все готове</h2>
                    <div class="stages__inner">
                        <div class="stages__item">
                            <div class="stages__image">
                                <img src="img/icon/st1.png" alt="img" class="stages__img img">
                            </div>
                            <p class="stages__item--text text">Залишаєте заявку за телефоном або на сайті</p>
                        </div>
                        <div class="stages__item">
                            <div class="stages__image">
                                <img src="img/icon/st2.png" alt="img" class="stages__img img">
                            </div>
                            <p class="stages__item--text text">Консультація та попередній прорахунок вартості</p>
                        </div>
                        <div class="stages__item">
                            <div class="stages__image">
                                <img src="img/icon/st3.png" alt="img" class="stages__img img">
                            </div>
                            <p class="stages__item--text text">У призначений час майстер усуває несправність</p>
                        </div>
                    </div>
                    <div class="stages__button">
                        <a href="#popup-cons" class="stages__btn btn popup-link"><span>Залишити запит</span></a>
                    </div>
                </div>
            </section>

            <section class="repair" id="repair">
                <div class="repair__bg">
                    <div class="container">
                        <div class="repair__inner">
                            <div class="repair__block">
                                <h2 class="repair__title title">У яких випадках можемо вам допомогти:</h2>
                                <ul class="repair__list">
                                    <li class="repair__item">Ручка туго повертається чи заклинила;</li>
                                    <li class="repair__item">Стулка вікна чіпляється за раму при закриванні;</li>
                                    <li class="repair__item">Ручка повертається не до кінця;</li>
                                    <li class="repair__item">Утворюється льоду в холодну пору року;</li>
                                    <li class="repair__item">Заклинила стулка, балконні двері;</li>
                                    <li class="repair__item">Зламане або розбите вікно;</li>
                                    <li class="repair__item">Дме з вікна.</li>
                                </ul>
                                <p class="repair__text"></p>
                            </div>
                            <div class="repair__block">
                                <h2 class="repair__title repair__title--color title">Як зберегти тепло ефективніше</h2>
                                <ul class="repair__list">
                                    <li class="repair__item--color"><span>1.</span> Заміна старих ущільнювачів</li>
                                    <li class="repair__item--color"><span>2.</span> Заміна пошкоджених склопакетів</li>
                                    <li class="repair__item--color"><span>3.</span> Регулювання механізмів</li>
                                    <li class="repair__item--color"><span>4.</span> Герметизація всіх швів вікна</li>
                                    <li class="repair__item--color"><span>5.</span> Заміна фурнітури</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="request">
                <div class="container request__container">
                    <div class="request__inner">
                        <div class="request__forma">
                            <div class="request__form">
                                <h2 class="request__title title">БЕЗКОШТОВНА <br> консультація</h2>
                                
                                <form action="send-mail.php" class="form-cons" id="form" method="post">

                                     <div class="loading-icon">
                                        <img src="img/icon/loading.gif" alt="Loading">
                                    </div>

                                    <input type="hidden" name="s1" value="<?php echo $price_new ?>"/>
                                    <input type="hidden" name="s2" value="<?= $product_id ?>"/>
                                    <input type="hidden" name="s3" value="<?= $product_name?>"/>

                                    <input type="hidden" name="formData" value="Запит з сайту">
                                    
                                    <div class="request__input-name request__input">
                                        <input class="request-input"  type="text" name="name" placeholder="Ім’я" required>
                                    </div>
                                    <div class="request__input-tel request__input">
                                        <input class="request-input"  type="tel" name="phone" placeholder="Телефон" required>
                                    </div>
                                    <div class="request__input-mail request__input">
                                        <textarea class="request-input request-input__text" name="message" placeholder="Повідомлення"></textarea>
                                    </div>
                                    <button class="request__btn btn" type="submit"><span>Відправити</span></button>
                                </form>
                            </div>
                        </div>
                        <div class="request__image">
                            <img src="img/request/request-bg.jpg" alt="img" class="request__img img">
                        </div>
                    </div>
                </div>
            </section>

            <section class="question" id="faq">
                <div class="container">
                    <h2 class="question__title title">Поширені запитання</h2>
                    <div class="question__container">
                        <div class="question__block one">
                            <div class="question__block--item">
                                <h3 class="question__block--title">Які послуги з ремонту пластикових вікон надає компанія?</h3>
                                <div class="question__block--text">Ми надаємо широкий спектр послуг із ремонту пластикових вікон. Це включає заміну ущільнювачів, регулювання фурнітури, заміну скла, ремонт пошкоджених профілів, заміну віконних ручок, а також інші роботи, пов'язані з відновленням функціональності та естетичного стану вікон.</div>
                            </div>
                            <div class="question__block--item">
                                <h3 class="question__block--title">Як дізнатися, чи потребує моє вікно ремонту або заміни?</h3>
                                <div class="question__block--text">Якщо ви зіткнулися з проблемами, такими як скрип або тріск при відкритті/закритті вікна, утруднення при використанні віконної ручки, витік повітря або води, утруднення у відкриванні або закриванні вікна, пошкодження профілю або скла, то ваші вікна, швидше за все, потребують ремонту чи заміні. Ми рекомендуємо зв'язатися з нами для проведення діагностики та професійної оцінки стану вікон.</div>
                            </div>
                            <div class="question__block--item">
                                <h3 class="question__block--title">Скільки часу триває ремонт пластикового вікна?</h3>
                                <div class="question__block--text">Час, необхідний для ремонту пластикового вікна, залежить від складності проблеми та обсягу робіт. Невеликі ремонтні роботи, такі як заміна ущільнювача або ручки, зазвичай займають від декількох годин до повного робочого дня. Більш складні ремонти, такі як заміна скла або ремонт профілю можуть займати більше часу, особливо якщо потрібно замовити специфічні деталі. Ми намагаємося мінімізувати час ремонту, щоб ви могли якнайшвидше насолоджуватися справними вікнами.</div>
                            </div>
                            <div class="question__block--item">
                                <h3 class="question__block--title">Які гарантії Ви надаєте на виконані роботи?</h3>
                                <div class="question__block--text">Ми гарантуємо якість наших робіт та матеріалів. Залежно від типу ремонту або заміни, ми надаємо гарантію, яка може змінюватись від кількох місяців до кількох років.</div>
                            </div>
                            <div class="question__block--item">
                                <h3 class="question__block--title">Як я можу замовити послуги вашої компанії для ремонту пластикових вікон?</h3>
                                <div class="question__block--text">Ви можете зв'язатися з нами за вказаним на сайті телефоном або залишити заявку на нашому сайті, заповнивши відповідну форму. Наш спеціаліст зв'яжеться з вами для уточнення деталей та призначення зручного часу для огляду та ремонту вікон.</div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </section>

            <section class="contact" id="contact">
                <div class="container">
                    
                    <div class="contact__inner">
                        <div class="contact__item">
                            <h2 class="contact__title title">Контакти</h2>
                            <div class="contact__block">
                                <div class="contact__image">
                                    <img src="img/icon/phone-form.svg" alt="img" class="contact__img img">
                                </div>
                                <div class="contact__body-link">
                                    <a href="tel:+380950217929" class="contact__link">+38 (095) 021-79-29</a>
                                    <a href="tel:+380970217929" class="contact__link">+38 (097) 021-79-29</a>
                                </div>
                            </div>
                            <div class="contact__block">
                                <div class="contact__image">
                                    <img src="img/icon/mail.svg" alt="img" class="contact__img img">
                                </div>
                                <a href="mailto:viknorestavracia@gmail.com" class="contact__link">viknorestavracia@gmail.com</a>
                            </div>
                            <div class="contact__block">
                                <div class="contact__image">
                                    <img src="img/icon/location.svg" alt="img" class="contact__img img">
                                </div>
                                <span class="contact__location">м.Кіїв, Декабристів, 12/37</span>
                            </div>
                        </div>
                        <div class="contact__item contact__item--map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2543.0170791144947!2d30.652050599999995!3d50.4035193!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4c45615998a79%3A0x7b9f4a5e8bc4c8e4!2z0LLRg9C70LjRhtGPINCU0LXQutCw0LHRgNC40YHRgtGW0LIsIDEyLzM3LCDQmtC40ZfQsiwgMDIwMDA!5e0!3m2!1suk!2sua!4v1685022077023!5m2!1suk!2sua" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    
        <footer class="footer">
            <div class="container">
                <div class="footer__inner">
                    <div class="footer__block">
                        <a href="/" class="footer__logo">
                            <img src="img/logo.png" alt="img" class="footer__logo-img img">
                        </a>
                    </div>
                    <div class="footer__block">
                        <div class="footer__button">
                            <div class="footer__top-info">
                                <span>Зателефонуйте нам</span>
                                <div class="footer__body-link">
                                    <a href="tel:+380950217929" class="footer__phone">+38 (095) 021-79-29</a>
                                    <a href="tel:+380970217929" class="footer__phone">+38 (097) 021-79-29</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer__block footer__block--back">
                        <h3 class="footer__title">Соц. мережі</h3>
                        <ul class="footer__list footer__list--social">
                            <li class="footer__item footer__item--c">
                                <a href="#" class="footer__link">
                                    <img src="img/icon/fb.svg" alt="img" class="footer__img img">
                                </a>
                            </li>
                            <li class="footer__item footer__item--c">
                                <a href="#" class="footer__link">
                                    <img src="img/icon/in.svg" alt="img" class="footer__img img">
                                </a>
                            </li>
                            <li class="footer__item footer__item--c">
                                <a href="#" class="footer__link">
                                    <img src="img/icon/tg.svg" alt="img" class="footer__img img">
                                </a>
                            </li>
                            <li class="footer__item footer__item--c">
                                <a href="#" class="footer__link">
                                    <img src="img/icon/tt.svg" alt="img" class="footer__img img">
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>

            
        </footer>

        <div class="footer__cooper text">Copyright ©
            <a href="https://dimafomaa.online" class="footer__link-bio" target="_blank">dimafomaa</a>, 2023. Всі права захищенні.
        </div>


    
        <div class="container">
            <a href="#" class="scroll-up" id="scroll-up">
                <img src="img/icon/arrow.svg" alt="img" class="scroll__img img">
            </a>
        </div>
    </div>


    <div id="popup-cons" class="popup">
        <div class="popup__body">
            <div class="popup__content">
                <a href="#" class="popup__close close-popup">&#10006</a>
                <div class="popup__form">
                    <h2>Залишити запит</h2>

                    <form action="send-mail.php" class="form-cons" id="form-popup" method="post">

                        <div class="loading-icon loading-icon__popup">
                            <img src="img/icon/loading.gif" alt="Loading">
                        </div>

                        <input type="hidden" name="s1" value="<?php echo $price_new ?>"/>
                        <input type="hidden" name="s2" value="<?= $product_id ?>"/>
                        <input type="hidden" name="s3" value="<?= $product_name?>"/>


                        <input type="hidden" name="formData" value="Запит з сайту">
                        
                        <div class="popup__input-name popup__input">
                            <input class="popup-input"  type="text" name="name" placeholder="Ім’я" required>
                        </div>
                        <div class="popup__input-tel popup__input">
                            <input class="popup-input"  type="tel" name="phone" placeholder="Телефон" required>
                        </div>
                        <div class="popup__input-mail popup__input">
                            <textarea class="popup-input popup-input__text" name="message" placeholder="Повідомлення"></textarea>
                        </div>
                        <button class="popup__btn btn" type="submit"><span>Відправити</span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-thank" class="popup">
        <div class="popup__body">
            <div class="popup__content">
                <a href="#" class="popup__close close-popup">&#10006</a>
                <div class="popup__form">
                    <h2>Дякуємо</h2>
                    <p>Ваш запит надіслано</p>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/popup.js"></script>
    <script src="js/animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>
    <script src="js/forma.js"></script> 
    <!--<script src="js/mask_input.js"></script>-->
    <!--<script src="js/mask.js"></script>-->
    
</body>
</html>