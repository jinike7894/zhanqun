define(["jquery", "easy-admin"], function ($, ea) {

    var init = {
        table_elem: '#currentTable',
        table_render_id: 'currentTableRenderId',
        index_url: 'mall.comiccate/index',
        add_url: 'mall.comiccate/add',
        edit_url: 'mall.comiccate/edit',
        delete_url: 'mall.comiccate/delete',
        export_url: 'mall.comiccate/export',
        modify_url: 'mall.comiccate/modify',
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