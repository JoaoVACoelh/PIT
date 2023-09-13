
<?php
composer require paypal/rest-api-sdk-php
composer require stripe/stripe-php

//crédito
function processarCartaoCredito($valorTotal, $numeroCartao, $dataValidade, $codigoSeguranca) 
{
 //precisa instalar o stripePHP para ficar guardado os pagamentos, como não tem a tela de 
 //pagamento ainda acho q n tem muito q se preocupar no momento
    

 require_once('vendor/autoload.php');

 // Aqui precisa da chave utilizada no Stripe
 \Stripe\Stripe::setApiKey('SUA_CHAVE_DO_STRIPE');

 $pagamento = \Stripe\PaymentIntent::create([
    'Quantia' => $valorTotal,
    'Moeda' => 'BRL', // Moeda (neste caso, Real Brasileiro)
    'Metodo_Pagamento' => [
        'Tipo' => 'card',
        'Cartao' => [
            'numero' => $numeroCartao,
            'data_Val' => substr($dataValidade, 0, 2),
            'ano_Val' => substr($dataValidade, -2),
            'cvc' => $codigoSeguranca,
        ],
    ],
 ]);

  if ($pagamento->status === 'succeeded') {
    echo "Pagamento com cartão de crédito processado com sucesso!";
 } else {
    echo "Falha no processamento do pagamento com cartão de crédito.";
 }

}

//paypal mesmo lance do stripe tem que instalar o Paypal PHP para ir de boas
function processarPayPal($valorTotal, $email) 
{
    require_once('vendor/autoload.php');
    
    $clientId = 'ClienteID';
    $clientSecret = 'CLienteSECRET';
    
    $auth = new \PayPal\Auth\OAuthTokenCredential($clientId, $clientSecret);
    
    $apiContext = new \PayPal\Rest\ApiContext($auth);
    
    if ($auth->getAccessToken()) {
        $moeda = 'BRL'; 
    
        $pagamento = new \PayPal\Api\Payment();
        $pagamento->setIntent('sale');
        $pagamento->setPayer(new \PayPal\Api\Payer());
        $pagamento->getPayer()->setPaymentMethod('paypal');
    
        $transacao = new \PayPal\Api\Transaction();
        $transacao->setAmount(new \PayPal\Api\Amount());
        $transacao->getAmount()->setTotal($valorTotal);
        $transacao->getAmount()->setCurrency($moeda);
    
        $pagamento->setTransactions([$transacao]);
    
        $redirecionamento = new \PayPal\Api\RedirectUrls();
        $redirecionamento->setReturnUrl('URL_DE_RETORNO_APOS_PAGAMENTO'); 
        $redirecionamento->setCancelUrl('URL_DE_CANCELAMENTO_DE_PAGAMENTO'); 
    
        $pagamento->setRedirectUrls($redirecionamento);
    
        try {
            $pagamento->create($apiContext);
    
            $linkAprovacao = $pagamento->getApprovalLink();

            header("Location: $linkAprovacao");
            exit;
        } catch (\PayPal\Exception\PayPalConnectionException $ex) {
            echo "Falha na conexão com o PayPal: " . $ex->getMessage();
        } catch (\Exception $ex) {
            echo "Erro desconhecido: " . $ex->getMessage();
        }
    } else {
        echo "Falha na autenticação do PayPal.";
    }
       
    
    
}


    

//debito
 function processarPagamentoCartaoDebito($valorTotal, $numeroCartao, $dataValidade, $codigoSeguranca, $nomeTitular)
{
 

 // Verifique se o formulário de pagamento foi enviado
 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $valorTotal = $_POST['valorTotal'];
    $numeroCartao = $_POST['numeroCartao'];
    $dataValidade = $_POST['dataValidade'];
    $codigoSeguranca = $_POST['codigoSeguranca'];
    $nomeTitular = $_POST['nomeTitular'];

    // Processar o pagamento no cartão de débito
    $resultado = processarPagamentoCartaoDebito($valorTotal, $numeroCartao, $dataValidade, $codigoSeguranca, $nomeTitular);

    if ($resultado) {
        echo "Pagamento no cartão de débito processado com sucesso!";
    } else {
        echo "Falha no processamento do pagamento no cartão de débito.";
    }
 } 
}

//<!-- Aqui um formulário pro de débito dps é so ajustar quando for fazer a página-->
 <form method="POST" action="">
 <label for="valorTotal">Valor Total:</label>
 <input type="text" name="valorTotal" id="valorTotal" required>

 <label for="numeroCartao">Número do Cartão:</label>
 <input type="text" name="numeroCartao" id="numeroCartao" required>

 <label for="dataValidade">Data de Validade:</label>
 <input type="text" name="dataValidade" id="dataValidade" required>

 <label for="codigoSeguranca">Código de Segurança:</label>
 <input type="text" name="codigoSeguranca" id="codigoSeguranca" required>

 <label for="nomeTitular">Nome do Titular:</label>
 <input type="text" name="nomeTitular" id="nomeTitular" required>

 <button type="submit">Pagar</button>
</form>


