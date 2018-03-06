<script type="text/javascript">
    (function() {
        $(function() {
            $('.kairat-news').each(function() {
                $(this).find('.news-list').matchHeight();
            });
            $('.kairata-news').each(function() {
                $(this).find('.news-list').matchHeight();
            });
            $('.kairatm-news').each(function() {
                $(this).find('.news-list').matchHeight();
            });
            $('.academy-news').each(function() {
                $(this).find('.news-list').matchHeight();
            });
            $('.news .nmiddle').each(function() {
                $(this).children('.item').matchHeight();
            });
        });
    })();
</script>

<section class="news fix container">
    <aside id="lnav">
        <nav class="side-lnav">
            <ul class="rel">
                <?  // ЗАКЕШИРОВАНО ВЕРНО //
                $path_cache = "cache/static/category/newscategory".Yii::app()->params['lan'];
                if (file_exists($path_cache)) {
                    include_once($path_cache);
                } else {
                    $newscategory = SHelper::getModelHeaders("Newscategory");
                    $i = 1;
                    $result_newscategory .=
                        '<a href = "/news/"><li class="btn-blocks"><div class="bg-active skew"><div class="not-skew">Все новости</div></div>'.
                        '<div style = "display:none;" class="nav-act-b"><div class="nav-circle"><div class="nav-circle2"></div></div></div>'.
                        '</li></a>';
                    foreach ($newscategory as $value) {
                        $result_newscategory .=
                            '<a title = "'.$value->name_text.'" href = "/news/'.$value->url_text.'/"><li class="btn-blocks" data-id="'.$i.'"><div class="bg-active skew"><div class="not-skew">'.$value->{Yii::app()->params['lan']."name_text"}.'</div></div>'.
                            '<div style = "display:none;" class="nav-act-b"><div class="nav-circle"><div class="nav-circle2"></div></div></div>'.
                            '</li></a>';
                        $i++;
                    }
                    file_put_contents($path_cache, $result_newscategory);
                    echo $result_newscategory;
                }
                ?>
            </ul>
        </nav>
        <div class="bombardiry b-mrg">
            <div class="b-top">
                <div class="btitle-block fs">
                    БОМБАРДИРЫ команды
                </div>
            </div>
            <div class="b-middle">
                <span>
                    Жерар Гоу
                </span>
                <div class="b-circle"></div>
            </div>
            <div class="b-bottom fs">
                <ul>
                    <li class="b-text">24</li>
                    <li class="b-text2">голов</li>
                </ul>
                <img src="/my/img/news/gerard.png" class="b-img">
            </div>
        </div>
    </aside>
    <section class="content">
        <div class="block-content kairat-news" data-id="1">
            <div class="ntop">
                <div class="news-title fs align-middle"><?=$category_name?></div>
            </div>

            <?
                $criteria = new CDbCriteria();
                $criteria->condition = "status_int = '1' AND top_int = '1' AND category_int = '".$catid."'";
                $top = News::model()->find($criteria);
                $img = json_decode($top->image, true);
            ?>
            <? if ($top != null) { ?>
                <div class="nmiddle fix">
                    <div class="item left f-l">
                        <img src="/upload/News/full/<?=$img[0]?>" class="img-res">
                        <div class="desc-day not-skew">
                            <div class="listhelp skew"></div>
                            <div class="bold fix skew">
                                <span class="f-l"><?=$top->parentCategory->name_text?></span>
                                <span class="f-r"><?=$top->getNiceDate()?></span>
                            </div>
                        </div>
                    </div>
                    <div class="item right f-r">
                        <div class="pad-text">
                            <div class="ntext">
                                <span>Кадр дня: кайратовцы на стадионе «Краснодара»</span>
                            </div>
                            <div class="ntext2">
                                <span>Фланговый защитник «Кайрата» Стас Лунин после победного матча с уральским «Акжайыком» (2:1), ответил на вопросы клубного телевидения и рассказал о своём возвращении на поле.
    Фланговый защитник «Кайрата» Стас Лунин после победного матча с уральским «Акжайыком» (2:1), ответил на вопросы клубного телевидения и рассказал о своём возвращении на поле.
    Фланговый защитник «Кайрата» Стас Лунин после победного матча с уральским «Акжайыком» (2:1), ответил на вопросы клубного телевидения и рассказал о своём возвращении на поле.</span>
                            </div>
                            <button class="read-btn">
                                Читать
                            </button>
                        </div>
                    </div>
                </div>
            <? } ?>

            <div class="nbtm fix">
                <? foreach ($model as $key => $value) { ?>
                    <? if ($key != 0) { ?>
                        <? $img = json_decode($value->image, true); ?>
                        <div <? if ($key == 101) { ?>style = "display:none;"<? } ?> class="news-list">
                            <div class="list-item">
                                <div class="listtitle fix not-skew">
                                    <div class="listhelp skew"></div>
                                    <div class="skew fs f-l"><?=$value->parentCategory->name_text?></div>
                                    <div class="skew f-r">
                                        <span class="fs"><?=$value->getNiceDate()?></span>
                                        <div class="align-middle">
                                            <img src="/my/img/news/eye.png" class="res eye-img">
                                        </div>
                                        <div class="align-middle count"><?=$value->views_int?></div>
                                    </div>
                                </div>
                                <div class="listtext fix">
                                    <div class="desc-img f-l">
                                        <img src="/upload/News/tm/<?=$img[0]?>" class="img-res">
                                    </div>
                                    <div class="desc-text f-r">
                                        <div class="ltext">
                                            <span><?=$value->name_text?></span>
                                        </div>
                                        <div class="ltext2"><?=$value->short_bigtext?></div>
                                    </div>
                                </div>
                            </div>
                            <a href = "/news/<?=$value->parentCategory->url_text?>/<?=$value->url_text?>/" class="read-btn">Читать</a>
                        </div>
                    <? } ?>
                <? } ?>
            </div>
            <div class = "pagination">
                <?php $this->widget('application.components.WPages',array('_pages'=>$pages)); ?>
            </div>
        </div>
    </section>
</section>