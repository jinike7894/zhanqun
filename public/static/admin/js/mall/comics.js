define(["jquery", "easy-admin"], function ($, ea) {

    var init = {
        table_elem: '#currentTable',
        table_render_id: 'currentTableRenderId',
        index_url: 'mall.comics/index',
        add_url: 'mall.comics/add',
        edit_url: 'mall.comics/edit',
        delete_url: 'mall.comics/delete',
        export_url: 'mall.comics/export',
        modify_url: 'mall.comics/modify',
    };

    var Controller = {

        index: function () {
            ea.table.render({
                init: init,
                cols: [[
                    {type: 'checkbox'},
                    {field: 'id', title: 'id'},
                    {field: 'cate_id', title: '分类ID'},
                    {field: 'is_recommend', title: 'is_recommend'},
                    {field: 'title', title: '标题'},
                    {field: 'description', title: '描述'},
                    {field: 'pic', title: '原始图片', search: false, templet: ea.table.image},
                    // {field: 'enpic', title: '加密图片'},
                    {field: 'eye', title: '浏览量'},
                    {field: 'author', title: '作者'},
                    {field: 'tags', title: 'tags'},
                    {field: 'sort', title: '排序', edit: 'text'},
                    {field: 'status', title: '状态(1:禁用,2:启用)', templet: ea.table.switch},
                    // {field: 'is_finish', title: '是否完结'},
                    // {field: 'renqi', title: '人气'},
                    // {field: 'tuijian', title: '推荐'},
                    // {field: 'shoucang', title: '收藏'},
                    // {field: 'resou', title: '热搜'},
                    {field: 'remark', title: '备注说明', templet: ea.table.text},
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