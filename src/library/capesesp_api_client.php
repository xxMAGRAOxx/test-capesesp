<?php

class CapesespApiClient
{
    private static $BASE_CONNECT_URL = ['development' => 'https://webservicesh.capesesp.com.br/ws-workflow/solicitacao-rest/solicitacao'];
    private static $BASE_HEADERS = array("Content-Type" => "application/json", "Authorization" => "Basic dXN1YXJpb3Rlc3RlOmNhcGVzZXNwMjI=");
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

        $response = Requests::post($url, self::$BASE_HEADERS, $solicitacao);

        if(!$response->success)
            throw new Exception($response->body);

        $responseBody = json_decode($response->body);

        if(!$responseBody->statusExecucao->executadoCorretamente)
            throw new Exception($responseBody->statusExecucao->mensagens->mensagem['mensagem'][0]->mensagem);

        return $responseBody;
    }
}