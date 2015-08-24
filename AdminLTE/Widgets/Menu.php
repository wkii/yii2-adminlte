<?php
/**
 * AdminLTE Menu widget
 * @author Terry<digihero@gmail.com>
 */

namespace Wkii\AdminLTE\widgets;

use yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\helpers\Html;

/**
 * Class Menu
 * @package wkii\widgets *
 */
class Menu extends yii\widgets\Menu
{
    /**
     * @var string the template used to render the body of a menu which is a link.
     * In this template, the token `{url}` will be replaced with the corresponding link URL;
     * while `{label}` will be replaced with the link text.
     * This property will be overridden by the `template` option set in individual menu items via [[items]].
     */
    public $linkTemplate = '<a href="{url}"{pjax}>{icon} <span>{label}</span> {angle}</a>';
    /**
     * @var string the template used to render a list of sub-menus.
     * In this template, the token `{items}` will be replaced with the rendered sub-menu items.
     */
    public $submenuTemplate = '<ul class="treeview-menu">{items}</ul>';
    /**
     * @var boolean whether to activate parent menu items when one of the corresponding child menu items is active.
     * The activated parent menu items will also have its CSS classes appended with [[activeCssClass]].
     */
    public $activateParents = true;

    /**
     * @var array the HTML attributes for the menu's container tag. The following special options are recognized:
     *
     * - tag: string, defaults to "ul", the tag name of the item container tags. Set to false to disable container tag.
     *
     * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
     */
    public $options = ['class' => 'sidebar-menu'];

    /**
     * Renders the content of a menu item.
     * Note that the container and the sub-menus are not rendered here.
     * @param array $item the menu item to be rendered. Please refer to [[items]] to see what data might be in the item.
     * @return string the rendering result
     */
    protected function renderItem($item)
    {
        if (isset($item['url'])) {
            $template = ArrayHelper::getValue($item, 'template', $this->linkTemplate);

            return strtr($template, [
                '{url}' => Html::encode(Url::to($item['url'])),
                '{label}' => $item['label'],
                '{icon}' => isset($item['icon']) ? '<i class="fa '.$item['icon'].'"></i>' : '',
                '{angle}' => isset($item['items']) ? '<i class="fa fa-angle-left pull-right"></i>' : '',
                '{pjax}' => isset($item['pjax']) && $item['pjax'] === true ? ' data-pjax="true"' : ''
            ]);
        } else {
            $template = ArrayHelper::getValue($item, 'template', $this->labelTemplate);

            return strtr($template, [
                '{label}' => $item['label'],
                '{icon}' => isset($item['icon']) ? '<i class="fa '.$item['icon'].'"></i>' : ''
            ]);
        }
    }
}