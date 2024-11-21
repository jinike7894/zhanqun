define(["jquery", "easy-admin"], function ($, ea) {

    var init = {
        table_elem: '#currentTable',
        table_render_id: 'currentTableRenderId',
        index_url: 'mall.chigua_cate/index',
        add_url: 'mall.chigua_cate/add',
        edit_url: 'mall.chigua_cate/edit',
        delete_url: 'mall.chigua_cate/delete',
        export_url: 'mall.chigua_cate/export',
        modify_url: 'mall.chigua_cate/modify',
    };

    var Controller = {

        index: function () {
            ea.table.render({
                init: init,
                cols: [[
                    {type: 'checkbox'},                    {field: 'id', title: 'id'},                    {field: 'title', title: '分类'},                    {field: 'icon', title: '图标', templet: ea.table.image},                    {field: 'sort', title: '排序', edit: 'text'},                    {width: 250, title: '操作', templet: ea.table.tool},
                ]],
            });

            ea.listen();
        },
        add: function () {
            ea.listen();
        },
        edit: function () {
            ea.listen();
        },
    };
    return Controller;
});