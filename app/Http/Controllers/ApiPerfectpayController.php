<?php

namespace App\Http\Controllers;

use App\Models\salesPerfectapy;
use Illuminate\Http\Request;
use Comtele\Services\TextMessageService;
use App\ServicesCustom\PerfectPayService;

class ApiPerfectpayController extends Controller
{
    //
    protected $perfectPayService;

    public function __construct(PerfectPayService $perfectPayService)
    {
        $this->perfectPayService = $perfectPayService;
    }

    public function index2()
    {
        $subscriptions = $this->perfectPayService->getSubscriptions();

        // Faça o que quiser com os dados das assinaturas obtidos da API

        return $subscriptions;
    }

    public function index(){

        $sendData = [
            "start_date_sale" => "2023-01-01",
            "end_date_sale"   => "2023-07-10",
            "start_date_approved" => "2023-07-01",
            "end_date_approved" => "2023-07-10",
            "sale_status" => [2],

        ];


        $ch       = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://app.perfectpay.com.br/api/v1/sales/get');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($sendData));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Accept: application/json',
            'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIzIiwianRpIjoiMmViMDRkOGIwNTA4ZDdhYzczYmRmNTFiNWM2MTY0YzFjYTQ3Y2I0NmNlYTcxNDA0YTYxNmFlYzBjYjQ4NmNjYzZjMWU3NDk5MDgzMmM3N2YiLCJpYXQiOjE2ODg2Nzg3ODcuNzk4NDg1LCJuYmYiOjE2ODg2Nzg3ODcuNzk4NDg5LCJleHAiOjE4NDY1MzE1ODcuNzkwNjYsInN1YiI6IjU5Njk0NiIsInNjb3BlcyI6WyJpbnRlZ3JhdGlvbiJdfQ.D1tk7fjnPWOYsLfXye5-8TEJmTJMLu2B2htr8CrlBRwT38_-Oq1kxkXIE_u3AvNaTTgFtLP9vxXOgCAvgX_bhaI3UHRhPyMsTfOQR9_Xvi5KqxifyaV2EL14ejj9_k5huTmdM7LE6lbUtPS96h5KZhp2Wm4hOEWcTK2Dj4lQ0tXE8e9dnUsloOD5gKPf4-TntSYCM0DWouH2mzBQJYr4vTKUhdh1FQdpPz1Z8EPnEH5RLFBlg_WG1ph5hoaNHNuOlD9bRbDc_NbNB2kwOkV5cYGw7aV9zAENxVBaNqwZ7oZ6BXTh1Yj0NTdussACy7V3zrv5oOI5s4wahpYOFwYlRAk67pn1baqWink_avVdDnS6uo1rO6PFro5E7dmSLXC-1dUh5D3jwF9eyTqRcU1Lf8ON1mNJjuZQllvJzaU6VGv_H4oeYKgmchzfM70B943DGtnYeUBQtltqkHB7F_wCH9PyDk2K9TFa1SlmGFAOl6QALVj0BjS5AO8F2bxHMJl2C6L-en1D_SBz7RIcBjB2xFeWufUvVzakN1alayGRZIDoRu51a29_lShEyFphgYrxJjjvK_ufOD05x_fBAOWzStfRAb_0LYxfUmSOVEgIUz61auMun3EiaBfoXIvWpqaFWFQ-TKKo_8Wp4wsPoZ6fe2k6U_UV8JUwak3icgauKK0',
        ]);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response     = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        //curl_close($ch);

        // Remove as quebras de linha e os espaços em branco extras
        $response = preg_replace('/\s+/', ' ', $response);

        // Extrai a seção do corpo JSON
        $jsonStart = strpos($response, '{"sales"');
        $jsonEnd = strrpos($response, '}');
        $json = substr($response, $jsonStart, $jsonEnd - $jsonStart + 1);

        // Decodifica o JSON em um array associativo
        $data = json_decode($json, true);

        //return $data;

        foreach($data['sales']['data'] as $venda){

            echo $venda['customer'][0]['email'] . " - " . $venda['customer'][0]['phone']."<hr>";

            $new = salesPerfectapy::where('email', $venda['customer'][0]['email'])->where('phone', $venda['customer'][0]['phone'])->get();

            if ($new->count() == 0) {
                $add = new salesPerfectapy;
                $add->email = $venda['customer'][0]['email'];
                $add->phone = $venda['customer'][0]['phone'];
                $add->save();

                //Enviando SMS para o usuário;
                $API_KEY = "b71f3225-f2e9-4af7-80cd-5fd36e0b4462";

                $link = route('register');

                $textMessageServices = new TextMessageService($API_KEY);
                $result = $textMessageServices->send("Antired - Acesso Liberado", "Seu link de cadastro (use o mesmo E-mail da compra): {$link}", [$venda['customer'][0]['phone']]);
            }

        }

        //return $data;

    }
}
