<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coupon;
use App\Http\Requests\CouponRequest;

class CouponController extends Controller
{
    public function store(CouponRequest $request)
    {
    	$cart = Session()->get('cart');
        if (session('cart')) {
            $total = 0;
            foreach (session('cart') as $id => $c) {
                $total += $c['price'] * $c['quantity'];
            }
        }
    	
		$coupon = Coupon::where('code', $request->code)->first();

	  	if ($total < $coupon->minimum) {
	            return back()->with('errPrice', "Đơn hàng phải trên $coupon->minimum VNĐ để được ưu đãi");
	        } else {
	            session()->put('coupon', [
	                'id'=>$coupon->id,
	                'name' => $coupon->code,
	                'discount' => $coupon->percent_off,
	                'minimun' => $coupon->minimum,
	                'totalM' =>$total,
	            ]);
	            return back()->with('successCoupon', 'Ap dung thanh cong ma giam gia');
	        }
	    }
	    
    public function destroy()
    {
        session()->forget('coupon');
        return back()->with('removeCoupon', 'Hủy mã giảm giá thành công');
    }
}