<?php
class Note{
        private $id;
        private $user_id;
        private $title;
        private $content;
        private $created_timestamp;
        private $last_updated;
        private $is_pinned;

        function __construct(){

        }

        function set_id($id){
                $this->id = $id;
        }

        function get_id(){
                return $this->id;
        }

        function set_user_id($user_id){
                $this->user_id = $user_id;
        }

        function get_user_id(){
                return $this->user_id;
        }

        function set_title($title){
                $this->title = $title;
        }

        function get_title(){
                return $this->title;
        }

        function set_content($content){
                $this->content = $content;
        }

        function get_content(){
                return $this->content;
        }

        function set_created_timestamp($created_timestamp){
                $this->created_timestamp = $created_timestamp;
        }

        function get_created_timestamp(){
                return $this->created_timestamp;
        }

        function set_last_updated($last_updated){
                $this->last_updated = $last_updated;
        }

        function get_last_updated(){
                return $this->last_updated;
        }

        function set_is_pinned($is_pinned){
                $this->is_pinned = $is_pinned;
        }

        function get_is_pinned(){
                return $this->is_pinned;
        }
}
?>
