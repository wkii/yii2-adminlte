<?php
/**
 * Breadcrumbs for AdminLTE
 * @author terry<digihero@gmail.com>
 */

namespace Wkii\AdminLTE\widgets;
use Yii;
use yii\helpers\Html;

class Breadcrumbs extends \yii\widgets\Breadcrumbs
{
    /**
     * Renders the widget.
     */
    public function run()
    {
        if (empty($this->links)) {
            return;
        }
        $links = [];
        if ($this->homeLink === null) {
            $links[] = $this->renderItem([
                'label' => '<i class="fa fa-dashboard"></i> ' . Html::encode(Yii::t('yii', 'Home')),
                'url' => Yii::$app->homeUrl,
                'encode' => false
            ], $this->itemTemplate);
        } elseif ($this->homeLink !== false) {
            $links[] = $this->renderItem($this->homeLink, $this->itemTemplate);
        }
        foreach ($this->links as $link) {
            if (!is_array($link)) {
                $link = ['label' => $link];
            }
            $links[] = $this->renderItem($link, isset($link['url']) ? $this->itemTemplate : $this->activeItemTemplate);
        }
        echo Html::tag($this->tag, implode('', $links), $this->options);
    }

}