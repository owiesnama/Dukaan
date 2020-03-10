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
    }

    private function charts()
    {
        $ordersByDayChart = new LaravelChart([
            'group_by_period' => 'day',
        ]);
        $ordersByMonthChart = new LaravelChart([
            'group_by_period' => 'month',
        ]);

        $productsPerCategory = new LaravelChart([
            'relationship_name' => 'category',
        ]);

        return [
            $ordersByDayChart,
            $ordersByMonthChart,
            $productsPerCategory,
        ];
    }
}
