<?php
require_once "./config.php";
require_once $inc_path."functions.php";

$tmp_type = "php";
$tmp_file = "0.tmp";
?>
<?php
session_start();
// проверка агентского ID
get_agent_id();

// заголовок страницы
$head["title"] = "О магазине";

// функция вывода контента
function show_content() {
?>
<div id="main_data">
<h3 class="about">О магазине</h3>
<p>Наш магазин создан на основе интернет-сервиса <a href="http://www.digiseller.ru/">DIGISELLER.ru</a>. Это означает что вы, как покупатель, сможете воспользоваться выбранным товаром сразу после оплаты. Вам не придётся ждать ни секунды! Если это программа или электронная книга, то вы получите ссылку для скачивания, если это PIN-код карточки, то вы получите набор цифр или отсканированное изображение этого кода и т.п. При оплате нет необходимости регистрироваться! Единственное, что от вас потребуется - выбрать наиболее удобный для вас <a href="payment.php">способ оплаты</a> и осуществить покупку. Все приобретенные вами товары хранятся в разделе «<a href="http://www.oplata.info/">Мои покупки</a>» и вы в любой момент сможете их забрать.</p>
<p>Если у вас возникли вопросы, то вы можете оперативно связаться со мной, используя мои <a href="contacts.php">контактные данные</a>.</p>
</div>
<?php }
// функция шаблонизации
tmp_open("php", $tmp_dir, $tmp_file, $head);
?>