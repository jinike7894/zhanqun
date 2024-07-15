//define(["jquery", "easy-admin"], function ($, ea) {
define(["jquery", "easy-admin", "treetable", "iconPickerFa", "autocomplete"], function ($, ea) {

    var table = layui.table,
        treetable = layui.treetable,
        iconPickerFa = layui.iconPickerFa,
        autocomplete = layui.autocomplete;
		
    var init = {
        table_elem: '#currentTable',
        table_render_id: 'currentTableRenderId',
        index_url: 'mall.data/index',
        modify_url: 'mall.data/modify',
        export_url: 'mall.data/export',
    };

    var Controller = {

        index: function () {
            ea.table.render({
                init: init,
                cols: [[
                    {type: "checkbox"},
                    {field: 'id', width: 80, title: 'ID'},
                    {field: 'weizhi', minWidth: 150, title: '排序(越小越靠前)'},
                    {field: 'name', Width: 80, title: '产品名称'},
                    {field: 'img', Width: 80, title: '产品图片', search: false, templet: ea.table.image},
                    {field: 'date', minWidth: 0, title: '查询时间',search: 'range',delete:true},
                    {field: 'channelCode', minWidth: 0, title: '推广渠道',search:'select',selectList:{'name':'/gladmin/mall.data/getchannelCode1'},dong:true},
                    {field: 'clicks', Width: 80, title: '点击次数', search: false,sort:true},
                    {field: 'cost', Width: 80, title: '点击收益', search: false},
                    {field: 'income', Width: 80, title: '产品收益',edit:'int', search: false,sort:true},					
                ]],
            });
            ea.listen();
        }
    };
    return Controller;
});