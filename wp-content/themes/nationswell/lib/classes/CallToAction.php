<?php
if (class_exists('TimberPost')) {

    class CallToAction extends TimberPost {

        private $petition;

        function __construct($pid = null) {
            parent::__construct($pid);

            // remove the image property and use the acf function instead;
            if(isset($this->image)) {
                unset($this->image);
            }
        }

        public function days_until(){
            $datetime1 = new DateTime(date('Y-m-d'));

            $datetime2 = new DateTime($this->goal_date);

            $interval = $datetime1->diff($datetime2);
            return $interval->format('%a');
        }

        public function petition() {
            global $change_org_api;

            if(!isset($this->petition)) {
                $this->petition = $this->type === 'petition' ?
                    $change_org_api->get_petition_from_post($this->ID) : false;
            }

            return $this->petition;
        }

        public function image() {
            return get_field('image', $this->ID);
        }
    }
}