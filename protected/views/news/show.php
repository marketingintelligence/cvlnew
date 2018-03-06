<script>
    $(function() {
        $('.nbtm').each(function() {
            $(this).children('.news-list').matchHeight();
        });
    });
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
      <!--
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
        <div class="block-content kairat-news bigtexteditor" data-id="1">
            <div class="title-block fs" style = "border-bottom:1px solid white; margin-bottom:20px;">
                <span class="upper"><?=$model->{Yii::app()->params['lan']."name_text"}?></span>
            </div>
            <? $img = json_decode($model->image, true); ?>
            <img width = "100%" src = "/upload/News/full/<?=$img[0]?>">
            <div style = "padding-top:20px;"><?=$model->{Yii::app()->params['lan']."full_bigtexteditor"}?></div>
        </div>
        <div class="ntop" style = "margin-bottom:10px; margin-top:40px;">
            <div class="news-title fs align-middle">Похожие новости</div>
        </div>
        -->
        <!--
        <div class="nbtm fix">
            <? foreach ($poh as $value) { ?>
                <? $img = json_decode($value->image, true); ?>
                <div <? if ($key == 101) { ?>style = "display:none;"<? } ?> class="news-list">
                    <div class="list-item">
                        <div class="listtitle fix not-skew">
                            <div class="listhelp skew"></div>
                            <div class="skew fs f-l"><?=$value->parentCategory->{Yii::app()->params['lan']."name_text"}?></div>
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
                                    <span><"Test VALUE"></span>
                                </div>
                                <div class="ltext2"><?=$value->short_bigtext?></div>
                            </div>
                        </div>
                    </div>
                    <a href = "/news/<?=$value->parentCategory->url_text?>/<?=$value->url_text?>/" class="read-btn">Читать</a>
                </div>
            <? } ?>
        </div>
        -->
    </section>
</section>

<?
    $model->views_int++;
    $model->save();
?>