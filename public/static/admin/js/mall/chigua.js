define(["jquery", "easy-admin"], function ($, ea) {

    var init = {
        table_elem: '#currentTable',
        table_render_id: 'currentTableRenderId',
        index_url: 'mall.chigua/index',
        add_url: 'mall.chigua/add',
        edit_url: 'mall.chigua/edit',
        delete_url: 'mall.chigua/delete',
        export_url: 'mall.chigua/export',
        modify_url: 'mall.chigua/modify',
    };

    var Controller = {

        index: function () {
            ea.table.render({
                init: init,
                cols: [[
                    {type: 'checkbox'},
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