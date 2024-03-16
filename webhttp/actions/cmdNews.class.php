<?php

class cmdNews
{
    public function execute()
    {
        $response = [
            "result" => "success",
            "data" => "",
            "message" => "",
            "view" => "News"
        ];
        return $response;
    }
}