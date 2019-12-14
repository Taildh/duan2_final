<?php

namespace App\Http\Controllers;

use App\Charts\AdminChart;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\User;
use App\Models\Post;
class AdminChartController extends Controller
{
    public function mostViewProduct()
    {
        $borderColors = [
            "rgba(255, 99, 132, 1.0)",
            "rgba(22,160,133, 1.0)",
            "rgba(255, 205, 86, 1.0)",
            "rgba(51,105,232, 1.0)",
            "rgba(244,67,54, 1.0)",
            "rgba(34,198,246, 1.0)",
            "rgba(153, 102, 255, 1.0)",
            "rgba(255, 159, 64, 1.0)",
            "rgba(233,30,99, 1.0)",
            "rgba(205,220,57, 1.0)"
        ];
        $fillColors = [
            "rgba(255, 99, 132, 0.2)",
            "rgba(22,160,133, 0.2)",
            "rgba(255, 205, 86, 0.2)",
            "rgba(51,105,232, 0.2)",
            "rgba(244,67,54, 0.2)",
            "rgba(34,198,246, 0.2)",
            "rgba(153, 102, 255, 0.2)",
            "rgba(255, 159, 64, 0.2)",
            "rgba(233,30,99, 0.2)",
            "rgba(205,220,57, 0.2)"
        ];
        $adminChart = new AdminChart();
        $product = DB::table('product')
            ->orderBy('views','desc')
            ->limit(5)
            ->get();
        $adminChart->labels([$product[0]->name,
            $product[1]->name,
            $product[2]->name,
            $product[3]->name,
            $product[4]->name,]);
        $adminChart->dataset('San pham co luot xem cao nhat', 'line',[$product[0]->views,
            $product[1]->views,
            $product[2]->views,
            $product[3]->views,
            $product[4]->views])
            ->color($borderColors)
            ->backgroundcolor($fillColors);
        $adminChart2 = new AdminChart();
        $something = DB::table('order_product')
                    ->get(['total_price', 'sent_date'])
                    ->groupBy(function($date) {
                    return Carbon::parse($date->sent_date)->format('m');
        });
        $orders = Order::select(
            DB::raw('sum(total_price) as sums'),
            DB::raw("DATE_FORMAT(sent_date,'%M %Y') as months")
        )
            ->groupBy('months')
            ->get();
        $adminChart2->labels([
            $orders[2]->months,
            $orders[0]->months,
            $orders[6]->months,
            $orders[5]->months,
            $orders[4]->months,
            $orders[1]->months,
            ]);
        $adminChart2->dataset('Tổng tiền đơn hàng theo tháng', 'line',
            [
            $orders[2]->sums,
            $orders[0]->sums,
            $orders[6]->sums,
            $orders[5]->sums,
            $orders[4]->sums,
            $orders[1]->sums,
            ]);
        $countpro = Product::where('status',1)->count();
        $countview = Post::sum('views');
        $countuser = User::count();
        $countorder = Order::count();
        return view('admin',compact('adminChart','adminChart2','countpro','countview','countuser','countorder'));
    }
}
