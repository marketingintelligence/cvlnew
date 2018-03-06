<footer>
    <div class="footer">
        <div class="ftop fix">
            <div class="fleft pc"></div>
            <div class="fright skew pc"></div>
            <div class="fright-fix pc"></div>
            <div class="container put">
                <div class="f-l">
                    <?  // ЗАКЕШИРОВАНО ВЕРНО //
                        $path_cache = "cache/static/footer/bottommenu".Yii::app()->params['lan'];
                        if (file_exists($path_cache)) {
                            include_once($path_cache);
                        } else {
                            $bottommenu = SHelper::getModelHeaders("Bottommenu");
                            $i = 1;
                            $c = 1;
                            $count = count($bottommenu);
                            foreach ($bottommenu as $value) {
                                $row_open = '';
                                $row_close = '';
                                if ($i == 1) {
                                    $row_open = '<div class = "row">';
                                } else if ($i == 3) {
                                    $row_close = '</div>';
                                    $i = 0;
                                }
                                if ($c == $count) {
                                    $row_close = '</div>';
                                }
                                $img = json_decode($value->image, true);
                                $result_bottommenu .=
                                    $row_open.'<div class="item"><a href="/'.$value->url_text.'/">'.
                                    '<div class="align-middle"><img style = "margin-right:5px;" src="/upload/Bottommenu/icon/'.$img[0].'"></div>'.
                                    '<div class="align-middle">'.$value->{Yii::app()->params['lan']."name_text"}.'</div>'.
                                    '</a></div>'.$row_close;
                                $i++;
                                $c++;
                            }
                            file_put_contents($path_cache, $result_bottommenu);
                            echo $result_bottommenu;
                        }
                    ?>
                </div>
                <div class="f-r">
                    <ul>
                        <?  // ЗАКЕШИРОВАНО ВЕРНО //
                            $path_cache_bottomsoc = "cache/static/footer/bottomsoc".Yii::app()->params['lan'];
                            if (file_exists($path_cache_bottomsoc)) {
                                include_once($path_cache_bottomsoc);
                            } else {
                                $bottomsoc = SHelper::getModelHeaders("Bottomsoc");
                                foreach ($bottomsoc as $value) {
                                    $result_bottomsoc .=
                                        '<li><a href="'.$value->url_text.'" target="_blank"><i class="'.$value->icon_text.'" aria-hidden="true"></i></a></li>';
                                }
                                file_put_contents($path_cache_bottomsoc, $result_bottomsoc);
                                echo $result_bottomsoc;
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="fbottom"></div>
    </div>
</footer>