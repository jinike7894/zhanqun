define(["jquery", "easy-admin"], function ($, ea) {

    var init = {
        table_elem: '#currentTable',
        table_render_id: 'currentTableRenderId',
        index_url: 'mall.novelcate/index',
        add_url: 'mall.novelcate/add',
        edit_url: 'mall.novelcate/edit',
        delete_url: 'mall.novelcate/delete',
        export_url: 'mall.novelcate/export',
        modify_url: 'mall.novelcate/modify',
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