<?php
/*
ChainRadar "From Transaction" Checker
Written by Riccardo Spagni
Contact: ric@getmonero.org

Copyright (c) 2014-2015, Riccardo "fluffypony" Spagni

All rights reserved.

Redistribution and use in source and binary forms, with or without modification, are
permitted provided that the following conditions are met:

1. Redistributions of source code must retain the above copyright notice, this list of
   conditions and the following disclaimer.

2. Redistributions in binary form must reproduce the above copyright notice, this list
   of conditions and the following disclaimer in the documentation and/or other
   materials provided with the distribution.

3. Neither the name of the copyright holder nor the names of its contributors may be
   used to endorse or promote products derived from this software without specific
   prior written permission.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY
EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL
THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO,
PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS
INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT,
STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF
THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
*/

$txs = array(
	'377be6161fbbf7c77f89787a7c60f1b318f06bda22447f4b8caa46ee233b79e7',
	'fd8f47cd8d398e1b17a5220a09257f6eb573a615098feda4a290ea75a13f91cf',
	'b5dd7fdd84492f47b8c1ad0e9e16fc2bd2a1b7e72255f98a35e6d7905a229997',
	'8d3f293e4b8179d67f0d45a809c8f2778f9826a788fbbf3e5f63853598fe0025',
	'7ab3959699d7444f00dd10b89dc054b6867959e5ddb9b90dc99613b965bc60de',
	'75ceafd629f0844a90691dde591bc06cc3b198e3d3b7cb170d77e88aae3d6d42',
	'c573c137b020e6c8772d9c0dcf7c6bcb669593ad558262bff06c272896d7d1c9',
	'ea9addfbd7d0aa71c14b2571f71c8ffa1996cd23f3da106b0f8ad8c703019608',
	'c302b72f58cc63b11e1bdf6c6408b212dff40d754eebd7dcc6e15735c1bc1074',
	'2a7cabb64d520fd8bad753ae9493c44b62fecca9f656853ab90040961cfd91c2',
	'523adf393d45d22326230b1d69310b67ddfc7f65092fdaf23147ffa221bc6729',
	'2c9de79c5cfc1189a71002b6aa92800c5cdd50d1ea899ad6ee10e68b0bb716c6',
	'a88fe0a645ad9ca4e9d57652ba54d6c4ab7b54e1c6f821ea411e5e6d5f40f80d',
	'0e4e05d47d33aaabc03952918bb633f45e7f7ee291a36778c12dcd88379265cd',
	'1780385f7e6fe23dce7f27bfa806e101fd342ce0f5844c099fc163a28f55832b',
	'0d47b901afa91b39c7ae6a1861a7a487ad468ae9963fabd2e7dba527970b7a0a',
	'7963dbf4188cfdd749c7196d24792cd2a26a2e6c4de22f5638f2e9467c211c48',
	'd23b753395ea85a512d249752381e21e5e1915a17bd1d3f45f496949f54044b3',
	'96226907135616048ead5a3a3f417bfe432c8d3182272f5f4b838077fbff5e95',
);

function FindTextBetween($text, $string1, $string2)
{
	$return = false;
	
	if ((is_int(strpos($text, $string1))) && (is_int(strpos($text, $string2))))
	{
		$start = ($string1 > '') ? @strpos($text, $string1)+strlen($string1) : 0;
		$stop = ($string2 > '') ? @strpos($text, $string2, $start) : false;
		$return = substr($text, $start, $stop-$start);
	}
	return $return;
}

$GLOBALS['sheader'][0] = "Accept: text/xml,application/xml,application/xhtml+xml,application/json,text/javascript,"; 
$GLOBALS['sheader'][0] .= "text/html;q=0.9,text/plain;q=0.8,image/png,*/*;q=0.5"; 
$GLOBALS['sheader'][1] = "Cache-Control: max-age=0"; 
$GLOBALS['sheader'][2] = "Connection: keep-alive"; 
$GLOBALS['sheader'][3] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7"; 
$GLOBALS['sheader'][4] = "Accept-Language: en-us,en;q=0.5"; 
$GLOBALS['sheader'][5] = "Pragma: ";

$GLOBALS['scurl'] = curl_init();

