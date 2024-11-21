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
                    {type: 'checkbox'},                    {field: 'id', title: 'id'},                    {field: 'pid', title: 'pid'},                    {field: 'title', title: '分类名'},                    {field: 'sort', title: '排序', edit: 'text'},                    {field: 'status', title: '状态(1:禁用,2:启用)', templet: ea.table.switch},                    {field: 'remark', title: '备注说明', templet: ea.table.text},                    {field: 'create_time', title: '创建时间'},                    {width: 250, title: '操作', templet: ea.table.tool},
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