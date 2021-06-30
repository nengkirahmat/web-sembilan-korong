<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Api extends RestController {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
    }



    public function users_get()
    {
        $lk=$this->db->query('select sex from tweb_penduduk where sex="1"')->num_rows();
        $pr=$this->db->query('select sex from tweb_penduduk where sex="2"')->num_rows();
        $bm=$this->db->query('select sex from tweb_penduduk where sex="3"')->num_rows();
        $tt=$lk+$pr+$bm;
        // Users from a data store e.g. database
        $users = [
            ['id' => 'lk', 'jml' => $lk, 'tt' => $tt],
            ['id' => 'pr', 'jml' => $pr, 'tt' => $tt],
            ['id' => 'bm', 'jml' => $bm, 'tt' => $tt],
        ];

        $id = $this->get( 'id' );

        if ( $id === null )
        {
            // Check if the users data store contains users
            if ( $users )
            {
                // Set the response and exit
                $this->response( $users, 200 );
            }
            else
            {
                // Set the response and exit
                $this->response( [
                    'status' => false,
                    'message' => 'No users were found'
                ], 404 );
            }
        }
        else
        {
            if ( array_key_exists( $id, $users ) )
            {
                $this->response( $users[$id], 200 );
            }
            else
            {
                $this->response( [
                    'status' => false,
                    'message' => 'No such user found'
                ], 404 );
            }
        }
    }
}