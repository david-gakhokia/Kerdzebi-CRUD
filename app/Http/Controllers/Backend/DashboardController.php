<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use GuzzleHttp\Client as GuzzleHttpClient;
use GuzzleHttp\Exception\RequestException;



class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::get();
        $posts = Post::get();
        $users = User::get();


        return view(
            'backend.dashboard',
            compact([
                'pages',
                'posts',
                'users',
            ])
        );
    }


    public function currency()
    {
        $requestContent = [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ]
        ];


        $client = new GuzzleHttpClient();

        $apiRequest = $client->request('GET', 'https://nbg.gov.ge/gw/api/ct/monetarypolicy/currencies/ka/json', $requestContent);

        $currencies = json_decode($apiRequest->getBody());

        return view('backend.currency',compact('currencies'));

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
