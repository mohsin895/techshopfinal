<?php

namespace App\Exports;

use App\Models\Order;
use Maatwebsite\Excel\Concerns\WithHeadings;

use Maatwebsite\Excel\Concerns\FromCollection;

class OrdersExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
      

        $startDate = request()->input('from') ;
        $endDate   = request()->input('to') ;
        if( $startDate || $endDate){
            return Order::whereBetween('created_at', [ $startDate, $endDate ] )
            ->select("Order_id", "user_email", "phone","grand_total")->get();
        }else{
            return Order::select("Order_id", "user_email", "phone","grand_total")->get();
        }
        
    }


    public function headings(): array
    {
        return ["Order ID", "Email", "Phone","Grand Sub Total"];
    }
}