curl_setopt($GLOBALS['scurl'], CURLOPT_HTTPHEADER, $GLOBALS['sheader']);
curl_setopt($GLOBALS['scurl'], CURLOPT_RETURNTRANSFER, true);
curl_setopt($GLOBALS['scurl'], CURLOPT_ENCODING, 'gzip,deflate'); 
curl_setopt($GLOBALS['scurl'], CURLOPT_AUTOREFERER, true); 
curl_setopt($GLOBALS['scurl'], CURLOPT_TIMEOUT, 10);
curl_setopt($GLOBALS['scurl'], CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($GLOBALS['scurl'], CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($GLOBALS['scurl'], CURLOPT_FOLLOWLOCATION, false);
curl_setopt($GLOBALS['scurl'], CURLOPT_USERAGENT, "Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1.3) Gecko/20090919 Firefox/3.5.3");

// curl -X POST http://127.0.0.1:18500/json_rpc -d '{"jsonrpc":"2.0","method":"incoming_transfers","id":"test","params":{"transfer_type": "all"}}' -H "Content-Type: application/json"
curl_setopt($GLOBALS['scurl'], CURLOPT_URL, "http://127.0.0.1:18500/json_rpc");
curl_setopt($GLOBALS['scurl'], CURLOPT_POST, true);
curl_setopt($GLOBALS['scurl'], CURLOPT_ENCODING, 'Content-Type: application/json');
curl_setopt($GLOBALS['scurl'], CURLOPT_POSTFIELDS,'{"jsonrpc":"2.0","method":"incoming_transfers","id":"test","params":{"transfer_type": "unavailable"}}');
$dpage = curl_exec($GLOBALS['scurl']);

if (json_decode($dpage, true) !== null)
{
	$spentouts = array();
	foreach (json_decode($dpage, true)["result"]["transfers"] as $rawout)
	{
		$spentouts[] = trim($rawout["tx_hash"],"<>");
	}
}

curl_setopt($GLOBALS['scurl'], CURLOPT_HEADER, true);
curl_setopt($GLOBALS['scurl'], CURLOPT_ENCODING, 'gzip,deflate');
curl_setopt($GLOBALS['scurl'], CURLOPT_POST, false);

$totalguesses = 0;
$totalcorrect = 0;
$totalflawed = 0;

foreach ($txs as $tx)
{
	echo "Scanning transaction ".trim($tx)."...\n";

	curl_setopt($GLOBALS['scurl'], CURLOPT_URL, "http://chainradar.com/xmr/transaction/".trim($tx));

	$cerr='error';
	while (trim($cerr) != '')
	{
		$tpage = curl_exec($GLOBALS['scurl']);
		$cerr = curl_error($GLOBALS['scurl']);
	}

	$tpage = @mb_convert_encoding($tpage, 'HTML-ENTITIES', 'utf-8');
	
	$mixin = (int)trim(FindTextBetween($tpage, "Mixin</th>\n            <td>","</td>"));
	$inputsraw = FindTextBetween($tpage, '<h3>Inputs', '<h3>Outputs');

	preg_match_all('/\<td class\="mono\-font"\>(.*?)<\/td\>/', $tpage, $fromtransactions);
	
	if ($fromtransactions[1])
	{
		echo "ChainRadar says there are ".count($fromtransactions[1])." inputs with a mixin of ".$mixin.". According to ChainRadar:\n";
		$totalguesses += count($fromtransactions[1]);

		$correct = 0;
		foreach ($fromtransactions[1] as $pos=>$ft)
		{
			if (in_array($ft, $spentouts))
			{
				echo 'Input '.$pos.' is from transaction '.$ft.' which IS in your spent outputs'."\n";
				$totalcorrect += 1;
				$correct += 1;
			}
			else
			{
				echo 'Input '.$pos.' is from transaction '.$ft.' which IS NOT in your spent outputs'."\n";
			}
		}

		if ($correct == count($fromtransactions[1]))
		{
			echo 'WARNING: The entire transaction appears to be correctly guessed by ChainRadar!'."\n";
			$totalflawed += 1;
		}
	}
	else
	{
		echo "No inputs found, moving on\n";
		continue;
	}

	unset($inputs);
	unset($fromtransactions);
	unset($mixin);
	unset($fromtransactions);
	unset($tpage);
}

curl_close($GLOBALS['scurl']);

echo "SUMMARY\n";
echo "=======\n";
echo "Total guesses ChainRadar had: ".$totalguesses."\n";
echo "Total they appear to have correctly guessed: ".$totalcorrect."\n";
echo "\n";
echo "Total transactions checked: ".count($txs)."\n";
echo "Total transactions completely guessed by ChainRadar: ".$totalflawed."\n";

?>