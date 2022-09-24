var btc=document.getElementById("bitcoin");
var eth=document.getElementById("ethereum");
var doge=document.getElementById("dogecoin");
var car=document.getElementById("cardano");
var chain=document.getElementById("chainlink");
var cos=document.getElementById("cosmos");
var rose=document.getElementById("1art");
var key=document.getElementById("1bch");
var settings={
    "async" : true,
    "scrossDomain": true,
    "url":"https://api.coingecko.com/api/v3/simple/price?ids=bitcoin%2Cethereum%2Ccardano%2Cethereum%20classic%2Cchainlink%2Cdogecoin%2Ccosmos%2Crosemont%2Ckeystone%2C1art%2C1bch&vs_currencies=inr",
    "method":"GET",
    "headers":{}
}
$.ajax(settings).done(function(response){
    
    btc.innerHTML = response.bitcoin.inr;
    eth.innerHTML = response.ethereum.inr;
    doge.innerHTML = response.dogecoin.inr;
    car.innerHTML = response.cardano.inr;
    chain.innerHTML = response.chainlink.inr;
    cos.innerHTML = response.cosmos.inr;
    rose.innerHTML = response.rosemont.inr;
    key.innerHTML = response.keystone.inr;


}); 