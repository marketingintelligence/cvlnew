<header>
    <div class="pc">
        <div class="htop">
            <div class="hleft">
                <ul>
                    <?  // ЗАКЕШИРОВАНО ВЕРНО //
                        $path_cache = "cache/static/headers/topmenu".Yii::app()->params['lan'];
                        if (file_exists($path_cache)) {
                            include_once($path_cache);
                        } else {
                            $topmenu = SHelper::getModelHeaders("Topmenu");
                            foreach ($topmenu as $value) {
                                $img = json_decode($value->image, true);
                                $result_topmenu .=
                                    '<li><a href="/'.$value->url_text.'/">'.
                                        '<div class="align-middle"><img style = "margin-right:5px;" src="/upload/Topmenu/icon/'.$img[0].'"></div>'.
                                        '<div class="align-middle">'.$value->{Yii::app()->params['lan']."name_text"}.'</div>'.
                                    '</a></li>';
                            }
                            file_put_contents($path_cache, $result_topmenu);
                            echo $result_topmenu;
                        }
                    ?>
                </ul>
            </div>
            <div class="hright">
                <ul>
                    <?  // ЗАКЕШИРОВАНО ВЕРНО //
                        $path_cache_topsoc = "cache/static/headers/topsoc".Yii::app()->params['lan'];
                        if (file_exists($path_cache_topsoc)) {
                            include_once($path_cache_topsoc);
                        } else {
                            $topsoc = SHelper::getModelHeaders("Topsoc");
                            foreach ($topsoc as $value) {
                                $result_topsoc .=
                                    '<li><a href="'.$value->url_text.'" target="_blank"><i class="'.$value->icon_text.'" aria-hidden="true"></i></a></li>';
                            }
                            file_put_contents($path_cache_topsoc, $result_topsoc);
                            echo $result_topsoc;
                        }
                    ?>
                </ul>
            </div>
        </div>
        <div class="hcenter container">
            <a href="/" title = "Официальный Сайт ФК «Кайрат»">
                <img src="/my/img/logo.png" id="logo">
            </a>
            <div class="img-width">
                <img src="/my/img/header/fon.jpg" class="img-res">
                <div class="switch">
                    <a href="#">
                        <div class="language act-language" data-id="1" style="border: 0;">
                            <span>КЗ</span>
                        </div>
                    </a>
                    <a href="#">
                        <div class="language" data-id="2">
                            <span>РУ</span>
                        </div>
                    </a>
                    <a href="#">
                        <div class="language" data-id="3">
                            <span>EN</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="hbottom fix container">
            <div class="is-block">
                <div class="main-menu">
                    <div class="tabs">
                        <ul>
                            <?  // ЗАКЕШИРОВАНО ВЕРНО //
                                $path_cache_mainmenu = "cache/static/headers/mainmenu".Yii::app()->params['lan'];
                                if (file_exists($path_cache_mainmenu)) {
                                    include_once($path_cache_mainmenu);
                                } else {
                                    $mainmenu = SHelper::getModelHeaders("Mainmenu");
                                    foreach ($mainmenu as $value) {
                                        $img = json_decode($value->image, true);
                                        $result_mainmenu .=
                                            '<li class="skew"><div class="not-skew"><a href="/'.$value->url_text.'/">'.$value->{Yii::app()->params['lan']."name_text"}.'</a></div></li>';
                                    }
                                    file_put_contents($path_cache_mainmenu, $result_mainmenu);
                                    echo $result_mainmenu;
                                }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="search-block">
                    <div class="align-middle">
                        <input type="text" class="search" placeholder="Поиск по сайту">
                    </div>
                    <div class="align-middle search-btn">
                        <img src="/my/img/search-icon.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile">
        <div class="mob-menu">
            <ul >
                <li id="mob-nav2">Меню</li>
                <?  // ЗАКЕШИРОВАНО ВЕРНО //
                    $path_cache_mainmenu_mob = "cache/static/headers/mainmenu_mob".Yii::app()->params['lan'];
                    if (file_exists($path_cache_mainmenu_mob)) {
                        include_once($path_cache_mainmenu_mob);
                    } else {
                        $criteria = new CDbCriteria();
                        $criteria->order = "weight_text ASC";
                        $criteria->condition = "status_int = 1";
                        $mainmenu_mob = Mainmenu::model()->findAll($criteria);
                        foreach ($mainmenu_mob as $value) {
                            $result_mainmenu_mob .= '<a href="'.$value->url_text.'"><li>'.$value->{Yii::app()->params['lan']."name_text"}.'</li></a>';
                        }
                        file_put_contents($path_cache_mainmenu_mob, $result_mainmenu_mob);
                        echo $result_mainmenu_mob;
                    }
                ?>
            </ul>
        </div>
        <div class="container">
            <div class="mtop fix">
                <div id="mob-nav">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
                <div class="mob-left transformy">
                    <?  // ЗАКЕШИРОВАНО ВЕРНО //
                        $path_cache_topmenu_mob = "cache/static/headers/topmenu_mob".Yii::app()->params['lan'];
                        if (file_exists($path_cache_topmenu_mob)) {
                            include_once($path_cache_topmenu_mob);
                        } else {
                            $topmenu_mob = SHelper::getModelHeaders("Topmenu");
                            foreach ($topmenu_mob as $value) {
                                $img = json_decode($value->image, true);
                                $result_topmenu_mob .= '<div class="mob-middle"><a href="'.$value->url_text.'/"><div class="mob-work"><img src="/upload/Topmenu/icon/'.$img[0].'"></div></a></div>';
                            }
                            file_put_contents($path_cache_topmenu_mob, $result_topmenu_mob);
                            echo $result_topmenu_mob;
                        }
                    ?>

                    <div class="mob-middle">
                        <div class="mob-work" id="share-btn">
                            <i class="fa fa-share-alt" aria-hidden="true"></i>
                        </div>
                        <div id="share-block">
                            <ul>
                                <?  // ЗАКЕШИРОВАНО ВЕРНО //
                                    $path_cache_topsoc_mob = "cache/static/headers/topsoc_mob".Yii::app()->params['lan'];
                                    if (file_exists($path_cache_topsoc_mob)) {
                                        include_once($path_cache_topsoc_mob);
                                    } else {
                                        $topsoc_mob = SHelper::getModelHeaders("Topsoc");
                                        foreach ($topsoc_mob as $value) {
                                            $img = json_decode($value->image, true);
                                            $result_topsoc_mob .= '<li><a href="'.$value->url_text.'" target="_blank"><i class="'.$value->icon_text.'" aria-hidden="true"></i></a> </li>';
                                        }
                                        file_put_contents($path_cache_topsoc_mob, $result_topsoc_mob);
                                        echo $result_topsoc_mob;
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="mob-middle">
                        <div id="mob-change-lang">
                            КЗ
                            <div class="align-middle">&#9660;</div>
                        </div>
                        <div id="change-block-lang">
                            <ul>
                                <li><a href="#">КЗ</a></li>
                                <li><a href="#">РУ</a></li>
                                <li><a href="#">EN</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mmiddle">
                <a href="index.php"><img src="/my/img/logo.png" id="logo"></a>
                <img src="/my/img/header/fon.jpg" width="100%">
            </div>
        </div>
    </div>
    <div class="mobile-menu">
        <ul>                   
            <a href="/recipe/////"><li><img src="/mymeat/img/myaso.png"><span>Мясо</span></li></a>
            <a href="fish.html"><li><img src="/mymeat/img/ryba.png"> <span>Рыба</span></li></a>
            <a href="recipes.html"><li><img src="/mymeat/img/retsep.png"> <span>Рецепты</span></li></a>
            <a href="upload.html"><li><img src="/mymeat/img/add.png"> <span>Добавить</span></li></a>
            <a href="diet.html"><li><img src="/mymeat/img/dieta.png"> <span>Диета</span></li></a>
            <a href="health.html"><li><img src="/mymeat/img/health.png"> <span>Здоровье</span></li></a>
            <a href="calculator.html"><li><img src="/mymeat/img/calc.png"> <span>Калькулятор</span></li></a>
            <a href="video.html"><li><img src="/mymeat/img/video.png"> <span>Видео</span></li></a>
        </ul>
    </div>
    <div class="header-box" id="header-menu">

        <div class="header-menu-item">
            <a href="meat.html">
                <div class="inlineB">
                    <div class="align-middle wh">
                        <img src="/mymeat/img/myaso.png">
                    </div>
                    <div class="align-middle wh2">
                        <span>Мясо</span>
                    </div>
                </div>
            </a>
        </div>

        <div class="header-menu-item">
            <a href="fish.html">
                <div class="inlineB">
                    <div class="align-middle wh">
                        <img src="/mymeat/img/ryba.png">
                    </div>
                    <div class="align-middle wh2">
                        <span>Рыба</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="header-menu-item">
            <a href="recipes.html">
                <div class="inlineB">
                    <div class="align-middle wh">
                        <img src="/mymeat/img/retsep.png">
                    </div>
                    <div class="align-middle wh2">
                        <span>Рецепты</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="header-menu-item">
            <a href="upload.html">
                <div class="inlineB">
                    <div class="align-middle wh">
                        <img src="/mymeat/img/add.png">
                    </div>
                    <div class="align-middle wh2">
                        <span>Добавить</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="header-menu-item">
            <a href="diet.html">
                <div class="inlineB">
                    <div class="align-middle wh">
                        <img src="/mymeat/img/dieta.png">
                    </div>
                    <div class="align-middle wh2">
                        <span>Диета</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="header-menu-item">
            <a href="health.html">
                <div class="inlineB">
                    <div class="align-middle wh">
                        <img src="/mymeat/img/health.png">
                    </div>
                    <div class="align-middle wh2">
                        <span>Здоровье</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="header-menu-item">
            <a href="calculator.html">
                <div class="inlineB">
                    <div class="align-middle wh">
                        <img src="/mymeat/img/calc.png">
                    </div>
                    <div class="align-middle wh2">
                        <span>Калькулятор</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="header-menu-item">
            <a href="video.html">
                <div class="inlineB">
                    <div class="align-middle wh">
                        <img src="/mymeat/img/video.png">
                    </div>
                    <div class="align-middle wh2">
                        <span>Видео</span>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="video-box">
        <div class="video-box-content">
            <div class="video-button"></div>
            <video poster="mymeat/img/resipe/video-player.png" class="page-video">
                <source src="/mymeat/video/1.mp4" type="video/mp4">
            </video>
        </div>
    </div>
    
</header>
