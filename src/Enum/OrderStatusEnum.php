<?php

namespace App\Enum;

enum OrderStatusEnum: string {
    case Paid = 'paid';
    case Unpaid= 'unpaid'; 
}

