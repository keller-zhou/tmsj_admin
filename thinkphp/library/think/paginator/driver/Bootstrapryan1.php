<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2017 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: zhangyajun <448901948@qq.com>
// +----------------------------------------------------------------------

namespace think\paginator\driver;

use think\Paginator;

class Bootstrapryan extends Paginator
{

    //首页
    protected function home() {
        if ($this->currentPage() > 1) {
          
             return '<li class="page-item"><a  class="page-link"  href="' . $this->url(1) . '" title="首页" >首</a>  </li>';
          
          
        } else {
             return '<li class="page-item"><a  class="page-link"  title="首页" >首</a>  </li>';
        }
    }
    //上一页
    protected function prev() {
        if ($this->currentPage() > 1) {
             return '<li class="page-item"><a  class="page-link"  href="'  . $this->url($this->currentPage - 1) . '" title="上一页" >上</a>  </li>';
          
          
        } else {
          
             return '<li class="page-item"><a  class="page-link"  title="上一页" >上</a>  </li>';
        }
    }
    //下一页
    protected function next() {
        if ($this->hasMore) {
             return '<li class="page-item"><a  class="page-link"  href="'  . $this->url($this->currentPage + 1) . '" title="下一页" >下</a>  </li>';
          
        } else {
          
             return '<li class="page-item"><a  class="page-link"  title="下一页" >下</a>  </li>';
        }
    }
    //尾页
    protected function last() {
        if ($this->hasMore) {
             return '<li class="page-item"><a  class="page-link"  href="' . $this->url($this->lastPage) . '" title="尾页" >尾</a>  </li>';
        } else {
          
             return '<li class="page-item"><a  class="page-link"  title="尾页" >尾</a>  </li>';
        }
    }
    //统计信息
    protected function info(){
      
             return '<li class="page-item"><span  class="page-link"  >    共<b>' . $this->lastPage . '</b>页<b>' . $this->total .' </b>条数据       </span>  </li>';
    }
    /**
     * 页码按钮
     * @return string
     */
    protected function getLinks()
    {
        $block = [
            'first'  => null,
            'slider' => null,
            'last'   => null
        ];
        $side   = 3;
        $window = $side * 2;
        if ($this->lastPage < $window + 3) {
            $block['first'] = $this->getUrlRange(1, $this->lastPage);
        } elseif ($this->currentPage <= $window) {
            $block['first'] = $this->getUrlRange(1, $window + 2);
            $block['last']  = $this->getUrlRange($this->lastPage - 1, $this->lastPage);
        } elseif ($this->currentPage > ($this->lastPage - $window)) {
            $block['first'] = $this->getUrlRange(1, 2);
            $block['last']  = $this->getUrlRange($this->lastPage - ($window + 2), $this->lastPage);
        } else {
            $block['first']  = $this->getUrlRange(1, 2);
            $block['slider'] = $this->getUrlRange($this->currentPage - $side, $this->currentPage + $side);
            $block['last']   = $this->getUrlRange($this->lastPage - 1, $this->lastPage);
        }
        $html = '';
        if (is_array($block['first'])) {
            $html .= $this->getUrlLinks($block['first']);
        }
        if (is_array($block['slider'])) {
            $html .= $this->getDots();
            $html .= $this->getUrlLinks($block['slider']);
        }
        if (is_array($block['last'])) {
            $html .= $this->getDots();
            $html .= $this->getUrlLinks($block['last']);
        }
        return $html;
    }
    /**
     * 渲染分页html
     * @return mixed
     */
    public function render()
    {
        if ($this->hasPages()) {
            if ($this->simple) {
                return sprintf(
                    '<nav class="my-3"><ul class="pagination"> %s %s %s  </ul></nav>',
                 //   $this->css(),
                    $this->prev(),
                    $this->getLinks(),
                    $this->next()
                );
            } else {
                return sprintf(
                    '<nav class="my-3"><ul class="pagination"> %s %s %s %s %s %s  </ul></nav>',
               //     $this->css(),
                    $this->home(),
                    $this->prev(),
                    $this->getLinks(),
                    $this->next(),
                    $this->last(),
                    $this->info()
                );
            }
        }
    }
    /**
     * 生成一个可点击的按钮
     *
     * @param  string $url
     * @param  int    $page
     * @return string
     */
    protected function getAvailablePageWrapper($url, $page)
    {
        return '<li class="page-item"><a  class="page-link"  href="' . htmlentities($url) . '" title="第"'. $page .'"页" >' . $page . '</a>  </li>';
    }
    /**
     * 生成一个禁用的按钮
     *
     * @param  string $text
     * @return string
     */
    protected function getDisabledTextWrapper($text)
    {
        return '<li class="page-item">' . $text . ' </li>';
    }
    /**
     * 生成一个激活的按钮
     *
     * @param  string $text
     * @return string
     */
    protected function getActivePageWrapper($text)
    {
        return '<li class="page-item"> <a  class="page-link"  href="" class="cur">' . $text . '</a>  </li>';
    }
    /**
     * 生成省略号按钮
     *
     * @return string
     */
    protected function getDots()
    {
        return $this->getDisabledTextWrapper('...');
    }
    /**
     * 批量生成页码按钮.
     *
     * @param  array $urls
     * @return string
     */
    protected function getUrlLinks(array $urls)
    {
        $html = '';
        foreach ($urls as $page => $url) {
            $html .= $this->getPageLinkWrapper($url, $page);
        }
        return $html;
    }
    /**
     * 生成普通页码按钮
     *
     * @param  string $url
     * @param  int    $page
     * @return string
     */
    protected function getPageLinkWrapper($url, $page)
    {
        if ($page == $this->currentPage()) {
            return $this->getActivePageWrapper($page);
        }
        return $this->getAvailablePageWrapper($url, $page);
    }
    /**
     * 分页样式
     */
    protected function css(){
        return '  <style type="text/css">

        </style>';
    }
}