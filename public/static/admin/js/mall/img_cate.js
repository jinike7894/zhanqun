define(["jquery", "easy-admin"], function ($, ea) {

    var init = {
        table_elem: '#currentTable',
        table_render_id: 'currentTableRenderId',
        index_url: 'mall.img_cate/index',
        add_url: 'mall.img_cate/add',
        edit_url: 'mall.img_cate/edit',
        delete_url: 'mall.img_cate/delete',
        export_url: 'mall.img_cate/export',
        modify_url: 'mall.img_cate/modify',
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