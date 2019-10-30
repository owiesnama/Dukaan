<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use App\Product;
use App\User;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class DashboardController extends Controller
{

    public function index()
    {
        $users = User::count() - 1;
        $products = Product::count();
        $pendingOrders = Order::status('pending')->count();
        $revenues = Order::status('accepted')->get()->sum('amount');

        $charts = $this->charts();

        return view('admin.dashboard',
            compact(
                'users',
                'products',
                'pendingOrders',
                'revenues',
                'charts'
            )
        );
    }

    private function charts()
    {
        $ordersByDayChart = new LaravelChart([
            'chart_title'     => 'Orders by days',
            'report_type'     => 'group_by_date',
            'model'           => Order::class,
            'group_by_field'  => 'created_at',
            'group_by_period' => 'day',
            'chart_type'      => 'line',
        ]);
        $ordersByMonthChart = new LaravelChart([
            'chart_title'     => 'Orders by months',
            'report_type'     => 'group_by_date',
            'model'           => Order::class,
            'group_by_field'  => 'created_at',
            'group_by_period' => 'month',
            'chart_type'      => 'bar',
        ]);

        $productsPerCategory = new LaravelChart([
            'chart_title'       => 'Products per category',
            'model'             => Product::class,
            'report_type'       => 'group_by_relationship',
            'relationship_name' => 'category',
            'group_by_field'    => 'name',
            'chart_type'        => 'pie',
        ]);

        return [
            $ordersByDayChart,
            $ordersByMonthChart,
            $productsPerCategory,
        ];
    }
}
