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
        return $data;
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
        $data = Driver::find($id);
        $data->delete();
        return "Success";
    }

    public function profile($gid){
        $check = Driver::where('gid','=',$gid);
        if($check->count() == 0){
            $data = new Driver();
            $data['gid'] = $gid;
            if(isset($data['name'])) $data['name'] = Request::get('name');
            if(isset($data['address'])) $data['address'] = Request::get('address');
            if(isset($data['identity_number'])) $data['identity_number'] = Request::get('identity_number');
            if(isset($data['license_id'])) $data['license_id'] = Request::get('license_id');
            $data->save();
            return Driver::where('gid','=',$gid)->get();
        }
        return $check->get();
    }

    public function show($id){
        return Driver::find($id);
    }

    public function profileKey($gid){
        $check = Driver::where('gid','=',$gid)->first();
        if ($check) return encrypt($gid);
        else return abort(204);
    }
}
