<?php

/*
 * This file is part of the Cdi package.
 *
 * (c) Cristian Incarnato
 *
 * @author Cristian Incarnato
 * @license http://opensource.org/licenses/BSD-3-Clause
 * 
 */
return array(
    'zf-metal-datagrid.options' => array(
        'recordsPerPage' => 10,
        'templates' => array(
            'default' => array(
                'form_view' => 'ZfMetal\Datagrid/form/form-default',
                'grid_view' => 'ZfMetal\Datagrid/grid/grid-default',
                'detail_view' => 'ZfMetal\Datagrid/detail/detail-default',
                'pagination_view' => 'ZfMetal\Datagrid/pagination/pagination-default'
            ),
            'ajax' => array(
                'form_view' => 'ZfMetal\Datagrid/form/form-ajax',
                'grid_view' => 'ZfMetal\Datagrid/grid/grid-ajax',
                'detail_view' => 'ZfMetal\Datagrid/detail/detail-ajax',
                'pagination_view' => 'ZfMetal\Datagrid/pagination/pagination-ajax'
            )
        )
    ),
    'view_helpers' => array(
        'invokables' => array(
            'JsCrud' => 'ZfMetal\Datagrid\View\Helper\JsCrud',
            'JsAbmAjaxModal' => 'ZfMetal\Datagrid\View\Helper\JsAbmAjaxModal',
            //News
            'Grid' => 'ZfMetal\Datagrid\View\Helper\Grid',
            'GridCrud' => 'ZfMetal\Datagrid\View\Helper\GridCrud',
            'GridCrudAjax' => 'ZfMetal\Datagrid\View\Helper\GridCrudAjax',
            'GridField' => 'ZfMetal\Datagrid\View\Helper\GridField',
            'GridFieldString' => 'ZfMetal\Datagrid\View\Helper\GridFieldString',
            'GridFieldText' => 'ZfMetal\Datagrid\View\Helper\GridFieldText',
            'GridFieldBoolean' => 'ZfMetal\Datagrid\View\Helper\GridFieldBoolean',
            'GridFieldDateTime' => 'ZfMetal\Datagrid\View\Helper\GridFieldDateTime',
            'GridFieldExtra' => 'ZfMetal\Datagrid\View\Helper\GridFieldExtra',
            'GridFieldCrud' => 'ZfMetal\Datagrid\View\Helper\GridFieldCrud',
            'GridFieldLink' => 'ZfMetal\Datagrid\View\Helper\GridFieldLink',
            'GridFieldLongText' => 'ZfMetal\Datagrid\View\Helper\GridFieldLongText',
            'GridFieldCustom' => 'ZfMetal\Datagrid\View\Helper\GridFieldCustom',
            'GridFieldFile' => 'ZfMetal\Datagrid\View\Helper\GridFieldFile',
            'GridFieldRelational' => 'ZfMetal\Datagrid\View\Helper\GridFieldRelational',
            'GridBtnAdd' => 'ZfMetal\Datagrid\View\Helper\GridBtnAdd',
        )
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'ZfMetal\Datagrid' => __DIR__ . '/../view',
        ),
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'template_map' => array(
            'widget/csvForm' => __DIR__ . '/../view/widget/csv-form.phtml',
        ),
    ),

);
