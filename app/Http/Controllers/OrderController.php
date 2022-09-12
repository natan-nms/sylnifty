<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Service;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get all orders
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function SelectedServiceStore(Request $request)
    {
      //get a order from session
        $order = $request->session()->get('order');
        //set the service id
        //converte id string into int
        $order['service_id'] = (int)$request->serivce_id;
        //get price of service
        $service = Service::find($order['service_id']);

        //push to array price of service
        $order['price'] = $service->price;
        $order['short_description'] = $service->short_description;
        $order['long_description'] = $service->long_description;
        $order['image'] = $service->image;
        $order['status'] = 'aguardando';
        return $order;
        //save order in DB
        $order = Order::create($order);
        //create success message in session
        $request->session()->flash('success', 'Serviço selecionado com sucesso!');

        return back();

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //save
        $oder = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'whatsapp'=> $request->whatsapp == 'true' ? true : false,
            'service_id' => $request->service_id
        ];
        //save order in session
        $request->session()->put('order', $oder);
        return redirect('/services');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
