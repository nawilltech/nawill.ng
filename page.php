<?php
add_shortcode('ticker_shortcode','techiepress_get_send_data');
function techiepress_get_send_data() {

    $url = 'http://integration.lotuscapitallimited.com:8085/api/Contacts/FundPrices';
    
    $arguments = array(
        'method' => 'GET'
    );

	$response = wp_remote_get( $url, $arguments );

	if ( is_wp_error( $response ) ) {
		$error_message = $response->get_error_message();
		return "Something went wrong: $error_message";
	} else {
		
		$results =  wp_remote_retrieve_body( $response ) ;
		$json = json_decode($results, true);
	}
	
	$html = '<div class="ticker-wrap">';
	
	$html .= '<div class="ticker">';
	
	foreach($json as $val){
		$html .= '<div class="ticker__item">';
		$html .= '<span>FundCode :</span> <span>' . $val['FundCode'] . '</span>';
		$html .= '<span>InvestmentName :</span> <span>' . $val['InvestmentName'] . '</span>';
		$html .= '<span>Bid :</span> <span>' . $val['Bid'] . '</span>';
		$html .= '<span>Offer :</span> <span>' . $val['Offer'] . '</span>';
		$html .= '<span>Unit :</span> <span>' . $val['Unit'] . '</span>';
		$html .= '</div>';
	}
	
	$html .= '</div></div>
	<style>
	
@-webkit-keyframes ticker {
  0% {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    visibility: visible;
  }
  100% {
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
  }
}
@keyframes ticker {
  0% {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    visibility: visible;
  }
  100% {
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
  }
}
.ticker-wrap {
  position: fixed;
  bottom: 0;
  z-index: 99;
  width: 100%;
  overflow: hidden;
  height: 4rem;
  background-color: #ffb200;
  //padding-left: 100%;
  box-sizing: content-box;
}
.ticker-wrap .ticker {
  display: inline-block;
  height: 4rem;
  line-height: 4rem;
  white-space: nowrap;
  padding-right: 100%;
  box-sizing: content-box;
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
  -webkit-animation-timing-function: linear;
  animation-timing-function: linear;
  -webkit-animation-name: ticker;
  animation-name: ticker;
  -webkit-animation-duration: 30s;
  animation-duration: 30s;
}
.ticker-wrap .ticker__item {
  display: inline-block;
  padding: 0 1rem;
  font-size: 18px;
  color: white;
}
.ticker-wrap .ticker__item span{
  margin: 0px 15px;
}
</style>';
	return $html;
	
}

?>