# chainradar-checker

Proves that ChainRadar's "from transaction" guessing is a scam.

## Premise

By making a series of test transactions and then putting simplewallet into RPC mode, those "From Transaction" values can be scraped from ChainRadar and then checked against the transaction IDs of your spent outputs. If it is correct then the transaction will appear in your spent outputs, although there is something of a chance of a false positive. For large test samples in large wallets I would expect to see anything up to 5% false positives.

## Usage

1. Make a series of transfers, populate the ```$txs``` array with your transaction IDs.

2. Start simplewallet in RPC mode on port 18500 (or change the port in the code): ```./simplewallet --wallet-file wallet.bin --password xxxxxx --rpc-bind-port 18500```

3. Run the checker: ```php chainradar.php```

## Sample Output

I tested it against 19 transactions, some mixin 4 and some mixin 20 (excluding my own signature, so mixin 5 and 21 according to ChainRadar).

For these transactions none of them were completely compromised by ChainRadar, and ChainRadar got 0 out of 157 guesses correct.

This was the output:

```
Scanning transaction 377be6161fbbf7c77f89787a7c60f1b318f06bda22447f4b8caa46ee233b79e7...
ChainRadar says there are 1 inputs with a mixin of 5. According to ChainRadar:
Input 0 is from transaction f6fd94148e8d041f1657afbd8a0a82da0ff022f3475d5a23a90bebcd8c92f814 which IS NOT in your spent outputs
Scanning transaction fd8f47cd8d398e1b17a5220a09257f6eb573a615098feda4a290ea75a13f91cf...
ChainRadar says there are 6 inputs with a mixin of 5. According to ChainRadar:
Input 0 is from transaction 1a55b9c4f53b4e6d8f15fa65022aa6a3acea683a174192a517fbe6530a4ca0a7 which IS NOT in your spent outputs
Input 1 is from transaction 8c16d69880bd0cdb2f1aaaf8d132f6e6a3bc8dfaeadbc6f526a61c5ce290e173 which IS NOT in your spent outputs
Input 2 is from transaction a3ba72464cba9217c9adfe516f2268edb109b98254ba0a64385ae2ac744c2751 which IS NOT in your spent outputs
Input 3 is from transaction 6bf12be076008ad973bf3a20270fee6836bf6e76ad6cefef17eb6ecbdfe05499 which IS NOT in your spent outputs
Input 4 is from transaction f695559e09b79afb8bb6a434d26ae5dc409301970ecafab6dfc380706dd7854a which IS NOT in your spent outputs
Input 5 is from transaction a4e445a22c0a0d9435f07ecf55d855d6f277f6428db5cf68ff3bd7bab1ca7829 which IS NOT in your spent outputs
Scanning transaction b5dd7fdd84492f47b8c1ad0e9e16fc2bd2a1b7e72255f98a35e6d7905a229997...
ChainRadar says there are 5 inputs with a mixin of 5. According to ChainRadar:
Input 0 is from transaction d0b9ed24136f7d2aedda7df24acf0b588942c2dec22da4637c53b1a5f8f48094 which IS NOT in your spent outputs
Input 1 is from transaction 114bacdc33b3dabab96adfd364dcf0f62ea53c891d05f75954b11ef96c0c1333 which IS NOT in your spent outputs
Input 2 is from transaction 93f1e26d62001ac2110be40e2a8f8cb46f3a9d5d9f178dc1a3ea2d2a09aeae90 which IS NOT in your spent outputs
Input 3 is from transaction 0e20e30a7b0762ac072b2576bbbbcc43151e6110dd9c11337c727f0e4c2774ef which IS NOT in your spent outputs
Input 4 is from transaction 57fb7250c3012179b7c0f6ae02f68138c391c5865b2c2194f3595c9d91299049 which IS NOT in your spent outputs
Scanning transaction 8d3f293e4b8179d67f0d45a809c8f2778f9826a788fbbf3e5f63853598fe0025...
ChainRadar says there are 5 inputs with a mixin of 5. According to ChainRadar:
Input 0 is from transaction 214df9a85beb23c504b69b62b1748b97835d664966bac55cd68ea67280a75b93 which IS NOT in your spent outputs
Input 1 is from transaction 55207af988c164710e1fcefed88b2bec5587c7c0398967ef2596f7bcaa0361be which IS NOT in your spent outputs
Input 2 is from transaction 50a30bb58f2cc8fd3c00533dee5ad588d59c1a1f05d44f95fd785788cc8abf96 which IS NOT in your spent outputs
Input 3 is from transaction ee4e0c60d3590316263a63c3d85553b678bc3a8f1f662d94c6766a8b61f1ea60 which IS NOT in your spent outputs
Input 4 is from transaction 898b776e286be1448a74e60c7ed409dc3e927e64c08cf9149bf6aaa0f6c90b82 which IS NOT in your spent outputs
Scanning transaction 7ab3959699d7444f00dd10b89dc054b6867959e5ddb9b90dc99613b965bc60de...
ChainRadar says there are 5 inputs with a mixin of 5. According to ChainRadar:
Input 0 is from transaction 3b0231b35dcd07aeb3cced142be975c7083d6d7ee9cc7ccce0691833782036bc which IS NOT in your spent outputs
Input 1 is from transaction a8a22e68957759b2bad0b9c581513ca480d1569260600f382365f8341e288c6d which IS NOT in your spent outputs
Input 2 is from transaction 9b5638f7e0c88ab264524a4ee17d00bffa5bf0b52ff7f19857962c09348424f4 which IS NOT in your spent outputs
Input 3 is from transaction b3af3cb03cfc580d9682dc664ac53ce275b35ea562dbc2c873137f8827412de1 which IS NOT in your spent outputs
Input 4 is from transaction 13ede470b3689721cc3f50d3c210c5e57c55bb1d0f1e8e95893d916b71ed4260 which IS NOT in your spent outputs
Scanning transaction 75ceafd629f0844a90691dde591bc06cc3b198e3d3b7cb170d77e88aae3d6d42...
ChainRadar says there are 2 inputs with a mixin of 5. According to ChainRadar:
Input 0 is from transaction 1324558a410a429d7236f5897c1eaeea8ab4f533e3d9a6ed0d82136cff057de3 which IS NOT in your spent outputs
Input 1 is from transaction 1bd6239f567839a92f149e5d69a382651c5468d761dd53d16f89ac69b5cd28e4 which IS NOT in your spent outputs
Scanning transaction c573c137b020e6c8772d9c0dcf7c6bcb669593ad558262bff06c272896d7d1c9...
ChainRadar says there are 1 inputs with a mixin of 5. According to ChainRadar:
Input 0 is from transaction 4f79b8210d9e8401ac459a269c2de491cc389df5f41c966479140e2a6db5ba2c which IS NOT in your spent outputs
Scanning transaction ea9addfbd7d0aa71c14b2571f71c8ffa1996cd23f3da106b0f8ad8c703019608...
ChainRadar says there are 1 inputs with a mixin of 5. According to ChainRadar:
Input 0 is from transaction d1f6dc45c4a60c2a5ffbfb14bed97147f5ce7ad5ba401b760894b65e3400bab4 which IS NOT in your spent outputs
Scanning transaction c302b72f58cc63b11e1bdf6c6408b212dff40d754eebd7dcc6e15735c1bc1074...
ChainRadar says there are 6 inputs with a mixin of 5. According to ChainRadar:
Input 0 is from transaction 87f5b9c51bfadd6843a344b3ee0433ae6078194bc1f0c4978546d43ce8ba71cc which IS NOT in your spent outputs
Input 1 is from transaction a747ef9eb937ceaed4ca7b579e06a0e692b424f15283ea9b13e377d339ba739a which IS NOT in your spent outputs
Input 2 is from transaction 787fdec82942a96e9b5f429006a3d8d8ed95742ca0e82716c5a48af8e8e696d7 which IS NOT in your spent outputs
Input 3 is from transaction 8657b3d581eae23f2a53f3d55f4899e4556b8ae318f6a03b27af035bb5cc2be0 which IS NOT in your spent outputs
Input 4 is from transaction 7dd4f331f5922c3e1ebcc2366017b5f0d366f5df163cbe5ae722bc17cc7efd2b which IS NOT in your spent outputs
Input 5 is from transaction 408dd41a8ceee23b6f9f3e898d141a94806a1b41262fc57a8b7be32ce624e939 which IS NOT in your spent outputs
Scanning transaction 2a7cabb64d520fd8bad753ae9493c44b62fecca9f656853ab90040961cfd91c2...
ChainRadar says there are 6 inputs with a mixin of 5. According to ChainRadar:
Input 0 is from transaction 47c8ec61da3ffe66b4513c9100599f835c44c345d58240bebe4beddd5dc07f63 which IS NOT in your spent outputs
Input 1 is from transaction b31a94d37d01f046ea9065e8f5ce5838140a446b00b411cf77004137a74e39f8 which IS NOT in your spent outputs
Input 2 is from transaction 45d92abbdeea54b887e52cd136c610f3bcb465b3987ab6c23e695f8546ad4b4d which IS NOT in your spent outputs
Input 3 is from transaction fe74e60323a7066fbb95b45f88b02f549303320c2e1b7537cb2856d7e883d1e3 which IS NOT in your spent outputs
Input 4 is from transaction 2b959cf5bbacb3f8009066aa9f13e9fd71efbdab5e0348bb4ff3326f1284d082 which IS NOT in your spent outputs
Input 5 is from transaction 1bd6239f567839a92f149e5d69a382651c5468d761dd53d16f89ac69b5cd28e4 which IS NOT in your spent outputs
Scanning transaction 523adf393d45d22326230b1d69310b67ddfc7f65092fdaf23147ffa221bc6729...
ChainRadar says there are 3 inputs with a mixin of 21. According to ChainRadar:
Input 0 is from transaction 5315b30986c00a148e9b60b1433ae7ecb313879f469b954a4ede613e2ae1ff0a which IS NOT in your spent outputs
Input 1 is from transaction 8962fd84aacc251fa63e8b864693e37b46f750fbff9a21f699aa194ecc6ad2a8 which IS NOT in your spent outputs
Input 2 is from transaction 1f9638b364eddbc2a2356d2e5682490ff05415d0658a9d95e988abbb7af4400f which IS NOT in your spent outputs
Scanning transaction 2c9de79c5cfc1189a71002b6aa92800c5cdd50d1ea899ad6ee10e68b0bb716c6...
ChainRadar says there are 3 inputs with a mixin of 21. According to ChainRadar:
Input 0 is from transaction b8bb38d03b72ed22015beb14ff2aa976a8718eb499415173d224ee70dd891da5 which IS NOT in your spent outputs
Input 1 is from transaction a410c4d1ecfc2418c93adefecd918c88432db461e71afa5ec9ecde33994b0aa4 which IS NOT in your spent outputs
Input 2 is from transaction 3788d4c6dacf3b5e0a42300119b25eb1d9b6144297a72c3302664efea2a0a864 which IS NOT in your spent outputs
Scanning transaction a88fe0a645ad9ca4e9d57652ba54d6c4ab7b54e1c6f821ea411e5e6d5f40f80d...
ChainRadar says there are 1 inputs with a mixin of 21. According to ChainRadar:
Input 0 is from transaction 7e507beb04c94c3adaf8186c0528e99f068cc82398f90ba988c500fa7421fb25 which IS NOT in your spent outputs
Scanning transaction 0e4e05d47d33aaabc03952918bb633f45e7f7ee291a36778c12dcd88379265cd...
ChainRadar says there are 8 inputs with a mixin of 21. According to ChainRadar:
Input 0 is from transaction b04cbd6a42448cdd8491ec46f25b9b32ed5edb36323a180eb02732a89a9817e9 which IS NOT in your spent outputs
Input 1 is from transaction 1c2338bc7157b95d5a7da73a620705ca88c3255a468d9724adbb0a14ce9ca1db which IS NOT in your spent outputs
Input 2 is from transaction 3b29ef4e494793efc26079bfb13c9f543a06d883dec3123b437d4ceb7f00e3bc which IS NOT in your spent outputs
Input 3 is from transaction a5d25622d540757b9e4687ce84b4ef3022e43b49f2a74e96b7b176ccdea404db which IS NOT in your spent outputs
Input 4 is from transaction 06d6f8de6218a69cba01964e80f978663e6fcbd3ff0234bcf3d377404c3258e5 which IS NOT in your spent outputs
Input 5 is from transaction bb8d533e934a0426d87df575a4d782d89c3b71429ccd2b5803feaf9f2fa37bd1 which IS NOT in your spent outputs
Input 6 is from transaction b1a9c0d01f2f00d5ea8a14966fc60d83959b2371b8c059351c9770c6847fe03f which IS NOT in your spent outputs
Input 7 is from transaction b612322af547218bd4d20b24a54864d912dbe931a000bb43b11b8a91571753e9 which IS NOT in your spent outputs
Scanning transaction 1780385f7e6fe23dce7f27bfa806e101fd342ce0f5844c099fc163a28f55832b...
ChainRadar says there are 3 inputs with a mixin of 21. According to ChainRadar:
Input 0 is from transaction e2a5ad36dc477949659b11f28051862d61fd86135fd1dd9c81e1937875b43376 which IS NOT in your spent outputs
Input 1 is from transaction fda9b1357b73b5e64b2a06648a41e747a0406dc2d99bef2a97aed1f2648550f0 which IS NOT in your spent outputs
Input 2 is from transaction b879374678c8008b218718e8162a2ef9704d26868b2e1862448a5e3fbc0950d1 which IS NOT in your spent outputs
Scanning transaction 0d47b901afa91b39c7ae6a1861a7a487ad468ae9963fabd2e7dba527970b7a0a...
ChainRadar says there are 4 inputs with a mixin of 21. According to ChainRadar:
Input 0 is from transaction a6e22099a88689d6ec283a05ea64c5099caeb436a443d087fa77b789c09e6387 which IS NOT in your spent outputs
Input 1 is from transaction 54019b343d3682656b6a6eb0fcf7beb867759c56f33c517765fe03a458c3fd15 which IS NOT in your spent outputs
Input 2 is from transaction 940b33ffd975b08e7acc596c038ed6996ec96a8b8b2b4492b435564ffddc9ce0 which IS NOT in your spent outputs
Input 3 is from transaction ebc1a38a936daff9ef39dfe9256b27967f97bf02d9db05c9648f61df1503c9ae which IS NOT in your spent outputs
Scanning transaction 7963dbf4188cfdd749c7196d24792cd2a26a2e6c4de22f5638f2e9467c211c48...
ChainRadar says there are 2 inputs with a mixin of 21. According to ChainRadar:
Input 0 is from transaction e0e95534c1128515ca535c0c71802217cec0188b2261aa4745636c3e82c713e9 which IS NOT in your spent outputs
Input 1 is from transaction 97e2ed62b40ceeef630627f8ae7e2f19e5be45494aa7af164348e26a9ca5cbfe which IS NOT in your spent outputs
Scanning transaction d23b753395ea85a512d249752381e21e5e1915a17bd1d3f45f496949f54044b3...
ChainRadar says there are 2 inputs with a mixin of 21. According to ChainRadar:
Input 0 is from transaction c71d17c2bb8c7e4140e5685c64d7ff64b4c06315af0a498511dc227931d4f5c6 which IS NOT in your spent outputs
Input 1 is from transaction 9bd3046e905a3695d2201efcd0e3427bede29fd3fbde91f6f7d16c85621d92b8 which IS NOT in your spent outputs
Scanning transaction 96226907135616048ead5a3a3f417bfe432c8d3182272f5f4b838077fbff5e95...
ChainRadar says there are 7 inputs with a mixin of 21. According to ChainRadar:
Input 0 is from transaction af40e87d041eeeeeca47466f84ef8358ba708ec9b2fe8cfc33d4ce0ec102ec3b which IS NOT in your spent outputs
Input 1 is from transaction 091e5530716feb2b7730f6ff6ac8d9844b74af03a65fb0f8592237a2cf74172d which IS NOT in your spent outputs
Input 2 is from transaction 92163e1c551252551676a49e434dbd0e56cc6d9067742873630e4513ecf76257 which IS NOT in your spent outputs
Input 3 is from transaction 40f3006f86980f7571bec5ae8a87c8f6ddc030dd922c27238834bcc00940a1c8 which IS NOT in your spent outputs
Input 4 is from transaction 6d2849a5dae6b655fd6adf1f8f1bd72e49dd8d0958ae8db733f5d1c361db1f91 which IS NOT in your spent outputs
Input 5 is from transaction 44c171835495833044456789879df04c89b0f065adb40200e7bcc36460639840 which IS NOT in your spent outputs
Input 6 is from transaction 45d92abbdeea54b887e52cd136c610f3bcb465b3987ab6c23e695f8546ad4b4d which IS NOT in your spent outputs
=======
SUMMARY
=======
Total guesses ChainRadar had: 157
Total they appear to have correctly guessed: 0

Total transactions checked: 19
Total transactions completely guessed by ChainRadar: 0
```

# Conclusion

ChainRadar is either "accidentally" showing From Transactions, or it is trying to appear to have compromised Monero. Coupled with the sudden appearance of a troll claiming 20/20 transactions unmasked it is clear that something dodgy is going on. Avoid ChainRadar, and always check the data for yourself before buying in to what the trolls say.