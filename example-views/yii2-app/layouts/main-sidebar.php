<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <section class="sidebar">

        <?= Wkii\AdminLTE\Widgets\Menu::widget([
            'items' => [
                ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
                ['label' => 'Welcome', 'url' => ['site/welcome'], 'icon' =>'fa-gavel', 'pjax'=>true],
                ['label' => 'Gii', 'url' => ['/gii'], 'icon' =>'fa-gavel', 'pjax'=>true],
                ['label' => 'Debug', 'url' => ['/debug'], 'icon' => 'fa-bug'],
                ['label' => 'Login', 'url' => ['site/logout'], 'visible' => !Yii::$app->user->isGuest, 'icon' => 'fa-sign-out'],

                [
                    'label' => 'Level One',
                    'url' => 'javascript:;',
                    'icon' => 'fa-folder',
                    'items' => [
                        [
                            'label' => 'Level Two',
                            'url' => '#',
                            'icon' => 'fa-link',
                        ],
                        [
                            'label' => 'Level Two',
                            'url' => '#',
                            'icon' => 'fa-link',
                        ],
                        [
                            'label' => 'Level Two',
                            'url' => '#',
                            'icon' => 'fa-share',
                            'items' => [
                                [
                                    'label' => 'Level Three',
                                    'url' => '#',
                                    'icon' => 'fa-link'
                                ],
                                [
                                    'label' => 'Level Three',
                                    'url' => '#',
                                    'icon' => 'fa-folder',
                                    'items' => [
                                        [
                                            'label' => 'Level Four',
                                            'url' => '#',
                                        ],
                                        [
                                            'label' => 'Level Four',
                                            'url' => '#',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ]) ?>

    </section>
    <!-- /.sidebar -->
</aside>
