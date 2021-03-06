<?php

require_once ROOT_DIR . '/classes/DB.class.php';

class Sponsorship {
    
    public $id;
    public $event_id;
    public $name;
    public $amount;
    public $description;
    public $taken_by;

    function __construct($data) {
        $this->id = (isset($data['id'])) ? $data['id'] : "";
        $this->event_id = (isset($data['event_id'])) ? $data['event_id'] : "";
        $this->name = (isset($data['name'])) ? $data['name'] : "";
        $this->amount = (isset($data['amount'])) ? $data['amount'] : "";
        $this->description = (isset($data['description'])) ? $data['description'] : "";
        $this->taken_by = (isset($data['taken_by'])) ? $data['taken_by'] : "";
    }

    public static function get($id) {
        $db = new DB();
        $result = $db->select('sponsorships', "id = $id");
        return new Sponsorship($result[0]);
    }
}
