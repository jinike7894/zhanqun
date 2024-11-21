define(["jquery", "easy-admin"], function ($, ea) {

    var init = {
        table_elem: '#currentTable',
        table_render_id: 'currentTableRenderId',
        index_url: 'website.site/index',
        add_url: 'website.site/add',
        edit_url: 'website.site/edit',
        delete_url: 'website.site/delete',
        export_url: 'website.site/export',
        modify_url: 'website.site/modify',
        sit_setting: 'website.site/settings',
    };

    var Controller = {

        index: function () {
            ea.table.render({
                init: init,
                cols: [[
                    {type: 'checkbox'},
                    {field: 'id', title: 'id'},
                    {field: 'name', title: '名称'},
                    {field: 'domain', title: '域名'},
                    // {field: 'create_time', title: 'create_time'},
                    {field: 'type', title: '站点类型'},
                    // {field: 'template', title: '站点模板'},
                    {field: 'icon', title: 'logo', templet: ea.table.image},
                    {
                        width: 250,
                        title: '操作',
                        templet: ea.table.tool,
                        operat: [
                            'edit',
                            [{
                                text: '产品配置',
                                url: init.sit_setting,
                                field: 'id,date',
                                method: 'open',
                                auth: 'sit_setting',
                                class: 'layui-btn layui-btn-normal layui-btn-xs',
                            }],
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
        },
        sit_setting: function () {
            var tree = layui.tree;

            ea.request.get(
                {
                    url: window.location.href,
                }, function (res) {
                    res.data = res.data || [];
                    tree.render({
                        elem: '#node_ids',
                        data: res.data,
                        showCheckbox: true,
                        id: 'nodeDataId',
                    });
                }
            );

            ea.listen(function (data) {
                var checkedData = tree.getChecked('nodeDataId');
                var ids = [];
                $.each(checkedData, function (i, v) {
                    ids.push(v.id);
                    if (v.children !== undefined && v.children.length > 0) {
                        $.each(v.children, function (ii, vv) {
                            ids.push(vv.id);
                        });
                    }
                });
                data.node = JSON.stringify(ids);
                return data;
            });

        }
    };
    return Controller;
});