<?php
function navMenu(){
    $navMenu = [
        ['link'=>'Главная', 'href'=>'home.php'],
        ['link'=>'О нас', 'href'=>'about.php'],
        ['link'=>'Контакты', 'href'=>'contact.php'],
        ['link'=>'Новости', 'href'=>'news.php'],
        ['link'=>'FAQ', 'href'=>'faq.php'],
    ];
    
    foreach ($navMenu as $item) {
        echo "<ul>";
            echo "<li>";
                echo "<a href='{$item['href']}'> {$item['link']} </a>"; 
            echo "</li>";
        echo "</ul>";
    }
}

//<ul><li>><a href='$value'>$key</a>Item 1</li><li></li>
//$links = array("Home"=>"home.php", "About"=>"about.php"....  
//Menu($arr){​​​​​