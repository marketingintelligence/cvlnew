<section class="about-club fix container">
    <aside id="nav">
        <nav class="side-nav">
            <ul class="rel">
                <?  // ЗАКЕШИРОВАНО ВЕРНО //
                $path_cache = "cache/static/category/clubmenu".Yii::app()->params['lan'];
                if (file_exists($path_cache)) {
                    include_once($path_cache);
                } else {
                    $clubmenu = SHelper::getModelHeaders("Clubmenu");
                    $i = 1;
                    foreach ($clubmenu as $value) {
                        $result_clubmenu .=
                            '<a title = "'.$value->name_text.'" href = "/club/'.$value->url_text.'/"><li class="btn-blocks" data-id="'.$i.'"><div class="bg-active skew"><div class="not-skew">'.$value->{Yii::app()->params['lan']."name_text"}.'</div></div>'.
                            '<div style = "display:none;" class="nav-act-b"><div class="nav-circle"><div class="nav-circle2"></div></div></div>'.
                            '</li></a>';
                        $i++;
                    }
                    file_put_contents($path_cache, $result_clubmenu);
                    echo $result_clubmenu;
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
        <?=$model->full_bigtexteditor?>
    </section>
</section>