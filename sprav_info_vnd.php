<?require("header.php")?>

<p class = "path_to_page">Главная / Справочная информация</p>
<h1 class = "main_title">Справочник ВНД</h1>
<div class = "guide_info_content">
    <div class = "guide_info_content_header">
        <div class = "guide_info_staff_header_input">
            <input type = "text" placeholder="Поиск по справочнику">
        </div>
        <div onclick="$(this).hasClass('active')?$(this).removeClass('active'):$(this).addClass('active');" class = "guide_info_staff_header_select">
            <select name = "guide_categories" id = "guide_info_staff_header_select">
                <option id = "guide_categories_placeholder" value="placeholder" selected>Выбрать категорию</option>
                <option>Some Text</option>
                <option>Some Text</option>
                <option>Some Text</option>
            </select> 
        </div>
    </div>
    <div class = "guide_info_content_table">
        <table>
            <tr class = "guide_info_content_table_heading">
                <th>№</th>
                <th>Наименование</th>
                <th>Дата загрузки</th>
            </tr>
            <tr class = "guide_info_content_table_item">
                <td>1</td>
                <td><a href = "/bashelectrosbyt_project/sprav_info_vnd_item.php">Приказ № ЭСКБ/222 от 20.06.2023г. «О введении в действие Положения о наставничестве и содействию подбора персонала ООО «ЭСКБ» П-024-3»</a></td>
                <td>16.06.2023</td>
            </tr>
            <tr class = "guide_info_content_table_item">
                <td>2</td>
                <td><a href = "/bashelectrosbyt_project/sprav_info_vnd_item.php">Приказ № ЭСКБ/222 от 20.06.2023г. «О введении в действие Положения о наставничестве и содействию подбора персонала ООО «ЭСКБ» П-024-3»</a></td>
                <td>16.06.2023</td>
            </tr>
            <tr class = "guide_info_content_table_item">
                <td>3</td>
                <td><a href = "/bashelectrosbyt_project/sprav_info_vnd_item.php">Приказ № ЭСКБ/222 от 20.06.2023г. «О введении в действие Положения о наставничестве и содействию подбора персонала ООО «ЭСКБ» П-024-3»</a></td>
                <td>16.06.2023</td>
            </tr>
            <tr class = "guide_info_content_table_item">
                <td>4</td>
                <td><a href = "/bashelectrosbyt_project/sprav_info_vnd_item.php">Приказ № ЭСКБ/222 от 20.06.2023г. «О введении в действие Положения о наставничестве и содействию подбора персонала ООО «ЭСКБ» П-024-3»</a></td>
                <td>16.06.2023</td>
            </tr>
            <tr class = "guide_info_content_table_item">
                <td>5</td>
                <td><a href = "/bashelectrosbyt_project/sprav_info_vnd_item.php">Приказ № ЭСКБ/222 от 20.06.2023г. «О введении в действие Положения о наставничестве и содействию подбора персонала ООО «ЭСКБ» П-024-3»</a></td>
                <td>16.06.2023</td>
            </tr>
        </table>
    </div>
</div>

<?require("footer.php")?>