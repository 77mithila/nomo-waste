<?php
/**
 * Created by IntelliJ IDEA.
 * User: vivian
 * Date: 23/08/2018
 * Time: 20.34
 */
namespace App\Manager;
use Illuminate\Support\Facades\DB;

class ManagerRepository implements ManagerRepositoryInterface{

    public function addManager($managerData){

        $manager = new Manager();

        $manager->store_id = $managerData->query('storeId');
        $manager->name = $managerData->query('name');
        $manager->username = $managerData->query('username');
        $manager->password = $managerData->query('password');

        $manager->save();

        return  $manager;

        //dd($managerData);
    }

    public function login($managerData)
    {
        $username = $managerData->input('username');
        $password = $managerData->input('password');
        $user = Manager::where('password',$password)->where('username', $username)->first();

        if (count($user) > 0) {
            session(['user' => $user]);
        } else {
            return 'login fail';
        }
    }
}
