define(["jquery", "easy-admin"], function ($, ea) {

    var init = {
        table_elem: '#currentTable',
        table_render_id: 'currentTableRenderId',
        index_url: 'mall.product/index',
        add_url: 'mall.product/add',
        edit_url: 'mall.product/edit',
        delete_url: 'mall.product/delete',
        export_url: 'mall.product/export',
        modify_url: 'mall.product/modify',
    };

    var Controller = {

        index: function () {
            ea.table.render({
                init: init,
                cols: [[
                    {type: "checkbox"},
                    {field: 'id', width: 80, title: 'ID'},
                    {field: 'type', minWidth: 150, title: '区域',searchOp:'='},
                    {field: 'sort', minWidth: 180, title: '排序(越小越靠前)', edit: 'int',search: false,sort:true},
                    {field: 'title', Width: 80, title: '产品名称', edit: 'text'},
                    {field: 'pic', Width: 80, title: '产品图片', search: false, templet: ea.table.image},
                    {field: 'url', minWidth: 150, title: '产品链接', edit: 'text'},
                    {field: 'downtime', minWidth: 150, title: '下载次数', edit: 'int', search: false},
                    {field: 'slogan', minWidth: 150, title: '简介', edit: 'text'},
                    {field: 'status', title: '状态', width: 85, search: 'select', selectList: {0: '禁用', 1: '启用'}, templet: ea.table.switch},
                    {
                        width: 250,
                        title: '操作',
                        templet: ea.table.tool,
                        operat: [
                            'edit',
                            'delete'
                        ]
                    }
                ]],
            });

            ea.listen();
        },
        add: function () {
            ea.listen();
        },
        edit: function () {
            ea.listen();
        }
    };
    return Controller;
});