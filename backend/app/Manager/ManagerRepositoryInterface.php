<?php
/**
 * Created by IntelliJ IDEA.
 * User: vivian
 * Date: 23/08/2018
 * Time: 20.32
 */
namespace App\Manager;

interface ManagerRepositoryInterface{

    public function addManager($manager);

    public function login($manager);
}
