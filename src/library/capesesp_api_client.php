<?php

class CapesespApiClient
{
    private static $BASE_CONNECT_URL = ['development' => 'https://newdemos-rest.vistahost.com.br'];
    private static $BASE_HEADERS = array("Accept" => "application/json", "Authorization" => "Basic dXN1YXJpb3Rlc3RlOmNhcGVzZXNwMjI=");
    private static $BASE_PARAMS = [];
    
    private static $BASE_GRAVA_SOLICITACAO = '/gravaSolicitacao';

    private static $FIELDS = [];

    /**
     * @param object solicitacao
     */
    public static function gravaSolicitacao($solicitacao)
    {
        $params = array_merge(self::$BASE_PARAMS, []);

        $url = self::$BASE_CONNECT_URL[ENVIRONMENT] . self::$BASE_GRAVA_SOLICITACAO . http_build_query($params);

        $response = Requests::post($url, self::$BASE_HEADERS, json_encode($solicitacao));

        if(!$response->success)
            throw new Exception($response->body);

        $responseBody = json_decode($response->body);

        self::$FIELDS = $responseBody;

        return $responseBody;
    }
}