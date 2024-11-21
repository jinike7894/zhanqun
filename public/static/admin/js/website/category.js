define(["jquery", "easy-admin"], function ($, ea) {

    var init = {
        table_elem: '#currentTable',
        table_render_id: 'currentTableRenderId',
        index_url: 'website.category/index',
        // add_url: 'website.category/add',
        edit_url: 'website.category/edit',
        // delete_url: 'website.category/delete',
        export_url: 'website.category/export',
        modify_url: 'website.category/modify',
    };

    var Controller = {

        index: function () {
            ea.table.render({
                init: init,
                cols: [[
                    {type: 'checkbox'},
                    {field: 'id', title: 'id'},
                    {field: 'name', title: '站点类型名称'},
                    {field: 'create_time', title: '创建时间'},
                    {width: 250, title: '操作', templet: ea.table.tool},
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