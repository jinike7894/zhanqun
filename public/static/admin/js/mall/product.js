define(["jquery", "easy-admin", "vue"], function ($, ea,Vue) {

    var form = layui.form,
        table = layui.table;

    var init = {
        table_elem: '#currentTable',
        table_render_id: 'currentTableRenderId',
        index_url: 'mall.product/index',
        add_url: 'mall.product/add',
        edit_url: 'mall.product/edit',
        delete_url: 'mall.product/delete',
        export_url: 'mall.product/export',
        modify_url: 'mall.product/modify',
        batchedit_url: 'mall.product/batchEdit',
        copy_url: 'mall.product/copy',
    };

    var Controller = {

        index: function () {
            ea.table.render({
                init: init,
                toolbar: ['refresh', 'add' ,[{
                    text: '批量替换链接',
                    url: init.batchedit_url,
                    method: 'open',
                    auth: 'batchedit',
                    checkbox: true,
                    class: 'layui-btn layui-btn-normal layui-btn-sm',
                    //extend: 'data-full="true"',
                }], 'delete'],
                cols: [[
                    {type: "checkbox"},
                    {field: 'id', width: 80, title: 'ID'},
                    {field: 'title', width: 180, title: '分类',search:'select',selectList:{'name':'/gladmin/mall.type/getptype'},fieldAlias:'pid',dong:true},
                    {field: 'cate_title', width: 80, title: '类别',search:'select',selectList:{'name':'/gladmin/mall.category/getpcate'},fieldAlias:'cid',dong:true, sort: true},
                    {field: 'sort', width: 80, title: '排序(小靠前)', edit: 'int',search: false,sort:true},
                    {field: 'name', width: 120, title: '外显名称', edit: 'textarea',sort:true},
                    {field: 'k_name', width: 120, title: '客户名称', edit: 'text',sort:true},
                    {field: 'img', width: 180, title: '产品图片', search: false, templet: ea.table.image},
                    {field: 'androidurl', width: 180, title: '产品链接', edit: 'text',sort:true},
                    // {field: 'status', filter:'status1', title: '暂停', width: 85, search: false, templet: ea.table.switch,
                    //     switchfunc: function(res) {
                    //         var data = {
                    //             id: res.id,
                    //             field: 'status',
                    //             value: res.checked == 1 ? 1 : 2,
                    //         };
                    //         ea.request.post({
                    //             url: init.modify_url,
                    //             prefix: true,
                    //             data: data,
                    //         }, function (res) {
                    //             table.reload(init.table_render_id);
                    //         }, function (res) {
                    //             ea.msg.error(res.msg, function () {
                    //                 table.reload(init.table_render_id);
                    //             });
                    //         }, function () {
                    //             table.reload(init.table_render_id);
                    //         });
                    //     }
                    // },
                    {field: 'status', title: '状态', width: 85, search: 'select', selectList: {0: '禁用', 1: '启用',2: '暂停'}, templet: ea.table.switch},
                    {field: 'url_type', title: '跳转方式', width: 85, search: 'select', selectList: {0: '站外', 1: '站内'}},
                    {
                        width: 170,
                        title: '操作',
                        templet: ea.table.tool,
                        fixed: 'right',
                        operat: [
                            'edit',
                            'delete',
                            [{
                                text: '复制',
                                url: init.copy_url,
                                method: 'open',
                                auth: 'copy',
                                class: 'layui-btn layui-btn-normal layui-btn-xs',
                                //extend: 'data-full="true"',
                            }],
                        ]
                    },
                ]],
                done: function(res, curr, count){
                    $('.layui-table-body.layui-table-main tbody tr').each(function(index, val) {
                        // $($(".layui-table-fixed-l .layui-table-body tbody tr")[index]).height($(val).height());
                        $($(".layui-table-fixed-r .layui-table-body tbody tr")[index]).height($(val).height());
                    })
                },
            });

            ea.listen();
        },
        add: function () {
            var app = new Vue({
                el: '#app',
                data: {
                    is_best: is_best,
                }
            });
            form.on('radio(is_best)', function (data) {
                app.is_best = this.value;
            });
            ea.listen();
        },
        edit: function () {
            var app = new Vue({
                el: '#app',
                data: {
                    is_best: is_best,
                }
            });
            form.on('radio(is_best)', function (data) {
                app.is_best = this.value;
            });
            ea.listen();
        },
        batchEdit: function () {
            ea.listen();
        },
        copy: function() {
            var app = new Vue({
                el: '#app',
                data: {
                    is_best: is_best,
                }
            });
            form.on('radio(is_best)', function (data) {
                app.is_best = this.value;
            });
            ea.listen();
        },
    };
    $(document).ready(function() {
        $('#url_type').change(function() {
            var selectedValue = $(this).val();
            console.log("选中的值是: " + selectedValue);
        });
    });
    return Controller;
});