<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donor;
use App\Models\Nurse;
use App\Models\Blood;
use App\Models\Labtechnicial;
use App\Http\Resources\BloodBankResource;
class BloodBankController extends Controller
{
    public function donorindex()//show all donors
    {
        $donor=Donor::paginate(10);
        return BloodBankResource::collection($donor);
    }
    public function storedonors(Request $request)//store donors
    {
        $donor=new Donor();
        $donor->name=$request->name;
        $donor->email=$request->email;
        $donor->address=$request->address;
        $donor->phone_number=$request->phone_number;
        if($donor->save())
        {
            return new BloodBankResource($donor);
        }

    }
    public function showdonor($id)//show donor by id
    {
        $donor=Donor::findOrFail($id);
        return new BloodBankResource($donor);

    }
    public function updatedonor(Request $request, $id) //update by id
    {
        $donor=Donor::findOrFail($id);
        $donor->name=$request->name;
        $donor->email=$request->email;
        $donor->address=$request->address;
        $donor->phone_number=$request->phone_number;
        if($donor->save())
        {
        return new BloodBankResource($donor);
        }
    }
    public function destroydonor($id) //delete by id
    {
        $donor=Donor::findOrFail($id);
        if($donor->delete())
        {
        return new BloodBankResource($donor);
        }

    }

    //function for nurses
    public function nurseindex()
    {
        $donor=Nurse::paginate(10);
        return BloodBankResource::collection($donor);
    }
    public function storenurses(Request $request)
    {
        $nurse=new Nurse();
        $nurse->name=$request->name;
        $nurse->phone_number=$request->phone_number;
        if($nurse->save())
        {
            return new BloodBankResource($nurse);
        }

    }
    public function shownurse($id)
    {
        $donor=Nurse::findOrFail($id);
        return new BloodBankResource($donor);

    }
    public function updatenurse(Request $request, $id) //update by id
    {
        $nurse=Nurse::findOrFail($id);
        $nurse->name=$request->name;
        $nurse->phone_number=$request->phone_number;
        if($nurse->save())
        {
        return new BloodBankResource($nurse);
        }
    }
    public function destroynurse($id) //delete by id
    {
        $nurse=Nurse::findOrFail($id);
        if($nurse->delete())
        {
        return new BloodBankResource($nurse);
        }

    }
    //blood function

    public function bloodindex()//show all bloods available
    {
        $blood=Blood::paginate(10);
        return BloodBankResource::collection($blood);
    }

    public function storebloods(Request $request)//store blood
    {
        $blood=new Blood();
        $blood->bloodtype=$request->bloodtype;
        $blood->code=$request->code;
        $blood->information=$request->information;
        if($blood->save())
        {
            return new BloodBankResource($blood);
        }

    }
    public function showbloods($code)//show by code
    {
        $blood=Blood::findOrFail($code);
        return new BloodBankResource($blood);

    }
    public function updateblood(Request $request, $code)//update by code
    {
        $blood=Labtechnicial::findOrFail($code);
        $blood->bloodtype=$request->bloodtype;
        $blood->code=$request->code;
        $blood->information=$request->information;
        if($blood->save())
        {
        return new BloodBankResource($blood);
        }
    }
    public function destroyblood($code) //delete by code
    {
        $blood=Labtechnicial::findOrFail($code);
        if($blood->delete())
        {
        return new BloodBankResource($blood);
        }

    }


//functions for labtechinician

    public function labtechindex() //show all labtechicial
    {
        $lab=Labtechnicial::paginate(10);
        return BloodBankResource::collection($lab);
    }
    public function storelabtechnicial(Request $request)//store labtechnicial
    {
        $lab=new Labtechnicial();
        $lab->name=$request->name;
        $lab->address=$request->address;

        if($lab->save())
        {
            return new BloodBankResource($lab);
        }

    }
    public function showlabtech($id)// show or find by id
    {
        $lab=Labtechnicial::findOrFail($id);
        return new BloodBankResource($lab);

    }

    public function updatelabtech(Request $request, $id) //update by id
    {
        $lab=Labtechnicial::findOrFail($id);
        $lab->name=$request->name;
        $lab->address=$request->address;
        if($lab->save())
        {
        return new BloodBankResource($lab);
        }
    }
    public function destroylabtech($id) //delete by id
    {
        $lab=Labtechnicial::findOrFail($id);
        if($lab->delete())
        {
        return new BloodBankResource($lab);
        }

    }
}
