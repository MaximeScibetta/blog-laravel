<?php
namespace Blog\Http\ViewComposers;

use Carbon\Carbon;
use Illuminate\View\View;

class SidebarComposer{
    public function compose(View $view){

        $archivesSql = \DB::table('posts')->selectRaw('month(created_at) as month, year(created_at) as year')->distinct()->orderByRaw('year(created_at) desc, month(created_at) desc')->get();
        $archives = array_map(function ($item) {
            return Carbon::createFromDate($item->year, $item->month, '01');
        }, $archivesSql->toArray());
        
        $view->with('archives', $archives);
    }
}