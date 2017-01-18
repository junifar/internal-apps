<?php

namespace spotiklan\Http\Controllers;

//use Illuminate\Http\Request;
use Request;
use spotiklan\Driver;

class DriverController extends Controller
{

    function index(){
        return Driver::All();
    }

    function save(){
        $data = new Driver();
        $data['gid'] = Request::get('gid');
        $data['name'] = Request::get('name');
        $data['address'] = Request::get('address');
        $data['identity_number'] = Request::get('identity_number');
        $data['license_id'] = Request::get('license_id');
        $data->save();
        return Driver::find($data['id']);
    }

    function update($id){
        $data = Driver::find($id);
        $data['gid'] = Request::get('gid');
        $data['name'] = Request::get('name');
        $data['address'] = Request::get('address');
        $data['identity_number'] = Request::get('identity_number');
        $data['license_id'] = Request::get('license_id');
        $data->save();
        return $data;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
        $data = Driver::find($id);
        $data->delete();
        return "Success";
    }
}
