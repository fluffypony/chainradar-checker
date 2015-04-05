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
ChainRadar says there are 7 inputs with a mixin of 5. According to ChainRadar:
Input 0 is from transaction 8638bc5d5aae14c162849547a48a22418280ea68868f0b43fef3fc0161b42d74 which IS NOT in your spent outputs
Input 1 is from transaction ed4a6079dd0554fc93af32b4468afd0764900296ac1ab52e59b8d4814f53f8d6 which IS NOT in your spent outputs
Input 2 is from transaction a6dffac654f9995b88d3a7d583702a905e56aff920a2993b1acefd41be35c515 which IS NOT in your spent outputs
Input 3 is from transaction 5ccfd58c055fb20fd7238db05c426e5073c88c4f76bec9e713f1e9c21f2e3e80 which IS NOT in your spent outputs
Input 4 is from transaction 5383d0f153caaad08a37e2929d3e66713f8db0065504de1245c842b4a59658bd which IS NOT in your spent outputs
Input 5 is from transaction 07c9ec3c39ed37b09263daca101992005c4c7252feeffd86526657c88924c4c6 which IS NOT in your spent outputs
Input 6 is from transaction 766c64e57d6a38b4271aec5900e672c32478161eb0e085b4cf7cd177ba94dc01 which IS NOT in your spent outputs
Scanning transaction fd8f47cd8d398e1b17a5220a09257f6eb573a615098feda4a290ea75a13f91cf...
ChainRadar says there are 8 inputs with a mixin of 5. According to ChainRadar:
Input 0 is from transaction ff85efd3e01fdd5737a42e0f14589e838c1bf78174281b968e211f5deb20b621 which IS NOT in your spent outputs
Input 1 is from transaction 076d0d4f2dcc0a79adff416b23e4a9f7e7a75489a036e11fb9846b046610beff which IS NOT in your spent outputs
Input 2 is from transaction 73a98c7889a614891df5ff603f46eef3e77acb0133e484050613bd0e61776f3d which IS NOT in your spent outputs
Input 3 is from transaction 430d1c70567e0c10b362c4bd08c14b4344f180124e4cac5d7d576c749f760aa2 which IS NOT in your spent outputs
Input 4 is from transaction f142f0ecac3815ea1eeb55c490daf5bb021e5f7969ceaa9af10635a4c5039651 which IS NOT in your spent outputs
Input 5 is from transaction 8e90ba6750e22c969555f1b514e7597945824d80f29bf3067d68cacc8ff1bd75 which IS NOT in your spent outputs
Input 6 is from transaction be874bd5715f8443c400c97eeef320cf856bdbb2b49e09c669acdc89befb91f3 which IS NOT in your spent outputs
Input 7 is from transaction a92ace0953d583283fea033acf0b3f31f1e9a6688cb248303ea3b97fe51e7734 which IS NOT in your spent outputs
Scanning transaction b5dd7fdd84492f47b8c1ad0e9e16fc2bd2a1b7e72255f98a35e6d7905a229997...
ChainRadar says there are 10 inputs with a mixin of 5. According to ChainRadar:
Input 0 is from transaction 93d82eaac17c716727674ddd0f25de8d2ea80ad331c27817cabc7c5f41d10d7b which IS NOT in your spent outputs
Input 1 is from transaction 56f06d48fab3c7c49dcea6ba11681960bd7852a79d058ebe534772cf2c09f76a which IS NOT in your spent outputs
Input 2 is from transaction 55cbcfb2f9067756197bd63f288175eb358aa2e738b48b8d433865622993f251 which IS NOT in your spent outputs
Input 3 is from transaction ac6b7cb22a094f71e7cb00a859ed73f04cfe1880df6330353c8e276a1ceeb5c1 which IS NOT in your spent outputs
Input 4 is from transaction 6cf7a339ce5432c552124f0d804000f224e9c2351911908da46bb8a22e6f4e69 which IS NOT in your spent outputs
Input 5 is from transaction b940f384612b15eb1c93a5442680ff9539dd512dee4bb4f386693528d0e49309 which IS NOT in your spent outputs
Input 6 is from transaction 5a6fa901aea806c5a37bb5e845c2220597c718ebed3a723fc78680f4ec5e00dd which IS NOT in your spent outputs
Input 7 is from transaction 48f6015d0fa8c1ae505362eaa40a8956b9e86bf2654ad5c8c9b9d3a4f3a9916f which IS NOT in your spent outputs
Input 8 is from transaction cef0289984162abc291329186820bc2d2932a8f88535ab15925c01e6868a87cf which IS NOT in your spent outputs
Input 9 is from transaction 70bc2a390e03b770830a53217dde12f6522f31842da58d30824ddc5b706baab0 which IS NOT in your spent outputs
Scanning transaction 8d3f293e4b8179d67f0d45a809c8f2778f9826a788fbbf3e5f63853598fe0025...
ChainRadar says there are 8 inputs with a mixin of 5. According to ChainRadar:
Input 0 is from transaction 08966433a5c1b0205f7a89e890b508ee5c63a37186cfae9f03e0f52b502f6166 which IS NOT in your spent outputs
Input 1 is from transaction 634f2af62c2ede0fee842718ec1f43233750d7253e9ac28b7f3b56d3112f9549 which IS NOT in your spent outputs
Input 2 is from transaction 3e0b0400a93d2d838be79a875b8322e811a93ea6232ccb1de019199213a94364 which IS NOT in your spent outputs
Input 3 is from transaction f7a0bb95bc1079ff971316cdc2c45cc299c03ce176937e27ef27bd3414b9d5b4 which IS NOT in your spent outputs
Input 4 is from transaction 485cca48851c0900ccf02ddb589d17211856a24ad21f3474e4b23048a2528589 which IS NOT in your spent outputs
Input 5 is from transaction 2428f2deb97eb4797fff80fca4abcfb2276506d5f27e33c28e943755eabe7522 which IS NOT in your spent outputs
Input 6 is from transaction 1b5a15a867d2d693d1e50204c52688025cc448a913f3dd6b811a543c63061df9 which IS NOT in your spent outputs
Input 7 is from transaction 54d5fe2c7260e9127e43f6ddb77cd3e7398bfe3fc592f275b6b8a13d36f947d9 which IS NOT in your spent outputs
Scanning transaction 7ab3959699d7444f00dd10b89dc054b6867959e5ddb9b90dc99613b965bc60de...
ChainRadar says there are 11 inputs with a mixin of 5. According to ChainRadar:
Input 0 is from transaction 33f09cc4d9cd454a0c01b5ef5642528dae9a8bf6aaed96a18dac151c47509051 which IS NOT in your spent outputs
Input 1 is from transaction 277163b62c47a92bb8b3f4566a2b17619f3ab6d4a961eac8022b44bac39869a4 which IS NOT in your spent outputs
Input 2 is from transaction 86268abfc5d90e7b5ddd7b2697f3139a5648f078f7f8d5bde2658981f30dfb32 which IS NOT in your spent outputs
Input 3 is from transaction be181dbc25bb05687d90f03d459177b7aacfb4fbb282fef264d965523f600804 which IS NOT in your spent outputs
Input 4 is from transaction 979f33bcd55ac84d5bac226b70f026837a541df197ccd187900b8f0fe2b176b6 which IS NOT in your spent outputs
Input 5 is from transaction ac89c85d07cbd9c61832aa7ec120a782a48545122e7304117363c2fdb1b3db72 which IS NOT in your spent outputs
Input 6 is from transaction 6494fd9e0ddd6771263c8b235fab57ceb6737a5cf2db633c75dd76ea9284ba93 which IS NOT in your spent outputs
Input 7 is from transaction f1b70c8d8b8ccdae4555c2dab1eac9dd35260a1b336a0b4139ba3c6e218ee2d6 which IS NOT in your spent outputs
Input 8 is from transaction fb58b5c1f0ec8a44b488f25636f94a625396e5ca0c02314b36d806da4e9ed0a6 which IS NOT in your spent outputs
Input 9 is from transaction 68c4ed377d4aabd7c123162dd5b740d46bf2786b0e87044e0d7587758f645a87 which IS NOT in your spent outputs
Input 10 is from transaction 34d77d78114d867878c850ec80db8cea95999ee421dc041a4b8d492a4c705f1a which IS NOT in your spent outputs
Scanning transaction 75ceafd629f0844a90691dde591bc06cc3b198e3d3b7cb170d77e88aae3d6d42...
ChainRadar says there are 6 inputs with a mixin of 5. According to ChainRadar:
Input 0 is from transaction 6eab1ed65b4c528fdc5fee047c1bd9c83963b077da8935555ed52ca61e57f527 which IS NOT in your spent outputs
Input 1 is from transaction 069ad22731940ce5ee51fd64d9b905f253d0b6a683ed9917e305c9d7604d9a9d which IS NOT in your spent outputs
Input 2 is from transaction c6e77e4df01bafa2a96f73690dbf67bbdec54ab4122d46ccad27a8358577e446 which IS NOT in your spent outputs
Input 3 is from transaction 18e5b992d7c542cf964f733821b3b7b4f3f4e1184a64bcb87aabd69be95348f3 which IS NOT in your spent outputs
Input 4 is from transaction de571d17072ffbda082ba39a89e0737fe7868542c292393ba8ab9441eeec2983 which IS NOT in your spent outputs
Input 5 is from transaction a528754258d91e0f4536c454707348846b483cc519c11cf7f56fc913f2fea25d which IS NOT in your spent outputs
Scanning transaction c573c137b020e6c8772d9c0dcf7c6bcb669593ad558262bff06c272896d7d1c9...
ChainRadar says there are 6 inputs with a mixin of 5. According to ChainRadar:
Input 0 is from transaction 5e4769f6985a318d33c617d7e7351de7d214cb32f1ef1c2c9d72b98fbc40045e which IS NOT in your spent outputs
Input 1 is from transaction 05cde9a257948a8c4a60441218b47341bb1a70f285f2235bf4c46b6058de7d0f which IS NOT in your spent outputs
Input 2 is from transaction 6b6e8cbb57b95a1618a4058518b2d911e38eee200891aa656e1681073ce4ead3 which IS NOT in your spent outputs
Input 3 is from transaction 36dfd9916d56146b96f0ed7d4500ee9fa6638431e35c56632b3400346733de7b which IS NOT in your spent outputs
Input 4 is from transaction 2e1c30cf05af2ffe51e669d7a1f4be8587bc1a36901fbf37b261fde0c6402763 which IS NOT in your spent outputs
Input 5 is from transaction 77538a11ca262605ffad1e34390eaf0de0c4875d5e7668c88540cc24fa029255 which IS NOT in your spent outputs
Scanning transaction ea9addfbd7d0aa71c14b2571f71c8ffa1996cd23f3da106b0f8ad8c703019608...
ChainRadar says there are 5 inputs with a mixin of 5. According to ChainRadar:
Input 0 is from transaction 95e042ca91a43aa3fb4fba674e3b5e63ce2f93cdb6a3c4cb4153692bcffcb73e which IS NOT in your spent outputs
Input 1 is from transaction 54e669049d5d39906b20d984552e34f2d3d0dd81f9776bd505fd6ad35c38ab0e which IS NOT in your spent outputs
Input 2 is from transaction 6fd3fe54ed01c3ee3e8df01b05b29868e1977810213dedd5f99957fe7f852cc4 which IS NOT in your spent outputs
Input 3 is from transaction 1b71c5f904e0be3f75fa52883cc9a4ca3559921b8a9f316e7d3a54260cbf00f8 which IS NOT in your spent outputs
Input 4 is from transaction 80669b60bf570532dadf5a30a5206b2977f358b1bba60117461f2010119ae59a which IS NOT in your spent outputs
Scanning transaction c302b72f58cc63b11e1bdf6c6408b212dff40d754eebd7dcc6e15735c1bc1074...
ChainRadar says there are 11 inputs with a mixin of 5. According to ChainRadar:
Input 0 is from transaction f494ed0b87bb7c19b85a707f4364ccd7d596e2f2bb8b44c6ea605d416917ec10 which IS NOT in your spent outputs
Input 1 is from transaction 1289119eeb502b0b05502b404f05acbf708b1b798f7e460c875b3c8e1f0cc4d1 which IS NOT in your spent outputs
Input 2 is from transaction 35e35087068e51ddb9b4a256f78628e3e81f34d5eff3adfba13c111ab40babd2 which IS NOT in your spent outputs
Input 3 is from transaction 4f8a85b54e80f0ce7ab3dc5cae60936a43acc5ecfeb0141aa40e497dfc8bab9b which IS NOT in your spent outputs
Input 4 is from transaction 44e57ad8f6d4cc1e88e5e9dc2a741470528a5781018c0dd37afec8cafdecff40 which IS NOT in your spent outputs
Input 5 is from transaction e6d2330612f34072c155efe6d26aaf1c9c075c3db4128e3793f39391e83921db which IS NOT in your spent outputs
Input 6 is from transaction 03aef7cbb85621add2aca11658ad1b53a1b4735e96b1f6a9533fd6d5166cc79a which IS NOT in your spent outputs
Input 7 is from transaction 798ae576c38c9ba5852180f034af97293e5da62eddd05c84b0cadbcab733f564 which IS NOT in your spent outputs
Input 8 is from transaction 2fd1ce02f77b9c2a82411486f6d88054171880289f07617b527f7d84ff8bb2f4 which IS NOT in your spent outputs
Input 9 is from transaction b1eb84af0bb7e2f5388246c4cdbfd0dbe730465e11c61dce3e243ebdbdb4e154 which IS NOT in your spent outputs
Input 10 is from transaction c2e5d968b5e9650567b39b519fd435fb29f73e0de5f095c6823a21f9c5b534c8 which IS NOT in your spent outputs
Scanning transaction 2a7cabb64d520fd8bad753ae9493c44b62fecca9f656853ab90040961cfd91c2...
ChainRadar says there are 12 inputs with a mixin of 5. According to ChainRadar:
Input 0 is from transaction 3552eaaeb5333e57825112ba325c0453f6448dab7c26cac87fbcefd8635ba2e0 which IS NOT in your spent outputs
Input 1 is from transaction e6442289aacfc5a52ad393c5d9defcae6a8b4e4b37f263eb463b1d02725d6b8e which IS NOT in your spent outputs
Input 2 is from transaction e1d865ef3b3372cdc29fcbf01084325997ae3bef45d792bad529e53244e70879 which IS NOT in your spent outputs
Input 3 is from transaction 026209f69a3ae77a9d10349c327072d999063ee0e29b737f66ef6a15cf5ed590 which IS NOT in your spent outputs
Input 4 is from transaction 580b3187d38cea37d7e41d76b00b1f026efd0cf7d72e7fae165df01ad7401e55 which IS NOT in your spent outputs
Input 5 is from transaction fb24ca55482715d29c1be3c8a39292f9eb7308528402764b7c5dbbca623ef521 which IS NOT in your spent outputs
Input 6 is from transaction 01cb998b8f07281ccb4ef9d614beb14e3b5d32431a369da01a6da164b1cf5952 which IS NOT in your spent outputs
Input 7 is from transaction a58a220b6455bba909f79f93ffd7f1ac2765ac856bb9ec8b4087e6d777fa0fc9 which IS NOT in your spent outputs
Input 8 is from transaction f2132eadba739f8a8e87d58841ed5406fe80a4fd3088d0c228b5bbe004c9074e which IS NOT in your spent outputs
Input 9 is from transaction e52c214496e3ef5c1f3460ae719cdecf2a939901acfa54fd5376f02f7a0fca5a which IS NOT in your spent outputs
Input 10 is from transaction a7382875fb7a908e82a6c57f8bc6e421a1cba7a88562d98d3c10047b60216cec which IS NOT in your spent outputs
Input 11 is from transaction 3979fba97dfa64a0ab417ab675acae9678b2c5748b802892deb3305cd16078e1 which IS NOT in your spent outputs
Scanning transaction 523adf393d45d22326230b1d69310b67ddfc7f65092fdaf23147ffa221bc6729...
ChainRadar says there are 8 inputs with a mixin of 21. According to ChainRadar:
Input 0 is from transaction 0e8624d06cd0546eb00729f1d600dbd617956aa5af1e4f0722e7baf1101882fd which IS NOT in your spent outputs
Input 1 is from transaction 2412ea46c9a5d7ccb5032c2a82cbfa24606466a808a91c609ccb2d1df4c09191 which IS NOT in your spent outputs
Input 2 is from transaction 9ffe9041759358e87047613e2f05ec25ab8a79b321b6f12aadcf191092ce6171 which IS NOT in your spent outputs
Input 3 is from transaction 2ff455c4688fc5ecebb3ff0fe1cbc661478c669b9d72089c8af57c56a92c80b1 which IS NOT in your spent outputs
Input 4 is from transaction 70ab797f09ad9c7fe8fefe38eda37cfd5d3a88a5c0fb7382d149ab6d5715c0c5 which IS NOT in your spent outputs
Input 5 is from transaction 3c719d82282564ae892f99db22b52bb27a5522cf7e301d8eb53b146d6b7bc8f1 which IS NOT in your spent outputs
Input 6 is from transaction 913b61cc1cfe3e14d7ec5eecc1b031b8f0570db38f1f2ec99b37efe33f8ef744 which IS NOT in your spent outputs
Input 7 is from transaction ee08517e3db174407aae389ffb086232dce77e7839e0ef01483300a771e37640 which IS NOT in your spent outputs
Scanning transaction 2c9de79c5cfc1189a71002b6aa92800c5cdd50d1ea899ad6ee10e68b0bb716c6...
ChainRadar says there are 8 inputs with a mixin of 21. According to ChainRadar:
Input 0 is from transaction 10da39cbdfe51af86cbcff0672312f0e9f215362ee4305b22ede44f7e774e650 which IS NOT in your spent outputs
Input 1 is from transaction b5fd13e5e2deba8db07a0668d534ae879e494d8620603328d051532f1b229e86 which IS NOT in your spent outputs
Input 2 is from transaction 8279016eb17603ec8eb657f6f1f0a8162a42b8717d472c098f3ab3698c36985c which IS NOT in your spent outputs
Input 3 is from transaction 8e5ee95aada13b5221b95d256ab07e08f5e2b14beafd1dca4cf14062a9dec04f which IS NOT in your spent outputs
Input 4 is from transaction 6380d063d4fea3ccdbfb5f2356c3c99a134f950db243a821a2415dfe549e5814 which IS NOT in your spent outputs
Input 5 is from transaction 2827e0ca08dfcc846f23c82e531a1501508f33d7be5fb55f11e30b83c8dbd380 which IS NOT in your spent outputs
Input 6 is from transaction 6a23907e9a278aeef19f07369a757f90ad84dbe5aed5fdb769e31abfb6fc518e which IS NOT in your spent outputs
Input 7 is from transaction 74671fc53dc3b8bc51aeb47565d541e63daa3fb6bce7c18174ad462ae66c2ccc which IS NOT in your spent outputs
Scanning transaction a88fe0a645ad9ca4e9d57652ba54d6c4ab7b54e1c6f821ea411e5e6d5f40f80d...
ChainRadar says there are 7 inputs with a mixin of 21. According to ChainRadar:
Input 0 is from transaction 16e1249652ccd513e917652ffd808527189b48dfcd2c884fba8e3cfb141fa921 which IS NOT in your spent outputs
Input 1 is from transaction 5dc93643c76bc7fb2c1c9818e8ff7cd2b93298393164b419d18e4a8a340f45e6 which IS NOT in your spent outputs
Input 2 is from transaction c57e5c18e530c44622c28d26132cde50c96fab05665c3bdee7ee2f722e0dfa2d which IS NOT in your spent outputs
Input 3 is from transaction 4e047c10abd670257d31d7354cce0c02b3c1947ec85374aa38f06d7179662e07 which IS NOT in your spent outputs
Input 4 is from transaction 365d133a822837ab20cf29b95de39738133e13bd74fa2b9f5eb9852ea34a525e which IS NOT in your spent outputs
Input 5 is from transaction 7d99b93ed06137e9a3981084390b7560eecc6b19d521ce9231ea28b1dd24babb which IS NOT in your spent outputs
Input 6 is from transaction 89b6d3d78326da21c8aeac34211705d7449ae36920eed3e022968c6318c3b969 which IS NOT in your spent outputs
Scanning transaction 0e4e05d47d33aaabc03952918bb633f45e7f7ee291a36778c12dcd88379265cd...
ChainRadar says there are 13 inputs with a mixin of 21. According to ChainRadar:
Input 0 is from transaction 9bef3f39d1b780116aa05b8ca498372eec21370190700f961af90f039a68cd14 which IS NOT in your spent outputs
Input 1 is from transaction 24f03d9d76301b875fd8ba2301fcfbbbf790e829314eb98fd6a9d0395a287c44 which IS NOT in your spent outputs
Input 2 is from transaction fd392ddd3747cc6e31d2920136d04650adf8bacc07cc53660432269318f38320 which IS NOT in your spent outputs
Input 3 is from transaction b38d7bde6afd1e1e278c9e00e6335c9f08107ee4855edada8cd6560ce5796d2d which IS NOT in your spent outputs
Input 4 is from transaction 54bb3c9c19bf69e6e2706610b948ce2f354ce16ed013d85570ae55df118e9895 which IS NOT in your spent outputs
Input 5 is from transaction 754071d109488afc4d42cf8451f43ce02393387110906a2c85b430ef1fc2668f which IS NOT in your spent outputs
Input 6 is from transaction 63a18c9358bfe67a6da9ebe2530f4d1df2f544e1949bbe412c22e7d96f6b1487 which IS NOT in your spent outputs
Input 7 is from transaction fe9e619390a987c416a359dd36f3e4a2833eeeeebcee228015484f7f559ed70f which IS NOT in your spent outputs
Input 8 is from transaction 022246c66c1f97c76e395b558ff4829bf58ffe5a261783467a64e191912dcd10 which IS NOT in your spent outputs
Input 9 is from transaction 1b973ada5e78a7047552665139f853c80b3ca3c7ad73fa7359fb2beae1a55c00 which IS NOT in your spent outputs
Input 10 is from transaction 4761fa6c0d49b7e097f2807f2d9189911c8b03593e30f5891bcaa03c70f8f350 which IS NOT in your spent outputs
Input 11 is from transaction c6f9101c7d22a6c6473ced938b5fa543fefb6c95ea810c904f8cb723cdbce7e4 which IS NOT in your spent outputs
Input 12 is from transaction 95910b4fac1ea444ce87d5460752746876831db2f6ff061736ef123f81340531 which IS NOT in your spent outputs
Scanning transaction 1780385f7e6fe23dce7f27bfa806e101fd342ce0f5844c099fc163a28f55832b...
ChainRadar says there are 7 inputs with a mixin of 21. According to ChainRadar:
Input 0 is from transaction a7ab429b8a7ce025337133754da71bb13d4f5802d8f998a8755adee25f3a8f55 which IS NOT in your spent outputs
Input 1 is from transaction 1b76e8e8db0fe6cec3f1cb17b54a10e3740173ce705f21b889c9793c3b738c2d which IS NOT in your spent outputs
Input 2 is from transaction aaa21bd208ccccc4c22b1aa56c4e580955799d57b31dde38084057e4784b861c which IS NOT in your spent outputs
Input 3 is from transaction 1a2f399bb9208cface2f5e0e7cf17f676349b0ef24c4600f0359273f9d234f2c which IS NOT in your spent outputs
Input 4 is from transaction a97841a8732ef06533c3e5b7a2d3143d91cf2b6f9fa0ba8cd32ac4c17ca7775d which IS NOT in your spent outputs
Input 5 is from transaction 747961842ac2b87cd0ff3f2a8e36d268465d98667a7e67ce28d7e332b1f76d41 which IS NOT in your spent outputs
Input 6 is from transaction 148ffbd5e2c2a39f765211d183a4b93617ddd8a33a84807758b89dfba4ea4d75 which IS NOT in your spent outputs
Scanning transaction 0d47b901afa91b39c7ae6a1861a7a487ad468ae9963fabd2e7dba527970b7a0a...
ChainRadar says there are 9 inputs with a mixin of 21. According to ChainRadar:
Input 0 is from transaction 1e38574169be4d363d093edd3b38c8f018090c3cca4cbe4ed7a89cfd4f07d809 which IS NOT in your spent outputs
Input 1 is from transaction 4bf4878b93d9b32f79cc0df7d22b0a50d743cdf829ab1102eb7cbaca3c8e66d5 which IS NOT in your spent outputs
Input 2 is from transaction 4d97c8181546bbea7631021605d068a9ea5743cb2d04dfda3a7c3d83ab9f6842 which IS NOT in your spent outputs
Input 3 is from transaction da9e963f69ca0916788c4c07ad127f73ac18713a6133b1804c98227be656d685 which IS NOT in your spent outputs
Input 4 is from transaction fe766a506b49fbcade1686555c7e3335c8b50652b5af5e4837bf78ba4e4c8099 which IS NOT in your spent outputs
Input 5 is from transaction d750164e8c6f8e60fd7e49a4e3a1393f7754c74c0774601feb27ccf02f54c0d0 which IS NOT in your spent outputs
Input 6 is from transaction a797591ee40d49d1a4a2cb03af22436b8100d30fbc673a846319c077ad104c5d which IS NOT in your spent outputs
Input 7 is from transaction 54177792d8cfb2f526d319d8af5f7f4c70fa52281abf6c57dfb871d34f219920 which IS NOT in your spent outputs
Input 8 is from transaction 8da4b9468bbd0b1c54c4e7e839c47181e07db7f45e3853c7966be3619077b283 which IS NOT in your spent outputs
Scanning transaction 7963dbf4188cfdd749c7196d24792cd2a26a2e6c4de22f5638f2e9467c211c48...
ChainRadar says there are 5 inputs with a mixin of 21. According to ChainRadar:
Input 0 is from transaction 9eb6af8b98066081d1d8b1cd1a5515776262c876463349faa9e331b09b81d729 which IS NOT in your spent outputs
Input 1 is from transaction 269d93734d06ead7fa54c6de997e8de7685ecfe6a358ae29bda4f71aa05122b9 which IS NOT in your spent outputs
Input 2 is from transaction f7c87ebe239e003ee41863adeb70086ebd9f403e665470567d52b483cb401e48 which IS NOT in your spent outputs
Input 3 is from transaction 45198c59f2fe13d13e4404d551425d1c48d1fdc7981bfaaef5bff1d8c668583b which IS NOT in your spent outputs
Input 4 is from transaction 966ef5d658270c65728616bf0b30bffb5515ed0e0d4e6cf12f7f231886afe4e6 which IS NOT in your spent outputs
Scanning transaction d23b753395ea85a512d249752381e21e5e1915a17bd1d3f45f496949f54044b3...
ChainRadar says there are 6 inputs with a mixin of 21. According to ChainRadar:
Input 0 is from transaction 99348bbbd5bc4f2485652c8c09c916f8dbf7689e05ede57a7971a765ec2d470e which IS NOT in your spent outputs
Input 1 is from transaction 0e5160dfe7ca4e95a98f621f203ec6b65c12308f26873a98023ad3f92e6cdb40 which IS NOT in your spent outputs
Input 2 is from transaction d3c1566ef12a5c178ee7ed28f37f72258954251b23d7a08581b20c2187379236 which IS NOT in your spent outputs
Input 3 is from transaction 5d39bb0d4cbbda0d5b12d9748d40fdf0d2b40f73466ead8027a147692979059c which IS NOT in your spent outputs
Input 4 is from transaction fbcdc8c192a381887de3539605d7f4cfeadd512c1c1f8ee1570ca3edc4aa8755 which IS NOT in your spent outputs
Input 5 is from transaction e3898a95a395f63d1999e9e5c281d18f2f517d78089167f71ad142ff08e19746 which IS NOT in your spent outputs
Scanning transaction 96226907135616048ead5a3a3f417bfe432c8d3182272f5f4b838077fbff5e95...
ChainRadar says there are 10 inputs with a mixin of 21. According to ChainRadar:
Input 0 is from transaction 6ea01eb80c6c2ac50f5dd28a652a68d59b70e8546a2a6f3b03975c80945454c0 which IS NOT in your spent outputs
Input 1 is from transaction 35300d5f8bc33bc94a828a624441c4b42e7ba96bb751e37041e96a5294e08fad which IS NOT in your spent outputs
Input 2 is from transaction edb93f00fd885b16033fe27ccfcd2fed546cf633e3c05bf63daca9f63925d55e which IS NOT in your spent outputs
Input 3 is from transaction 1542645525307e555dfbd5474689954f69db249baf5614e8ee2109f243bd3975 which IS NOT in your spent outputs
Input 4 is from transaction 9772ac99716507af8abdf145eb167939370244cc27d99d21f1b45cce80f6e079 which IS NOT in your spent outputs
Input 5 is from transaction 9eef9e65aaff8ebacbf1e3874de1a7910f18eec7811104ecb073f59edf643a4c which IS NOT in your spent outputs
Input 6 is from transaction a6cb0be000fcd868c8308cd9a0a7ce5d4b93a5302f24ad33bc8e6e9778e23292 which IS NOT in your spent outputs
Input 7 is from transaction 83fa074a3056e36a88585107644b863ed1718591057670267d575bd1aeb64b3f which IS NOT in your spent outputs
Input 8 is from transaction 439bf01d2e31017ceffa6a9ced724701baa3382e51639ffda3a41332fa4ca144 which IS NOT in your spent outputs
Input 9 is from transaction 0619df01143ef5bc97067da01c81bc66cf3a938a87fcbb1a676ad0c2f0b16484 which IS NOT in your spent outputs
SUMMARY
=======
Total guesses ChainRadar had: 157
Total they appear to have correctly guessed: 0

Total transactions checked: 19
Total transactions completely guessed by ChainRadar: 0
```

# Conclusion

ChainRadar is either "accidentally" showing From Transactions, or it is trying to appear to have compromised Monero. Coupled with the sudden appearance of a troll claiming 20/20 transactions unmasked it is clear that something dodgy is going on. Avoid ChainRadar, and always check the data for yourself before buying in to what the trolls say.