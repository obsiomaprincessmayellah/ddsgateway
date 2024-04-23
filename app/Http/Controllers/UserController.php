<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class UserController extends Controller
{
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Return the list of users
     *
     * @return Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Add a new user
     *
     * @param  Illuminate\Http\Request  $request
     * @return Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        
    }

    /**
     * Show the specified user
     *
     * @param  int  $id
     * @return Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Update the specified user
     *
     * @param  Illuminate\Http\Request  $request
     * @param  int  $id
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      
    }

    /**
     * Remove the specified user
     *
     * @param  int  $id
     * @return Illuminate\Http\Response
     */
    public function delete($id)
    {
        
    }
}