<?php
namespace app\common\paginator;

use think\paginator\driver\Bootstrap;

class CustomPaginator extends Bootstrap
{
    // 自定义渲染方法
    protected function getSimpleLinks()
    {
        if ($this->hasPages()) {
            // 获取当前页码及总页数
            $currentPage = $this->currentPage();
            $totalPages = $this->lastPage();

            // 自定义分页 HTML
            $html = '<nav><ul class="pagination">';

            // 上一页按钮
            if ($currentPage > 1) {
                $html .= '<li class="page-item"><a class="page-link" href="' . $this->url($currentPage - 1) . '">上一页1</a></li>';
            } else {
                $html .= '<li class="page-item disabled"><span class="page-link">上一页</span></li>';
            }

            // 页码按钮
            for ($i = 1; $i <= $totalPages; $i++) {
                if ($i == $currentPage) {
                    $html .= '<li class="page-item active"><span class="page-link">' . $i . '</span></li>';
                } else {
                    $html .= '<li class="page-item"><a class="page-link" href="' . $this->url($i) . '">' . $i . '</a></li>';
                }
            }

            // 下一页按钮
            if ($currentPage < $totalPages) {
                $html .= '<li class="page-item"><a class="page-link" href="' . $this->url($currentPage + 1) . '">下一页</a></li>';
            } else {
                $html .= '<li class="page-item disabled"><span class="page-link">下一页</span></li>';
            }

            $html .= '</ul></nav>';

            return $html;
        }
    }
}
