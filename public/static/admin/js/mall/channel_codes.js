define(["jquery", "easy-admin"], function ($, ea,Vue) {

    var table = layui.table,
        treetable = layui.treetable,
        iconPickerFa = layui.iconPickerFa,
        autocomplete = layui.autocomplete;

    var init = {
        table_elem: '#currentTable',
        table_render_id: 'currentTableRenderId',
        index_url: 'mall.channelCodes/index',
        delete_url: 'mall.channelCodes/delete',
        add_url: 'mall.channelCodes/add',
        edit_url: 'mall.channelCodes/edit',
        modify_url: 'mall.channelCodes/modify',
    };

    var Controller = {

        index: function () {
            ea.table.render({
                init: init,
                toolbar: ['refresh', 'add'],
                cols: [[
                    {field: 'id', minWidth: 80, title: 'ID'},
                    {field: 'site', minWidth: 80, title: '站点', searchOp: '='},
                    {field: 'site_category', minWidth: 80, title: '站点类型', searchOp: '='},
                    {field: 'channelCode', minWidth: 80, title: '渠道号', searchOp: '='},
                    {field: 'remark', minWidth: 90, title: '备注', search:false},
                    // {field: 'mininum', minWidth: 100, title: '每日保底量', search:false},
                    // {field: 'ratio', minWidth: 100, title: '扣量比例', search:false},
                    // {field: 'coefficient', minWidth: 80, title: '系数', search:false,edit: 'float'},
                    {field: 'price', minWidth: 100, title: '单价(元)', search:false,edit: 'int'},
                    // {field: 'autoc', minWidth: 100, title: '动态调整', search:false, templet: ea.table.switch},
                    {field: 'status', minWidth: 100, title: '状态', search: 'select', selectList: {0: '禁用', 1: '启用'}, templet: ea.table.switch},

                    {field: 'backjumpstatus', minWidth: 150, title: '返回跳转广告开关', search: 'select', selectList: {0: '禁用', 1: '启用'}, templet: ea.table.switch},
        //             {
    				// 	field: "time_range",
    				// 	title: "x内容自动开启",
    				// 	unresize: "true",
    				// 	align: "center",
    				// 	minWidth: 170,
    				// 	search:false
    				// },
                    {field: 'create_time', minWidth: 176, title: '添加时间', search: false},
                    {
                        minWidth: 120,
                        title: '操作',
                        templet: ea.table.tool,
                        fixed:'right',
                        operat: [
                            'edit',
                            'delete',
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