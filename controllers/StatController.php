<?php

class StatController extends MiniEngine_Controller
{
    public function indexAction()
    {
        return $this->cors_json(API_StatAction::getStat());
    }
}

