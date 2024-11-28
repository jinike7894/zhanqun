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
                    {type: 'checkbox'},                    {field: 'id', title: 'id'},                    {field: 'title', title: '标题'},                    {field: 'sort', title: '排序', edit: 'text'},                    {field: 'status', title: '状态', templet: ea.table.switch},                    {field: 'remark', title: '备注', templet: ea.table.text},                    {field: 'create_time', title: '创建时间'},                    {field: 'pid', title: '子分类'},                    {width: 250, title: '操作', templet: ea.table.tool},
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