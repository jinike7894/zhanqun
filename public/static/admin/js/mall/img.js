define(["jquery", "easy-admin"], function ($, ea) {

    var init = {
        table_elem: '#currentTable',
        table_render_id: 'currentTableRenderId',
        index_url: 'mall.img/index',
        add_url: 'mall.img/add',
        edit_url: 'mall.img/edit',
        delete_url: 'mall.img/delete',
        export_url: 'mall.img/export',
        modify_url: 'mall.img/modify',
    };

    var Controller = {

        index: function () {
            ea.table.render({
                init: init,
                cols: [[
                    {type: 'checkbox'},
                    {field: 'id', title: 'id'},
                    {field: 'title', title: '标题'},
                    {field: 'pic', title: '图片'},
                    {field: 'create_time', title: '创建'},
                    {field: 'eye', title: '阅读数'},
                    {field: 'pic_num', title: '张数'},
                    {field: 'detail', title: '详情'},
                    // {field: 'cate_id', title: '分类',search:'select',selectList:{'title':'mall.img_cate/getcategory'},sort: true},
                    {field: 'status', title: '状态', templet: ea.table.switch},
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