<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminEditCouponsComponent extends Component
{
    public $code;
    public $type;
    public $value;
    public $cart_value;
    public $coupon_id;
    public $expiry_date;

    public function mount($coupon_id){
        $coupon = Coupon::find($coupon_id);
        $this->code = $coupon->code;
        $this->type = $coupon->type;
        $this->value = $coupon->value;
        $this->cart_value = $coupon->cart_value;
        $this->coupon_id = $coupon->coupon_id;
        $this->expiry_date = $coupon->expiry_date;

    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'code' => 'required',
            'type' => 'required',
            'value' => 'required|numeric',
            'cart_value' => 'required|numeric',
            'expiry_date' => 'required'
        ]);
    }

    public function updateCoupon() {
        $this->validate([
            'code' => 'required',
            'type' => 'required',
            'value' => 'required|numeric',
            'cart_value' => 'required|numeric',
            'expiry_date' => 'required'
        ]);
        $coupon = Coupon::find($this->coupon_id);
        $coupon->code = $this->code;
        $coupon->code = $this->type;
        $coupon->code = $this->value;
        $coupon->code = $this->vart_value;
        $coupon->expiry_date = $this->expiry_date; 
        $coupon->save();
        session()->flash('message', 'Coupon has been updated successfully!');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-coupons-component')->layout('layouts.base');
    }
}
