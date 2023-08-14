<?require("header.php")?> 
<h1 class="main_title">
    Развитие
</h1>
<form class="razvitie">
    <div class="razvitie_left">
        <input type="text" id="last_name" placeholder="Фамилия*">
        <input type="text" id="name" placeholder="Имя*">
        <input type="text" id="otchestvo" placeholder="Отчество*">
        <select>
            <option>Финансовый отдел</option>
            <option>Склад</option>
        </select>
        <input type="text" id="course_name" placeholder="Наименование обучения**">
        <input type="text" id="date_time" placeholder="Комфортные даты обучения*">
        <textarea id="comment" placeholder="Комментарий"></textarea>
        <button class="form_submit_button">
                Записаться на обучение
        </button>
    </div>
    <div class="razvitie_right">
            <img src="assets/img/svg/illustrartion.svg" alt="" class="razvitie_right_img">
    </div>

</form>
<!-- 
ЗАБРАТЬ ДЛЯ КАЛЕНДАРЯ НОВОСТЕЙ
<div class="calendar_cstm_wrapper">
    <input type="text" id="calendar_custom" readonly class="calendar_cstm" placeholder="Поиск по дате">
</div>
-->



<?require("footer.php")?>

