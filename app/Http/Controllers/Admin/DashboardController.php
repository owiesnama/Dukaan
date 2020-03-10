<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use App\Product;
use App\User;
use Illuminate\Support\Facades\Cache;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class DashboardController extends Controller
{

    public function index()
    {
        return view('admin.dashboard')
            ->with('users', User::count() - 1)
            ->with('products', Product::count())
            ->with('pendingOrders', Order::status('pending')->count())
            ->with('revenues', Order::status('accepted')->get()->sum('amount'))
            ->with('charts', Cache::rememberForEver('charts', function () {
                return $this->charts();
            }));
    }

    private function charts()
    {
        $ordersByDayChart = new LaravelChart([
            'chart_title' => 'Orders by days',
            'report_type' => 'group_by_date',
            'model' => Order::class,
            'group_by_field' => 'created_at',
            'group_by_period' => 'day',
            'chart_type' => 'line',
        ]);
        $ordersByMonthChart = new LaravelChart([
            'chart_title' => 'Orders by months',
            'report_type' => 'group_by_date',
            'model' => Order::class,
            'group_by_field' => 'created_at',
            'group_by_period' => 'month',
            'chart_type' => 'bar',
        ]);

        $productsPerCategory = new LaravelChart([
            'chart_title' => 'Products per category',
            'model' => Product::class,
            'report_type' => 'group_by_relationship',
            'relationship_name' => 'category',
            'group_by_field' => 'name',
            'chart_type' => 'bar',
        ]);

        return [
            $ordersByDayChart,
            $ordersByMonthChart,
            $productsPerCategory,
        ];
    }
}
