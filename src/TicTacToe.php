<?php

class TicTacToe
{
    /**
     * @var String
     */
    private $server;

    /**
     * Creates a instance of the SDK Client
     *
     * @param string $server The API server to connect to
     */
    public function __construct($server = 'http://ec2-13-59-24-144.us-east-2.compute.amazonaws.com:4000/api/')
    {
        $this->server = $server;
    }

    /**
     * Get a empty board
     *
     * @return array
     */
    public function getEmptyBoard()
    {
        $ch = curl_init();

        $headers = array(
            'Accept: application/json',
            'Content-Type: application/json'
        );

        curl_setopt($ch, CURLOPT_URL, $this->server.'board');
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_HEADER, 0);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 20);

        $result = curl_exec($ch);

        curl_close ($ch);

        return $result;
    }

    /**
     * Make a move in the game
     *
     * @param int $index
     *
     * @return array
     */
    public function postPlayGame($index)
    {
        $ch = curl_init();

        $data = array(
            'indice' => $index
        );
         
        $payload = json_encode($data);

        curl_setopt($ch, CURLOPT_URL, $this->server.'game/start');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($ch);

        curl_close($ch);

        return $result;
    }
}
