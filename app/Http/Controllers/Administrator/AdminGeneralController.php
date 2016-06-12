<?php

namespace shoes\Http\Controllers\Administrator;

use Illuminate\Http\Request;

use shoes\Http\Requests;
use shoes\Http\Controllers\Controller;
use shoes\Models\Locations;
use shoes\Models\Institution;
use  Session;

class AdminGeneralController extends Controller
{
    public function institution_list()
    {
        $institutions = Institution::all();
        return view('admin_general.institucion_list',compact('institutions'));
    }

    public function create()
    {
        $departmento[""] = "Departamento";
        $department = Locations::select('department')->distinct()->get()->lists('department', 'department');
        $data = array();
        foreach ($department as $key => $value) {
            $data[$key] = $value;
        }
        $departments = $departmento + $data;
        $provinces[""] = "Provincia";
        $districts[""] = "Distrito";
        $location_list = Locations::all();
        $department = "";
        $province = "";
        $district = "";
        return view('admin_general.institucion_create', compact('departments', 'location_list', 'provinces', 'districts', 'department', 'province', 'district'));
    }

    public function save(Request $requests)
    {
        $data = $requests->all();
        $provinces[""] = "Provincia";
        $provincias = array();
        if ($data['department'] != "") {
            $provincias = Locations::where('department', $data['department'])->select('province')->distinct()->get()->lists('province', 'province');
        }
        foreach ($provincias as $key => $value) {
            $provinces[$key] = $value;
        }
        $districts[""] = "Distrito";
        $distritos = array();
        if ($data['province'] != "") {
            $distritos = Locations::where('province', $data['province'])->select('district')->distinct()->get()->lists('district', 'district');
        }
        foreach ($distritos as $key => $value) {
            $districts[$key] = $value;
        }
        $location = Locations::where('department', $data['department'])->where('province', $data['province'])->where('district', $data['district'])->first();

        Institution::create([
            'name' => $data['name'],
            'address' => $data['address'],
            'ruc' => $data['ruc'],
            'phone' => $data['phone'],
            'contact' => $data['contact'],
            'email' => $data['email'],
            'location_id' => $location->id,
        ]);
        Session::flash('save','Se ha creado correctamente');
        return redirect()->route('institution_list');
    }
    public function edit($id){
        $institution = Institution::findOrFail($id);
        $departments[""] = "Departamento";
        $departamentos = Locations::select('department')->distinct()->get()->lists('department','department');
        $departments = $this->convertir_array($departamentos);
        $provinces[""] = "Provincia";
        $districts[""] = "Distrito";
        $location_list = Locations::all();
        dd($institution->location);
        if ($institution->location_id){

            $department = $institution->location->department;

            $provincias = Locations::where('department',$department)->select('province')->distinct()->get()->lists('province','province');

            $provinces=$this->convertir_array($provincias);

            $province = $institution->location->province;
            $distritos = Locations::where('province',$province)->select('district')->distinct()->get()->lists('district','district');
            $districts=$this->convertir_array($distritos);
            $district = $institution->location->district;
        }else{
            $department = '';
            $province = '';
            $district = '';
        }

        return "llego";
    }
    public function convertir_array($variable){
        $dato= array();
        foreach ($variable as $key => $value) {
            $dato[$key] = $value;
        }
        return $dato;
    }
}
