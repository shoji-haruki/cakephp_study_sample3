<?php
use App\Controller\AdminBakerController;
namespace App\Controller\admin;
use Cake\Core\Configure;
use Cake\Event\Event;
use App\Controller\AppController;

class AdminController extends AdminBakerController
{
    public function top()
    {
        // $ = $this->paginate($this->Messages);

        // $this->set(compact('messages'));
    }
}
