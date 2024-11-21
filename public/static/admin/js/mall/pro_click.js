
define(["jquery", "easy-admin"], function ($, ea) {

    var init = {
        table_elem: '#currentTable',
        table_render_id: 'currentTableRenderId',
        index_url: 'mall.pro_click/show',
  
    };

    var Controller = {

        index: function () {
            ea.table.render({
                init: init,
                cols: [[
                    {type: 'checkbox'},
                    {field: 'id', title: 'id'},
                    {field: 'site_id', title: '站点'},
                    {field: 'site_category_id', title: '站点类型'},
                    {field: 'ip_total', title: '进站ip'},
                    {field: 'ip_nei', title: '内部ip'},
                    {field: 'ip_wai', title: '外部ip'},
                    {field: 'ip_click', title: '点击ip'},
                    {field: 'pro_click_total', title: '产品点击数'},
                    {field: 'pro_click_nei', title: '内链产品ip点击'},
                    {field: 'pro_click_wai', title: '外链产品ip点击'},
                    {field: 'date', title: '时间'},
                    {field: 'create_time', title: '创建时间'},
                    {
                        width: 130,
                        title: '操作',
                        templet: ea.table.tool,
                        fixed:'right',
                        operat: [
                            [{
                                text: '查看123',
                                url: 'mall.pro_click_show/index',
                                field: 'id,date',
                                method: 'open',
                                auth: 'show',
                                class: 'layui-btn layui-btn-normal layui-btn-xs',
                                extend: 'data-full="true"',
                            }]
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
        },
    };
    return Controller;
});