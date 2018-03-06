<script type="text/javascript" src="/my/js/owl_carousel.js"></script>
<script type="text/javascript">
    (function() {
        $(function() {
            $('.news-block').each(function() {
                $(this).children('.item').matchHeight();
            });
            $('.nmiddle').each(function() {
                $(this).children('.item').matchHeight();
            });
            $('.news-list').each(function() {
                $(this).children('.item-news').matchHeight();
            });
        });
    })();
</script>
<section class="team">
    <div class="pc-team">
        <div class="hteam rel">
            <video class="hvideo" autoplay="" loop="" muted="" webkit-playsinline="">
                <source src="/my/video/stadium.mp4" type="video/mp4">
            </video>
            <div class="container oncenter">
                <div class="circle">
                    <div class="circle1">
                        <img src="/my/img/team/circle.png" class="res">
                        <div class="circle2 transform">
                            <img src="/my/img/team/circle.png" class="res">
                        </div>
                    </div>
                    <div class="circle-nav oncenter">
                        <div class="bold text-center">
                            <div class="team-nav skew" data-id="1">
                                <div class="not-skew tnav" data-id="1">
                                    <span>Кайрат</span>
                                </div>
                                <div class="kairat-nav not-skew" data-id="1">
                                    <div class="border-btm">
                                        <div class="end-circle"></div>
                                    </div>
                                    <div class="rgba-nav">
                                        <div class="align-middle">
                                            <ul class="text-left">
                                                <li class="kairat-fnav" data-id="coaches">тренерский штаб</li>
                                                <li class="kairat-fnav" data-id="line-up">состав</li>
                                                <li class="kairat-fnav" data-id="admin">Администрация</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-nav skew" data-id="2">
                                <div class="not-skew tnav" data-id="2">
                                    <span>Кайрат А</span>
                                </div>
                                <div class="kairat-nav not-skew" data-id="2">
                                    <div class="border-btm">
                                        <div class="end-circle"></div>
                                    </div>
                                    <div class="rgba-nav">
                                        <div class="align-middle text-left">
                                            <ul class="text-left">
                                                <li>тренерский штаб</li>
                                                <li>состав</li>
                                                <li>Администрация</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-nav skew" data-id="3">
                                <div class="not-skew tnav" data-id="3">
                                    <span>Кайрат М</span>
                                </div>
                                <div class="kairat-nav not-skew" data-id="3">
                                    <div class="border-btm">
                                        <div class="end-circle"></div>
                                    </div>
                                    <div class="rgba-nav">
                                        <div class="align-middle text-left">
                                            <ul class="text-left">
                                                <li>тренерский штаб</li>
                                                <li>состав</li>
                                                <li>Администрация</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Тренерский штаб -->
        <div class="blocks" id="coaches" data-id="1">
            <div id="coaches-content">
                <div class="container">
                    <?
                        $criteria = new CDbCriteria();
                        $criteria->condition = "status_int = '1' AND category_int = '1'";
                        $criteria->order = "weight_text + 0 ASC, created_at DESC, id + 0 DESC";
                        $trainers = Trainers::model()->findAll($criteria);
                    ?>
                    <? foreach ($trainers as $key => $value) {  ?>
                        <? $img = json_decode($value->image, true); ?>
                        <div class="select-coach" data-id="<?=$key+1?>">
                            <div class="title-block fs">
                                ТРЕНЕРСКИЙ ШТАБ
                            </div>
                            <div class="rel text-center">
                                <img src="/upload/Trainers/full/<?=$img[0]?>" class="change-coach">
                                <div class="coach-linfo">
                                    <div class="coach-name fs">
                                        <span><?=$value->{Yii::app()->params['lan']."name_text"}?></span>
                                    </div>
                                    <div class="coach-post fs">
                                        <span><?=$value->{Yii::app()->params['lan']."position_text"}?></span>
                                    </div>
                                    <div class="person-info">
                                        <div class="align-top  pl">
                                            <div class="person-info-left">
                                                <ul>
                                                    <li>Дата рождения: </li>
                                                    <li>Гражданство:</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="align-top">
                                            <div class="person-info-left">
                                                <ul>
                                                    <li><?=$value->{Yii::app()->params['lan']."dr_int"}?></li>
                                                    <li><?=$value->{Yii::app()->params['lan']."gr_text"}?></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pd-border2">
                                            <div class="pd-circle2">
                                                <div class="pd-circle-in2"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="person-details">
                                    <div class="person-details-in">
                                        <div class="pd" data-id="1"><?=$value->{Yii::app()->params['lan']."bio_bigtexteditor"}?></div>
                                        <div class="pd" data-id="2"><?=$value->{Yii::app()->params['lan']."kar_bigtexteditor"}?></div>
                                        <div class="pd-border">
                                            <div class="pd-circle">
                                                <div class="pd-circle-in"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pd-change">
                                        <div class="align-middle">
                                            <button class="pd-change-button" data-id="1">
                                                Биография
                                            </button>
                                        </div>
                                        <div class="align-middle">
                                            <button class="pd-change-button" data-id="2">
                                                Карьера
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <? } ?>
                </div>
                <div class="list-coaches">
                    <div class="list-coaches-in container">
                        <div id="coach-lists" class="owl-carousel">
                            <? foreach ($trainers as $key => $value) {  ?>
                                <div class="coach-item" data-id="<?=$key+1?>">
                                    <div class="cobl"></div>
                                    <div class="text-left">
                                        <ul>
                                            <li class="coach-fio"><?=$value->{Yii::app()->params['lan']."name_text"}?></li>
                                            <li class="coach-dolj"><?=$value->{Yii::app()->params['lan']."position_text"}?></li>
                                        </ul>
                                    </div>
                                </div>
                            <? } ?>
                        </div>
                        <div class="coachNavigation">
                            <a class="btn-prev coach-prev">
                                <img src="/my/img/main/prev.png">
                            </a>
                            <a class="btn-next coach-next">
                                <img src="/my/img/main/next.png">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Состав -->
        <div class="blocks"  id="line-up">
            <div id="line-up-content">
                <video class="player-video" data-id="1" muted="" webkit-playsinline="">
                    <source src="/my/video/7.mp4" type="video/mp4">
                </video>
                <video class="player-video" data-id="2" muted="" webkit-playsinline="">
                    <source src="/my/video/9.mp4" type="video/mp4">
                </video>
                <video class="player-video" data-id="3"  muted="" webkit-playsinline="">
                    <source src="/my/video/10.mp4" type="video/mp4">
                </video>
                <div class="container">
                    <div class="select-player" data-id="1">
                        <div class="title-block fs">
                            СОСТАВ
                        </div>
                        <div class="rel text-center">
                            <div class="with-number">
                                <div class="player-one-number">
                                    7
                                </div>
                                <img src="/my/img/team/players/7.png" class="change-player">
                            </div>
                            <div class="player-linfo">
                                <div class="player-name fs">
                                    <span>Исламбек Куат</span>
                                </div>
                                <div class="player-post fs">
                                    Полузащитник
                                </div>
                                <div class="player-info">
                                    <div class="align-top pl">
                                        <div class="player-info-left">
                                            <ul>
                                                <li>Дата рождения: </li>
                                                <li>Гражданство:</li>
                                                <li>Рост</li>
                                                <li>Вес</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="align-top">
                                        <div class="player-info-left">
                                            <ul>
                                                <li>12.01.1993</li>
                                                <li>Казахстан</li>
                                                <li>179 см</li>
                                                <li>70 кг</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="player-border2">
                                        <div class="player-circle2">
                                            <div class="player-circle-in2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="player-details">
                                <div class="player-details-in">
                                    <div class="player transform" data-id="1">
                                        Воспитанник астанинского футбола. Первый профессиональный контракт подписал с ФК «Окжетпес», с которым завоевал звание лучшего игрока Первой лиги и вышел в Премьер-лигу, после чего перешел в «Актобе».
                                        <div class="br"></div>
                                        С 2012-го по 2014-й год цепкий «опорник» выступал в составе «Астаны», а в середине прошлого сезона подписал с ФК «Кайрат» контракт, сроком на 2,5 года. Отличается цепкой игрой в отборе и уверенными действиями с мячом.
                                    </div>
                                    <div class="player transform" data-id="2">
                                        2Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </div>
                                    <div class="player transform" data-id="3">
                                        3Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </div>
                                    <div class="player-border">
                                        <div class="player-circle">
                                            <div class="player-circle-in"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="player-change">
                                    <div class="align-middle">
                                        <button class="player-change-button player-active" data-id="1">
                                            Биография
                                        </button>
                                    </div>


                                    <div class="align-middle">
                                        <button class="player-change-button" data-id="2">
                                            Карьера
                                        </button>
                                    </div>
                                    <div class="align-middle">
                                        <button class="player-change-button" data-id="3">
                                            Статистика
                                        </button>
                                    </div>
                                </div>
                                <div class="player-inst">
                                    <a href="#">
                                        <div class="align-middle">
                                            INSTAGRAM
                                        </div>
                                        <div class="align-middle">
                                            <i class="fa fa-instagram" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="select-player" data-id="2">
                        <div class="title-block fs">
                            СОСТАВ
                        </div>
                        <div class="rel text-center">
                            <div class="with-number">
                                <div class="player-one-number">
                                    9
                                </div>
                                <img src="/my/img/team/players/9.png" class="change-player">
                            </div>
                            <div class="player-linfo">
                                <div class="player-name fs">
                                    <span>Бауыржан Исламхан</span>
                                </div>
                                <div class="player-post fs">
                                    Полузащитник
                                </div>
                                <div class="player-info">
                                    <div class="align-top pl">
                                        <div class="player-info-left">
                                            <ul>
                                                <li>Дата рождения: </li>
                                                <li>Гражданство:</li>
                                                <li>Рост</li>
                                                <li>Вес</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="align-top">
                                        <div class="player-info-left">
                                            <ul>
                                                <li>23.02.1993</li>
                                                <li>Казахстан</li>
                                                <li>174 см</li>
                                                <li>63 кг</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="player-border2">
                                        <div class="player-circle2">
                                            <div class="player-circle-in2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="player-details">
                                <div class="player-details-in">
                                    <div class="player transform" data-id="1">
                                        Профессиональную карьеру Батори, как его называют в футбольных кругах, начинал в «Таразе», в составе которого, несмотря на юный возраст, даже выходил с капитанской повязкой. В сезоне-2013 Бауыржан перешел в клуб российской Премьер-лиги «Кубань», провел за молодежный состав краснодарцев несколько игр, но в том же сезоне был отдан в аренду в «Астану».
                                        <div class="br"></div>
                                        В «Кайрат» Исламхан перешел в 2014 году в статусе капитана молодежной сборной Казахстана, подписав контракт, сроком на три года.
                                        По ходу сезона, самый яркий и перспективный футболист Казахстана закрепился в основном составе, отлично себя проявил и заслуженно завоевал звание лучшего игрока года по мнению всех ведущих спортивных изданий и футбольных организаций страны.
                                    </div>
                                    <div class="player transform" data-id="2">
                                        2Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </div>
                                    <div class="player transform" data-id="3">
                                        3Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </div>
                                    <div class="player-border">
                                        <div class="player-circle">
                                            <div class="player-circle-in"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="player-change">
                                    <div class="align-middle">
                                        <button class="player-change-button player-active" data-id="1">
                                            Биография
                                        </button>
                                    </div>


                                    <div class="align-middle">
                                        <button class="player-change-button" data-id="2">
                                            Карьера
                                        </button>
                                    </div>
                                    <div class="align-middle">
                                        <button class="player-change-button" data-id="3">
                                            Статистика
                                        </button>
                                    </div>
                                </div>
                                <div class="player-inst">
                                    <a href="#">
                                        <div class="align-middle">
                                            INSTAGRAM
                                        </div>
                                        <div class="align-middle">
                                            <i class="fa fa-instagram" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="select-player" data-id="3">
                        <div class="title-block fs">
                            СОСТАВ
                        </div>
                        <div class="rel text-center">
                            <div class="with-number">
                                <div class="player-two-number">
                                    10
                                </div>
                                <img src="/my/img/team/players/10.png" class="change-player">
                            </div>
                            <div class="player-linfo">
                                <div class="player-name fs">
                                    <span>Исаэл Барбоза</span>
                                </div>
                                <div class="player-post fs">
                                    Полузащитник
                                </div>
                                <div class="player-info">
                                    <div class="align-top pl">
                                        <div class="player-info-left">
                                            <ul>
                                                <li>Дата рождения: </li>
                                                <li>Гражданство:</li>
                                                <li>Рост</li>
                                                <li>Вес</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="align-top">
                                        <div class="player-info-left">
                                            <ul>
                                                <li>13.05.1988</li>
                                                <li>Испания</li>
                                                <li>171 см</li>
                                                <li>62 кг</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="player-border2">
                                        <div class="player-circle2">
                                            <div class="player-circle-in2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="player-details">
                                <div class="player-details-in">
                                    <div class="player transform" data-id="1">
                                        Исаэл — воспитанник футбольного клуба «Гремио», в нём же он начал профессиональную карьеру в 2009-м году. Летом 2012-го он перешёл в португальский «Насьонал», в котором отыграл полгода. В 2013-м году бразилец подписал контракт с ФК «Краснодар». С июня 2014-го года – игрок ФК «Кайрат».
                                        <div class="br"></div>
                                    </div>
                                    <div class="player transform" data-id="2">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </div>
                                    <div class="player transform" data-id="3">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </div>
                                    <div class="player-border">
                                        <div class="player-circle">
                                            <div class="player-circle-in"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="player-change">
                                    <div class="align-middle">
                                        <button class="player-change-button player-active" data-id="1">
                                            Биография
                                        </button>
                                    </div>


                                    <div class="align-middle">
                                        <button class="player-change-button" data-id="2">
                                            Карьера
                                        </button>
                                    </div>
                                    <div class="align-middle">
                                        <button class="player-change-button" data-id="3">
                                            Статистика
                                        </button>
                                    </div>
                                </div>
                                <div class="player-inst">
                                    <a href="#">
                                        <div class="align-middle">
                                            INSTAGRAM
                                        </div>
                                        <div class="align-middle">
                                            <i class="fa fa-instagram" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="list-players">
                    <div class="list-players-in container">
                        <div id="player-lists" class="owl-carousel">
                            <div class="player-item" data-id="1">
                                <div class="text-left">
                                    <div class="align-middle fs player-number">
                                        7
                                    </div>
                                    <div class="align-middle">
                                        <ul>
                                            <li>Исламбек</li>
                                            <li>Куат</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="player-item" data-id="2">
                                <div class="text-left">
                                    <div class="align-middle fs player-number">
                                        9
                                    </div>
                                    <div class="align-middle">
                                        <ul>
                                            <li>Бауыржан</li>
                                            <li>Исламхан</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="player-item active-player" data-id="3">
                                <div class="text-left">
                                    <div class="align-middle fs player-number">
                                        10
                                    </div>
                                    <div class="align-middle">
                                        <ul>
                                            <li>Исаэл</li>
                                            <li>Барбоза</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="coachNavigation">
                            <a class="btn-prev player-prev">
                                <img src="/my/img/main/prev.png">
                            </a>
                            <a class="btn-next player-next">
                                <img src="/my/img/main/next.png">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Администрация -->
        <div class="blocks"  id="admin">
            <div id="admin-content">
                <div class="container">
                    <div class="select-admin" data-id="1">
                        <div class="title-block fs">
                            Администрация
                        </div>
                        <div class="rel text-center">
                            <img src="/my/img/team/admin/felipe.png" class="change-admin">
                            <div class="admin-linfo">
                                <div class="admin-name fs">
                                    <span>Фелипе Мейра</span>
                                </div>
                                <div class="admin-post fs">
                                    <span>Физиотерапевт</span>
                                </div>
                                <div class="admin-info">
                                    <div class="align-top  pl">
                                        <div class="admin-info-left">
                                            <ul>
                                                <li>Дата рождения: </li>
                                                <li>Гражданство:</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="align-top">
                                        <div class="admin-info-left">
                                            <ul>
                                                <li>14.05.1988</li>
                                                <li>Бразилия</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="admin-border2">
                                        <div class="admin-circle2">
                                            <div class="admin-circle-in2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="admin-details">
                                <div class="admin-details-in">
                                    <div class="admin">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </div>
                                    <div class="admin-border">
                                        <div class="admin-circle">
                                            <div class="admin-circle-in"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="select-admin" data-id="2">
                        <div class="title-block fs">
                            Администрация
                        </div>
                        <div class="rel text-center">
                            <img src="/my/img/team/admin/nikolaev.png" class="change-admin">
                            <div class="admin-linfo">
                                <div class="admin-name fs">
                                    <span>Дмитрий Николаев</span>
                                </div>
                                <div class="admin-post fs">
                                    <span>Массажист</span>
                                </div>
                                <div class="admin-info">
                                    <div class="align-top  pl">
                                        <div class="admin-info-left">
                                            <ul>
                                                <li>Дата рождения: </li>
                                                <li>Гражданство:</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="align-top">
                                        <div class="admin-info-left">
                                            <ul>
                                                <li>04.09.1975</li>
                                                <li>Казахстан</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="admin-border2">
                                        <div class="admin-circle2">
                                            <div class="admin-circle-in2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="admin-details">
                                <div class="admin-details-in">
                                    <div class="admin">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </div>
                                    <div class="admin-border">
                                        <div class="admin-circle">
                                            <div class="admin-circle-in"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="select-admin" data-id="3">
                        <div class="title-block fs">
                            Администрация
                        </div>
                        <div class="rel text-center">
                            <img src="/my/img/team/admin/massajist.png" class="change-admin">
                            <div class="admin-linfo">
                                <div class="admin-name fs">
                                    <span>Георгий Михайлов</span>
                                </div>
                                <div class="admin-post fs">
                                    <span>Массажист</span>
                                </div>
                                <div class="admin-info">
                                    <div class="align-top  pl">
                                        <div class="admin-info-left">
                                            <ul>
                                                <li>Дата рождения: </li>
                                                <li>Гражданство:</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="align-top">
                                        <div class="admin-info-left">
                                            <ul>
                                                <li>23.07.1979</li>
                                                <li>Казахстан</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="admin-border2">
                                        <div class="admin-circle2">
                                            <div class="admin-circle-in2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="admin-details">
                                <div class="admin-details-in">
                                    <div class="admin">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </div>
                                    <div class="admin-border">
                                        <div class="admin-circle">
                                            <div class="admin-circle-in"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="list-admins">
                    <div class="list-admins-in container">
                        <div id="admin-lists" class="owl-carousel">
                            <div class="admin-item" data-id="1">
                                <div class="text-left">
                                    <ul>
                                        <li class="admin-fio">Фелипе Мейра</li>
                                        <li class="admin-dolj">Физиотерапевт</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="admin-item" data-id="2">
                                <div class="text-left">
                                    <ul>
                                        <li class="admin-fio">Дмитрий Николаев</li>
                                        <li class="admin-dolj">Массажист</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="admin-item active-admin" data-id="3">
                                <div class="text-left">
                                    <ul>
                                        <li class="admin-fio">Георгий Михайлов</li>
                                        <li class="admin-dolj">Массажист</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="admin-item" data-id="4">
                                <div class="text-left">
                                    <ul>
                                        <li class="admin-fio">Ермурат Базилов</li>
                                        <li class="admin-dolj">Врач</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="admin-item" data-id="5">
                                <div class="text-left">
                                    <ul>
                                        <li class="admin-fio">Рамиль Юсупов</li>
                                        <li class="admin-dolj">Администратор</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="admin-item" data-id="6">
                                <div class="text-left">
                                    <ul>
                                        <li class="admin-fio">Андрей Карпович</li>
                                        <li class="admin-dolj">Администратор</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="admin-item" data-id="7">
                                <div class="text-left">
                                    <ul>
                                        <li class="admin-fio">Кьетино   Николас</li>
                                        <li class="admin-dolj">Тренер по физподготовке</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="adminNavigation">
                            <a class="btn-prev admin-prev">
                                <img src="/my/img/prev-w.png">
                            </a>
                            <a class="btn-next admin-next">
                                <img src="/my/img/next-w.png">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-team">
        <div class="btn-teams">
            <ul class="rel">
                <li class="btn-team">
                    <div class="team-mob-nav skew" data-id="1">
                        <div class="not-skew">
                            Кайрат
                        </div>
                    </div>
                    <div class="btn-teams-nav transformx" data-id="1">
                        <div class="align-middle">
                            <div class="hr-team"></div>
                            <div class="rgba-mob-nav">
                                <ul class="text-left">
                                    <li class="mkairat-fnav" data-id="mob-coaches">тренерский штаб</li>
                                    <li class="mkairat-fnav" data-id="mob-line-up">состав</li>
                                    <li class="mkairat-fnav" data-id="mob-admin">Администрация</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="btn-team">
                    <div class="team-mob-nav skew" data-id="2">
                        <div class="not-skew">
                            Кайрат А
                        </div>
                    </div>
                    <div class="btn-teams-nav transformx" data-id="2">
                        <div class="align-middle">
                            <div class="hr-team"></div>
                            <div class="rgba-mob-nav">
                                <ul class="text-left">
                                    <li class="mkairata-fnav" data-id="mob-coaches">тренерский штаб</li>
                                    <li class="mkairata-fnav" data-id="mob-line-up">состав</li>
                                    <li class="mkairata-fnav" data-id="mob-admin">Администрация</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="btn-team">
                    <div class="team-mob-nav skew" data-id="3">
                        <div class="not-skew">
                            Кайрат М
                        </div>
                    </div>
                    <div class="btn-teams-nav transformx" data-id="3">
                        <div class="align-middle">
                            <div class="hr-team"></div>
                            <div class="rgba-mob-nav">
                                <ul class="text-left">
                                    <li class="mkairatm-fnav" data-id="mob-coaches">тренерский штаб</li>
                                    <li class="mkairatm-fnav" data-id="mob-line-up">состав</li>
                                    <li class="mkairatm-fnav" data-id="mob-admin">Администрация</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <img src="/my/img/team/stadium.jpg" class="img-res" id="mob-stadium">
        <div class="mstadium"></div>


        <!-- Тренерский штаб -->
        <div class="blocks" id="mob-coaches" data-id="1">
            <div id="mob-coaches-content">
                <div class="container">
                    <div class="mselect-coach" data-id="1">
                        <div class="title-block fs">
                            ТРЕНЕРСКИЙ ШТАБ
                        </div>
                        <div class="mob-coach-info fix">
                            <div class="cleft">
                                <img src="/my/img/team/coaches/ferer.png" class="change-coach">
                                <div class="person-info">
                                    <div class="align-top ">
                                        <div class="person-info-left text-center">
                                            <ul>
                                                <li>Дата рождения: 21.07.1975</li>
                                                <li>Гражданство: Испания</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="pd-change">
                                    <button class="f-l pd-change-button" data-id="1">
                                        Биография
                                    </button>
                                    <button class="f-r pd-change-button" data-id="2">
                                        Карьера
                                    </button>
                                </div>
                            </div>
                            <div class="cright">
                                <div class="coach-name fs">
                                    <span>Карлос Алос Ферер</span>
                                </div>
                                <div class="coach-post fs">
                                    <span>Главный тренер</span>
                                </div>
                                <div class="person-mdetails">
                                    <div class="person-mdetails-in">
                                        <div class="pd" data-id="1">
                                            1Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                        </div>
                                        <div class="pd"  data-id="2">
                                            2Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mselect-coach" data-id="2">
                        <div class="title-block fs">
                            ТРЕНЕРСКИЙ ШТАБ
                        </div>
                        <div class="mob-coach-info fix">
                            <div class="cleft">
                                <img src="/my/img/team/coaches/nikolas.png" class="change-coach">
                                <div class="person-info">
                                    <div class="align-top ">
                                        <div class="person-info-left text-center">
                                            <ul>
                                                <li>Дата рождения: 21.07.1975</li>
                                                <li>Гражданство: Испания</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="pd-change">
                                    <button class="f-l pd-change-button" data-id="1">
                                        Биография
                                    </button>
                                    <button class="f-r pd-change-button" data-id="2">
                                        Карьера
                                    </button>
                                </div>
                            </div>
                            <div class="cright">
                                <div class="coach-name fs">
                                    <span>Кьетино   Николас</span>
                                </div>
                                <div class="coach-post fs">
                                    <span>Ассистент Главного тренера</span>
                                </div>
                                <div class="person-mdetails">
                                    <div class="person-mdetails-in">
                                        <div class="pd" data-id="1">
                                            1Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                        </div>
                                        <div class="pd"  data-id="2">
                                            2Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mselect-coach" data-id="3">
                        <div class="title-block fs">
                            ТРЕНЕРСКИЙ ШТАБ
                        </div>
                        <div class="mob-coach-info fix">
                            <div class="cleft">
                                <img src="/my/img/team/coaches/marti.png" class="change-coach">
                                <div class="person-info">
                                    <div class="align-top ">
                                        <div class="person-info-left text-center">
                                            <ul>
                                                <li>Дата рождения: 21.07.1975</li>
                                                <li>Гражданство: Испания</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="pd-change">
                                    <button class="f-l pd-change-button" data-id="1">
                                        Биография
                                    </button>
                                    <button class="f-r pd-change-button" data-id="2">
                                        Карьера
                                    </button>
                                </div>
                            </div>
                            <div class="cright">
                                <div class="coach-name fs">
                                    <span>МАРТИ МАТАБОШ</span>
                                </div>
                                <div class="coach-post fs">
                                    <span>Тренер по физподготовке</span>
                                </div>
                                <div class="person-mdetails">
                                    <div class="person-mdetails-in">
                                        <div class="pd" data-id="1">
                                            1Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                        </div>
                                        <div class="pd"  data-id="2">
                                            2Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="list-coaches">
                    <div class="list-coaches-in container">
                        <div id="mob-coach-lists" class="owl-carousel">
                            <div class="coach-item active-coach" data-id="1">
                                <div class="text-left">
                                    <ul>
                                        <li class="coach-fio">Карлос Алос Ферер</li>
                                        <li class="coach-dolj">Главный тренер</li>

                                    </ul>
                                </div>
                            </div>
                            <div class="coach-item" data-id="2">
                                <div class="text-left">
                                    <ul>
                                        <li class="coach-fio">Кьетино   Николас</li>
                                        <li class="coach-dolj">Ассистент Главного тренера</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="coach-item" data-id="3">
                                <div class="text-left">
                                    <ul>
                                        <li class="coach-fio">Марти Матабош</li>
                                        <li class="coach-dolj">Тренер по физподготовке</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="coach-item" data-id="4">
                                <div class="text-left">
                                    <ul>
                                        <li class="coach-fio">Андрей Карпович</li>
                                        <li class="coach-dolj">Помощник Главного тренера</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="coach-item" data-id="5">
                                <div class="text-left">
                                    <ul>
                                        <li class="coach-fio">Воскобойников Олег</li>
                                        <li class="coach-dolj">Тренер вратарей</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="coach-item" data-id="6">
                                <div class="text-left">
                                    <ul>
                                        <li class="coach-fio">Андрей Карпович</li>
                                        <li class="coach-dolj">Тренер по физподготовке</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="coach-item" data-id="7">
                                <div class="text-left">
                                    <ul>
                                        <li class="coach-fio">Кьетино   Николас</li>
                                        <li class="coach-dolj">Тренер по физподготовке</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="coachNavigation">
                            <a class="btn-prev coach-prev">
                                <img src="/my/img/main/prev.png">
                            </a>
                            <a class="btn-next coach-next">
                                <img src="/my/img/main/next.png">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Состав-->
        <div class="blocks" id="mob-line-up" data-id="2">
            <div id="mob-admin-content">
                <div class="container">
                    <div class="mselect-player" data-id="1">
                        <div class="title-block fs">
                            Состав
                        </div>
                        <div class="mob-player-info fix">
                            <div class="pleft">
                                <img src="/my/img/team/players/7.png" class="change-coach">
                            </div>
                            <div class="pright">
                                <div class="player-linfo">
                                    <div class="player-name fs">
                                        <span>ИСЛАМБЕК КУАТ</span>
                                    </div>
                                    <div class="player-post fs">
                                        ПОЛУЗАЩИТНИК
                                    </div>
                                    <div class="player-info">
                                        <div class="align-top pl">
                                            <div class="player-info-left">
                                                <ul>
                                                    <li>Дата рождения: </li>
                                                    <li>Гражданство:</li>
                                                    <li>Рост</li>
                                                    <li>Вес</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="align-top">
                                            <div class="player-info-left">
                                                <ul>
                                                    <li>12.01.1993</li>
                                                    <li>Казахстан</li>
                                                    <li>179 см</li>
                                                    <li>70 кг</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="player-details">
                            <div class="player-details-in">
                                <div class="player transform" data-id="1">
                                    Воспитанник астанинского футбола. Первый профессиональный контракт подписал с ФК «Окжетпес», с которым завоевал звание лучшего игрока Первой лиги и вышел в Премьер-лигу, после чего перешел в «Актобе».
                                    <div class="br"></div>
                                    С 2012-го по 2014-й год цепкий «опорник» выступал в составе «Астаны», а в середине прошлого сезона подписал с ФК «Кайрат» контракт, сроком на 2,5 года. Отличается цепкой игрой в отборе и уверенными действиями с мячом.
                                </div>
                                <div class="player transform" data-id="2" >
                                    2Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                </div>
                                <div class="player transform" data-id="3" >
                                    3Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                </div>
                            </div>
                            <div class="mob-player-change">
                                <div class="align-middle">
                                    <button class="player-change-button" data-id="1">
                                        Биография
                                    </button>
                                </div>
                                <div class="align-middle">
                                    <button class="player-change-button" data-id="2">
                                        Карьера
                                    </button>
                                </div>
                                <div class="align-middle">
                                    <button class="player-change-button" data-id="3">
                                        Статистика
                                    </button>
                                </div>
                            </div>
                            <div class="player-inst">
                                <a href="#">
                                    <div class="align-middle">
                                        INSTAGRAM
                                    </div>
                                    <div class="align-middle">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="mselect-player" data-id="2">
                        <div class="title-block fs">
                            Состав
                        </div>
                        <div class="mob-player-info fix">
                            <div class="pleft">
                                <img src="/my/img/team/players/9.png" class="change-coach">
                            </div>
                            <div class="pright">
                                <div class="player-linfo">
                                    <div class="player-name fs">
                                        <span>БАУЫРЖАН ИСЛАМХАН</span>
                                    </div>
                                    <div class="player-post fs">
                                        ПОЛУЗАЩИТНИК
                                    </div>
                                    <div class="player-info">
                                        <div class="align-top pl">
                                            <div class="player-info-left">
                                                <ul>
                                                    <li>Дата рождения: </li>
                                                    <li>Гражданство:</li>
                                                    <li>Рост</li>
                                                    <li>Вес</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="align-top">
                                            <div class="player-info-left">
                                                <ul>
                                                    <li>23.02.1993</li>
                                                    <li>Казахстан</li>
                                                    <li>174 см</li>
                                                    <li>63 кг</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="player-details">
                            <div class="player-details-in">
                                <div class="player transform" data-id="1">
                                    Профессиональную карьеру Батори, как его называют в футбольных кругах, начинал в «Таразе», в составе которого, несмотря на юный возраст, даже выходил с капитанской повязкой. В сезоне-2013 Бауыржан перешел в клуб российской Премьер-лиги «Кубань», провел за молодежный состав краснодарцев несколько игр, но в том же сезоне был отдан в аренду в «Астану».
                                    <div class="br"></div>
                                    В «Кайрат» Исламхан перешел в 2014 году в статусе капитана молодежной сборной Казахстана, подписав контракт, сроком на три года.
                                    По ходу сезона, самый яркий и перспективный футболист Казахстана закрепился в основном составе, отлично себя проявил и заслуженно завоевал звание лучшего игрока года по мнению всех ведущих спортивных изданий и футбольных организаций страны.
                                </div>
                                <div class="player transform" data-id="2" >
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                </div>
                                <div class="player transform" data-id="3" >
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                </div>
                            </div>
                            <div class="mob-player-change">
                                <div class="align-middle">
                                    <button class="player-change-button" data-id="1">
                                        Биография
                                    </button>
                                </div>
                                <div class="align-middle">
                                    <button class="player-change-button" data-id="2">
                                        Карьера
                                    </button>
                                </div>
                                <div class="align-middle">
                                    <button class="player-change-button" data-id="3">
                                        Статистика
                                    </button>
                                </div>
                            </div>
                            <div class="player-inst">
                                <a href="#">
                                    <div class="align-middle">
                                        INSTAGRAM
                                    </div>
                                    <div class="align-middle">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="mselect-player" data-id="3">
                        <div class="title-block fs">
                            Состав
                        </div>
                        <div class="mob-player-info fix">
                            <div class="pleft">
                                <img src="/my/img/team/players/10.png" class="change-coach">
                            </div>
                            <div class="pright">
                                <div class="player-linfo">
                                    <div class="player-name fs">
                                        <span>Исаэл Барбоза</span>
                                    </div>
                                    <div class="player-post fs">
                                        ПОЛУЗАЩИТНИК
                                    </div>
                                    <div class="player-info">
                                        <div class="align-top pl">
                                            <div class="player-info-left">
                                                <ul>
                                                    <li>Дата рождения: </li>
                                                    <li>Гражданство:</li>
                                                    <li>Рост</li>
                                                    <li>Вес</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="align-top">
                                            <div class="player-info-left">
                                                <ul>
                                                    <li>13.05.1988</li>
                                                    <li>Испания</li>
                                                    <li>171 см</li>
                                                    <li>62 кг</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="player-details">
                            <div class="player-details-in">
                                <div class="player transform" data-id="1">
                                    Исаэл — воспитанник футбольного клуба «Гремио», в нём же он начал профессиональную карьеру в 2009-м году. Летом 2012-го он перешёл в португальский «Насьонал», в котором отыграл полгода. В 2013-м году бразилец подписал контракт с ФК «Краснодар». С июня 2014-го года – игрок ФК «Кайрат».
                                    <div class="br"></div>
                                </div>
                                <div class="player transform" data-id="2" >
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                </div>
                                <div class="player transform" data-id="3" >
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                </div>
                            </div>
                            <div class="mob-player-change">
                                <div class="align-middle">
                                    <button class="player-change-button" data-id="1">
                                        Биография
                                    </button>
                                </div>
                                <div class="align-middle">
                                    <button class="player-change-button" data-id="2">
                                        Карьера
                                    </button>
                                </div>
                                <div class="align-middle">
                                    <button class="player-change-button" data-id="3">
                                        Статистика
                                    </button>
                                </div>
                            </div>
                            <div class="player-inst">
                                <a href="#">
                                    <div class="align-middle">
                                        INSTAGRAM
                                    </div>
                                    <div class="align-middle">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="list-players">
                    <div class="list-players-in container">
                        <div id="mob-player-lists" class="owl-carousel">
                            <div class="player-item active-player" data-id="1">
                                <div class="text-left">
                                    <div class="align-middle fs player-number">
                                        7
                                    </div>
                                    <div class="align-middle">
                                        <ul>
                                            <li>Исламбек</li>
                                            <li>Куат</li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="player-item" data-id="2">
                                <div class="text-left">
                                    <div class="align-middle fs player-number">
                                        9
                                    </div>
                                    <div class="align-middle">
                                        <ul>
                                            <li>Бауыржан</li>
                                            <li>Исламхан</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="player-item" data-id="3">
                                <div class="text-left">
                                    <div class="align-middle fs player-number">
                                        10
                                    </div>
                                    <div class="align-middle">
                                        <ul>
                                            <li>Исаэл</li>
                                            <li>Барбоза</li>
                                        </ul>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="coachNavigation">
                            <a class="btn-prev player-prev">
                                <img src="/my/img/main/prev.png">
                            </a>
                            <a class="btn-next player-next">
                                <img src="/my/img/main/next.png">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- АДМИНИСТРАЦИЯ-->
        <div class="blocks" id="mob-admin" data-id="3">
            <div id="mob-admin-content">
                <div class="container">
                    <div class="mselect-admin" data-id="1">
                        <div class="title-block fs">
                            АДМИНИСТРАЦИЯ
                        </div>
                        <div class="mob-admin-info fix">
                            <div class="cleft">
                                <img src="/my/img/team/admin/felipe.png" class="change-coach">
                                <div class="person-info">
                                    <div class="align-top ">
                                        <div class="person-info-left text-center">
                                            <ul>
                                                <li>Дата рождения: 14.05.1988</li>
                                                <li>Гражданство: Бразилия</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cright">
                                <div class="coach-name fs">
                                    <span>ФЕЛИПЕ МЕЙРА</span>
                                </div>
                                <div class="coach-post fs">
                                    <span>Физиотерапевт</span>
                                </div>
                                <div class="person-mdetails">
                                    <div class="person-mdetails-in">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mselect-admin" data-id="2">
                        <div class="title-block fs">
                            АДМИНИСТРАЦИЯ
                        </div>
                        <div class="mob-admin-info fix">
                            <div class="cleft">
                                <img src="/my/img/team/admin/nikolaev.png" class="change-coach">
                                <div class="person-info">
                                    <div class="align-top ">
                                        <div class="person-info-left text-center">
                                            <ul>
                                                <li>Дата рождения: 04.09.1975</li>
                                                <li>Гражданство: Казахстан</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cright">
                                <div class="coach-name fs">
                                    <span>ДМИТРИЙ НИКОЛАЕВ</span>
                                </div>
                                <div class="coach-post fs">
                                    <span>Массажист</span>
                                </div>
                                <div class="person-mdetails">
                                    <div class="person-mdetails-in">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mselect-admin" data-id="3">
                        <div class="title-block fs">
                            АДМИНИСТРАЦИЯ
                        </div>
                        <div class="mob-admin-info fix">
                            <div class="cleft">
                                <img src="/my/img/team/admin/massajist.png" class="change-coach">
                                <div class="person-info">
                                    <div class="align-top ">
                                        <div class="person-info-left text-center">
                                            <ul>
                                                <li>Дата рождения: 23.07.1979</li>
                                                <li>Гражданство: Казахстан</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cright">
                                <div class="coach-name fs">
                                    <span>ГЕОРГИЙ МИХАЙЛОВ</span>
                                </div>
                                <div class="coach-post fs">
                                    <span>Массажист</span>
                                </div>
                                <div class="person-mdetails">
                                    <div class="person-mdetails-in">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="list-admins">
                    <div class="list-admins-in container">
                        <div id="mob-admin-lists" class="owl-carousel">
                            <div class="admin-item  active-admin" data-id="1">
                                <div class="text-left">
                                    <ul>
                                        <li class="admin-fio">Фелипе Мейра</li>
                                        <li class="admin-dolj">Физиотерапевт</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="admin-item" data-id="2">
                                <div class="text-left">
                                    <ul>
                                        <li class="admin-fio">Дмитрий Николаев</li>
                                        <li class="admin-dolj">Массажист</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="admin-item" data-id="3">
                                <div class="text-left">
                                    <ul>
                                        <li class="admin-fio">Георгий Михайлов</li>
                                        <li class="admin-dolj">Массажист</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="admin-item" data-id="4">
                                <div class="text-left">
                                    <ul>
                                        <li class="admin-fio">Ермурат Базилов</li>
                                        <li class="admin-dolj">Врач</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="admin-item" data-id="5">
                                <div class="text-left">
                                    <ul>
                                        <li class="admin-fio">Рамиль Юсупов</li>
                                        <li class="admin-dolj">Администратор</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="admin-item" data-id="6">
                                <div class="text-left">
                                    <ul>
                                        <li class="admin-fio">Андрей Карпович</li>
                                        <li class="admin-dolj">Администратор</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="admin-item" data-id="7">
                                <div class="text-left">
                                    <ul>
                                        <li class="admin-fio">Кьетино   Николас</li>
                                        <li class="admin-dolj">Тренер по физподготовке</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="adminNavigation">
                            <a class="btn-prev admin-prev">
                                <img src="/my/img/prev-w.png">
                            </a>
                            <a class="btn-next admin-next">
                                <img src="/my/img/next-w.png">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="together">
        <!-- Prev games -->
        <section class="pg-block mrg container">
            <div class="pc">
                <div class="carousel-container" id="carousel1">
                    <div id="kairat-carousel" class="owl-carousel">
                        <div class="item prev-match">
                            <div class="title-block fs" id="blij-match">
                                <span>Прошедшие матчи</span>
                            </div>
                            <div class="ch"></div>
                            <div class="hr-pg-slider"></div>
                            <div class="item-in f-l">
                                <div class="rgba">
                                    <div class="align-top">
                                        <img src="/my/img/main/clubs/kairat.png">
                                        <div class="club fs">
                                            <span>Кайрат</span>
                                        </div>
                                        <div class="city">
                                            <span>Алматы</span>
                                        </div>
                                    </div>
                                    <div class="align-top">
                                        <div class="vs fs">
                                            2:1
                                        </div>
                                    </div>
                                    <div class="align-top">
                                        <img src="/my/img/main/clubs/atyrau.png">
                                        <div class="club fs">
                                            <span>Атырау</span>
                                        </div>
                                        <div class="city">
                                            <span>Атырау</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-bottom dashed-btm">
                                    <div class="item-hr">
                                        <div class="circle-active"></div>
                                        <div class="circle"></div>
                                    </div>
                                    <div class="day">
                                        <ul>
                                            <li class="day-bold fs">06.10.2017</li>
                                            <li class="upper">АЛМАТЫ</li>
                                            <li class="pbtm">Центральный стадион</li>
                                        </ul>
                                    </div>
                                    <div class="about-match">
                                        <div class="ab-dashed"></div>
                                        <div class="help-dash">
                                            <div class="circle-in-dashed"></div>
                                            <button class="about-match-btn">О МАТЧЕ</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-in">
                                <div class="rgba">
                                    <div class="align-top">
                                        <img src="/my/img/main/clubs/kairat.png">
                                        <div class="club fs">
                                            <span>Кайрат</span>
                                        </div>
                                        <div class="city">
                                            <span>Алматы</span>
                                        </div>
                                    </div>
                                    <div class="align-top">
                                        <div class="vs fs">
                                            2:1
                                        </div>
                                    </div>
                                    <div class="align-top">
                                        <img src="/my/img/main/clubs/shakhtar.png">
                                        <div class="club fs">
                                            <span>Шахтер</span>
                                        </div>
                                        <div class="city">
                                            <span>Караганда</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-bottom dashed-btm">
                                    <div class="item-hr">
                                        <div class="circle"></div>
                                    </div>
                                    <div class="day">
                                        <ul>
                                            <li class="day-bold fs">10.10.2017</li>
                                            <li class="upper">АЛМАТЫ</li>
                                            <li class="pbtm">Центральный стадион</li>
                                        </ul>
                                    </div>
                                    <div class="about-match">
                                        <div class="ab-dashed"></div>
                                        <div class="help-dash">
                                            <div class="circle-in-dashed"></div>
                                            <button class="about-match-btn">О МАТЧЕ</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-in  f-r">
                                <div class="rgba">
                                    <div class="align-top">
                                        <img src="/my/img/main/clubs/kairat.png">
                                        <div class="club fs">
                                            <span>Кайрат</span>
                                        </div>
                                        <div class="city">
                                            <span>Алматы</span>
                                        </div>
                                    </div>
                                    <div class="align-top">
                                        <div class="vs fs">
                                            0:0
                                        </div>
                                    </div>
                                    <div class="align-top">
                                        <img src="/my/img/main/clubs/ordabasy.png">
                                        <div class="club fs">
                                            <span>ОРДАБАСЫ</span>
                                        </div>
                                        <div class="city">
                                            <span>Шымкент</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-bottom dashed-btm">
                                    <div class="item-hr">
                                        <div class="circle"></div>
                                    </div>
                                    <div class="day">
                                        <ul>
                                            <li class="day-bold fs">10.10.2017</li>
                                            <li class="upper">АЛМАТЫ</li>
                                            <li class="pbtm">Центральный стадион</li>
                                        </ul>
                                    </div>
                                    <div class="about-match">
                                        <div class="ab-dashed"></div>
                                        <div class="help-dash">
                                            <div class="circle-in-dashed"></div>
                                            <button class="about-match-btn">О МАТЧЕ</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="title-block fs" id="blij-match">
                                <span>Следующий МАТЧ</span>
                            </div>
                            <div class="item-center">
                                <img src="/my/img/main/kaz.png" class="res" id="kaz">
                                <div class="match">
                                    <div class="m-item-l">
                                        <img src="/my/img/main/center-logo/taraz.png" class="res">
                                        <div class="m-item-name fs">ТАРАЗ</div>
                                    </div>
                                    <div class="item-time">
                                        <div class="date fs">
                                            20/11/2017
                                        </div>
                                        <div class="time fs">
                                            19:00
                                        </div>
                                        <div class="stadium fs">
                                            Алматы-центральный стадион
                                        </div>
                                    </div>
                                    <div class="m-item-r">
                                        <img src="/my/img/main/center-logo/kairat.png" class="res">
                                        <div class="m-item-name fs">КАЙРАТ</div>
                                    </div>
                                </div>
                            </div>
                            <div class="buy-tickets">
                                <div class="buy-btn-block">
                                    <div class="video-life">
                                        <div class="lcircle-in-buy"></div>
                                        <a href="#">
                                            <div class="vl-text">
                                                <span>Видео трансляция</span>
                                            </div>
                                        </a>
                                    </div>
                                    <button class="buy-btn">
                                        КУПИТЬ БИЛЕТ
                                    </button>
                                    <div class="text-life">
                                        <div class="rcircle-in-buy"></div>
                                        <a href="#">
                                            <div class="tl-text">
                                                <span>Текстовая трансляция</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="title-block fs" id="blij-match">
                                <span>Ближайшие матчи</span>
                            </div>
                            <div class="ch"></div>
                            <div class="hr-ng-slider"></div>
                            <div class="item-in f-l">
                                <div class="rgba">
                                    <div class="align-top">
                                        <img src="/my/img/main/clubs/kairat.png">
                                        <div class="club fs">
                                            <span>Кайрат</span>
                                        </div>
                                        <div class="city">
                                            <span>Алматы</span>
                                        </div>
                                    </div>
                                    <div class="align-top">
                                        <div class="vs fs">
                                            VS
                                        </div>
                                    </div>
                                    <div class="align-top">
                                        <img src="/my/img/main/clubs/atyrau.png">
                                        <div class="club fs">
                                            <span>Атырау</span>
                                        </div>
                                        <div class="city">
                                            <span>Атырау</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-bottom">
                                    <div class="item-hr">
                                        <div class="circle-active"></div>
                                        <div class="circle"></div>
                                    </div>
                                    <div class="day">
                                        <ul>
                                            <li class="day-bold fs">06.10.2017</li>
                                            <li class="upper">АЛМАТЫ</li>
                                            <li>Центральный стадион</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item-in">
                                <div class="rgba">
                                    <div class="align-top">
                                        <img src="/my/img/main/clubs/kairat.png">
                                        <div class="club fs">
                                            <span>Кайрат</span>
                                        </div>
                                        <div class="city">
                                            <span>Алматы</span>
                                        </div>
                                    </div>
                                    <div class="align-top">
                                        <div class="vs fs">
                                            VS
                                        </div>
                                    </div>
                                    <div class="align-top">
                                        <img src="/my/img/main/clubs/shakhtar.png">
                                        <div class="club fs">
                                            <span>Шахтер</span>
                                        </div>
                                        <div class="city">
                                            <span>Караганда</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-bottom">
                                    <div class="item-hr">
                                        <div class="circle"></div>
                                    </div>
                                    <div class="day">
                                        <ul>
                                            <li class="day-bold fs">10.10.2017</li>
                                            <li class="upper">АЛМАТЫ</li>
                                            <li>Центральный стадион</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item-in  f-r">
                                <div class="rgba">
                                    <div class="align-top">
                                        <img src="/my/img/main/clubs/kairat.png">
                                        <div class="club fs">
                                            <span>Кайрат</span>
                                        </div>
                                        <div class="city">
                                            <span>Алматы</span>
                                        </div>
                                    </div>
                                    <div class="align-top">
                                        <div class="vs fs">
                                            VS
                                        </div>
                                    </div>
                                    <div class="align-top">
                                        <img src="/my/img/main/clubs/shakhtar.png">
                                        <div class="club fs">
                                            <span>Шахтер</span>
                                        </div>
                                        <div class="city">
                                            <span>Караганда</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-bottom">
                                    <div class="item-hr">
                                        <div class="circle"></div>
                                    </div>
                                    <div class="day">
                                        <ul>
                                            <li class="day-bold fs">10.10.2017</li>
                                            <li class="upper">АЛМАТЫ</li>
                                            <li>Центральный стадион</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="customNavigation">
                        <a class="btn-prev prev1">
                            <img src="/my/img/main/prev.png">
                        </a>
                        <a class="btn-next next1">
                            <img src="/my/img/main/next.png">
                        </a>
                    </div>
                </div>
            </div>
            <div class="mobile">
                <div class="carousel-container act" id="mcarousel1">
                    <div id="mkairat-carousel" class="owl-carousel">
                        <div class="item  prev-match">
                            <div class="title-block fs" id="blij-match">
                                <span>Прошедшие матчи</span>
                            </div>
                            <div class="ch"></div>
                            <div class="hr-pg-slider"></div>
                            <div class="item-in">
                                <div class="rgba">
                                    <div class="align-top">
                                        <img src="/my/img/main/clubs/kairat.png">
                                        <div class="club fs">
                                            <span>Кайрат</span>
                                        </div>
                                        <div class="city">
                                            <span>Алматы</span>
                                        </div>
                                    </div>
                                    <div class="align-top">
                                        <div class="vs fs">
                                            2:1
                                        </div>
                                    </div>
                                    <div class="align-top">
                                        <img src="/my/img/main/clubs/atyrau.png">
                                        <div class="club fs">
                                            <span>Атырау</span>
                                        </div>
                                        <div class="city">
                                            <span>Атырау</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-bottom dashed-btm">
                                    <div class="item-hr">
                                        <div class="circle-active"></div>
                                        <div class="circle"></div>
                                    </div>
                                    <div class="day">
                                        <ul>
                                            <li class="day-bold fs">06.10.2017</li>
                                            <li class="upper">АЛМАТЫ</li>
                                            <li class="pbtm">Центральный стадион</li>
                                        </ul>
                                    </div>
                                    <div class="about-match">
                                        <div class="ab-dashed"></div>
                                        <div class="help-dash">
                                            <div class="circle-in-dashed"></div>
                                            <button class="about-match-btn">О МАТЧЕ</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item prev-match">
                            <div class="title-block fs" id="blij-match">
                                <span>Прошедшие матчи</span>
                            </div>
                            <div class="ch"></div>
                            <div class="hr-pg-slider"></div>
                            <div class="item-in">
                                <div class="rgba">
                                    <div class="align-top">
                                        <img src="/my/img/main/clubs/kairat.png">
                                        <div class="club fs">
                                            <span>Кайрат</span>
                                        </div>
                                        <div class="city">
                                            <span>Алматы</span>
                                        </div>
                                    </div>
                                    <div class="align-top">
                                        <div class="vs fs">
                                            2:1
                                        </div>
                                    </div>
                                    <div class="align-top">
                                        <img src="/my/img/main/clubs/shakhtar.png">
                                        <div class="club fs">
                                            <span>Шахтер</span>
                                        </div>
                                        <div class="city">
                                            <span>Караганда</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-bottom dashed-btm">
                                    <div class="item-hr">
                                        <div class="circle"></div>
                                    </div>
                                    <div class="day">
                                        <ul>
                                            <li class="day-bold fs">10.10.2017</li>
                                            <li class="upper">АЛМАТЫ</li>
                                            <li class="pbtm">Центральный стадион</li>
                                        </ul>
                                    </div>
                                    <div class="about-match">
                                        <div class="ab-dashed"></div>
                                        <div class="help-dash">
                                            <div class="circle-in-dashed"></div>
                                            <button class="about-match-btn">О МАТЧЕ</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item prev-match">
                            <div class="title-block fs" id="blij-match">
                                <span>Прошедшие матчи</span>
                            </div>
                            <div class="ch"></div>
                            <div class="hr-pg-slider"></div>
                            <div class="item-in">
                                <div class="rgba">
                                    <div class="align-top">
                                        <img src="/my/img/main/clubs/kairat.png">
                                        <div class="club fs">
                                            <span>Кайрат</span>
                                        </div>
                                        <div class="city">
                                            <span>Алматы</span>
                                        </div>
                                    </div>
                                    <div class="align-top">
                                        <div class="vs fs">
                                            0:0
                                        </div>
                                    </div>
                                    <div class="align-top">
                                        <img src="/my/img/main/clubs/ordabasy.png">
                                        <div class="club fs">
                                            <span>ОРДАБАСЫ</span>
                                        </div>
                                        <div class="city">
                                            <span>Шымкент</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-bottom dashed-btm">
                                    <div class="item-hr">
                                        <div class="circle"></div>
                                    </div>
                                    <div class="day">
                                        <ul>
                                            <li class="day-bold fs">10.10.2017</li>
                                            <li class="upper">АЛМАТЫ</li>
                                            <li class="pbtm">Центральный стадион</li>
                                        </ul>
                                    </div>
                                    <div class="about-match">
                                        <div class="ab-dashed"></div>
                                        <div class="help-dash">
                                            <div class="circle-in-dashed"></div>
                                            <button class="about-match-btn">О МАТЧЕ</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="title-block fs" id="blij-match">
                                <span>Следующий МАТЧ</span>
                            </div>
                            <div class="item-center">
                                <img src="/my/img/main/kaz.png" class="res" id="kaz">
                                <div class="match">
                                    <div class="m-item-l">
                                        <img src="/my/img/main/center-logo/taraz.png" class="res">
                                        <div class="m-item-name fs">ТАРАЗ</div>
                                    </div>
                                    <div class="item-time">
                                        <div class="date fs">
                                            20/11/2017
                                        </div>
                                        <div class="time fs">
                                            19:00
                                        </div>
                                        <div class="stadium fs">
                                            Алматы-центральный стадион
                                        </div>
                                    </div>
                                    <div class="m-item-r">
                                        <img src="/my/img/main/center-logo/kairat.png" class="res">
                                        <div class="m-item-name fs">КАЙРАТ</div>
                                    </div>
                                </div>
                            </div>
                            <div class="buy-tickets">
                                <div class="buy-btn-block">
                                    <div class="video-life">
                                        <div class="lcircle-in-buy"></div>
                                        <a href="#">
                                            <div class="vl-text">
                                                <span>Видео трансляция</span>
                                            </div>
                                        </a>
                                    </div>
                                    <button class="buy-btn">
                                        КУПИТЬ БИЛЕТ
                                    </button>
                                    <div class="text-life">
                                        <div class="rcircle-in-buy"></div>
                                        <a href="#">
                                            <div class="tl-text">
                                                <span>Текстовая трансляция</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="title-block fs" id="blij-match">
                                <span>Ближайшие матчи</span>
                            </div>
                            <div class="ch"></div>
                            <div class="hr-ng-slider"></div>
                            <div class="item-in">
                                <div class="rgba">
                                    <div class="align-top">
                                        <img src="/my/img/main/clubs/kairat.png">
                                        <div class="club fs">
                                            <span>Кайрат</span>
                                        </div>
                                        <div class="city">
                                            <span>Алматы</span>
                                        </div>
                                    </div>
                                    <div class="align-top">
                                        <div class="vs fs">
                                            VS
                                        </div>
                                    </div>
                                    <div class="align-top">
                                        <img src="/my/img/main/clubs/atyrau.png">
                                        <div class="club fs">
                                            <span>Атырау</span>
                                        </div>
                                        <div class="city">
                                            <span>Атырау</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-bottom">
                                    <div class="item-hr">
                                        <div class="circle-active"></div>
                                        <div class="circle"></div>
                                    </div>
                                    <div class="day">
                                        <ul>
                                            <li class="day-bold fs">06.10.2017</li>
                                            <li class="upper">АЛМАТЫ</li>
                                            <li>Центральный стадион</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="title-block fs" id="blij-match">
                                <span>Ближайшие матчи</span>
                            </div>
                            <div class="ch"></div>
                            <div class="hr-ng-slider"></div>
                            <div class="item-in">
                                <div class="rgba">
                                    <div class="align-top">
                                        <img src="/my/img/main/clubs/kairat.png">
                                        <div class="club fs">
                                            <span>Кайрат</span>
                                        </div>
                                        <div class="city">
                                            <span>Алматы</span>
                                        </div>
                                    </div>
                                    <div class="align-top">
                                        <div class="vs fs">
                                            VS
                                        </div>
                                    </div>
                                    <div class="align-top">
                                        <img src="/my/img/main/clubs/shakhtar.png">
                                        <div class="club fs">
                                            <span>Шахтер</span>
                                        </div>
                                        <div class="city">
                                            <span>Караганда</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-bottom">
                                    <div class="item-hr">
                                        <div class="circle"></div>
                                    </div>
                                    <div class="day">
                                        <ul>
                                            <li class="day-bold fs">10.10.2017</li>
                                            <li class="upper">АЛМАТЫ</li>
                                            <li>Центральный стадион</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="title-block fs" id="blij-match">
                                <span>Ближайшие матчи</span>
                            </div>
                            <div class="hr-ng-slider"></div>
                            <div class="item-in">
                                <div class="rgba">
                                    <div class="align-top">
                                        <img src="/my/img/main/clubs/kairat.png">
                                        <div class="club fs">
                                            <span>Кайрат</span>
                                        </div>
                                        <div class="city">
                                            <span>Алматы</span>
                                        </div>
                                    </div>
                                    <div class="align-top">
                                        <div class="vs fs">
                                            VS
                                        </div>
                                    </div>
                                    <div class="align-top">
                                        <img src="/my/img/main/clubs/shakhtar.png">
                                        <div class="club fs">
                                            <span>Шахтер</span>
                                        </div>
                                        <div class="city">
                                            <span>Караганда</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-bottom">
                                    <div class="item-hr">
                                        <div class="circle"></div>
                                    </div>
                                    <div class="day">
                                        <ul>
                                            <li class="day-bold fs">10.10.2017</li>
                                            <li class="upper">АЛМАТЫ</li>
                                            <li>Центральный стадион</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="customNavigation">
                        <a class="btn-prev prev1">
                            <img src="/my/img/main/prev.png">
                        </a>
                        <a class="btn-next next1">
                            <img src="/my/img/main/next.png">
                        </a>
                    </div>
                </div>
            </div>

        </section>
</div>
</section>