<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WoocommerceTesting;
use Codexshaper\WooCommerce\Facades\Product;
use Automattic\WooCommerce\Client;

class WoocommerceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        //  $woocommerce = env('WOOCOMMERCE_STORE_URL');
        //  $woocommerce->get('products/12');
        $woock = env('WOOCOMMERCE_CONSUMER_KEY', 'ck_1991a84cb451eee115277a989957aabdcee9bb89');
        $woocs = env('WOOCOMMERCE_SECRET_KEY', 'cs_6f517e98103ceab2ab4c40a9ce1fc991dd4986c1');
        $params['consumer_key'] = $woock;
        $params['consumer_secret']  = $woocs;
        // $wooproducts = file_get_contents('http://localhost/wpcommerce/wordpress/wp-json/wc/v3/products');

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://localhost/wpcommerce/wordpress/wp-json/wc/v3/products/12',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'Authorization: Basic'.$params['consumer_secret']
          ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);

        // print everything out
        dd($response);
        return $response;
        //  $default = Product::find(12);
        //  dd($default);
        return view('testing_woo_api', compact('woocommerce'));
    }

    public function dieqyPunya(){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://localhost/wpcommerce/wordpress/wp-json/wc/v3/products/12',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Basic Y2tfMTk5MWE4NGNiNDUxZWVlMTE1Mjc3YTk4OTk1N2FhYmRjZWU5YmI4OTpjc182ZjUxN2U5ODEwM2NlYWIyYWI0YzQwYTljZTFmYzk5MWRkNDk4NmMx'
            ),
        ));
        $response = curl_exec($curl);
        if(!$response){
            dd(curl_error($curl));
        }
        curl_close($curl);

        // print everything out
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
